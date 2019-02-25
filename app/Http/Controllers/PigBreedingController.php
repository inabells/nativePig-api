<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PigBreedingModel;

class PigBreedingController extends Controller
{
    public function getBreedingRecord()
    {
        return PigBreedingModel::get();
    }

    public function addBreedingRecord(Request $request)
    {
        $pig = new PigBreedingModel($request->all());
        $pig->save();    
    }

    public function getBreedingProfile(Request $request)
    {
        return PigBreedingModel::where('sow_registration_id', '=', $request->sow_registration_id)
        ->where('boar_registration_id', '=', $request->boar_registration_id)->first();
    }

    public function updateExpectedDateFarrow(Request $request)
    {
        $searchPig = PigBreedingModel::where('sow_registration_id', '=', $request->sow_registration_id)
        ->where('boar_registration_id', '=', $request->boar_registration_id)->first();
        $pig = PigBreedingModel::find($searchPig->id);
        $pig->expected_date_farrow = $request->expected_date_farrow;
        $pig->save();

        return $pig;
    }

    public function updateDateBred(Request $request)
    {
        $searchPig = PigBreedingModel::where('sow_registration_id', '=', $request->sow_registration_id)
        ->where('boar_registration_id', '=', $request->boar_registration_id)->first();
        $pig = PigBreedingModel::find($searchPig->id);
        $pig->date_bred = $request->date_bred;
        $pig->save();

        return $pig;
    }

    public function updateSowStatus(Request $request)
    {
        $searchPig = PigBreedingModel::where('sow_registration_id', '=', $request->sow_registration_id)
        ->where('boar_registration_id', '=', $request->boar_registration_id)->first();
        $pig = PigBreedingModel::find($searchPig->id);
        $pig->sow_status = $request->sow_status;
        $pig->save();

        return $pig;
    }

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
}
