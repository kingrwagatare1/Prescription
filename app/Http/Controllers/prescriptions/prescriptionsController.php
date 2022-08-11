<?php

namespace App\Http\Controllers\prescriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;

class prescriptionsController extends Controller
{
    // public function index(){
    //     $prescriptions = Prescription::all();
    //     return response()->json(['prescriptions'=>$prescriptions],200);
    // }
    function save_prescriptions(Request $request){
    
        $prescr = new Prescription();
        $prescr-> prescription_id =$request -> prescription_id;
        $prescr-> insurance_id =$request -> insurance_id;
        $prescr-> patient_id =$request -> patient_id;
        $prescr-> patientName =$request -> patientName;
        $prescr-> details =$request ->details;
        $prescr->doctor_id =$request ->doctor_id;
        $prescr->doctorContact =$request -> doctorContact;
        $prescr-> speciality =$request -> speciality;
        $prescr->hospital_id =$request ->hospital_id;
        $prescr->status =$request ->status;
        $prescr->pharmacy_id =$request -> pharmacy_id;
        $prescr->save();

        return response()->json(["message"=>'saved successfully'],200);

    }
}
