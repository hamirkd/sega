<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TraitementsDts;
use App\Models\TraitementsDtsSalarie;

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
}
