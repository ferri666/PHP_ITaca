@extends('layouts.template')

@section('content')

<h1>Resultats Busqueda</h1>
<table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nom</th>
    <th scope="col">Feina</th>
    <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($empleats as $empleat)
    <tr>
    <th>{{ $empleat->id }}</th>
    <td>{{ $empleat->nom }}</td>
    <td>{{ $empleat->feina }}</td>
    <td>{{ $empleat->email }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection