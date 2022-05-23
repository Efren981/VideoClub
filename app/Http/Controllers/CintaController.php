<?php

namespace App\Http\Controllers;

use App\Models\Cinta;
use Illuminate\Http\Request;

class CintaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cintas=Cinta::all();
        return view('cinta.index',compact('cintas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('cinta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cinta=new Cinta;
        $cinta->id_cinta=$request->input('id_cinta');
        $cinta->id_pelicula=$request->input('id_pelicula');
        $cinta->save();
        return redirect()->route('cintas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cinta  $cinta
     * @return \Illuminate\Http\Response
     */
    public function show(Cinta $cinta)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cinta  $cinta
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinta $cinta)
    {
        $cinta=Cinta::findOrFail($id_cinta);
        return view('cinta.edit',compact('cinta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cinta  $cinta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinta $cinta)
    {
        $cinta=Cinta::findOrFail($id_cinta);
        $cinta->id_cinta=$request->input('id_cinta');
        $cinta->id_pelicula=$request->input('id_pelicula');
        $cinta->save();
        return redirect()->route('cintas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cinta  $cinta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinta $cinta)
    {
        $cinta=Cinta::findOrFail($id_cinta);
        $cinta->delete();
        return redirect()->route('cintas.index');
    }
}
