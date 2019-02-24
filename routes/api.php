<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getAllPigs', "PigController@getAllPigs");
Route::get('getAllSows', "PigController@getAllSows");
Route::get('getAllBoars', "PigController@getAllBoars");
Route::get('getAllFemaleGrowers', "PigController@getAllFemaleGrowers");
Route::get('getAllMaleGrowers', "PigController@getAllMaleGrowers");


Route::get('getFarmInfo/{id}', "FarmController@getFarmInfoByID");

Route::get('getBreederProfile/{id}', "BreederController@getBreederProfileByID");
Route::get('getGrossMorphology/{id}', "BreederController@getGrossMorphologyByID");
Route::get('getMorphometricCharacteristics/{id}', "BreederController@getMorphometricCharacteristicsByID");
Route::get('getWeightRecords/{id}', "BreederController@getWeightRecordsByID");

Route::post('addPig', "PigController@addPig");

Route::get('searchPig', "PigController@searchPig");

Route::delete('deletePig', "PigController@deletePig");

Route::post('addPigMortalitySales', "MortalitySalesController@addPigMortalitySales");
Route::get('getMortality', "MortalitySalesController@getMortality");
Route::get('getSales', "MortalitySalesController@getSales");
Route::get('getOthers', "MortalitySalesController@getOthers");

Route::get('getBreedingRecord',"PigBreedingController@getBreedingRecord");
Route::post('addBreedingRecord',"PigBreedingController@addBreedingRecord");

Route::get('getSinglePig', "PigController@getSinglePig");
Route::get('getAllCount', "PigController@getAllCount");



