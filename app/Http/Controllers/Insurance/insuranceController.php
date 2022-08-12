<?php

namespace App\Http\Controllers\Insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\insurance;

class insuranceController extends Controller
{
    function save_insurance(Request $request){
        // $request-> validate([
        //     'hospital_id'=>["required','max:8','min:8"],
        //     'hospitalName'=>['required','max:15','min:4'],
        //     'hospitalAddress'=>['required','max:20','min:4'],
       
        // ]) ;
            $insurance = new insurance();
            $insurance-> insurance_id =$request -> insurance_id;
            $insurance-> insuranceName =$request -> insuranceName;
            $insurance->save();
            return response()->json(['message'=>'insurance saved successfully'],200);
    }
}
