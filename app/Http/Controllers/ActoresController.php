<?php

namespace App\Http\Controllers;

use App\Models\Actores;
use Illuminate\Http\Request;

class ActoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Actores::all();
        return view("actores.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('actores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        Actores::create(['idPersona'=>$request->idPersona,'nombreArtistico'=>$request->nombreArtistico]);
        return redirect()->route('actores.index');

=======
        //
>>>>>>> 4080c97fb5c8853467107a3f3e4cb169ea3b1e88
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function show(Actores $actores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function edit(Actores $actores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actores $actores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actores  $actores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actores $actores)
    {
        //
    }
}
