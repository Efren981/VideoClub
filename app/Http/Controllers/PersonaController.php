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
        "nombre_p"=>"required|max:5|min:1|unique:personas",
        "ap_p"=>"required|min:3|max:50|unique:personas",
        "am_p"=>"required|min:10|max:13|unique:personas",
        "tipo"=>"required|unique:personas",
      ],[],["name"=>"nombre","content"=>"contenido"]);

      Persona:: create([
        "nombre_p" =>$request->nombre_p,
        "ap_p" =>$request->ap_p,
        "am_p" =>$request->am_p,
        "tipo" =>$request->tipo,
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
      "nombre_p"=>"required|max:5|min:1|unique:personas",
      "ap_p"=>"required|min:3|max:50|unique:personas",
      "am_p"=>"required|min:10|max:13|unique:personas",
      "tipo"=>"required|unique:personas",
    ],[],["name"=>"nombre","content"=>"contenido"]);

      $registro_persona->update(["nombre_p"=>$request->nombre_p,
      "ap_p"=>$request->ap_p,
      "am_p"=>$request->am_p,
      "tipo"=>$request->tipo]);
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
