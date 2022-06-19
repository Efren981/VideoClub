<?php

namespace App\Http\Controllers;

use App\Models\Directores;
use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Directores::all();
        return view("directores.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("directores.create");
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
            "nombreArtistico"=>"required|min:10|max:20",
            "idPersona"=>"numeric|required|min:2",
        ]);
        Directores::create([
            "idPersona"=>$request->idPersona,
            "nombreArtistico"=>$request->nombreArtistico,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function show(Directores $directores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function edit(Directores $directores)
    {
        return view("directores.update",compact("directores"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directores $directores)
    {
        $request->validate([
            "nombreArtistico"=>"required|min:10|max:20",
            "idPersona"=>"numeric|required|min:2",
        ]);
        $directores::updated([
            "idPersona"=>$request->idPersona,
            "nombreArtistico"=>$request->nombreArtistico,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directores  $directores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directores $directores)
    {
        $directores->delete();
        return redirect()->route("directores.index");
    }
}
