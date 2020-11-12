@extends('layouts.baseMaterialize')

@section('container')
<div class="container center">
    <h3>Agregar nueva refacción</h3>

    <form action="nuevaRefaccion" method="post" class="container">
        @csrf
        <div class="row center">
            <div class="input-field  s5 center">
                <i class="material-icons prefix">edit</i>
                <input id="nombre" name="nombre" type="text" class="validate" required>
                <label for="nombre">Nombre de la refacción</label>
            </div>
            <div class="input-field row s5 center">
                <i class="material-icons prefix">description</i>
                <input id="descripcion" name="descripcion" type="text" class="validate" required>
                <label for="descripcion">Descripción de refacción</label>
            </div>
            <div class="input-field row s5 center">
                <i class="material-icons prefix">filter_9_plus</i>
                <input id="piezasDisponibles" name="piezasDisponibles" type="number" class="validate" min="0" step="1" required>
                <label for="piezasDisponibles">Cantidad de piezas disponibles</label>
            </div>
            <div class="input-field row s5 center">
                <i class="material-icons prefix">attach_money</i>
                <input id="costo" name="costo" type="number" class="validate" min="0" step="any" required>
                <label for="costo">Costo por pieza <b>$</b></label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Registrar refacción</button>
    </form>
</div>
@endsection