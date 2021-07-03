@extends('layouts.template')
@section('content')
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('gameStore')}}">
	@csrf
	<div class="form-group">
		<label for="date_game"><b>Date of the Match</b></label>
		<input type="date" class="form-control" id="date_game" name="date_game">
		@error('date_game')
	  <small class="text-danger">
		  *Please select a valid date
	  </small>
		  @enderror
	</div>
    <div class="form-group">


		  <label for="description"><b>Description</b></label>
		  <input type="text" class="form-control" id="description" name="description" placeholder="Description">
		</div>
		@error('description')
		<small class="text-danger">
			*Description required
		</small>
	@enderror

	<div class="form-group">
		<label for="team1_id"><b>Against</b></label>
		<select class="form-control" id="team1_id" name="team1_id">
			@foreach ($teams as $opt)
				<option value="{{$opt->id}}">{{$opt->name}}</option>
			@endforeach
		</select>

		@error('team1_id')
		  <small class="text-danger">
			  *Team required
		  </small>
	  @enderror
		</div>

		<div class="form-group">
			<label for="team2_id"><b>Against</b></label>
			<select class="form-control" id="team2_id" name="team2_id">
				@foreach ($teams as $opt)
					<option value="{{$opt->id}}">{{$opt->name}}</option>
				@endforeach
			</select>
	
			@error('team2_id')
			  <small class="text-danger">
				  *Choose a different Team
			  </small>
		  @enderror
			</div>
    <div class="form-group">
	
		 

		  <button type="submit" class="btn btn-primary">Input</button>
	  </form>
	</div>
	</div>
</div>
@endsection