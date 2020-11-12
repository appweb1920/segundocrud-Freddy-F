<?php

namespace App\Http\Controllers;

use App\piezasRefaccion;
use Illuminate\Http\Request;

class piezasRefaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refacciones = piezasRefaccion::all();
        return view('/listaDeRefacciones')->with('listaRefacciones', $refacciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refaccion = new piezasRefaccion();
        $refaccion->nombre = $request->nombre;
        $refaccion->descripcion = $request->descripcion;
        $refaccion->piezasDisponibles = $request->piezasDisponibles;
        $refaccion->costo = $request->costo;
        $refaccion->save();
        return redirect("/inicio");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\piezasRefaccion  $piezasRefaccion
     * @return \Illuminate\Http\Response
     */
    public function show(piezasRefaccion $piezasRefaccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\piezasRefaccion  $piezasRefaccion
     * @return \Illuminate\Http\Response
     */
    public function edit(piezasRefaccion $piezasRefaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\piezasRefaccion  $piezasRefaccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, piezasRefaccion $piezasRefaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\piezasRefaccion  $piezasRefaccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(piezasRefaccion $piezasRefaccion)
    {
        //
    }
}
