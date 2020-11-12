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

Route::get('/verRefacciones', "piezasRefaccionController@index");
Route::get('/nuevaRefaccion', function () {
    return view('registraRefaccion');
});
Route::post('/nuevaRefaccion', "piezasRefaccionController@store");
Route::get('/editarRegistro/{id}', "piezasRefaccionController@edit");
Route::post('/editarRegistro', "piezasRefaccionController@update");
Route::get('/borraRegistro/{id}', "piezasRefaccionController@destroy");

/* =========================================
    TODO: EVALUACION *PARCIAL* PARA SEGUNDO PARCIAL
    -[X] Crear un proyecto de Laravel con la versión 7
    -[X] Crear una migración para la tabla de Piezas de una refaccionaria:
        -Nombre, Descripción, Número de piezas, Costo por pieza
    -[X] Crear un controlador de tipo “resource”
    -[X] Definir las rutas del controlador
    -[X] Hacer las vistas necesarias para hacer un funcionamiento CRUD
        -[X] Listado de los objetos
        -[X] Creación de un nuevo registro
        -[X] Actualización de campos
        -[X] Eliminación de registro
    -[X] Subir el código en el repositorio indicado por el profesor


========================================= */