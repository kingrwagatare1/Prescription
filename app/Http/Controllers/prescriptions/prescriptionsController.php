<?php

namespace App\Http\Controllers\prescriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;

class prescriptionsController extends Controller
{
    public function index(){
        $prescriptions = Prescription::all();
        return response()->json(['prescriptions'=>$prescriptions],200);
    }
    function save_prescriptions(Request $request){
    
        $prescr = new Prescription();
        $prescr-> prescriptionName =$request -> prescriptionName;
        $prescr-> details =$request ->details;
        $prescr->doctor =$request ->doctor;
        $prescr->doctorContact =$request -> doctorContact;
        $prescr-> speciality =$request -> speciality;
        $prescr->hospital =$request ->hospital;
        $prescr->status =$request ->status;
        $prescr->pharmacy =$request -> pharmacy;
        $prescr->save();
        return response()->json(["message"=>'saved successfully'],200);

    }
    


}
