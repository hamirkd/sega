<?php

namespace App\Http\Controllers;

use App\Models\Rubrique;
use App\Models\Societe;
use Illuminate\Http\Request;

class RubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rubrique::all();
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rubrique::create($request->all());
        return response()->json([
            'message' => 'La rubrique a été ajoutée',
            'status' => 200
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function show(Rubrique $rubrique)
    {
        return $rubrique;
    } 

    /**
     * Display a listing of the resource by Rubrique.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListBySociete(Societe $societe)
    {
        return Rubrique::where("societe_id",$societe->id)->get();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rubrique $rubrique)
    {
        $rubrique->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rubrique  $rubrique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rubrique $rubrique)
    {
        $rubrique->delete();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function destroyAll(Societe $societe)
    {
        Rubrique::where("societe_id",$societe->id)->delete();
    }
}
