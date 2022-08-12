<?php

namespace App\Http\Controllers\Pharmacist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\pharmacist;

class pharmacistController extends Controller
{
    function register_pharmacist(Request $request){
        
        $newUser = pharmacist::create([
            'pharmacistName' => $request['pharmacistName'],
            'DOB' => $request['DOB'],
            'email' => $request['email'],
            'contact' => $request['contact'],
            'pharmacy_id' => $request['pharmacy_id'],
            'password'=> Hash::make($request['password']),
        ])->save();
        return response()->json('pharmacist registered successfully');
    }

    function login_pharmacist(Request $request){
            $request-> validate([
                'email'=>['required','max:50','min:4'],
                'password'=>['required','max:50','min:4']
            ]) ;   
            $pharmacist=pharmacist::where('email',$request->email)->first();
            if (!$pharmacist) {
                return response(['message'=>'User Not exist'],401);
            } 
            if (Hash::check($pharmacist,$request)) {
                
                return response(['message'=>'Data not Match'],401);
            }
            $token = $pharmacist->createToken('kenny')->plainTextToken;

           // return $token;
           return response(['user'=>$pharmacist , 'token'=>$token],201);
                        
    }
    
       public function logout(Request $request){
         auth()->user()->tokens()->delete();
            return response(['message'=>'logout successfully'],200);
        }
}
