@extends('layouts.template')

@section ('content')
<div class="card">
    <div class="card-header">
        <strong>Reserva nº {{ $reserva->id }}</strong>
    </div>
<table class="table">
    <tbody>
<tr>
    <th scope="col">Fecha entrada</th>
    <td>{{ $reserva->fecha_entrada }}</td>
</tr>
<tr>
    <th scope="col">Fecha salida</th>
    <td>{{ $reserva->fecha_salida }}</td>
</tr>
<tr>
    <th scope="col">Adultos</th>
    <td>{{ $reserva->adultos }}</td>
</tr>
<tr>
    <th scope="col">Menores</th>
    <td>{{ $reserva->menores }}</td>
</tr>
<tr>
    <th scope="col">Total Personas</th>
    <td>{{ $reserva->personas()}}</td>
</tr>
<tr>
    <th scope="col">Animales</th>
    <td>@if($reserva->animales)Sí@else No @endif</td>
</tr>
<tr>
    <th scope="col">Usuario</th>
    <td>{{ $usuarios[$reserva->user_id]->name}}</td>
</tr>
   

    </tbody>
</table>
</div>


<div class="row justify-content-end">
    <a class="btn btn-success col-2" href="{{route('reservas.create')}}">Nueva Reserva</a>
    <a class="btn btn-success col-2" href="{{route('reservas.edit', compact('reserva'))}}">Editar Reserva</a>
    <form action="{{route('reservas.destroy', compact('reserva') )}}" method="POST">
        <button class="btn btn-danger"type="submit">Eliminar Reserva</button> 
        @method('DELETE')
        @csrf
    </form>
</div>
   

@endsection