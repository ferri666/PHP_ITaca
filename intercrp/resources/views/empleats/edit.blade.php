@extends('layouts.template')

@section('content')

<h1>&nbsp Edita Empleat</h1>
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('update', $empleat->id)}}">
	@csrf
		<div class="form-group">
		  <label for="nom"><b>Nom</b></label>
		  <input type="text" class="form-control" id="nom" name="nom" value="{{$empleat->nom}}">
		  @error('nom')
			<small class="text-danger">
				*Nom requerit
			</small>
		@enderror
		</div>
		

		<div class="form-group">
		  <label for="feina"><b>Feina</b></label>
		  <input type="text" class="form-control" id="feina" name="feina" value="{{$empleat->feina}}">
		  @error('feina')
		<small class="text-danger">
			*Feina requerida
		</small>
	@enderror
		</div>
		
        <div class="form-group">
		  <label for="email"><b>Email</b></label>
		  <input type="text" class="form-control" id="email" name="email" value="{{$empleat->email}}">
		  @error('email')
		<small class="text-danger">
			*Email requerit
		</small>
	@enderror
	</div>
		 <button type="submit" class="btn btn-primary">Edita</button>
		@method('PUT')
	  </form>
	</div>
</div>
@endsection