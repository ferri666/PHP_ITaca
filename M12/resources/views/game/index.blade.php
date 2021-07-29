@extends('layouts.template')
@section('content')
<table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Description</th>
    <th scope="col">Date</th>
    <th scope="col">Status</th>
    <th scope="col">Points</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($games as $game)
    @can ('view', $game)
    <tr>
    <th>{{ $game->id }}</th>
    <td><a href="{{route('games.show', compact('game'))}}">{{ $game->description }}</a></td>
    <td>{{ $game->date_game }}</td>
    <td>{{ $game->status }}</td>
    <td>{{ $game->team1_points }}-{{ $game->team2_points }}</td>
    @endcan
    @endforeach
    </tbody>
</table>
<div class="row justify-content-end">
<a class="btn btn-primary" href="{{route('games.create')}}">New Game</a>
</div>
@endsection