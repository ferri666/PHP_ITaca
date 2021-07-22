@extends('layouts.template')
@section('content')
<div class="row col-9">
@can('update', $team)
<a class="btn btn-success col-3" href="{{route('teams.edit', compact('team'))}}">Edit</a>
@endcan
@can('delete', $team)
<button  class="btn btn-danger col-3" data-toggle="modal" data-target="#Delete">Delete</button>
@endcan
<a class="btn btn-success col-3" href="{{route('gameCreate', $team->id)}}">Match</a>


<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="DeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeleteLabel">Alert!</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
        ¡You are about to delete this Team! ¿Are you sure about this?
    </div>
    <div class="modal-footer">
<form action="{{route('teams.destroy', compact('team') )}}" method="POST">
    <button class="btn btn-danger"type="submit">Yes</button> 
    @method('DELETE')
    @csrf
</form>
<button class="btn btn-secondary" data-dismiss="modal">No</button> 
</div>
</div>
</div>
</div>


<table class="table">
    <tr>
    <th scope="col">Team Name:</th>
    <td>{{$team->name}}</td>
</tr>
<tr>
    <th scope="col">Team Race:</th>
    <td>{{ $team->race }}</td>
</tr>
<tr>
        <th scope="col">Wins:</th>
    <td>{{ $team->wins }}</td>
</tr>
<tr>
        <th scope="col">Losses:</th>
    <td>{{ $team->losses }}</td>
</tr>
<tr>
        <th scope="col">League Points:</th>
        <td>{{ $team->points }}</td>
    </tr>
<tr>
        <th scope="col">Total Points:</th>
        <td>{{ $team->total_points }}</td>
    </tr>
</table>

@endsection