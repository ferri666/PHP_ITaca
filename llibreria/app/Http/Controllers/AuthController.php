<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function logout()
    {
        $cookiename= \Cookie::forget('name');
        return response(redirect('/'))->cookie($cookiename);
    }

    public function login(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'passw' => 'required'
        ]);

        $name = $request->input('name');

        $cookiename = cookie('name', $name, 200);

        return response(redirect('/'))->cookie($cookiename);
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'passw' => 'required',
            'email' => 'required'
        ]);

        $name = $request->input('name');

        $cookiename = cookie('name', $name, 200);

        return response(redirect('/'))->cookie($cookiename);
    }

    public function fpsswdForm()
    {
        return view('auth.fpsswd');
    }

    public function fpsswd(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'respuesta' => 'required'
        ]);
        return view('auth.fpsswd');
    }

}
