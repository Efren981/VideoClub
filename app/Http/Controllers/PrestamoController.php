<?php

namespace App\Http\Controllers;

use App\Models\Cinta;
use App\Models\Pelicula;
use App\Models\Persona;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $datos = Prestamo::all();
       //dd($datos);
        return view("prestamos.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos_socio = Persona::join("socios", "personas.id", "=", "socios.personas_id")->select("personas.nombre_p")->get();
        $datos_pelicula = Pelicula::all("titulo");
        //$datos_cinta = Cinta::all("codigo");
        //dd($datos_pelicula);
        $tipo_prestamo=Prestamo::all();
        return view('prestamos.create', compact("tipo_prestamo"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(["date"=>"required",
            "socio"=>"required",
            "pelicula"=>"required",
            "cinta"=>"required"
            ]);
        Prestamo::create([
            'fecha'=>$request->fecha,
            'socio'=>$request->socio,
            'pelicula'=>$request->pelicula,
            'cinta'=>$request->cinta
        ]);
        return redirect()->route('prestamos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamo $prestamo)
    {
        return view('prestamo.edit', compact('prestamos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $prestamo)
    {

        $prestamo->update(['fecha'=>$request->fecha]);
        return redirect()->route("prestamos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestamo  $prestamo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $prestamo)
    {
        $prestamo->delete();
        return redirect()->route('prestamos.index');

    }
}
