<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MBence\OpenTBSBundle\Services\OpenTBS;
use App\Models\DasQuittance;
use App\Models\TraitementsDas;
use App\Models\TraitementsDasSalarie;
use App\Models\Societe;

use PHPExcel_IOFactory;
use PHPExcel_Cell; 

class TraitementsDasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
                ->where("annee",$request->annee)
                ->first();
        if(isset($traitementsDas)){
            $traitementsDas->update($request->all());
        }
        else{
            TraitementsDas::create($request->all());
        }
        return response()->json([
            'message' => 'Le traitement DAS a été modifié',
            'status' => 200
        ], 200);
    }

    /**
     * Recuperer une liste de salarié
     */
    public function saveManySalariesInTraitementDas(Request $request){
        $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
                ->where("annee",$request->annee)
                ->first();
            
        if(!isset($traitementsDas)){
            TraitementsDas::create($request->traitementDas);
            $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
                ->where("annee",$request->annee)
                ->first();
        }
        else {
            $traitementsDas->update($request->traitementDas);
        }
        TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->delete();
        foreach($request->salaries as $salarie){
            $salarie['traitements_das_id'] = $traitementsDas->id;
            TraitementsDasSalarie::create($salarie);
        }
    }

    /**
     * Permettre de recuperer la liste des salariés ont été déclaré
     */
    public function getSalariesByAnneeSociete(Request $request){

        $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
        ->where("annee",$request->annee)
        ->firstOrFail();

        return TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();

    }
    
    public function getSalariesById($id){

        return TraitementsDasSalarie::findOrFail($id);

    }
    
    public function updateSalarie(Request $request,$id){

        $salarieDas = TraitementsDasSalarie::findOrFail($id);
        $salarieDas->update($request->all());
        return $salarieDas;
    }
    
    
    /**
     * Rechercher le DAS par années. Si elle existe
     * nous allons retourné l'oject
     */

    public function getByAnnee(Request $request){
        
        return TraitementsDas::where("societe_id",$request->societe_id)
                ->where("annee",$request->annee)
                ->firstOrFail();
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TraitementsDas $traitementsDas)
    {
        $traitementsDas->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editID20(Request $request){

        $societe_id = $request->societe_id;
        $annee = $request->annee;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
        ->where("annee",$request->annee)
        ->firstOrFail();
        $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
        
        $nbr_inferieur = 0;
        $nbr_superieur = 0;
        $montant_inferieur = 0;
        $montant_superieur = 0;
        foreach($traitementsDasSalarie as $d)
        {

            $revenuMensuel = $d->total_brut/($d->fin13das-$d->deb11);
            if($revenuMensuel<1000000){
                $nbr_inferieur = $nbr_inferieur+1;
                $montant_inferieur = $montant_inferieur + $d->total_brut;
            }
            else {
                $nbr_superieur = $nbr_superieur+1;
                $montant_superieur = $montant_superieur + $d->total_brut;
            }
            
        }
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('EDITID20.xlsx');
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.nif', $societe['nif']);
        $TBS->MergeField('das.nbr_inferieur', $nbr_inferieur);
        $TBS->MergeField('das.montant_inferieur', $montant_inferieur);
        $TBS->MergeField('das.nbr_superieur', $nbr_superieur);
        $TBS->MergeField('das.montant_superieur', $montant_superieur);
        $raison_sociale = utf8_decode($societe['raison_sociale']);


        $TBS->Show(OPENTBS_DOWNLOAD, 'EDITID20_'.strtoupper($raison_sociale).'_'.$annee.'.XLSX');
    
    }

    

    public function editID19(Request $request){

        $societe_id = $request->societe_id;
        $annee = $request->annee;
        $salarie_id = $request->salarie_id;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
        ->where("annee",$request->annee)
        ->firstOrFail();
        $tDasSalarie = TraitementsDasSalarie::where("id",$salarie_id)
        ->firstOrFail();

        $societe['nif'] = preg_replace('/\s+/', '', $societe['nif']);

        
         
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('EDITID19.xlsx');

        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        for($i=0;$i<8;$i++){
            if(strlen($societe['nif'])<$i+1){
                $TBS->MergeField('nif'.$i, '');
            }
            else {
                $TBS->MergeField('nif'.$i, $societe['nif'][$i]);
            }
        }
        $TBS->MergeField('s.ville', $societe['ville']);
        $TBS->MergeField('s.code_postal', $societe['code_postal']);
        $TBS->MergeField('s.telephone', $societe['telephone']);
        $TBS->MergeField('s.quartier', $societe['quartier']);
        $TBS->MergeField('s.fax', $societe['fax']);
        $TBS->MergeField('annee', $annee);
        $TBS->MergeField('today', date('d/m/Y'));

        $TBS->MergeField('d.nif', $tDasSalarie['nif']);
        $nomprenom = strtoupper(utf8_decode($tDasSalarie['nom']))." ".utf8_decode($tDasSalarie['prenom']);
        $TBS->MergeField('d.nomprenom', $nomprenom);
        $TBS->MergeField('d.emploi_occupe', $tDasSalarie['emploi_occupe']);
        $TBS->MergeField('d.telephone', $tDasSalarie['telephone']);
        $TBS->MergeField('d.code_postal', $tDasSalarie['code_postal']);
        $TBS->MergeField('d.ville', $tDasSalarie['ville']);
        $TBS->MergeField('d.situation_familiale', $tDasSalarie['situation_familiale']);
        $TBS->MergeField('d.enfants', $tDasSalarie['enfants']);
        $TBS->MergeField('d.deb10', $tDasSalarie['deb10']);
        $TBS->MergeField('d.deb11', $tDasSalarie['deb11']);
        $TBS->MergeField('d.deb12', $tDasSalarie['deb12']);
        $TBS->MergeField('d.deb13das', $tDasSalarie['deb13das']);
        $TBS->MergeField('d.nif_conjoint', $tDasSalarie['nif_conjoint']);
        $nomprenom_conjoint = strtoupper(utf8_decode($tDasSalarie['nom_conjoint']))." ".utf8_decode($tDasSalarie['prenom_conjoint']);
        $TBS->MergeField('d.nomprenom_conjoint', $nomprenom_conjoint);
        $TBS->MergeField('d.nom_jeune_fille_conjoint', $tDasSalarie['nom_jeune_fille_conjoint']);
        $TBS->MergeField('d.profession_conjoint', $tDasSalarie['profession_conjoint']);
        $TBS->MergeField('d.employeur_conjoint', $tDasSalarie['employeur_conjoint']);
        $TBS->MergeField('d.telephone_conjoint', $tDasSalarie['telephone_conjoint']);
        $TBS->MergeField('d.code_postal_conjoint', $tDasSalarie['code_postal_conjoint']);
        $TBS->MergeField('d.ville_conjoint', $tDasSalarie['ville_conjoint']);
        $TBS->MergeField('d.salaire_brut', $tDasSalarie['salaire_brut']);
        $TBS->MergeField('d.brut_conge', $tDasSalarie['brut_conge']);
        $TBS->MergeField('d.avlog', $tDasSalarie['avlog']);
        $TBS->MergeField('d.av_nour', $tDasSalarie['av_nour']);
        $TBS->MergeField('d.prim_impo', $tDasSalarie['prim_impo']);
        $TBS->MergeField('d.tcs', $tDasSalarie['tcs']);
        $TBS->MergeField('d.irpp', $tDasSalarie['irpp']);
        $TBS->MergeField('d.primes_non_impo', $tDasSalarie['primes_non_impo']);

        $raison_sociale = utf8_decode($societe['raison_sociale']);
        $TBS->Show(OPENTBS_DOWNLOAD, 'EDITID19_'.strtoupper($raison_sociale).'_'.$annee.'.XLSX');
    
    }

    

    public function editID21(Request $request){

        $societe_id = $request->societe_id;
        $annee = $request->annee; 
        
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$societe_id)
        ->where("annee",$annee)
        ->firstOrFail();
        $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
        $i=1; 
         foreach($traitementsDasSalarie as $d)
        {
            $d['ordre']=$i;$i++;
            if(!isset($d['nif']))  
            $d['nif']='';
            
            $d['nomprenom'] = strtoupper(utf8_decode($d['nom']))." ".utf8_decode($d['prenom']);
        }
        $dasQuittance = []; 
        require_once ("ID21.php");
    }

    

    public function editID21_old(Request $request){

        $societe_id = $request->societe_id;
        $annee = $request->annee; 
         
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$societe_id)
        ->where("annee",$annee)
        ->firstOrFail();
        $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
        
        $i=1;
        $societe['nif'] = preg_replace('/\s+/', '', $societe['nif']);
         foreach($traitementsDasSalarie as $d)
        {
            $d['ordre']=$i;$i++;
            if(!isset($d['nif']))  
            $d['nif']='';
            
            $d['nomprenom'] = strtoupper(utf8_decode($d['nom']))." ".utf8_decode($d['prenom']);
        }
        $data =[];
        $b=0;
        $saModel = clone $traitementsDasSalarie[0];
            $saModel['traitements_das_id']="";
            $saModel['matricule']="";
            $saModel['nif']="";
            $saModel['nom']="";
            $saModel['prenom']="";
            $saModel['emploi']="";
            $saModel['niveau']="";
            $saModel['nationalite']="";
            $saModel['age']="";
            $saModel['sexe']="";
            $saModel['enfants']="";
            $saModel['telephone']="";
            $saModel['code_postal']="";
            $saModel['ville']="";
            $saModel['emploi_occupe']="";
            $saModel['situation_familiale']="";
            $saModel['irpp']=0;
            $saModel['tcs']=0;
            $saModel['fnh']=0;
            $saModel['cfp']=0;
            $saModel['brute']=0;
            $saModel['avlog']=0;
            $saModel['salaire_brut']=0;
            $saModel['av_nour']=0;
            $saModel['prim_impo']=0;
            $saModel['brut_conge']=0;
            $saModel['total_brut']=0;
            $saModel['total']=0;
            $saModel['primes_non_impo']=0;
            $saModel['deb10']="";
            $saModel['deb11']="";
            $saModel['fin12']="";
            $saModel['fin13das']="";
            $saModel['nif_conjoint']="";
            $saModel['nom_conjoint']="";
            $saModel['prenom_conjoint']="";
            $saModel['nom_jeune_fille_conjoint']="";
            $saModel['profession_conjoint']="";
            $saModel['employeur_conjoint']="";
            $saModel['telephone_conjoint']="";
            $saModel['code_postal_conjoint']="";
            $saModel['ville_conjoint']="";
            $saModel['nomprenom']="";
            $saModel['ordre']="";
            $sa = clone $saModel;
            $sa2 = clone $sa;
            $sa3 = clone $sa;
            $totalPrev = 0;
            $saTotalPrev = clone $sa;
        for($i=0;$i<count($traitementsDasSalarie);$i++){
            
            
            // FirstPage 
            if(count($data)==42){
                $sa['nomprenom'] = "TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE";
                 
                $data[] = clone $sa;
                $saTotalPrev = clone $sa;
                $sa = clone $saModel;
            }
            else
            if(((count($data)-42-$b)%73)==0){
                // echo (count($data)-45-$b).'|';
                $sa['nomprenom'] = "TOTAUX";
                $data[] = clone $sa;
                $sa2 = clone $saTotalPrev;
                $sa2['nomprenom'] = "TOTAUX REPORTES DE LA FEUILLE PRECEDENTE";
                $sa3['nomprenom'] = "TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE";
                

                $sa3['salaire_brut'] = $sa['salaire_brut'] + $saTotalPrev['salaire_brut'];
                $sa3['irpp'] = $sa['irpp'] + $saTotalPrev['irpp'];
                $sa3['tcs'] = $sa['tcs'] + $saTotalPrev['tcs'];
                $sa3['fnh'] = $sa['fnh'] + $saTotalPrev['fnh'];
                $sa3['cfp'] = $sa['cfp'] + $saTotalPrev['cfp'];
                $sa3['brute'] = $sa['brute'] + $saTotalPrev['brute'];
                $sa3['avlog'] = $sa['avlog'] + $saTotalPrev['avlog'];
                $sa3['av_nour'] = $sa['av_nour'] + $saTotalPrev['av_nour'];
                $sa3['prim_impo'] = $sa['prim_impo'] + $saTotalPrev['prim_impo'];
                $sa3['brut_conge'] = $sa['brut_conge'] + $saTotalPrev['brut_conge'];
                $sa3['total_brut'] = $sa['total_brut'] + $saTotalPrev['total_brut'];
                $sa3['total'] = $sa['total'] + $saTotalPrev['total'];
                $sa3['primes_non_impo'] = $sa['primes_non_impo'] + $saTotalPrev['primes_non_impo'];

                $saTotalPrev = clone $sa3;
                $sa = clone $saModel;
                $data[] = clone $sa2;
                $data[] = clone $sa3;
                $b++;
                $b++;
            } 
            $sa['salaire_brut'] = $sa['salaire_brut'] + $traitementsDasSalarie[$i]['salaire_brut'];
            $sa['irpp'] = $sa['irpp'] + $traitementsDasSalarie[$i]['irpp'];
            $sa['tcs'] = $sa['tcs'] + $traitementsDasSalarie[$i]['tcs'];
            $sa['fnh'] = $sa['fnh'] + $traitementsDasSalarie[$i]['fnh'];
            $sa['cfp'] = $sa['cfp'] + $traitementsDasSalarie[$i]['cfp'];
            $sa['brute'] = $sa['brute'] + $traitementsDasSalarie[$i]['brute'];
            $sa['avlog'] = $sa['avlog'] + $traitementsDasSalarie[$i]['avlog'];
            $sa['av_nour'] = $sa['av_nour'] + $traitementsDasSalarie[$i]['av_nour'];
            $sa['prim_impo'] = $sa['prim_impo'] + $traitementsDasSalarie[$i]['prim_impo'];
            $sa['brut_conge'] = $sa['brut_conge'] + $traitementsDasSalarie[$i]['brut_conge'];
            $sa['total_brut'] = $sa['total_brut'] + $traitementsDasSalarie[$i]['total_brut'];
            $sa['total'] = $sa['total'] + $traitementsDasSalarie[$i]['total'];
            $sa['primes_non_impo'] = $sa['primes_non_impo'] + $traitementsDasSalarie[$i]['primes_non_impo'];
             
            $data[] = $traitementsDasSalarie[$i];
            
        }
        $sa['nomprenom'] = "TOTAUX";
        $data[] = clone $sa;
        $sa2 = clone $saTotalPrev;
        $sa2['nomprenom'] = "TOTAUX REPORTES DE LA FEUILLE PRECEDENTE";
        $totalPrev = $sa3['salaire_brut'];
        $sa['salaire_brut'] = 0;
        $data[] = clone $sa2;

        // return;
        
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('EDITID21.xlsx');
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        for($i=0;$i<7;$i++){
            if(strlen($societe['nif'])<$i+1){
                $TBS->MergeField('nif'.$i, '');
            }
            else {
                $TBS->MergeField('nif'.$i, $societe['nif'][$i]);
            }
        }
        $TBS->MergeField('annee', $annee);
        
        $TBS->MergeBlock('d',$data);


        $raison_sociale = utf8_decode($societe['raison_sociale']);
        $TBS->Show(OPENTBS_DOWNLOAD, 'EDITID21_'.strtoupper($raison_sociale).'_'.$annee.'.XLSX');
    
    }

    

    public function editID22(Request $request){

        $societe_id = $request->societe_id;
        $annee = $request->annee;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$societe_id)
        ->where("annee",$annee)
        ->firstOrFail();
        $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
        
        
        $dasQuittance = [];
        for($i=1;$i<=12;$i++){
            
            $q = new DasQuittance();
            $q['mois']=$i;
            $q['montant']=0;
            $q['date_quittance']="";
            $q['n_quittance']="";
            $q['nature']="";
            $qq = DasQuittance::where("societe_id",$societe_id)
                ->where("annee",$annee)
                ->where("mois",$i)
                ->first();
            if(isset($qq)){
                $dasQuittance[] = $qq;
            }
            else {
                $dasQuittance[] = $q;
            }
        }
        require_once ("ID22.php"); 
    
    }

    

    public function editID22_old(Request $request){

        $societe_id = $request->societe_id;
        $annee = $request->annee;
         
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$societe_id)
        ->where("annee",$annee)
        ->firstOrFail();
        $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
        
        $i=1;
        $societe['nif'];
         foreach($traitementsDasSalarie as $d)
        {
            $d['ordre']=$i;$i++;
            if(!isset($d['nif']))  
            $d['nif']='';
        }
        $dasQuittance = [];
        for($i=1;$i<=12;$i++){
            
            $q = new DasQuittance();
            $q['mois']=$i;
            $q['montant']=0;
            $q['date_quittance']="";
            $q['n_quittance']="";
            $q['nature']="";
            $qq = DasQuittance::where("societe_id",$request->societe_id)
                ->where("annee",$request->annee)
                ->where("mois",$i)
                ->first();
            if(isset($qq)){
                $dasQuittance[] = $qq;
            }
            else {
                $dasQuittance[] = $q;
            }
        }
        
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('EDITID22.xlsx');
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
         
        $TBS->MergeField('s.nif', $societe['nif']); 
        $TBS->MergeField('today', date('d/m/Y'));
        $TBS->MergeField('s.ville', $societe['ville']);
        
        $TBS->MergeField('annee', $annee);
        $TBS->MergeField('totalsalarie', count($traitementsDasSalarie));
        
        $TBS->MergeBlock('d',$traitementsDasSalarie);
        for($i=1;$i<=12;$i++){
            $q = $dasQuittance[$i-1];
            $TBS->MergeField('q.mois'.$i, $q['mois']);
            $TBS->MergeField('q.montant'.$i, $q['montant']);
            $TBS->MergeField('q.date_quittance'.$i, $q['date_quittance']);
            $TBS->MergeField('q.n_quittance'.$i, $q['n_quittance']);
        }

        $raison_sociale = utf8_decode($societe['raison_sociale']);
        $TBS->Show(OPENTBS_DOWNLOAD, 'EDITID22_'.strtoupper($raison_sociale).'_'.$annee.'.XLSX');
    
    }

    
    
    

    public function editID21_(){

        $societe_id = 2;
        $annee = 2021;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$societe_id)
        ->where("annee",$annee)
        ->firstOrFail();
        $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
        
        $i=1;
        $societe['nif'] = preg_replace('/\s+/', '', $societe['nif']);
         foreach($traitementsDasSalarie as $d)
        {
            $d['ordre']=$i;$i++;
            if(!isset($d['nif']))  
            $d['nif']='';
            
            $d['nomprenom'] = strtoupper(utf8_decode($d['nom']))." ".utf8_decode($d['prenom']);
        }
        $data =[];
        $b=0;
        $saModel = clone $traitementsDasSalarie[0];
            $saModel['traitements_das_id']="";
            $saModel['matricule']="";
            $saModel['nif']="";
            $saModel['nom']="";
            $saModel['prenom']="";
            $saModel['emploi']="";
            $saModel['niveau']="";
            $saModel['nationalite']="";
            $saModel['age']="";
            $saModel['sexe']="";
            $saModel['enfants']="";
            $saModel['telephone']="";
            $saModel['code_postal']="";
            $saModel['ville']="";
            $saModel['emploi_occupe']="";
            $saModel['situation_familiale']="";
            $saModel['irpp']=0;
            $saModel['tcs']=0;
            $saModel['fnh']=0;
            $saModel['cfp']=0;
            $saModel['brute']=0;
            $saModel['avlog']=0;
            $saModel['salaire_brut']=0;
            $saModel['av_nour']=0;
            $saModel['prim_impo']=0;
            $saModel['brut_conge']=0;
            $saModel['total_brut']=0;
            $saModel['total']=0;
            $saModel['primes_non_impo']=0;
            $saModel['deb10']="";
            $saModel['deb11']="";
            $saModel['fin12']="";
            $saModel['fin13das']="";
            $saModel['nif_conjoint']="";
            $saModel['nom_conjoint']="";
            $saModel['prenom_conjoint']="";
            $saModel['nom_jeune_fille_conjoint']="";
            $saModel['profession_conjoint']="";
            $saModel['employeur_conjoint']="";
            $saModel['telephone_conjoint']="";
            $saModel['code_postal_conjoint']="";
            $saModel['ville_conjoint']="";
            $saModel['nomprenom']="";
            $saModel['ordre']="";
            $sa = clone $saModel;
            $sa2 = clone $sa;
            $sa3 = clone $sa;
            $totalPrev = 0;
            $saTotalPrev = clone $sa;
        for($i=0;$i<count($traitementsDasSalarie);$i++){
            
            
            // FirstPage 
            if(count($data)==42){
                $sa['nomprenom'] = "TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE";
                 
                $data[] = clone $sa;
                $saTotalPrev = clone $sa;
                $sa = clone $saModel;
            }
            else
            if(((count($data)-42-$b)%73)==0){
                // echo (count($data)-45-$b).'|';
                $sa['nomprenom'] = "TOTAUX";
                $data[] = clone $sa;
                $sa2 = clone $saTotalPrev;
                $sa2['nomprenom'] = "TOTAUX REPORTES DE LA FEUILLE PRECEDENTE";
                $sa3['nomprenom'] = "TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE";
                

                $sa3['salaire_brut'] = $sa['salaire_brut'] + $saTotalPrev['salaire_brut'];
                $sa3['irpp'] = $sa['irpp'] + $saTotalPrev['irpp'];
                $sa3['tcs'] = $sa['tcs'] + $saTotalPrev['tcs'];
                $sa3['fnh'] = $sa['fnh'] + $saTotalPrev['fnh'];
                $sa3['cfp'] = $sa['cfp'] + $saTotalPrev['cfp'];
                $sa3['brute'] = $sa['brute'] + $saTotalPrev['brute'];
                $sa3['avlog'] = $sa['avlog'] + $saTotalPrev['avlog'];
                $sa3['av_nour'] = $sa['av_nour'] + $saTotalPrev['av_nour'];
                $sa3['prim_impo'] = $sa['prim_impo'] + $saTotalPrev['prim_impo'];
                $sa3['brut_conge'] = $sa['brut_conge'] + $saTotalPrev['brut_conge'];
                $sa3['total_brut'] = $sa['total_brut'] + $saTotalPrev['total_brut'];
                $sa3['total'] = $sa['total'] + $saTotalPrev['total'];
                $sa3['primes_non_impo'] = $sa['primes_non_impo'] + $saTotalPrev['primes_non_impo'];

                $saTotalPrev = clone $sa3;
                $sa = clone $saModel;
                $data[] = clone $sa2;
                $data[] = clone $sa3;
                $b++;
                $b++;
            } 
            $sa['salaire_brut'] = $sa['salaire_brut'] + $traitementsDasSalarie[$i]['salaire_brut'];
            $sa['irpp'] = $sa['irpp'] + $traitementsDasSalarie[$i]['irpp'];
            $sa['tcs'] = $sa['tcs'] + $traitementsDasSalarie[$i]['tcs'];
            $sa['fnh'] = $sa['fnh'] + $traitementsDasSalarie[$i]['fnh'];
            $sa['cfp'] = $sa['cfp'] + $traitementsDasSalarie[$i]['cfp'];
            $sa['brute'] = $sa['brute'] + $traitementsDasSalarie[$i]['brute'];
            $sa['avlog'] = $sa['avlog'] + $traitementsDasSalarie[$i]['avlog'];
            $sa['av_nour'] = $sa['av_nour'] + $traitementsDasSalarie[$i]['av_nour'];
            $sa['prim_impo'] = $sa['prim_impo'] + $traitementsDasSalarie[$i]['prim_impo'];
            $sa['brut_conge'] = $sa['brut_conge'] + $traitementsDasSalarie[$i]['brut_conge'];
            $sa['total_brut'] = $sa['total_brut'] + $traitementsDasSalarie[$i]['total_brut'];
            $sa['total'] = $sa['total'] + $traitementsDasSalarie[$i]['total'];
            $sa['primes_non_impo'] = $sa['primes_non_impo'] + $traitementsDasSalarie[$i]['primes_non_impo'];
             
            $data[] = $traitementsDasSalarie[$i];
            
        }
        $sa['nomprenom'] = "TOTAUX";
        $data[] = clone $sa;
        $sa2 = clone $saTotalPrev;
        $sa2['nomprenom'] = "TOTAUX REPORTES DE LA FEUILLE PRECEDENTE";
        $totalPrev = $sa3['salaire_brut'];
        $sa['salaire_brut'] = 0;
        $data[] = clone $sa2;

        // return;
        
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('EDITID21.xlsx');
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        for($i=0;$i<7;$i++){
            if(strlen($societe['nif'])<$i+1){
                $TBS->MergeField('nif'.$i, '');
            }
            else {
                $TBS->MergeField('nif'.$i, $societe['nif'][$i]);
            }
        }
        $TBS->MergeField('annee', $annee);
        
        $TBS->MergeBlock('d',$data);


        $raison_sociale = utf8_decode($societe['raison_sociale']);
        $TBS->Show(OPENTBS_DOWNLOAD, 'EDITID21_'.strtoupper($raison_sociale).'_'.$annee.'.XLSX');
    
    }

    public function test2(){
         
        $app_obj = new COM("CrystalRuntime.Application") or Die ("Did not open");
        $etat="crystal/ID23.rpt"; // donner le chemain du rapport
        $rpt_obj=$app_obj->OpenReport($etat);
        // Passage des paramètres
        $rpt_obj->RecordSelectionFormula = "{nom_table.nom_du_champ1} =$varnum and {nom_table.nom_du_champ2}="."'". $var_string."'"."";

        $rpt_obj->ExportOptions->DiskFileName="C:\...\nomFichier.pdf"; // chemain ou mettre le fichier pdf
        $rpt_obj->ExportOptions->PDFExportAllPages=true;
        $rpt_obj->ExportOptions->DestinationType=1; // Export to File
        $rpt_obj->ExportOptions->FormatType=31; // Type: PDF
        $rpt_obj->Export(false);
        $my_pdf="C:\...\nomFichier.pdf";
        // Ouverture du fichier PDF
        header('Content-type: application/pdf');
        header('Content-Length: $len');
        //header('Content-Disposition: inline; filename="'.$my_pdf.'"');
        header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: pre-check=0, post-check=0, max-age=0');
        header('Pragma: anytextexeptno-cache', true);
        header('Cache-control: private');
        header('Expires: 0');
        header('Content-Disposition: inline; filename="'.$my_pdf.'"');
        
        readfile($my_pdf);
    }

    public function test3(){
            //Ouverture du rapport
    #######################################
    //merci futurist LOL
    #########################################
    //pour mis a jour de la base depuis crystal report
    //il faut mettre cela
    $db = 'intranet'; //nom de la base de données
    $host = 'localhost'; // nom de la machine hôte
    $user = 'root'; // nom de l'utilisateur
    $pwd = '';// mot de passe
    
    $dsn = "mysql:dbname=$db;host=$host";
    // $app_obj = new PDO($dsn, $user, $pwd);
    ##################################
    
    $app_obj = new \COM("CrystalRuntime.Application") or Die ("Did not open");
    $etat="C:\\wamp\\www\\requete\\utilisateur.rpt"; // donner le chemain du rapport
    $rpt_obj=$app_obj->OpenReport($etat);
 
 
    $rpt_obj->RecordSelectionFormula = "{nom_table.nom_du_champ1} =$varnum and {nom_table.nom_du_champ2}="."'". $var_string."'";
 
 
 
    $rpt_obj->ExportOptions->DiskFileName="C:\\wamp\\www\\requete\\nomFichier.pdf"; // chemain ou mettre le fichier pdf
    $rpt_obj->ExportOptions->PDFExportAllPages=true;
    $rpt_obj->ExportOptions->DestinationType=1; // Export to File
    $rpt_obj->ExportOptions->FormatType=31; // Type: PDF
    $rpt_obj->Export(false);
    $this->redir("requete/\pdf2.html"); 
    }
 
 
 
  
    function redir($url){ 
        echo "<script language=\"javascript\">"; 
        echo "window.location='$url';"; 
        //echo "window.open('$url','menuchd','toolbar=1, location=1, directories=0, status=0, scrollbars=1, resizable=1, copyhistory=0, menuBar=1, width=700, height=600, left=200, top=50');"; 
        
        
        
        echo "</script>"; 
        }  

        public function test4(){
            $societe_id = 2;
            $annee = 2021;
             
            $societe = Societe::findOrFail($societe_id);
            $traitementsDas = TraitementsDas::where("societe_id",$societe_id)
            ->where("annee",$annee)
            ->firstOrFail();
            $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
            
            
            $dasQuittance = [];
            for($i=1;$i<=12;$i++){
                
                $q = new DasQuittance();
                $q['mois']=$i;
                $q['montant']=0;
                $q['date_quittance']="";
                $q['n_quittance']="";
                $q['nature']="";
                $qq = DasQuittance::where("societe_id",$societe_id)
                    ->where("annee",$annee)
                    ->where("mois",$i)
                    ->first();
                if(isset($qq)){
                    $dasQuittance[] = $qq;
                }
                else {
                    $dasQuittance[] = $q;
                }
            }
            require_once ("ID22.php");
        }

        

    public function test5(){
        // $societe_id = 1;
        // $annee = 2021;
        $societe_id = 2;
        $annee = 2021;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDas = TraitementsDas::where("societe_id",$societe_id)
        ->where("annee",$annee)
        ->firstOrFail();
        $traitementsDasSalarie = TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
        $i=1; 
         foreach($traitementsDasSalarie as $d)
        {
            $d['ordre']=$i;$i++;
            if(!isset($d['nif']))  
            $d['nif']='';
            
            $d['nomprenom'] = strtoupper(utf8_decode($d['nom']))." ".utf8_decode($d['prenom']);
        }
        $dasQuittance = []; 
        require_once ("ID21.php");
    }

} 
function subArray($start,$br,$array){
    $array2 = [];
    if(!isset($array[$start])){
        return $array2;
    }
    $taille = count($array)<($start+$nbr)?count($array):($start+$nbr);
    for($i=$start;$i<$taille;$i++){
        $array2[] = $array[$i];
    }

    return $array2;
}
