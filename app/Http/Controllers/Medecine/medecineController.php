<?php

namespace App\Http\Controllers\Medecine;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medecine;

class medecineController extends Controller
{
    function save_medecine(Request $request){
        // $request-> validate([
        //     'hospital_id'=>["required','max:8','min:8"],
        //     'hospitalName'=>['required','max:15','min:4'],
        //     'hospitalAddress'=>['required','max:20','min:4'],
       
        // ]) ;
            $medecine = new medecine();
            $medecine-> medecine_id =$request -> medecine_id;
            $medecine-> medecineName =$request -> medecineName;
            $medecine-> pharmacy_id =$request -> pharmacy_id;
            $medecine->save();
            return response()->json(['message'=>'medecine saved successfully'],200);
        
    }
}
