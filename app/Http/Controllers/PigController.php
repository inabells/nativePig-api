<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PigModel;

class PigController extends Controller
{

    public function getAllPigs()
    {
        return PigModel::get();        
    }

    public function getAllSows()
    {
        return PigModel::where('pig_classification', "Breeder")
            ->where('pig_sex', "F")
            ->get();
    }

    public function getAllBoars()
    {
        return PigModel::where('pig_classification', "Breeder")
            ->where('pig_sex', "M")
            ->get();
    }

    public function getAllFemaleGrowers()
    {
        return PigModel::where('pig_classification', "Grower")
            ->where('pig_sex', "F")
            ->get();
    }

    public function getAllMaleGrowers()
    {
        return PigModel::where('pig_classification', "Grower")
            ->where('pig_sex', "M")
            ->get();
    }

    public function getAllCount()
    {
        $countArray = array('sowCount' => PigModel::where('pig_classification', "Breeder")
                    ->where('pig_sex', "F")
                    ->count(),
                    
                    'boarCount' => PigModel::where('pig_classification', "Breeder")
                    ->where('pig_sex', "M")
                    ->count(),

                    'femaleGrowerCount' => PigModel::where('pig_classification', "Grower")
                    ->where('pig_sex', "F")
                    ->count(),

                    'maleGrowerCount' => PigModel::where('pig_classification', "Grower")
                    ->where('pig_sex', "M")
                    ->count()
        );

        return json_encode($countArray);    

    }

    public function getSinglePig(Request $request)
    {
        return PigModel::where('pig_registration_id', '=', $request->pig_registration_id)->first();
    }

    public function addPig(Request $request)
    {
        $pig = new PigModel($request->all());
        $pig->save();    
    }

    public function updatePig(Request $request)
    {
        
    }

    public function deletePig(Request $request)
    {
        $searchPig = PigModel::where('pig_registration_id', $request->pig_registration_id)->first();
        $pig = PigModel::find($searchPig->pig_id);
        //$returnPig = $pig;
        $pig->delete();

        //return $returnPig->get("pig_birthdate");
    }

    public function searchPig(Request $request)
    {
        return PigModel::where('pig_registration_id', 'like', '%'.$request->pig_registration_id.'%')->get();
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
