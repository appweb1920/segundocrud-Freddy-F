<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class piezasRefaccion extends Model
{
    protected $table = "piezasDeRefaccion";
    protected $fillable = ["nombre","descripcion","piezasDisponibles","costo"];
}
