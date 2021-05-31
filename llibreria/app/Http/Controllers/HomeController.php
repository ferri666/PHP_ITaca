<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('data');
    }

    public function __invoke()
    {
        return view('home');
    }
}
