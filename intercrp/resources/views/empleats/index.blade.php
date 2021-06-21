@extends('layouts.template')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between" >
  @if(Request::hasCookie('name'))
  <a class="nav-item nav-link" href="#"><?php echo Cookie::get('name')?></a>
  <button class="nav-item btn-outline-danger" type="button" ><a href="{{route('logout')}}">Surt</a></button>
  @endif
        <a class="nav-item nav-link" href="{{route('create')}}">Crear</a>
      <form method="POST" class="nav-item form-inline" action="{{route('buscar')}}">
        <input class="form-control" id="busq" name="busq" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
        @csrf
      </form>
</nav>
<table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nom</th>
    <th scope="col">Feina</th>
    <th scope="col">Email</th>
    <th scope="col">Accions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($empleats as $empleat)
    <tr>
    <th>{{ $empleat->id }}</th>
    <td>{{ $empleat->nom }}</td>
    <td>{{ $empleat->feina }}</td>
    <td>{{ $empleat->email }}</td>
    <td><a class="btn btn-primary" title="Edita Empleat" href="{{route('edit', $empleat->id)}}">Edita <i class="fas fa-pen-alt"></i></a>
    <form action="{{route('destroy', $empleat->id )}}" method="POST">
        <button class="btn btn-danger"type="submit" class="btn btn-primary">Elimina</button> 
        @method('DELETE')
        @csrf
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection