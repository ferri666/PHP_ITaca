@extends('layouts.template')

@section('content')
<h1>&nbsp Restaurar Password</h1>
<div class="Row">
	<div class="col-1">
	</div>
	<div class="col-5">
<form method="POST" action="{{route('recPassw')}}">
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

		  <button type="submit" class="btn btn-primary">Entrar</button>
	  </form>
	</div>
</div>
@endsection