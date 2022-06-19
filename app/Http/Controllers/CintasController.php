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
        $cintas=Cintas::all();
        return view('cintas.index',compact('cintas'));
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
        $cinta=new Cintas();
        $cinta->id_cinta=$request->input('id_cinta');
        $cinta->id_pelicula=$request->input('id_pelicula');
        $cinta->save();
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
        $cinta=Cintas::findOrFail($id_cinta);
        return view('cintas.edit',compact('cinta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cintas  $cintas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cintas $cintas)
    {
        $cinta=Cintas::findOrFail($id_cinta);
        $cinta->delete();
        return redirect()->route('cintas.index');
    }
}
