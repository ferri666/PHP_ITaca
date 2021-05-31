@extends('layouts.template')

@section('content')
<h1>&nbsp Restaurar Password</h1>
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('register')}}">
	@csrf
		<div class="form-group">
		  <label for="email">Email</label>
		  <input type="text" class="form-control" id="email" name="email" placeholder="Introdueix email">
		  @error('email')
		  <small class="text-danger">
			  *Email requerit
		  </small>
	  @enderror
		</div>

		<div class="form-group">
		  <label for="respuesta">Respon a la pregunta</label>
		  <input type="respuesta" class="form-control" id="respuesta" name="respuesta" placeholder="Quan sumen 2+2?">
		  @error('respuesta')
		  <small class="text-danger">
			  *Contesta la pregunta
		  </small>
	  		@enderror
		</div>

		  <button type="submit" class="btn btn-primary">Entrar</button>
	  </form>
	</div>
</div>
@endsection