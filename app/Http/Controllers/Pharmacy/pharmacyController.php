<?php

namespace App\Http\Controllers\Pharmacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pharmacy;

class pharmacyController extends Controller
{
    function save_pharmacy(Request $request){
        // $request-> validate([
        //     'hospital_id'=>["required','max:8','min:8"],
        //     'hospitalName'=>['required','max:15','min:4'],
        //     'hospitalAddress'=>['required','max:20','min:4'],
       
        // ]) ;
            $pharmacy = new pharmacy();
            $pharmacy-> pharmacy_id =$request -> pharmacy_id;
            $pharmacy-> location =$request -> location;
            $pharmacy-> pharmacyContact =$request ->pharmacyContact;
            $pharmacy-> pharmacyEmail =$request -> pharmacyEmail;
            $pharmacy-> medecine_id =$request -> medecine_id;
            $pharmacy-> pharmacist_id =$request ->pharmacist_id;
            $pharmacy-> pharmacyName =$request ->pharmacyName;
            $pharmacy->save();
            return response()->json(['message'=>'pharmacy saved successfully'],200);
        
    }
}
