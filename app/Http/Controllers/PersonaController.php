<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Persona::all();
        return view("Personas.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Personas.create");
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
        "nombre"=>"required|max:20|min:3",
        "apellidoPaterno"=>"required|min:3|max:20",
        "apellidoMaterno"=>"required|min:3|max:20",
        "id_rango"=>"required",
      ],[],["name"=>"nombre","content"=>"contenido"]);

      Persona:: create([
        "nombre" =>$request->nombre,
        "apellidoPaterno" =>$request->apellidoPaterno,
        "apellidoMaterno" =>$request->apellidoMaterno,
        "id_rango" =>$request->id_rango,
        ]);
      return redirect()->route("registro_personas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $registro_persona)
    {
        return view("Personas.update",compact("registro_persona"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $registro_persona)
    {
      $request->validate([
        "nombre"=>"required|max:20|min:3",
        "apellidoPaterno"=>"required|min:3|max:20",
        "apellidoMaterno"=>"required|min:3|max:20",
        "id_rango"=>"required",
      ],[],["name"=>"nombre","content"=>"contenido"]);

      $registro_persona->update(["nombre"=>$request->nombre,
      "apellidoPaterno"=>$request->apellidoPaterno,
      "apellidoMaterno"=>$request->apellidoMaterno,
      "id_rango"=>$request->id_rango]);
      return redirect()->route("registro_personas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $registro_persona)
    {
        $registro_persona->delete();
        return redirect()->route("registro_personas.index");
    }
}
