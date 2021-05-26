@extends('layouts.template')

@section('content')
<h1>&nbsp Nou Llibre</h1>
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="request/loginRequest.php">
		<div class="form-group">
		  <label for="name">Nom Usuari</label>
		  <input type="text" class="form-control" id="name" name="name" value="Nom Usuari">
		</div>

		<div class="form-group">
		  <label for="passw">Contrasenya</label>
		  <input type="password" class="form-control" id="passw" name="passw" value="Contrasenya">
		</div>

		  <button type="submit" class="btn btn-primary">Insereix</button>
	  </form>
	</div>
</div>
@endsection