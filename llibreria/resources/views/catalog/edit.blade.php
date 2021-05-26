@extends('layouts.template')

@section('content')
<h1>&nbsp Editar Llibre</h1>
<div class="Row">
<div class="col-1">
</div>
<div class="col-5">
<form method="POST" action="request/editRequest.php">
	<div class="form-group">
	  <label for="nom">Títol</label>
	  <input type="text" class="form-control" id="nom" name="nom" value="Edita Títol">
	</div>

	<div class="form-group">
	  <label for="autor">Autor</label>
	  <input type="text" class="form-control" id="autor" name="autor" value="Edita Autor">
	</div>

	<div class="form-group">
	  <label for="any">Any Publicacio</label>
	  <input type="number" class="form-control" id="any" name="any" value="2020">
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
	  </div>

	  <button type="submit" class="btn btn-primary">Insereix</button>
  </form>
</div>
</div>
@endsection