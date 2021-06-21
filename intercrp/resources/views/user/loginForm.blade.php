@extends('layouts.template')

@section('content')
<h1>&nbsp Entrada Usuari</h1>
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('login')}}">
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
		  <label for="password">Contrasenya</label>
		  <input type="password" class="form-control" id="password" name="password" placeholder="Contrasenya">
		  @error('password')
		  <small class="text-danger">
			  *Contrasenya incorrecta
		  </small>
	  		@enderror
		</div>

		  <button type="submit" class="btn btn-primary">Entrar</button>
	  </form>
      <a href="{{route('lostPasswForm')}}"><small>Has oblidat la contrasenya?</small></a>
	</div>
</div>
@endsection