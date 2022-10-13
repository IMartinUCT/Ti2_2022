<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gastos;


class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $datos = Gastos::all();
       return view("index", compact("datos"));
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
        $Gastos = new Gastos();
        $Gastos->Vehiculos= $request->Vehiculos;
        $Gastos->Combustible= $request->Combustible;
        $Gastos->Sueldo= $request->Sueldo;
        $Gastos->Capital= $request->Capital;

        $Gastos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Gastos= Gastos::findOrFail($request->id);
        $Gastos->Vehiculos= $request->Vehiculos;
        $Gastos->Combustible= $request->Combustible;
        $Gastos->Sueldo= $request->Sueldo;
        $Gastos->Capital= $request->Capital;

        $Gastos->save();
        return $Gastos;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Gastos= Gastos::destroy($request->id);
        return $Gastos;
    }
}
