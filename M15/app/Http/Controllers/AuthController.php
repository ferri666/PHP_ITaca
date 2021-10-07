<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
   public function login (Request $request) {
       $validator = Validator::make($request->only('email','password'), [
           'email'=>'required|email',
           'password' => 'required|min:6'
       ]);

       if ($validator->fails()){
       return response()->json([
           'success' => false,
           'error' => $validator->errors()
       ], 422);
       }

       $token = JWTAuth::attempt($request->only('email', 'password'));

       if ($token) {
           return response()->json([
               'success'=>true,
               'token' => $token,
               'user' => Auth::user()
           ], 200);
       } else {
        return response()->json([
            'success' => false,
            'error' => 'unauthorized'
        ], 401);
       }
   }

   public function logout () {
    $token = JWTAuth::getToken();

    try {
            JWTAuth::invalidate($token);
            return response()->json([
                'success' => 'true'
            ], 200);
    } catch (JWTException $ex) {
        return response()->json([
            'success' => 'false',
            'error' => 'failed logout'
        ], 422);
    }
}
}
