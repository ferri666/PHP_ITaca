@extends('layouts.template')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between" >
  <div class="collapse navbar-collapse" id="navbarNav">
        @if(!Request::hasCookie('name'))
            <a class="nav-item nav-link" href="{{route('loginForm')}}">Entrar</a>
            <a class="nav-item nav-link" href="{{route('registerForm')}}">Registrar</a>
        @endif
        @if(Request::hasCookie('name'))
            <a class="nav-item nav-link" href="#"><?php echo Cookie::get('name')?></a>
            <a class="nav-item nav-link" href="{{route('index')}}">Empleats</a>
            <button class="nav-item btn-outline-danger" type="button" ><a href="{{route('logout')}}">Surt</a></button>
        @endif
            <a class="nav-item nav-link" href="#">Info</a>
  </div>
    </nav>

@endsection