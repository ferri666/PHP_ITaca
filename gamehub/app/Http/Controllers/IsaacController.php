<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IsaacController extends Controller
{
    public function basement()
    {
        return view('isaac.basement');
    }

    public function whoami($name)
    {
        return view('isaac.whoami', ['name' => $name]);
    }
}
