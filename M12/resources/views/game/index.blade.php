@extends('layouts.template')
@section('content')
<a class="btn btn-primary" href="{{route('gameCreate')}}">Create</a>
<table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Description</th>
    <th scope="col">Team 1</th>
    <th scope="col">Team 2</th>
    <th scope="col">Date</th>
    <th scope="col">Status</th>
    <th scope="col">Points</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($teams as $row)
    <tr>
    <th>{{ $row->id }}</th>
    <td><a href="{{route('teamShow', $row->id)}}">{{ $row->name }}</a></td>
    <td>{{ $row->race }}</td>
    <td>{{ $row->manager }}</td>
    <td>{{ $row->wins }}</td>
    <td>{{ $row->losses }}</td>
    @endforeach
    </tbody>
</table>
@endsection