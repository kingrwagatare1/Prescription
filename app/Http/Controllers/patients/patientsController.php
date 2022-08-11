<?php

namespace App\Http\Controllers\patients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;
use App\Models\insurance;

class patientsController extends Controller
{
    // function patient(){
    //     $patients = Patient::all();
    //     //return response()->json(['message'=>'saved successfully'],200);
    // }
   
        function register_patient(Request $request){
        
            $newUser = Patient::create([
                'patient_id' => $request['patient_id'],
                'patientName' => $request['patientName'],
                'DOB' => $request['DOB'],
                'contact' => $request['contact'],
                'email' => $request['email'],
                'insurance_id' => $request['insurance_id'],
                'pharmacies_id'=> $request['pharmacies_id'],
                'password'=> Hash::make($request['password']),
            ])->save();
            return response()->json('patient registered successfully');
        }
    
        function login_patient(Request $request){
                $request-> validate([
                    'email'=>['required','max:50','min:4'],
                    'password'=>['required','max:50','min:4']
                ]) ;   
                $patient=Patient::where('email',$request->email)->first();
                if (!$patient) {
                    return response(['message'=>'User Not exist'],401);
                } 
                if (Hash::check($patient,$request)) {
                    
                    return response(['message'=>'Data not Match'],401);
                }
                $token = $patient->createToken('king')->plainTextToken;
                return response(['user'=>$patient , 'token'=>$token],201);
                //      return $user();             
        }
        
           public function logout(Request $request){
             auth()->user()->tokens()->delete();
                return response(['message'=>'logout successfully'],200);
            }
            

}
