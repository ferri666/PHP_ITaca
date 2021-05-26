<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function logout()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'passw' => 'required'
        ]);
        return view('auth.login');
    }

}
