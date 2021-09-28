<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function login (Request $request) {

    }

    public function register (Request $request) {
        $this->validate($request, [
            'name' => 'requiered|min:4',
            'email' => 'requiered|email',
            'password'=> 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('Personal Acces Token')->accessToken;


        return response()->json(['token'=> $token], 200);
    }

    public function logout (Request $request) {

    }

}
