<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MortalitySalesModel;
use App\Model\PigModel;

class MortalitySalesController extends Controller
{

    public function addPigMortalitySales(Request $request)
    {
        $addMortalityRecord = new MortalitySalesModel($request->all());
        $addMortalityRecord->save();
    }

    public function getMortality()
    {
        return MortalitySalesModel::whereNull('weight_sold')
            ->whereNull('reason_removed')
            ->get();
    }

    public function getSales()
    {
        return MortalitySalesModel::whereNull('cause_of_death')
            ->whereNull('reason_removed')
            ->get();
    }

    public function getOthers()
    {
        return MortalitySalesModel::whereNull('cause_of_death')
            ->whereNull('weight_sold')
            ->get();
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
