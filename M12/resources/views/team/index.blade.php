@extends('layouts.template')
@section('content')

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
    <td>@can('update', $team)<a href="{{route('teams.show', compact('team'))}}">@endcan{{ $team->name }}</a></td>
    <td>{{ $team->race }}</td>
    <td>{{ $team->wins }}</td>
    <td>{{ $team->losses }}</td>
    <td>{{ $team->total_points }}</td>
    @endcan
    @endforeach

    </tbody>
</table>
<div class="row justify-content-end">
<a class="btn btn-success col-1" href="{{route('teams.create')}}">New Team</a>
</div>
@endsection
