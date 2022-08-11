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

    //route of patients
Route::POST('register_patient',[\App\Http\Controllers\patients\patientsController::class,'register_patient']);
Route::POST('login_patient',[\App\Http\Controllers\patients\patientsController::class,'login_patient']);
Route::middleware('auth:sanctum')->post('logout',[\App\Http\Controllers\Patient\patientsController::class,'logout']);

    //route of hospital
Route::POST('save_hospital',[\App\Http\Controllers\Hospital\hospitalController::class,'save_hospital']);
    
    //route of doctor
Route::POST('register_doctor',[\App\Http\Controllers\doctors\doctorsController::class,'register_doctor']);
Route::POST('login_doctors',[\App\Http\Controllers\doctors\doctorsController::class,'login_doctors']);
Route::middleware('auth:sanctum')->post('logout',[\App\Http\Controllers\doctors\doctorsController::class,'logout']);

    //route of insurance
Route::POST('save_insurance',[\App\Http\Controllers\Insurance\insuranceController::class,'save_insurance']);

    //route of pharmacist
Route::POST('register_pharmacist',[\App\Http\Controllers\Pharmacist\pharmacistController::class,'register_pharmacist']);
Route::POST('login_pharmacist',[\App\Http\Controllers\Pharmacist\pharmacistController::class,'login_pharmacist']);
Route::middleware('auth:sanctum')->post('logout',[\App\Http\Controllers\Pharmacist\pharmacistController::class,'logout']);

    //route of pharmacy
Route::POST('save_pharmacy',[\App\Http\Controllers\Pharmacy\pharmacyController::class,'save_pharmacy']);

    //route of medecine
Route::POST('save_medecine',[\App\Http\Controllers\Medecine\medecineController::class,'save_medecine']);

        //prescription routes
Route::POST('save_prescriptions',[\App\Http\Controllers\prescriptions\prescriptionsController::class,'save_prescriptions']);
