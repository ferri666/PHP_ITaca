@extends('layouts.template')

@section('content')
<h1>&nbsp Registre Usuari</h1>
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('register')}}">
	@csrf
		<div class="form-group">
		  <label for="name">Nom Usuari</label>
		  <input type="text" class="form-control" id="name" name="name" placeholder="Nom Usuari">
		  @error('name')
		  <small class="text-danger">
			  *Nom requerit
		  </small>
	  @enderror
		</div>

		<div class="form-group">
		  <label for="passw">Contrasenya</label>
		  <input type="password" class="form-control" id="passw" name="passw" placeholder="Contrasenya">
		  @error('passw')
		  <small class="text-danger">
			  *Contrasenya incorrecta
		  </small>
	  		@enderror
		</div>

		  <button type="submit" class="btn btn-primary">Entrar</button>
	  </form>
	</div>
</div>
@endsection