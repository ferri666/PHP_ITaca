@extends('layouts.template')


@section('content')

<?php
$razas = ['Dwarves', 'Elfs', 'Goblins', 'Humans', 'Orcs', 'Zombies']
?>

<h1>&nbsp Team Edit</h1>
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('teamUpdate', $team->id)}}">
	@csrf
		<div class="form-group">
		  <label for="Name"><b>Team Name</b></label>
		  <input type="text" class="form-control" id="name" name="name" value="{{$team->name}}">
		  @error('Name')
			<small class="text-danger">
				*Name required
			</small>
		@enderror
		</div>
		

		<div class="form-group">
		  <label for="race"><b>Race</b></label>
		  <select type="text" class="form-control" id="race" name="race">
            @foreach ($razas as $raza)

			<option value="{{$raza}}" @if ($raza==$team->race)
				selected
			@endif>{{$raza}}</option>

			@endforeach
        </select>
		  @error('race')
		<small class="text-danger">
			*Race required
		</small>
	@enderror
		</div>
	
		 <button type="submit" class="btn btn-primary">Edit</button>
		@method('PUT')
	  </form>
	</div>
</div>
@endsection