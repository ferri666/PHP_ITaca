@extends('layouts.template')
@section('content')

<h1>&nbsp New Team</h1>

<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('teamStore')}}">
	@csrf
    <div class="form-group">
		  <label for="name"><b>Name</b></label>
		  <input type="text" class="form-control" id="name" name="name" placeholder="Team Name">
		  @error('name')
			<small class="text-danger">
				*Name required
			</small>
		@enderror
		</div>

        <div class="form-group">
            <label for="race"><b>Race</b></label>
            <select class="form-control" id="race" name="race">
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
		 

		  <button type="submit" class="btn btn-primary">Input</button>
	  </form>
	</div>
	</div>
</div>
@endsection