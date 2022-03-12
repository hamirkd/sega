<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TraitementsDas;
use App\Models\TraitementsDasSalarie;

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
}
