@extends('layouts.template')

@section('title', 'Who Am I?')
    @section('content')
        <img src="https://pbs.twimg.com/media/Di6pwY1U0AEaeTB.png" width="254px" height="348px">
        <h1>You are {{$name}}</h1>
        
    @endsection