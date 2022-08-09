<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patient\patientController;
use App\Http\Controllers\doctor\doctorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::POST('save_prescription',[ doctorController::class,'save_prescription']);
Route::POST('save_patient',[ patientController::class,'save_patient']);