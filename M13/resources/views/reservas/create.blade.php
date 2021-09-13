@extends('layouts.template')

@section ('content')

<div class="card">
    <div class="card-header">
        <strong>Nueva Reserva</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('reservas.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="fecha_entrada" class=" form-control-label">Fecha Entrada</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" class="form-control" id="fecha_entrada" name="fecha_entrada">
		             @error('fecha_entrada')
		        	<small class="text-danger">
				    *Error con la Fecha
			        </small>
		            @enderror
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="fecha_salida" class=" form-control-label">Fecha Salida</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" class="form-control" id="fecha_salida" name="fecha_salida">
		             @error('fecha_salida')
		        	<small class="text-danger">
				    *Error con la Fecha
			        </small>
		            @enderror
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="adultos" class=" form-control-label">Adultos</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="adultos" id="adultos" class="form-control">
                        <option value="0">Número de Adultos</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    @error('adultos')
                        <small class="text-danger">
                            *Adulto requerido
                        </small>
                    @enderror
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="menores" class=" form-control-label">Menores</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="menores" id="menores" class="form-control">
                        <option value="#">Número de Menores</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    @error('menores')
                        <small class="text-danger">
                            *Indíque si lleva menores o no
                        </small>
                    @enderror
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Animales</label>
                </div>
                <div class="col col-md-9">
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="checkbox">
                                <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="animales" name="animals" value="1" class="form-check-input">Animales
                                </label>
                            </div>
                        </div>
                    </div>
                @error('animales')
                <small class="text-danger">
                    *Indíque si lleva animales o no
                </small>
                 @enderror
            </div>
            
    <div class="form-group">
		  <button type="submit" class="btn btn-primary">Crear</button>
        </div>
	  </form>
    </div>
    </div>
    
@endsection