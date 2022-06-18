<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos=Socio::all();
      return view("socios.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("socios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        "matricula"=>"required|max:5|min:1|unique:socios",
        "nombre"=>"required|min:3|max:50|unique:socios",
        "telefono"=>"required|min:10|max:13|unique:socios",
        "direccion"=>"required|unique:socios",
      ],[],["name"=>"nombre","content"=>"contenido"]);

      Socio:: create([
        "matricula" =>$request->matricula,
        "nombre" =>$request->nombre,
        "telefono" =>$request->telefono,
        "direccion" =>$request->direccion,
        ]);
      return redirect()->route("socios.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function show(Socio $socio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function edit(Socio $socio)
    {
        return view('socios.update',compact("socio"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socio $socio)
    {
      $request->validate([
        "matricula"=>"required|max:5|min:1|unique:socios",
        "nombre"=>"required|min:3|max:50|unique:socios",
        "telefono"=>"required|min:10|max:13|unique:socios",
        "direccion"=>"required|unique:socios",
      ],[],["name"=>"nombre","content"=>"contenido"]);

      $socio->update(["matricula"=>$request->matricula,
      "nombre"=>$request->nombre,
      "telefono"=>$request->telefono,
      "direccion"=>$request->direccion]);
      return redirect()->route("socios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socio  $socio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Socio $socio)
    {
      $socio->delete();
      return redirect()->route("socios.index");
    }
}