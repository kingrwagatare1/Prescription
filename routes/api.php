<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\doctor\doctorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('prescription',[\App\Http\Controllers\prescriptions\prescriptionsController::class,'prescriptions']);
Route::POST('save_patient',[\App\Http\Controllers\patients\patientsController::class,'save_patient']);
Route::POST('save_prescription',[\App\Http\Controllers\doctors\doctorsController::class,'save_prescription']);
Route::POST('save_prescriptions',[\App\Http\Controllers\prescriptions\prescriptionsController::class,'save_prescriptions']);