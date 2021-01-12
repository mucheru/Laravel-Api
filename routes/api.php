<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryCountryController;

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

Route::get('country',[CountryCountryController::class,'country']);

Route::get('country/{id}',[CountryCountryController::class,'countryById']);

Route::post('country',[CountryCountryController::class,'countrySave']);

Route::put('country/{id}',[CountryCountryController::class,'countryUpdate']);
Route::delete('country/{country}',[CountryCountryController::class,'countryDelete']);


