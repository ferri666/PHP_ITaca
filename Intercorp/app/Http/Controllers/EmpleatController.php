<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleatController extends Controller
{
    public function index(){
        return view('empleat.index');
    }

    public function create(){
        return view('empleat.index');
    }

    public function show($id){

        return view('empleat.show', compact($id));
    }

    public function edit($id){

        return view('empleat.show', compact($id));
    }

    public function delete($id){

        return view('empleat.show', compact($id));
    }
}
