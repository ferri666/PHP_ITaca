@extends('layouts.template')
@section('content')
<a class="btn btn-success col-3" href="{{route('team.create')}}">Create</a>
<table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Team Name</th>
    <th scope="col">Race</th>
    <th scope="col">Team Manager</th>
    <th scope="col">Wins</th>
    <th scope="col">Losses</th>
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