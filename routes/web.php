<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/verRefacciones', function () {
    return view('listaDeRefacciones');
});

Route::get('/nuevaRefaccion', function () {
    return view('registraRefaccion');
});
Route::post('/nuevaRefaccion', "TODO:");

/* =========================================
    TODO: EVALUACION *PARCIAL* PARA SEGUNDO PARCIAL
    -[X] Crear un proyecto de Laravel con la versión 7
    -[X] Crear una migración para la tabla de Piezas de una refaccionaria:
        -Nombre, Descripción, Número de piezas, Costo por pieza
    -[] Crear un controlador de tipo “resource”
    -[] Definir las rutas del controlador
    -[] Hacer las vistas necesarias para hacer un funcionamiento CRUD
        -[] Listado de los objetos
        -[] Creación de un nuevo registro
        -[] Actualización de campos
        -[] Eliminación de registro
    -[X] Subir el código en el repositorio indicado por el profesor


========================================= */