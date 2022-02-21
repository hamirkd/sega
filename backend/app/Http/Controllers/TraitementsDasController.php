<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TraitementsDas;

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
                ->where("trimestre",$request->trimestre)
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
                ->where("trimestre",$request->trimestre)
                ->where("annee",$request->annee)
                ->first();
        if(!isset($traitementsDas)){
            TraitementsDas::create($request->all());
            $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
                ->where("trimestre",$request->trimestre)
                ->where("annee",$request->annee)
                ->first();
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
    public function getSalariesByTrimestreAnneeSociete(Request $request){
        $traitementsDas = TraitementsDas::where("societe_id",$request->societe_id)
        ->where("trimestre",$request->trimestre)
        ->where("annee",$request->annee)
        ->firstOrFail();
        // return $traitementsDas;
        return TraitementsDasSalarie::where("traitements_das_id",$traitementsDas->id)->get();
    }

    
    /**
     * Rechercher la retenue par le mois et l'années. Si elle existe
     * nous allons retourné l'oject
     */

    public function getByTrimestreAnnee(Request $request){
        
        return TraitementsDas::where("societe_id",$request->societe_id)
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
}
