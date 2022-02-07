<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use Illuminate\Http\Request;

class SalarieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Salarie::create($request->all());
        return response()->json([
            'message' => 'La salarié a été ajouté',
            'status' => 200
        ], 200);
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Salarie::create($request->all());
        return response()->json([
            'message' => 'La salarié a été ajouté',
            'status' => 200
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function show(Salarie $salarie)
    {
        return $salarie;
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salarie $salarie)
    {
        $salarie->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salarie  $salarie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salarie $salarie)
    {
        $salarie->delete();
    }
}
