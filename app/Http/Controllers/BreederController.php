<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BreederProfileModel;
use App\Model\GrossMorphologyModel;
use App\Model\MorphometricCharacteristicsModel;
use App\Model\WeightRecordsModel;

class BreederController extends Controller
{
    public function getAllGrossMorphProfile()
    {
        return GrossMorphologyModel::get();        
    }

    public function getAllMorphCharProfile()
    {
        return MorphometricCharacteristicsModel::get();        
    }

    public function getAllWeightProfile()
    {
        return WeightRecordsModel::get();
    }

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

    public function getGrossMorphProfile(Request $request)
    {
        return GrossMorphologyModel::where('registration_id', '=', $request->registration_id)->first();
    }

    public function getMorphCharProfile(Request $request)
    {
        return MorphometricCharacteristicsModel::where('registration_id', '=', $request->registration_id)->first();
    }

    public function getWeightProfile(Request $request)
    {
        return WeightRecordsModel::where('registration_id', '=', $request->registration_id)->first();
    }

    public function addRegId(Request $request)
    {
        $pigGrossMorphology = new GrossMorphologyModel($request->all());
        $pigMorphometricChar = new MorphometricCharacteristicsModel($request->all());
        $pigGrossMorphology->save();    
        $pigMorphometricChar->save();            
    }

    public function addRegIdWeightRecords(Request $request)
    {
        $pigWeightRecords = new WeightRecordsModel($request->all());
        $pigWeightRecords->save();
    }

    public function updateGrossMorphology(Request $request)
    {
        $searchPig = GrossMorphologyModel::where('registration_id', $request->registration_id)->first();
        $pig = GrossMorphologyModel::find($searchPig->id);
        $pig->date_collected = $request->date_collected;
        $pig->hair_type = $request->hair_type;
        $pig->hair_length = $request->hair_length;
        $pig->coat_color = $request->coat_color;
        $pig->color_pattern = $request->color_pattern;
        $pig->head_shape = $request->head_shape;
        $pig->skin_type = $request->skin_type;
        $pig->ear_type = $request->ear_type;
        $pig->tail_type = $request->tail_type;
        $pig->backline = $request->backline;
        $pig->other_marks = $request->other_marks;
        $pig->save();

        return $pig;
    }

    public function updateMorphChar(Request $request)
    {
        $searchPig = MorphometricCharacteristicsModel::where('registration_id', $request->registration_id)->first();
        $pig = MorphometricCharacteristicsModel::find($searchPig->id);
        $pig->ear_length = $request->ear_length;
        $pig->head_length = $request->head_length;
        $pig->snout_length = $request->snout_length;
        $pig->body_length = $request->body_length;
        $pig->heart_girth = $request->heart_girth;
        $pig->pelvic_width = $request->pelvic_width;
        $pig->tail_length = $request->tail_length;
        $pig->height_at_withers = $request->height_at_withers;
        $pig->normal_teats = $request->normal_teats;
        $pig->date_collected = $request->date_collected;
        $pig->save();

        return $pig;
    }

    public function updateWeightRecords(Request $request)
    {
        $searchPig = WeightRecordsModel::where('registration_id', $request->registration_id)->first();
        $pig = WeightRecordsModel::find($searchPig->id);
        $pig->weight_at_45 = $request->weight_at_45;
        $pig->weight_at_60 = $request->weight_at_60;
        $pig->weight_at_90 = $request->weight_at_90;
        $pig->weight_at_150 = $request->weight_at_150;
        $pig->weight_at_180 = $request->weight_at_180;
        $pig->date_collected_at_45 = $request->date_collected_at_45;
        $pig->date_collected_at_60 = $request->date_collected_at_60;
        $pig->date_collected_at_90 = $request->date_collected_at_90;
        $pig->date_collected_at_150 = $request->date_collected_at_150;
        $pig->date_collected_at_180 = $request->date_collected_at_180;
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
