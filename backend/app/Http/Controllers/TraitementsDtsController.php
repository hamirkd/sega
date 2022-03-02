<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MBence\OpenTBSBundle\Services\OpenTBS;
use App\Models\TraitementsDts;
use App\Models\TraitementsDtsSalarie;
use App\Models\Societe;
use Carbon\Carbon;
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
    public function editDTS_CNSSxls(Request $request)
    {
        
        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'French');
        // Recuperation des données
        $annee=$request['annee'];
        $mois=$request['mois'];

        $societe = Societe::findOrFail($request->societe_id);
        $traitementsDts = TraitementsDts::where("societe_id",$request->societe_id)
                ->where("trimestre",$request->trimestre)
                ->where("annee",$request->annee)
                ->firstOrFail();
        $traitementsDtsSalarie = TraitementsDtsSalarie::where("traitements_dts_id",$traitementsDts->id)->get();
       
        $TBS = new OpenTBS();
        // load your template
        $TBS->LoadTemplate('DTS_CNSS.xlsx');

        $TBS->MergeField('annee', $request->annee);
        $TBS->MergeField("trimestre",$request->trimestre);
        $TBS->MergeField('raison_sociale', utf8_decode($societe['raison_sociale']));
        $TBS->MergeField('telephone', $societe['telephone']);
        $TBS->MergeField('sigle', $societe['sigle']);
        $TBS->MergeField('bp', $societe['bp']);
        $TBS->MergeField('fax', $societe['fax']);
        $TBS->MergeField('email', $societe['email']);
        $TBS->MergeField('mois1', DateTime::createFromFormat('!m',($request->trimestre))->format('F'));
        $TBS->MergeField('mois2', DateTime::createFromFormat('!m',($request->trimestre+1))->format('F'));
        $TBS->MergeField('mois3', DateTime::createFromFormat('!m',($request->trimestre+2))->format('F'));

        $data = array();
        foreach($traitementsDtsSalarie as $d)
        {
            $d->date_depart=isset($d->date_depart)?$d->date_depart:'-';
            $d->date_embauche=isset($d->date_embauche)?$d->date_embauche:'-';
            $d->tx_cnss=isset($d->tx_cnss)?$d->tx_cnss:'-';
            $d->n_cnss=isset($d->n_cnss)?$d->n_cnss:'-';

            $data[] = $d;
        }
        // echo json_encode($data);
        $TBS->MergeBlock('a', $data);

        $raison_sociale = utf8_decode($societe['raison_sociale']);
       
        $TBS->Show(OPENTBS_DOWNLOAD, 'ETAT_ID10'.strtoupper($raison_sociale).'_'.$annee.'_'.$mois.'.XLSX');
    }
}
