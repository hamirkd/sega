<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MBence\OpenTBSBundle\Services\OpenTBS;
use App\Models\TraitementsDts;
use App\Models\TraitementsDtsSalarie;
use App\Models\Societe;
use Carbon\Carbon;
use PHPExcel_IOFactory;
use DateTime;

class TraitementsDtsController extends Controller
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
        
        $traitementsDts = TraitementsDts::where("societe_id",$request->societe_id)
                ->where("trimestre",$request->trimestre)
                ->where("annee",$request->annee)
                ->first();
        if(isset($traitementsDts)){
            $traitementsDts->update($request->all());
        }
        else{
            TraitementsDts::create($request->all());
        }
        return response()->json([
            'message' => 'Le traitement DTS a été modifié',
            'status' => 200
        ], 200);
    }

    /**
     * Recuperer une liste de salarié
     */
    public function saveManySalariesInTraitementDts(Request $request){
        $traitementsDts = TraitementsDts::where("societe_id",$request->societe_id)
                ->where("trimestre",$request->trimestre)
                ->where("annee",$request->annee)
                ->first();
        if(!isset($traitementsDts)){
            TraitementsDts::create($request->all());
            $traitementsDts = TraitementsDts::where("societe_id",$request->societe_id)
                ->where("trimestre",$request->trimestre)
                ->where("annee",$request->annee)
                ->first();
        }
        TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->delete();
        foreach($request->salaries as $salarie){
            $salarie['traitements_dts_id'] = $traitementsDts->id;
            TraitementsDtsSalarie::create($salarie);
        }
    }

    /**
     * Permettre de recuperer la liste des salariés ont été déclaré
     */
    public function getSalariesByTrimestreAnneeSociete(Request $request){
        $traitementsDts = TraitementsDts::where("societe_id",$request->societe_id)
        ->where("trimestre",$request->trimestre)
        ->where("annee",$request->annee)
        ->firstOrFail(); 
        return TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
    }

    
    /**
     * Rechercher la retenue par le mois et l'années. Si elle existe
     * nous allons retourné l'oject
     */

    public function getByTrimestreAnnee(Request $request){
        
        return TraitementsDts::where("societe_id",$request->societe_id)
                ->where("trimestre",$request->trimestre)
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
    public function update(Request $request, TraitementsDts $traitementsDts)
    {
        $traitementsDts->update($request->all());

    }

    
    /**
     * Update Salarie Données complémentaires
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSalarie(Request $request, TraitementsDtsSalarie $traitementsDtsSalarie)
    {
        return $traitementsDtsSalarie->update($request->all());

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

    
    /**
     * Supprimer un salarié ou une liste de salarié
     */
    public function deleteManySalariesInTraitementDts(Request $request){
        echo json_encode($request->ids);
        foreach($request->ids as $id){
            TraitementsDtsSalarie::where("id",$id)->delete();
        }
    }

        /**
     * Imprimer une déclaration
     */
    public function editDTS_CNSSxls1(Request $request)
    {
        
        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données

        $societe = Societe::findOrFail($request->societe_id);
        $traitementsDts = TraitementsDts::where("societe_id",$request->societe_id)
                ->where("trimestre",$request->trimestre)
                ->where("annee",$request->annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNSS_FORMAT1.xlsx');

        
        $TBS->MergeField('dts.annee', $request->annee);
        $TBS->MergeField("dts.trimestre",$request->trimestre);
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.telephone', $societe['telephone']);
        $TBS->MergeField('s.ville', $societe['ville']);
        $TBS->MergeField('s.regime', $societe['regime']);
        $TBS->MergeField('s.matricule', $societe['matricule']);
        $TBS->MergeField('s.sigle', $societe['sigle']);
        $TBS->MergeField('s.bp', $societe['bp']);
        $TBS->MergeField('s.fax', $societe['fax']);
        $TBS->MergeField('s.email', $societe['email']);
        $TBS->MergeField('s.effectif', count($traitementsDtsSalarie));
        $TBS->MergeField('dts.alloc_familiale', $traitementsDts->alloc_familiale);
        
        setlocale(LC_TIME, 'French');
        
        $TBS->MergeField('dts.mois1', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($request->trimestre))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois2', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($request->trimestre+1))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois3', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($request->trimestre+2))->format('Y/m/d')))->formatLocalized('%B'));

        $data = array();
        $msalcnss1=0;
        $msalcnss2=0;
        $msalcnss3=0;
        $tx_cnss = 0;
        $i=1;
        foreach($traitementsDtsSalarie as $d)
        {
            $d->date_depart=isset($d->date_depart)?$d->date_depart:'-';
            $d->date_embauche=isset($d->date_embauche)?$d->date_embauche:'-';
            $d->id = $i;
            $data[] = $d;
            $msalcnss1 = $msalcnss1 + $d->bpcnss1;
            $msalcnss2 = $msalcnss2 + $d->bpcnss2;
            $msalcnss3 = $msalcnss3 + $d->bpcnss3;
            $tx_cnss = $tx_cnss + $d->tx_cnss;
            $i=$i+1;
        }
        if(count($traitementsDtsSalarie)>0)
        $tx_cnss = $tx_cnss / count($traitementsDtsSalarie);
        $TBS->MergeField('dts.msalcnss1', $msalcnss1);
        $TBS->MergeField('dts.msalcnss2', $msalcnss2);
        $TBS->MergeField('dts.msalcnss3', $msalcnss3);
        $TBS->MergeField('dts.tx_cnss', $tx_cnss);
        $TBS->MergeField('dts.msalcnsstotal', ($msalcnss1+$msalcnss2+$msalcnss3));
        $TBS->MergeField('dts.co_brute_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss);
        $TBS->MergeField('dts.co_nette_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss-$traitementsDts->alloc_familiale);
        
        $TBS->MergeBlock('a', $data);

        $raison_sociale = utf8_decode($societe['raison_sociale']);
       
        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_DTS_CNSS_FORMAT1'.strtoupper($raison_sociale).'_'.$request->annee.'_'.$request->trimestre.'.XLSX');
    }
    
    public function editDTS_CNSSxls2(Request $request)
    {

        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $societe_id = $request->societe_id;
        $trimestre = $request->trimestre;
        $annee = $request->annee;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDts = TraitementsDts::where("societe_id",$societe_id)
                ->where("trimestre",$trimestre)
                ->where("annee",$annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNSS_FORMAT2.xlsx');

              
        $TBS->MergeField('dts.annee', $annee);
        $TBS->MergeField("dts.trimestre",$trimestre);
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.telephone', $societe['telephone']);
        $TBS->MergeField('s.ville', $societe['ville']);
        $TBS->MergeField('s.regime', $societe['regime']);
        $TBS->MergeField('s.matricule', $societe['matricule']);
        $TBS->MergeField('s.sigle', $societe['sigle']);
        $TBS->MergeField('s.bp', $societe['bp']);
        $TBS->MergeField('s.fax', $societe['fax']);
        $TBS->MergeField('s.email', $societe['email']);
        $TBS->MergeField('s.effectif', count($traitementsDtsSalarie));
        $TBS->MergeField('dts.alloc_familiale', $traitementsDts->alloc_familiale);
        
        setlocale(LC_TIME, 'French');
        
        $TBS->MergeField('dts.mois1', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois2', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+1))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois3', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+2))->format('Y/m/d')))->formatLocalized('%B'));

        $data = array();
        $msalcnss1=0;
        $msalcnss2=0;
        $msalcnss3=0;
        
        $msalcnam1=0;
        $msalcnam2=0;
        $msalcnam3=0;
        $tx_cnss = 0;
        $tx_cnamgs = 0;
        $i=1;
        foreach($traitementsDtsSalarie as $d)
        {
            $d->date_depart=isset($d->date_depart)?$d->date_depart:'-';
            $d->date_embauche=isset($d->date_embauche)?$d->date_embauche:'-';
            $d->tx_cnss=isset($d->tx_cnss)?$d->tx_cnss:0;
            $d->tx_cnamgs=isset($d->tx_cnamgs)?$d->tx_cnamgs:0;
            
            $d->id = $i;

            $data[] = $d;
            $msalcnss1 = $msalcnss1 + $d->bpcnss1;
            $msalcnss2 = $msalcnss2 + $d->bpcnss2;
            $msalcnss3 = $msalcnss3 + $d->bpcnss3;
            
            $tx_cnss = $tx_cnss + $d->tx_cnss;
            
            $msalcnam1 = $msalcnam1 + $d->bpcnam1;
            $msalcnam2 = $msalcnam2 + $d->bpcnam2;
            $msalcnam3 = $msalcnam3 + $d->bpcnam3;
            $tx_cnamgs = $tx_cnamgs + $d->tx_cnamgs;
            
            $i=$i+1;
        }
        if(count($traitementsDtsSalarie)>0){
        $tx_cnss = $tx_cnss / count($traitementsDtsSalarie);
        $tx_cnamgs = $tx_cnamgs / count($traitementsDtsSalarie);
        }
        $TBS->MergeField('dts.msalcnss1', $msalcnss1);
        $TBS->MergeField('dts.msalcnss2', $msalcnss2);
        $TBS->MergeField('dts.msalcnss3', $msalcnss3);
        
        $TBS->MergeField('dts.msalcnam1', $msalcnam1);
        $TBS->MergeField('dts.msalcnam2', $msalcnam2);
        $TBS->MergeField('dts.msalcnam3', $msalcnam3);

        $TBS->MergeField('dts.tx_cnss', $tx_cnss);
        $TBS->MergeField('dts.tx_cnamgs', $tx_cnamgs);
        $TBS->MergeField('dts.msalcnsstotal', ($msalcnss1+$msalcnss2+$msalcnss3));
        $TBS->MergeField('dts.msalcnamtotal', ($msalcnam1+$msalcnam2+$msalcnam3));
        $TBS->MergeField('dts.co_brute_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss/100);
        $TBS->MergeField('dts.co_nette_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss/100-$traitementsDts->alloc_familiale);
        
        // echo json_encode($data);
        $TBS->MergeBlock('a', $data);

        $raison_sociale = utf8_decode($societe['raison_sociale']);


        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_DTS_CNSS_FORMAT2'.strtoupper($raison_sociale).'_'.$annee.'_'.$trimestre.'.XLSX');
    }
    
    
    public function editDTS_CNSSxls2_2(Request $request)
    {

        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $societe_id = $request->societe_id;
        $trimestre = $request->trimestre;
        $annee = $request->annee;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDts = TraitementsDts::where("societe_id",$societe_id)
                ->where("trimestre",$trimestre)
                ->where("annee",$annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNSS_FORMAT2_2.xlsx');

              
        $TBS->MergeField('dts.annee', $annee);
        $TBS->MergeField("dts.trimestre",$trimestre);
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.telephone', $societe['telephone']);
        $TBS->MergeField('s.ville', $societe['ville']);
        $TBS->MergeField('s.regime', $societe['regime']);
        $TBS->MergeField('s.matricule', $societe['matricule']);
        $TBS->MergeField('s.sigle', $societe['sigle']);
        $TBS->MergeField('s.bp', $societe['bp']);
        $TBS->MergeField('s.fax', $societe['fax']);
        $TBS->MergeField('s.email', $societe['email']);
        $TBS->MergeField('s.effectif', count($traitementsDtsSalarie));
        $TBS->MergeField('dts.alloc_familiale', $traitementsDts->alloc_familiale);
        
        setlocale(LC_TIME, 'French');
        
        $TBS->MergeField('dts.mois1', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois2', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+1))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois3', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+2))->format('Y/m/d')))->formatLocalized('%B'));

        $data = array();
        $msalcnss1=0;
        $msalcnss2=0;
        $msalcnss3=0;
        
        $msalcnam1=0;
        $msalcnam2=0;
        $msalcnam3=0;
        $tx_cnss = 0;
        $tx_cnamgs = 0;
        $i=1;
        foreach($traitementsDtsSalarie as $d)
        {
            $d->date_depart=isset($d->date_depart)?$d->date_depart:'-';
            $d->date_embauche=isset($d->date_embauche)?$d->date_embauche:'-';
            $d->tx_cnss=isset($d->tx_cnss)?$d->tx_cnss:'-';
            $d->tx_cnamgs=isset($d->tx_cnamgs)?$d->tx_cnamgs:'-';
            $d->n_cnss=isset($d->n_cnss)?$d->n_cnss:'-';
            $d->id = $i;
            $d2 = clone $d;
            $d2->n_cnss = $d->n_cnamgs;
            $d2->tx_cnss = $d->tx_cnamgs;
            $d2->bpcnss1 = $d2->bpcnam1;
            $d2->bpcnss2 = $d2->bpcnam2;
            $d2->bpcnss3 = $d2->bpcnam3;

            $data[] = $d;
            $data[] = $d2;
            $msalcnss1 = $msalcnss1 + $d->bpcnss1;
            $msalcnss2 = $msalcnss2 + $d->bpcnss2;
            $msalcnss3 = $msalcnss3 + $d->bpcnss3;
            $tx_cnss = $tx_cnss + $d->tx_cnss;
            
            $msalcnam1 = $msalcnam1 + $d->bpcnam1;
            $msalcnam2 = $msalcnam2 + $d->bpcnam2;
            $msalcnam3 = $msalcnam3 + $d->bpcnam3;
            $tx_cnamgs = $tx_cnamgs + $d->tx_cnamgs;
            
            $i=$i+1;
        }
        if(count($traitementsDtsSalarie)>0){
        $tx_cnss = $tx_cnss / count($traitementsDtsSalarie);
        $tx_cnamgs = $tx_cnamgs / count($traitementsDtsSalarie);
        }
        $TBS->MergeField('dts.msalcnss1', $msalcnss1);
        $TBS->MergeField('dts.msalcnss2', $msalcnss2);
        $TBS->MergeField('dts.msalcnss3', $msalcnss3);
        
        $TBS->MergeField('dts.msalcnam1', $msalcnam1);
        $TBS->MergeField('dts.msalcnam2', $msalcnam2);
        $TBS->MergeField('dts.msalcnam3', $msalcnam3);

        $TBS->MergeField('dts.tx_cnss', $tx_cnss);
        $TBS->MergeField('dts.tx_cnamgs', $tx_cnamgs);
        $TBS->MergeField('dts.msalcnsstotal', ($msalcnss1+$msalcnss2+$msalcnss3));
        $TBS->MergeField('dts.msalcnamtotal', ($msalcnam1+$msalcnam2+$msalcnam3));
        $TBS->MergeField('dts.co_brute_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss);
        $TBS->MergeField('dts.co_nette_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss-$traitementsDts->alloc_familiale);
        
        // echo json_encode($data);
        $TBS->MergeBlock('a', $data);

        $raison_sociale = utf8_decode($societe['raison_sociale']);


        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_DTS_CNSS_FORMAT2_2'.strtoupper($raison_sociale).'_'.$annee.'_'.$trimestre.'.XLSX');
    }

    public function editDTS_CNAMGSxls(Request $request)
    {

        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $societe_id = $request->societe_id;
        $trimestre = $request->trimestre;
        $annee = $request->annee;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDts = TraitementsDts::where("societe_id",$societe_id)
                ->where("trimestre",$trimestre)
                ->where("annee",$annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNAMGS_FORMAT.xlsx');
              
        $TBS->MergeField('dts.annee', $annee);
        $TBS->MergeField("dts.trimestre",$trimestre);
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.telephone', $societe['telephone']);
        $TBS->MergeField('s.ville', $societe['ville']);
        $TBS->MergeField('s.regime', $societe['regime']);
        $TBS->MergeField('s.matricule', $societe['matricule']);
        $TBS->MergeField('s.sigle', $societe['sigle']);
        $TBS->MergeField('s.code_postal', $societe['code_postal']);
        $TBS->MergeField('s.fax', $societe['fax']);
        $TBS->MergeField('s.email', $societe['email']);
        $TBS->MergeField('s.effectif', count($traitementsDtsSalarie));
        $TBS->MergeField('dts.alloc_familiale', $traitementsDts->alloc_familiale);
        
        setlocale(LC_TIME, 'French');
        
        $TBS->MergeField('dts.mois1', strtoupper(Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre))->format('Y/m/d')))->formatLocalized('%B')));
        $TBS->MergeField('dts.mois2', strtoupper(Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+1))->format('Y/m/d')))->formatLocalized('%B')));
        $TBS->MergeField('dts.mois3', strtoupper(Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+2))->format('Y/m/d')))->formatLocalized('%B')));

        $data = array();
        $msalcnss1=0;
        $msalcnss2=0;
        $msalcnss3=0;
        
        $msalcnam1=0;
        $msalcnam2=0;
        $msalcnam3=0;
        $tx_cnss = 0;
        $tx_cnamgs = 0;
        $i=1;
        foreach($traitementsDtsSalarie as $d)
        {
            $d->date_depart=isset($d->date_depart)?$d->date_depart:'-';
            $d->date_embauche=isset($d->date_embauche)?$d->date_embauche:'-';
           
            $d->id = $i;

            $data[] = $d;
           
            $i=$i+1;
        }
        
        $TBS->MergeBlock('a', $data);

        $raison_sociale = utf8_decode($societe['raison_sociale']);

        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_DTS_CNAMGS_FORMAT'.strtoupper($raison_sociale).'_'.$annee.'_'.$trimestre.'.XLSX');
    }
    

    public function editDTS_CNSS_RECAPxlsx(Request $request)
    {

        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $societe_id = $request->societe_id;
        $trimestre = $request->trimestre;
        $annee = $request->annee;
        $societe = Societe::findOrFail($societe_id);
        $traitementsDts = TraitementsDts::where("societe_id",$societe_id)
                ->where("trimestre",$trimestre)
                ->where("annee",$annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNSS_RECAP.xlsx');

              
        $TBS->MergeField('dts.annee', $annee);
        $TBS->MergeField("dts.trimestre",$trimestre);
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.lieu_dit', $societe['lieu_dit']);
        $TBS->MergeField('s.ville', $societe['ville']);
        $TBS->MergeField('s.departement', $societe['departement']);
        $TBS->MergeField('s.province', $societe['province']);
        $TBS->MergeField('s.arrondissement', utf8_decode($societe['arrondissement']));
        $TBS->MergeField('s.quartier', $societe['quartier']);
        $TBS->MergeField('s.contribuable', $societe['contribuable']);
        $TBS->MergeField('s.rccm', $societe['rccm']);
        $TBS->MergeField('s.activite', $societe['activite']);
        $TBS->MergeField('s.cnss', $societe['cnss']);
        $TBS->MergeField('s.regime', $societe['regime']);
        $TBS->MergeField('s.matricule', $societe['matricule']);
        $TBS->MergeField('s.date_creation', $societe['date_creation']?((new DateTime($societe['date_creation']))->format('d/m/Y')):$societe['date_creation']);
        $TBS->MergeField('s.date_mise_service', $societe['date_mise_service']?((new DateTime($societe['date_mise_service']))->format('d/m/Y')):$societe['date_mise_service']);
        $TBS->MergeField('s.date_effet', $societe['date_effet']?((new DateTime($societe['date_effet']))->format('d/m/Y')):$societe['date_effet']);
        $TBS->MergeField('s.date_immatriculation', $societe['date_immatriculation']?((new DateTime($societe['date_immatriculation']))->format('d/m/Y')):$societe['date_immatriculation']);
        $TBS->MergeField('s.sigle', $societe['sigle']);
        $TBS->MergeField('s.code_postal', $societe['code_postal']);
        $TBS->MergeField('dts.alloc_familiale', $traitementsDts->alloc_familiale);
        $TBS->MergeField('dts.ristourne', $traitementsDts->ristourne);
        $TBS->MergeField('dts.autre_deduc', $traitementsDts->autre_deduc);
        $TBS->MergeField('today', date('d/m/Y'));
        
        setlocale(LC_TIME, 'French');
        
        $data = array();
        $msalcnss1=0;
        $msalcnss2=0;
        $msalcnss3=0;
        
        $msalcnam1=0;
        $msalcnam2=0;
        $msalcnam3=0;
        $tx_cnss = 0;
        $tx_cnamgs = 0;
        $i=1;
        foreach($traitementsDtsSalarie as $d)
        {

            $data[] = $d;
            $msalcnss1 = $msalcnss1 + $d->bpcnss1;
            $msalcnss2 = $msalcnss2 + $d->bpcnss2;
            $msalcnss3 = $msalcnss3 + $d->bpcnss3;
            $tx_cnss = $tx_cnss + $d->tx_cnss;
            
        }
       
        if(count($traitementsDtsSalarie)>0){
            $tx_cnss = $tx_cnss / count($traitementsDtsSalarie);
        }
        $TBS->MergeField('dts.msalcnsstotal', ($msalcnss1+$msalcnss2+$msalcnss3));
        $TBS->MergeField('dts.co_brute_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss/100);
        

        $raison_sociale = utf8_decode($societe['raison_sociale']);


        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_DTS_CNSS_RECAP_'.strtoupper($raison_sociale).'_'.$annee.'_'.$trimestre.'.XLSX');
    }

    public function test()
    {

        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $societe_id = 2;
        $trimestre = 1;
        $annee = 2022;
        $societe = Societe::findOrFail(2);
        $traitementsDts = TraitementsDts::where("societe_id",$societe_id)
                ->where("trimestre",$trimestre)
                ->where("annee",$annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNSS_FORMAT2.xlsx');

        $TBS->MergeField('dts.annee', $annee);
        $TBS->MergeField("dts.trimestre",$trimestre);
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.telephone', $societe['telephone']);
        $TBS->MergeField('s.sigle', $societe['sigle']);
        $TBS->MergeField('s.bp', $societe['bp']);
        $TBS->MergeField('s.fax', $societe['fax']);
        $TBS->MergeField('s.email', $societe['email']);
        $TBS->MergeField('s.effectif', count($traitementsDtsSalarie));
        $TBS->MergeField('dts.alloc_familiale', $traitementsDts->alloc_familiale);
        $TBS->MergeField('dts.mois1', DateTime::createFromFormat('!m',($trimestre))->format('F'));
        $TBS->MergeField('dts.mois2', DateTime::createFromFormat('!m',($trimestre+1))->format('F'));
        $TBS->MergeField('dts.mois3', DateTime::createFromFormat('!m',($trimestre+2))->format('F'));

        $data = array();
        $msalcnss1=0;
        $msalcnss2=0;
        $msalcnss3=0;
        $tx_cnss = 0;
        $i=1;
        foreach($traitementsDtsSalarie as $d)
        {
            $d->date_depart=isset($d->date_depart)?$d->date_depart:'-';
            $d->date_embauche=isset($d->date_embauche)?$d->date_embauche:'-';
            $d->tx_cnss=isset($d->tx_cnss)?$d->tx_cnss:'-';
            $d->tx_cnamgs=isset($d->tx_cnamgs)?$d->tx_cnamgs:'-';
            $d->n_cnss=isset($d->n_cnss)?$d->n_cnss:'-';
            $d->id = $i;
            $d->d = $d;
            $data[] = $d;
            $msalcnss1 = $msalcnss1 + $d->bpcnss1;
            $msalcnss2 = $msalcnss2 + $d->bpcnss2;
            $msalcnss3 = $msalcnss3 + $d->bpcnss3;
            $tx_cnss = $tx_cnss + $d->tx_cnss;
            $i=$i+1;
        }
        if(count($traitementsDtsSalarie)>0)
        $tx_cnss = $tx_cnss / count($traitementsDtsSalarie);
        $TBS->MergeField('dts.msalcnss1', $msalcnss1);
        $TBS->MergeField('dts.msalcnss2', $msalcnss2);
        $TBS->MergeField('dts.msalcnss3', $msalcnss3);
        $TBS->MergeField('dts.tx_cnss', $tx_cnss);
        $TBS->MergeField('dts.msalcnsstotal', ($msalcnss1+$msalcnss2+$msalcnss3));
        $TBS->MergeField('dts.co_brute_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss);
        $TBS->MergeField('dts.co_nette_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss-$traitementsDts->alloc_familiale);
        
        // echo json_encode($data);
        $TBS->MergeBlock('a', $data);

        $raison_sociale = utf8_decode($societe['raison_sociale']);


        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_DTS_CNSS_FORMAT1'.strtoupper($raison_sociale).'_'.$annee.'_'.$trimestre.'.XLSX');
    }

    
    
    public function test3()
    {

        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $societe_id = 2;
        $trimestre = 1;
        $annee = 2022;
        $societe = Societe::findOrFail(2);
        $traitementsDts = TraitementsDts::where("societe_id",$societe_id)
                ->where("trimestre",$trimestre)
                ->where("annee",$annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNSS_FORMAT3.xlsx');

              
        $TBS->MergeField('dts.annee', $annee);
        $TBS->MergeField("dts.trimestre",$trimestre);
        $TBS->MergeField('s.raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('s.telephone', $societe['telephone']);
        $TBS->MergeField('s.ville', $societe['ville']);
        $TBS->MergeField('s.regime', $societe['regime']);
        $TBS->MergeField('s.matricule', $societe['matricule']);
        $TBS->MergeField('s.sigle', $societe['sigle']);
        $TBS->MergeField('s.bp', $societe['bp']);
        $TBS->MergeField('s.fax', $societe['fax']);
        $TBS->MergeField('s.email', $societe['email']);
        $TBS->MergeField('s.effectif', count($traitementsDtsSalarie));
        $TBS->MergeField('dts.alloc_familiale', $traitementsDts->alloc_familiale);
        
        setlocale(LC_TIME, 'French');
        
        $TBS->MergeField('dts.mois1', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois2', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+1))->format('Y/m/d')))->formatLocalized('%B'));
        $TBS->MergeField('dts.mois3', $date = Carbon::createFromTimeStamp(strtotime(DateTime::createFromFormat('!m',($trimestre+2))->format('Y/m/d')))->formatLocalized('%B'));

        $data = array();
        $msalcnss1=0;
        $msalcnss2=0;
        $msalcnss3=0;
        
        $msalcnam1=0;
        $msalcnam2=0;
        $msalcnam3=0;
        $tx_cnss = 0;
        $tx_cnamgs = 0;
        $i=1;
        foreach($traitementsDtsSalarie as $d)
        {
            $d->date_depart=isset($d->date_depart)?$d->date_depart:'-';
            $d->date_embauche=isset($d->date_embauche)?$d->date_embauche:'-';
            $d->tx_cnss=isset($d->tx_cnss)?$d->tx_cnss:'-';
            $d->tx_cnamgs=isset($d->tx_cnamgs)?$d->tx_cnamgs:'-';
            $d->n_cnss=isset($d->n_cnss)?$d->n_cnss:'-';
            $d->id = $i;
            $d2 = clone $d;
            $d2->n_cnss = $d->n_cnamgs;
            $d2->tx_cnss = $d->tx_cnamgs;
            $d2->bpcnss1 = $d2->bpcnam1;
            $d2->bpcnss2 = $d2->bpcnam2;
            $d2->bpcnss3 = $d2->bpcnam3;

            $data[] = $d;
            $data[] = $d2;
            $msalcnss1 = $msalcnss1 + $d->bpcnss1;
            $msalcnss2 = $msalcnss2 + $d->bpcnss2;
            $msalcnss3 = $msalcnss3 + $d->bpcnss3;
            $tx_cnss = $tx_cnss + $d->tx_cnss;
            
            $msalcnam1 = $msalcnam1 + $d->bpcnam1;
            $msalcnam2 = $msalcnam2 + $d->bpcnam2;
            $msalcnam3 = $msalcnam3 + $d->bpcnam3;
            $tx_cnamgs = $tx_cnamgs + $d->tx_cnamgs;
            
            $i=$i+1;
        }
        if(count($traitementsDtsSalarie)>0)
        $tx_cnss = $tx_cnss / count($traitementsDtsSalarie);
        $TBS->MergeField('dts.msalcnss1', $msalcnss1);
        $TBS->MergeField('dts.msalcnss2', $msalcnss2);
        $TBS->MergeField('dts.msalcnss3', $msalcnss3);
        
        $TBS->MergeField('dts.msalcnam1', $msalcnam1);
        $TBS->MergeField('dts.msalcnam2', $msalcnam2);
        $TBS->MergeField('dts.msalcnam3', $msalcnam3);

        $TBS->MergeField('dts.tx_cnss', $tx_cnss);
        $TBS->MergeField('dts.tx_cnamgs', $tx_cnamgs);
        $TBS->MergeField('dts.msalcnsstotal', ($msalcnss1+$msalcnss2+$msalcnss3));
        $TBS->MergeField('dts.msalcnamtotal', ($msalcnam1+$msalcnam2+$msalcnam3));
        $TBS->MergeField('dts.co_brute_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss);
        $TBS->MergeField('dts.co_nette_dues_cnss', ($msalcnss1+$msalcnss2+$msalcnss3)*$tx_cnss-$traitementsDts->alloc_familiale);
        
        // echo json_encode($data);
        $TBS->MergeBlock('a', $data);

        $raison_sociale = utf8_decode($societe['raison_sociale']);


        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_DTS_CNSS_FORMAT1'.strtoupper($raison_sociale).'_'.$annee.'_'.$trimestre.'.XLSX');
    }
}
