@extends('layouts.template')
@section('content')
<div class="row">
@can('update', $team)
<a class="btn btn-success col-3" href="{{route('games.edit', $game->id)}}">Edit</a>
@endcan
@can('delete', $team)
<button  class="btn btn-danger col-3" data-toggle="modal" data-target="#Delete">Delete</button>
@endcan
</div>
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
        ¡You are about to delete this Game! ¿Are you sure about this?
    </div>
    <div class="modal-footer">
    <div class="row">
<form action="{{route('games.destroy', $game->id )}}" method="POST">
    <button class="btn btn-danger"type="submit">Yes</button> 
    @method('DELETE')
    @csrf
</form>
<button class="btn btn-secondary" data-dismiss="modal">No</button> 
</div></div>
</div>
</div>
</div>

<div class="row">
<div class="col-1">
</div>
<div class="col-8">




<table class="table">
    <tr>
    <th scope="col">Game Description:</th>
    <td>{{$game->description}}</td>
</tr>
<tr>
    <th scope="col">Status</th>
    <td>{{ $game->status }}</td>
</tr>
<tr>
        <th scope="col">Date</th>
    <td>{{ $game->date_game }}</td>
</tr>
<tr>
    <th scope="col">Team 1</th>
<td>{{ $team1->name }}</td>
<th> Score</th>
<td>{{ $game->team1_points }}</td>
</tr>
<tr>
    <th scope="col">Team 2</th>
<td>{{ $team2->name }}</td>
<th> Score</th>
<td>{{ $game->team2_points }}</td>
</tr>

</table>
</div>
</div>
@endsection