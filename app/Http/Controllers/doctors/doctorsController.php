<?php

namespace App\Http\Controllers\doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\doctor;


class doctorsController extends Controller
{
    function register_doctor(Request $request){
        
        $newUser = doctor::create([
            'doctorName' => $request['doctorName'],
            'address' => $request['address'],
            'speciality' => $request['speciality'],
            'doctorContact' => $request['doctorContact'],
            'hospital_id' => $request['hospital_id'],
            'DOB' => $request['DOB'],
            'email' => $request['email'],
            'username' => $request['username'],
            'password'=> Hash::make($request['password']),
        ])->save();
        return response()->json('doctor registered successfully');
    }

    function login_doctors(Request $request){
            $request-> validate([
                'email'=>['required','max:50','min:10'],
                'password'=>['required','max:50','min:2']
            ]) ;   
            $doct=doctor::where('email',$request->email)->first();
            if (!$doct) {
                return response(['message'=>'User Not exist'],401);
            } 
            if (Hash::check($doct,$request)) {
                
                return response(['message'=>'Data not Match'],401);
            }
            $token = $doct->createToken('king')->plainTextToken;
            return response(['user'=>$doct , 'token'=>$token],201);
            //      return $user();             
    }
    
       public function logout(Request $request){
         auth()->user()->tokens()->delete();
            return response(['message'=>'logout successfully'],200);
        }
        
            
    }

