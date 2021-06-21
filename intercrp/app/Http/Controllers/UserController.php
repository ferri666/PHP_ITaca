<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginForm () {
        return view ('user.loginForm');
    }

    public function registerForm () {
        return view ('user.regisForm');
    }

    public function lostPasswForm () {
        return view ('user.lostPasswForm');
    }

    public function login (Request $request) {
        $request -> validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $name = $request->input('name');

        $cookieuser = cookie('name', $name, 200);

        return redirect('/empleats')->cookie($cookieuser);
    }

    public function register (Request $request) {
        $request -> validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required'
        ]);

        $name = $request->input('name');

        $cookieuser = cookie('name', $name, 200);

        return redirect('/empleats')->cookie($cookieuser);
    }

    public function recPassw (Request $request) {
        $request -> validate([
            'email' => 'required',
        ]);

        

        return redirect('/')->with('status','Enviat Recuperació Contrasenya');

    }


    public function logout()
    {
        $cookiename= \Cookie::forget('name');
        return redirect('/')->cookie($cookiename);
    }

}
