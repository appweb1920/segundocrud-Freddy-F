@extends('layouts.baseMaterialize')

@section('container')
<div class="container center">
    <h3>Lista de refacciones</h3>

    @if(!isset($listaRefacciones) || is_null($listaRefacciones))
        <div class="row center">
            <h5>No hay refacciones registradas.</h5>
        </div>
    @else
        <table class="highlight center">
            <thead>
                <tr>
                    <th>Nombre de refacción</th>
                    <th>Descripcion</th>
                    <th>Piezas Disponibles</th>
                    <th>Costo por pieza</th>
                </tr>
            </thead>

            <tbody>
            @foreach($listaRefacciones as $refaccion)
                <tr>
                    <td>{{$refaccion->nombre}}</td>
                    <td>{{$refaccion->descripcion}}</td>
                    <td>{{$refaccion->piezasDisponibles}}</td>
                    <td>{{$refaccion->costo}}</td>
                    <td>
                        <a href="editarRegistro/{{$refaccion->id}}" class="waves-effect waves-light btn-small amber">Editar</a>
                        <a href="borraRegistro/{{$refaccion->id}}" class="waves-effect waves-light btn-small red darken-1">Borrar </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

</div>
@endsection