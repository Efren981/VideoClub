<?php

namespace App\Http\Controllers;

use App\Models\Prestamos;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos= Prestamos::all();
      return  view('prestamos.index',compact('datos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datos=Prestamos::all();
        return view('prestamos.create',compact('datos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(["date"=>"required",
            "socio"=>"required",
            "pelicula"=>"required",
            "cinta"=>"required"
        ]);
        Prestamos::created([
            'fecha'=>$request->fecha,
            'socios'=>$request->socios,
            'peliculas'=>$request->peliculas,
            'cintas'=>$request->cintas
        ]);
        return redirect()->route('prestamos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function show(Prestamos $prestamos)
    {
        //
        return view('prestamos.update',compact('prestamos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamos $prestamos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamos $prestamos)
    {
        //
        $prestamos->update(['fecha'=>$request->fecha]);
        return redirect()->route('prestamos.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamos $prestamos)
    {
        //
        $prestamos->delete();
        return redirect()->route('prestamos.update');
    }
}
