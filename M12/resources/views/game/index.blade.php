@extends('layouts.template')
@section('content')
<a class="btn btn-primary" href="{{route('gameCreate')}}">Create Game</a>
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
    <tr>
    <th>{{ $game->id }}</th>
    <td><a href="{{route('gameShow', compact('game'))}}">{{ $game->description }}</a></td>
    <td>{{ $game->date_game }}</td>
    <td>{{ $game->status }}</td>
    <td>{{ $game->team1_points }}-{{ $game->team2_points }}</td>
    @endforeach
    </tbody>
</table>
@endsection