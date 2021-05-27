@extends('layouts.template')

@section('content')
<h1>&nbsp Editar Llibre nº{{$id}}</h1>
<div class="Row">
<div class="col-1">
</div>
<div class="col-5">
<form method="POST" action="{{route('edit', ['id'=>$id])}} ">
	@csrf
	<div class="form-group">
	  <label for="titol">Títol</label>
	  <input type="text" class="form-control" id="titol" name="titol" placeholder="Edita Títol">
	  @error('titol')
			<small class="text-danger">
				*Títol requerit
			</small>
		@enderror
	</div>

	<div class="form-group">
	  <label for="autor">Autor</label>
	  <input type="text" class="form-control" id="autor" name="autor" placeholder="Edita Autor">
	  @error('autor')
		<small class="text-danger">
			*Autor requerit
		</small>
	@enderror
	</div>

	<div class="form-group">
	  <label for="any">Any Publicacio</label>
	  <input type="number" class="form-control" id="any" name="any" value="2020">
	  @error('any')
		<small class="text-danger">
			*Any requerit
		</small>
		@enderror
	</div>

	<div class="form-group">
		<label for="genere">Gènere</label>
		<select type="number" class="form-control" id="genere" name="genere">
			<option>Romántica</option>
			  <option>Terror</option>
			 <option>Histórica</option>
			<option>Misteri</option>
			<option>Fantasia</option>
			 <option>No-Ficció</option>
			<option>Altres</option>
		</select>
		@error('genere')
		<small class="text-danger">
			*Gènere requerit
		</small>
		@enderror
	  </div>

	  <button type="submit" class="btn btn-primary">Edita</button>
  </form>
</div>
</div>
@endsection