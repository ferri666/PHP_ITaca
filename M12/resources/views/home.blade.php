@extends('layouts.template')

@section('content')

@if (Route::has('login'))
                <nav class="navbar navbar-dark bg-dark">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else

                        <a href="{{ route('login') }}" class="nav-link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                    @endauth
                    </div>
            @endif

@endsection