<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Peliculas::all();
        return view('peliculas.index',compact('datos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('peliculas.create');
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
        $pelicula= new Peliculas;
        $pelicula->id=$request->input('id');
        $pelicula->titulo=$request->input('titulo');
        $pelicula->save();
        return redirect()->route('peliculas.index');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function show(Peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function edit(Peliculas $peliculas)
    {
        $peliculas=Peliculas::finorFail($id);
        return view('peliculas.edit',compact('peliculas'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peliculas $peliculas)
    {
        $peliculas=Peliculas::finOrFail(id);
        $peliculas->id=$request->input(('id'));
        $peliculas->titulo=$request->input('titulo');
        $peliculas->save();
        return  redirect()->route('peliculas.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peliculas  $peliculas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peliculas $peliculas)
    {
        $peliculas=Peliculas::findOrFail($id);
        $peliculas->delete();
        return redirect()->route('peliculas.index');
        //
    }
}
