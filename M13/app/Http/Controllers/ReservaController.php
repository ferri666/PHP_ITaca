<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /*public function __construct() {

        $this->authorizeResource(Reserva::class, 'reserva'); 

    }*/

    public function index() {

        $reservas = Reserva::all();

        return view('reservas.index', compact('reservas'));
    }

    public function create(){
        return view('reservas.create');
    }

    public function show(Reserva $reserva){

        return view('reservas.show', compact('reserva'));
    }

    public function edit(Reserva $reserva){

    return view('reservas.edit', compact('reserva'));
    }

    public function store(Request $request){

        
        Reserva::create($request->all());


       
      return back()->with('status','Su Reserva Ha Sido Añadida');
    }

    public function update(Request $request, Reserva $reserva){
        

       $reserva->update($request->all());
       
      return back()->with('status','Reserva Cambiada');
    }

    public function destroy(Reserva $reserva) {
     // if(auth()->user()->can('delete', $reserva)) {

        $reserva->delete();

      //}

        return redirect()->route('reservas.index')->with('status','reserva Deleted');
    }
}
