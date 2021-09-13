@extends('layouts.template')

@section ('content')

<div class="card">
    <div class="card-header">
        <strong>Editar Reserva</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('reservas.update', compact('reserva'))}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method ('PUT')

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="fecha_entrada" class=" form-control-label">Fecha Entrada</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="date" class="form-control" id="fecha_entrada" name="fecha_entrada" value="{{$reserva->fecha_entrada}}">
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
                    <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" value="{{$reserva->fecha_salida}}">
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
                        @for ($i=1; $i<5; $i++) <option value="{{$i}}" @if($reserva->adultos==$i) selected @endif>{{$i}}</option>
                        @endfor
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
                        @for ($i=0; $i<5; $i++) <option value="{{$i}}" @if($reserva->menores==$i) selected @endif>{{$i}}</option>
                        @endfor
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
                    <select name="animales" id="animales" class="form-control">
                        <option value="1" @if($reserva->animales) selected @endif> Sí</option>
                        <option value="0" @if(!$reserva->animales) selected @endif>No</option>
                    </select>
                @error('animales')
                <small class="text-danger">
                    *Indíque si lleva animales o no
                </small>
                 @enderror
            </div>
            
    <div class="form-group">
		  <button type="submit" class="btn btn-primary">Editar</button>
        </div>
	  </form>
    </div>
    </div>
@endsection