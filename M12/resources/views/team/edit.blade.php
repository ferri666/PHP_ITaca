@extends('layouts.template')

@section('content')

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
            <option value="Dwarves">Dwarves</option>
            <option value="Elfs">Elfs</option>
            <option value="Goblins">Goblins</option>
            <option value="Humans">Humans</option>
            <option value="Orcs">Orcs</option>
            <option value="Zombies">Zombies</option>
        </select>
		  @error('race')
		<small class="text-danger">
			*Race required
		</small>
	@enderror
		</div>
		
        <div class="form-group">
		  <label for="manager"><b>Team Manager</b></label>
		  <input type="text" class="form-control" id="manager" name="manager" value="{{$team->manager}}">
		  @error('manager')
		<small class="text-danger">
			*Manager required
		</small>
	@enderror
	</div>
		 <button type="submit" class="btn btn-primary">Edit</button>
		@method('PUT')
	  </form>
	</div>
</div>
@endsection