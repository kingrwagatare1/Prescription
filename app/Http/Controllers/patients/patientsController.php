<?php

namespace App\Http\Controllers\patients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class patientsController extends Controller
{
    function patient(){
        $patients = Patient::all();
        //return response()->json(['message'=>'saved successfully'],200);
    }
    function save_patient(Request $request){
        $request-> validate([
            'patientName'=>['required','max:50','min:2'],
            'details'=>['required','max:50','min:5'],
            
        ]) ;
            $patients = new Patient();
            $patients-> patientName =$request -> patientName;
            $patients-> details =$request ->details;
            $patients->save();
            return response()->json(['Patient'=>$patients],200);
    }


}
