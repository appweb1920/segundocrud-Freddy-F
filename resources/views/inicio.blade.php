@extends('layouts.baseMaterialize')

@section('container')
<div class="container center">
    <h2>Bienvenido al <br> Inventario de Refacciones</h2>
    
    <div class="row">
        <div class="col s5 left">
            <a href="/verRefacciones" class="grey-text text-darken-3 opInicio">
                <i class="large material-icons">home_repair_service</i><br>
                <h5>Ver refacciones existentes</h5>
            </a>
        </div>

        <div class="col s5 right">
            <a href="/nuevaRefaccion" class="grey-text text-darken-3 opInicio">
                <i class="large material-icons">add</i>
                <i class="large material-icons">build</i><br>
                <h5>Agregar refacciones al inventario</h5>
            </a>
        </div>
     
    </div>
</div>
@endsection