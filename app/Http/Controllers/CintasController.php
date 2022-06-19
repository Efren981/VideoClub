<?php

namespace App\Http\Controllers;

use App\Models\Cintas;
use Illuminate\Http\Request;

class CintasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Cintas::all();
        return view('cintas.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('cintas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cintas::create(['idPelicula'=>$request->idPelicula,'codigo'=>$request->codigo,]);
        return redirect()->route('cintas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cintas  $cintas
     * @return \Illuminate\Http\Response
     */
    public function show(Cintas $cintas)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cintas  $cintas
     * @return \Illuminate\Http\Response
     */
    public function edit(Cintas $cintas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cintas  $cintas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cintas $cintas)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cintas  $cintas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cintas $cintas)
    {

    }
}
