<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BreederProfileModel;
use App\Model\GrossMorphologyModel;
use App\Model\MorphometricCharacteristicsModel;
use App\Model\WeightRecordsModel;

class BreederController extends Controller
{
    public function getBreederProfileByID($id)
    {
        return BreederProfileModel::where('registration_id', $id)->first();
    }

    public function getGrossMorphologyByID($id)
    {
        return GrossMorphologyModel::where('registration_id', $id)->first();
    }

    public function getMorphometricCharacteristicsByID($id)
    {
        return MorphometricCharacteristicsModel::where('registration_id', $id)->first();
    }

    public function getWeightRecordsByID($id)
    {
        return WeightRecordsModel::where('registration_id', $id)->first();
    }

    // public function editPig(Request $request)
    // { 
    //     $searchUser = Users::where('last_name', $request->last_name)->first();

    //     $user = Users::find($searchUser->id);
    //     $user->first_name = $request->first_name;
    //     $user->age = $request->age;
    //     $user->save();
    // }

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
