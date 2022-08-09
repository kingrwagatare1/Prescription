<?php

namespace App\Http\Controllers\doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\doctor;


class doctorsController extends Controller
{
    function save_prescription(Request $request){
        // $request-> validate([
        //     'prescriptName'=>["required','max:50','min:2"],
        //     'details'=>['required','max:50','min:2'],
        //     'doctor'=>['required','max:50','min:2'],
        //     'doctorContact'=>['required','max:50','min:2'],
        //     'speciality'=>['required','max:50','min:2'],
        //     'hospital'=>['required','max:50','min:2'],
        //     'status'=>['required','max:50','min:2'],
        //     'pharmacy'=>['required','max:50','min:2'],
        // ]) ;
            $prescr = new doctor();
            $prescr-> prescriptionName =$request -> prescriptionName;
            $prescr-> prescription_id =$request -> prescription_id;
            $prescr-> details =$request ->details;
            $prescr->doctor =$request ->doctor;
            $prescr->doctorContact =$request -> doctorContact;
            $prescr-> speciality =$request -> speciality;
            $prescr->hospital =$request ->hospital;
            $prescr->status =$request ->status;
            $prescr->pharmacy =$request -> pharmacy;
            $prescr->save();
            return response()->json(['doctor'=>$prescr],200);
    }
}
