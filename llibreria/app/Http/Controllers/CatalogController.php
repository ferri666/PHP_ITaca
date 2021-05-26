<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog()
    {
        return view('catalog.index');
    }

    public function show($id)
    {
        return view('catalog.show', ['id'=>$id]);
    }

    public function createForm()
    {
        return view('catalog.create');
    }

    public function editForm($id)
    {
        return view('catalog.edit', ['id'=>$id]);
    }

    public function create(Request $request)
    {
       $request -> validate([
           'titol' => 'required',
           'autor' => 'required',
           'any' => 'required',
           'genere' => 'required'
       ]);
       
        return view ('create');
    }

    public function edit(Request $request, $id)
    {
        $request -> validate([
            'titol' => 'required',
            'autor' => 'required',
            'any' => 'required',
            'genere' => 'required'
        ]);
        return view('catalog.edit', ['id'=>$id]);
    }
}
