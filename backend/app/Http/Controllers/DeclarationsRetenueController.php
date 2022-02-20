<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MBence\OpenTBSBundle\Services\OpenTBS;
use App\Models\DeclarationsRetenue;
use App\Models\DeclarationsRetenuesSalarie;
use App\Models\Societe;
use Carbon\Carbon;
use DateTime;

class DeclarationsRetenueController extends Controller
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
        $declarationRetenue = DeclarationsRetenue::where("societe_id",$request->societe_id)
                ->where("mois",$request->mois)
                ->where("annee",$request->annee)
                ->first();
        if(isset($declarationRetenue)){
            $declarationRetenue->update($request->all());
        }
        else{
            DeclarationsRetenue::create($request->all());
        }
        return response()->json([
            'message' => 'La déclaration a été modifiée',
            'status' => 200
        ], 200);
    }

    /**
     * Recuperer une liste de salarié
     */
    public function saveManySalariesInDeclarationRetenu(Request $request){
        $declarationRetenue = DeclarationsRetenue::where("societe_id",$request->societe_id)
                ->where("mois",$request->mois)
                ->where("annee",$request->annee)
                ->first();
        if(!isset($declarationRetenue)){
            DeclarationsRetenue::create($request->all());
            $declarationRetenue = DeclarationsRetenue::where("societe_id",$request->societe_id)
                ->where("mois",$request->mois)
                ->where("annee",$request->annee)
                ->first();
        }
        DeclarationsRetenuesSalarie::where("declarations_retenue_id",$declarationRetenue->id)->delete();
        foreach($request->salaries as $salarie){
            $salarie['declarations_retenue_id'] = $declarationRetenue->id;
            DeclarationsRetenuesSalarie::create($salarie);
        }
    }

    /**
     * Permettre de recuperer la liste des salariés ont été déclaré
     */
    public function getSalariesByMoisAnneeSociete(Request $request){
        $declarationsRetenue = DeclarationsRetenue::where("societe_id",$request->societe_id)
        ->where("mois",$request->mois)
        ->where("annee",$request->annee)
        ->firstOrFail();
        // return $declarationsRetenue;
        return DeclarationsRetenuesSalarie::where("declarations_retenue_id",2)->get();
    }

    /**
     * Rechercher la retenue par le mois et l'années. Si elle existe
     * nous allons retourné l'oject
     */

     public function getByMoisAnnee(Request $request){
        
        return DeclarationsRetenue::where("societe_id",$request->societe_id)
                ->where("mois",$request->mois)
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
    public function update(Request $request, DeclarationsRetenue $declarationsRetenue)
    {
        $declarationsRetenue->update($request->all());
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit111(Request $request)
    {
        
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $annee=$request['annee'];
        $mois=$request['mois'];
        $raison_sociale=$request['raison_sociale'];
        $contribuable=$request['contribuable'];
        $numero_cheque=$request['numero_cheque'];
        $date_versement=$request['date_versement'];
        $code_postal=$request['code_postal'];
        $sigle=$request['sigle'];
        $ville=$request['ville'];
        $iban=$request['iban'];
        $bic=$request['bic'];
        $code_residence=$request['code_residence'];
        $today=date('d/m/Y');
        $place='Ouagadougou Le : ';
        $irpp= number_format($request['irpp'],0,","," ");
        $tcs= number_format($request['tcs'],0,","," ");
        $fnh= number_format($request['fnh'],0,","," ");
        $total = number_format($request['total'],0,","," ");

        $raison_sociale = utf8_decode($raison_sociale);
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('ETAT_ID10.docx');
        // replace variables
        $TBS->MergeField('annee', $annee);
        $TBS->MergeField('mois', $mois['value']);
        $TBS->MergeField('raison_sociale', $raison_sociale);
        $TBS->MergeField('contribuable', $contribuable);
        $TBS->MergeField('numero_cheque', $numero_cheque);
        $TBS->MergeField('date_versement', $date_versement);
        $TBS->MergeField('ville', $ville);
        $TBS->MergeField('sigle', $sigle);
        $TBS->MergeField('code_postal', $code_postal);
        $TBS->MergeField('today', $today);
        $TBS->MergeField('place', $place);
        $TBS->MergeField('irpp', $irpp);  
        $TBS->MergeField('tcs', $tcs);  
        $TBS->MergeField('fnh', $fnh);  
        $TBS->MergeField('total', $total);  
        $TBS->MergeField('iban', $iban);  
        $TBS->MergeField('bic', $bic);  
        $TBS->MergeField('code_residence', $code_residence);  
        $TBS->MergeField('total', $total);  
        // echo "DAO";
        // send the file
        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_ID10'.strtoupper($raison_sociale).'_'.$annee.'_'.$mois['value'].'.docx');
    }

    /**
     * Imprimer une déclaration
     */
    public function edit11(Request $request)
    {
        
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $annee=$request['annee'];
        $mois=$request['mois'];

        $societe = Societe::findOrFail($request->societe_id);
        
        $declarationsRetenue = DeclarationsRetenue::where("societe_id",$request->societe_id)
        ->where("mois",$request->mois)
        ->where("annee",$request->annee)
        ->firstOrFail();

        $raison_sociale=$societe['raison_sociale'];
        $contribuable=$societe['contribuable'];
        $numero_cheque=$declarationsRetenue['numero_cheque'];
        $date_versement=$declarationsRetenue['date_versement'];
        $code_postal=$societe['code_postal'];
        $sigle=$societe['sigle'];
        $ville=$societe['ville'];
        $iban=$declarationsRetenue['iban'];
        $bic=$declarationsRetenue['bic'];
        $code_residence=$societe['code_residence'];
        $today=date('d/m/Y');
        $place='Ouagadougou Le : ';
        $irpp= number_format($declarationsRetenue['irpp'],0,","," ");
        $tcs= number_format($declarationsRetenue['tcs'],0,","," ");
        $fnh= number_format($declarationsRetenue['fnh'],0,","," ");
        $total = number_format($declarationsRetenue['fnh']+$declarationsRetenue['tcs']+$declarationsRetenue['irpp'],0,","," ");

        $raison_sociale = utf8_decode($raison_sociale);
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('ETAT_ID10.docx');
        // replace variables
        $choix_cheque = '';
        $choix_virement = '';
        $choix_espece = '';
        switch ($declarationsRetenue['mode_reglement']) {
            case 'CHEQUE':
                $choix_cheque = 'X';
                break;
            case 'VIREMENT':
                $choix_virement = 'X';
                break;
            case 'ESPECE':
                $choix_espece = 'X';
                break;
                default:$choix_espece = 'X';
        }
        
        $TBS->MergeField('choix_cheque',$choix_cheque);
        $TBS->MergeField('choix_virement',$choix_virement);
        $TBS->MergeField('choix_espece',$choix_espece);
        $TBS->MergeField('annee', $annee);
        $TBS->MergeField('mois', $mois);
        $TBS->MergeField('raison_sociale', $raison_sociale);
        $TBS->MergeField('telephone', $societe['telephone']);
        $TBS->MergeField('email', $societe['email']);
        $TBS->MergeField('contribuable', $contribuable);
        $TBS->MergeField('numero_cheque', $numero_cheque);
        $TBS->MergeField('date_versement', $date_versement);
        $TBS->MergeField('ville', $ville);
        $TBS->MergeField('sigle', $sigle);
        $TBS->MergeField('code_postal', $code_postal);
        $TBS->MergeField('today', $today);
        $TBS->MergeField('place', $place);
        $TBS->MergeField('irpp', $irpp);  
        $TBS->MergeField('tcs', $tcs);  
        $TBS->MergeField('fnh', $fnh);  
        $TBS->MergeField('total', $total);  
        $TBS->MergeField('iban', $iban);  
        $TBS->MergeField('bic', $bic);  
        $TBS->MergeField('code_residence', $code_residence);  
        $TBS->MergeField('total', $total);  
        // echo "DAO";
        // send the file
        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_ID10'.strtoupper($raison_sociale).'_'.$annee.'_'.$mois.'.docx');
    }

    
    /**
     * Imprimer une déclaration
     */
    public function edit10xls(Request $request)
    {
        
        // setlocale(LC_TIME, 'French');
        // setlocale(LC_ALL, 'fr_FR');
        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $annee=$request['annee'];
        $mois=$request['mois'];

        $societe = Societe::findOrFail($request->societe_id);
        
        $declarationsRetenue = DeclarationsRetenue::where("societe_id",$request->societe_id)
        ->where("mois",$request->mois)
        ->where("annee",$request->annee)
        ->firstOrFail();

        $site_internet=$societe['site_internet'];
        $telecopie = $societe['telecopie'];

        $moisName = DateTime::createFromFormat('!m',$mois);
        $moisName = $moisName->format('F');

        $raison_sociale=$societe['raison_sociale'];
        $contribuable=$societe['contribuable'];
        $numero_cheque=$declarationsRetenue['numero_cheque'];
        $date_versement=$declarationsRetenue['date_versement'];
        $code_postal=$societe['code_postal'];
        $sigle=$societe['sigle'];
        $ville=$societe['ville'];
        $iban=$declarationsRetenue['iban'];
        $bic=$declarationsRetenue['bic'];
        $code_residence=$societe['code_residence'];
        $today=date('d/m/Y');
        $place='Ouagadougou';
        $irpp= number_format($declarationsRetenue['irpp'],0,","," ");
        $tcs= number_format($declarationsRetenue['tcs'],0,","," ");
        $fnh= number_format($declarationsRetenue['fnh'],0,","," ");
        $total = number_format($declarationsRetenue['fnh']+$declarationsRetenue['tcs']+$declarationsRetenue['irpp'],0,","," ");

        $raison_sociale = utf8_decode($raison_sociale);
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('EDIT10.xlsx');
        // replace variables
        $choix_cheque = '';
        $choix_virement = '';
        $choix_espece = '';
        switch ($declarationsRetenue['mode_reglement']) {
            case 'CHEQUE':
                $choix_cheque = 'X';
                break;
            case 'VIREMENT':
                $choix_virement = 'X';
                break;
            case 'ESPECE':
                $choix_espece = 'X';
                break;
                default:$choix_espece = 'X';
        }
        
        $TBS->MergeField('site_internet',$site_internet);
        $TBS->MergeField('telecopie',$telecopie);
        $TBS->MergeField('choix_cheque',$choix_cheque);
        $TBS->MergeField('choix_virement',$choix_virement);
        $TBS->MergeField('choix_espece',$choix_espece);
        $TBS->MergeField('annee', $annee);
        $TBS->MergeField('mois', $moisName);
        $TBS->MergeField('raison_sociale', $raison_sociale);
        $TBS->MergeField('telephone', $societe['telephone']);
        $TBS->MergeField('email', $societe['email']);
        $TBS->MergeField('contribuable', $contribuable);
        $TBS->MergeField('numero_cheque', $numero_cheque);
        $TBS->MergeField('date_versement', $date_versement);
        $TBS->MergeField('ville', $ville);
        $TBS->MergeField('sigle', $sigle);
        $TBS->MergeField('code_postal', $code_postal);
        $TBS->MergeField('today', $today);
        $TBS->MergeField('place', $place);
        $TBS->MergeField('irpp', $irpp);  
        $TBS->MergeField('tcs', $tcs);  
        $TBS->MergeField('fnh', $fnh);  
        $TBS->MergeField('total', $total);  
        $TBS->MergeField('iban', $iban);  
        $TBS->MergeField('bic', $bic);  
        $TBS->MergeField('code_residence', $code_residence);  
        $TBS->MergeField('total', $total);  
        // echo "DAO";
        // send the file
        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_ID10'.strtoupper($raison_sociale).'_'.$annee.'_'.$mois.'.docx');
    }
}
