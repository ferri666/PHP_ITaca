@extends('layouts.template')
@section('content')
<a class="btn btn-primary" href="{{route('gameCreate')}}">Create</a>
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
    @foreach ($games as $row)
    <tr>
    <th>{{ $row->id }}</th>
    <td><a href="{{route('gameShow', $row->id)}}">{{ $row->description }}</a></td>
    <td>{{ $row->date_game }}</td>
    <td>{{ $row->status }}</td>
    <td>{{ $row->team1_points }}-{{ $row->team2_points }}</td>
    @endforeach
    </tbody>
</table>
@endsection