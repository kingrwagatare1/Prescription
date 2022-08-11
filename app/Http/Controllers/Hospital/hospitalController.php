<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hospital;

class hospitalController extends Controller
{
    function save_hospital(Request $request){
        // $request-> validate([
        //     'hospital_id'=>["required','max:8','min:8"],
        //     'hospitalName'=>['required','max:15','min:4'],
        //     'hospitalAddress'=>['required','max:20','min:4'],
       
        // ]) ;
            $hospital = new Hospital();
            $hospital-> hospital_id =$request -> hospital_id;
            $hospital-> hospitalName =$request -> hospitalName;
            $hospital-> hospitalAddress =$request ->hospitalAddress;
            $hospital->save();
            return response()->json(['message'=>'hospital saved successfully'],200);
    }
}
