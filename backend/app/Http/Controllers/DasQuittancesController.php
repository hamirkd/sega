<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DasQuittance;

class DasQuittancesController extends Controller
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
        $dasQuittance = DasQuittance::where("societe_id",$request->societe_id)
                ->where("mois",$request->mois)
                ->where("annee",$request->annee)
                ->first();
        if(isset($dasQuittance)){
            $dasQuittance->update($request->all());
        }
        else{
            DasQuittance::create($request->all());
        }
        return response()->json([
            'message' => 'La quittance a été modifiée',
            'status' => 200
        ], 200);
    }

    public function getAll(Request $request){
        return DasQuittance::where("societe_id",$request->societe_id)
                ->where("annee",$request->annee)->get();
    }

    public function getByMoisAnnee(Request $request){
        return DasQuittance::where("societe_id",$request->societe_id)
                ->where("annee",$request->annee)
                ->where("mois",$request->mois)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DasQuittance $dasQuittance)
    {
        $dasQuittance->delete();
    }
}