<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }
}
