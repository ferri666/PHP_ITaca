<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use App\Models\User;
//use Illuminate\Http\Request;
use App\Http\Requests\ValidarReserva;

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

        $usuarios = User::all();

        return view('reservas.show', compact('reserva', 'usuarios'));
    }

    public function edit(Reserva $reserva){

    return view('reservas.edit', compact('reserva'));
    }

    public function store(ValidarReserva $request){

        $request['user_id']=User::find(1)->id;
        
        Reserva::create($request->all());


       
      return back()->with('status','Su Reserva Ha Sido Añadida');
    }

    public function update(ValidarReserva $request, Reserva $reserva){
        

       $reserva->update($request->all());
       
      return back()->with('status','Reserva Cambiada');
    }

    public function destroy(Reserva $reserva) {
        $reserva->delete();

        return redirect()->route('reservas.index')->with('status','reserva Deleted');
    }
}
