<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleat;

class EmpleatController extends Controller
{
    public function index(){

        $empleats = Empleat::all();

        return view('empleats.index', compact('empleats'));
    }

    public function create(){

        return view('empleats.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'feina'=>'required'
        ]);

       Empleat::create($request->all());
       
      return back()->with('status','Empleat Creat Correctament');
    }

    public function show($id){

        try{
        $empleat = Empleat::findOrFail($id);
        } catch (\Exception $exception) {
            return view ('errors.noempleat');
        }

        return view('empleats.show', compact('empleat'));
    }

    public function edit($id){

        try{
            $empleat = Empleat::findOrFail($id);
            } catch (\Exception $exception) {
                return view ('errors.noempleat');
            }

        return view('empleats.edit', compact('empleat'));
    }

    public function update(Request $request, $id){
        
        try{
            $empleat = Empleat::findOrFail($id);
            } catch (\Exception $exception) {
                return view ('errors.noempleat');
            }

        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'feina'=>'required'
        ]);

       Empleat::findOrFail($id)->update($request->all());
       
      return back()->with('status','Empleat Editat Correctament');
    }

    public function destroy($id){
        Empleat::findOrFail($id)->delete();

        return back()->with('status','Empleat Eliminat Correctament');
    }

    

    public function buscar(Request $request){

        $busq = $request->input('busq');
        $empleats = Empleat::where('feina', $busq)->get();
        return view('empleats.buscar', compact('empleats'));
    }
}
