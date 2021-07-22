@extends('layouts.template')
@section('content')
<a class="btn btn-success col-3" href="{{route('teams.create')}}">Create Team</a>
<table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Team Name</th>
    <th scope="col">Race</th>
    <th scope="col">Wins</th>
    <th scope="col">Losses</th>
    <th scope="col">Points</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach ($teams as $team)
    @can ('view', $team)
    <tr>
    <th>{{ $team->id }}</th>
    <td>@can('view', $team)<a href="{{route('teams.show', $team->id)}}">@endcan{{ $team->name }}</a></td>
    <td>{{ $team->race }}</td>
    <td>{{ $team->wins }}</td>
    <td>{{ $team->losses }}</td>
    <td>{{ $team->total_points }}</td>
    @endcan
    @endforeach

    </tbody>
</table>
@endsection