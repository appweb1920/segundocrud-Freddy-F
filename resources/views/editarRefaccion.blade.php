@extends('layouts.baseMaterialize')

@section('container')
<div class="container center">
    
    @isset($piezasRefaccion)
    <h3>Edita registro de refacciones</h3>
    <form action="/editarRegistro" method="post" class="container">
        @csrf
        <div class="row center">
            <div class="input-field  s5 center">
                <i class="material-icons prefix">edit</i>
                <input id="nombre" name="nombre" type="text" class="validate" required
                    value="{{$piezasRefaccion->nombre}}">
                <label for="nombre">Nombre de la refacción</label>
            </div>
            <div class="input-field row s5 center">
                <i class="material-icons prefix">description</i>
                <input id="descripcion" name="descripcion" type="text" class="validate" required
                    value="{{$piezasRefaccion->descripcion}}">
                <label for="descripcion">Descripción de refacción</label>
            </div>
            <div class="input-field row s5 center">
                <i class="material-icons prefix">filter_9_plus</i>
                <input id="piezasDisponibles" name="piezasDisponibles" type="number" class="validate" 
                    min="0" step="1" required value="{{$piezasRefaccion->piezasDisponibles}}">
                <label for="piezasDisponibles">Cantidad de piezas disponibles</label>
            </div>
            <div class="input-field row s5 center">
                <i class="material-icons prefix">attach_money</i>
                <input id="costo" name="costo" type="number" class="validate" 
                    min="0" step="any" required value="{{$piezasRefaccion->costo}}">
                <label for="costo">Costo por pieza <b>$</b></label>
            </div>
            <input type="hidden" name="id" value="{{$piezasRefaccion->id}}">
        </div>
        
        <button type="submit" class="btn waves-effect waves-light">Guardar cambios</button>
    </form>
    @else
        <!-- Mensaje de error en caso de acceder sin indicar ID -->
        <h5>No se encuentró la refacción solicitada</h5>
    @endisset
</div>
@endsection