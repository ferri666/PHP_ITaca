@extends('layouts.template')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Reservas</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha entrada</th>
                        <th>Fecha salida</th>
                        <th class="text-right">Adultos</th>
                        <th class="text-right">Menores</th>
                        <th class="text-right">Animales</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservas as $reserva)
                    <tr>
                    <th><a>{{ $reserva->id }}</a></th>
                    <td>{{ $reserva->fecha_entrada }}</td>
                    <td>{{ $reserva->fecha_salida }}</td>
                    <td class="text-right">{{ $reserva->adultos }}</td>
                    <td class="text-right">{{ $reserva->menores }}</td>
                    <td class="text-right">@if($reserva->animales)Sí@else No @endif</td>
                    <td> <div class="table-data-feature">
                        <a href="{{route('reservas.show', compact('reserva'))}}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{route('reservas.edit', compact('reserva'))}}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                       </a>
                       <form action="{{route('reservas.destroy', compact('reserva') )}}" method="POST"><button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                            <i class="zmdi zmdi-delete"></i>
                        </button>@method('DELETE')
                        @csrf
                    </form>
                    </div></td>
                    <!--td></td-->
                    @endforeach
                    </tr>
                                </tbody>
                            </table>
        </div>
        </div>
    </div>    
<div class="row justify-content-end">
<a class="btn btn-success col-2" href="{{route('reservas.create')}}">Nueva Reserva</a>
</div>
@endsection