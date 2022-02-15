<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MBence\OpenTBSBundle\Services\OpenTBS;
use DateTime;

class DeclarationRetenueController extends Controller
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
        //
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
    public function edit11(Request $request)
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
}
