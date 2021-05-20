<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BumboController extends Controller
{
    public function __invoke()
    {
        return view('bumbo');
    }


}
