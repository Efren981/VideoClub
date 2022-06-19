<?php

namespace App\Http\Controllers;

use App\Models\Devoluciones;
use Illuminate\Http\Request;

class DevolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Devoluciones::all();
        return view("devoluciones.index",compact("datos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("devoluciones.create");
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

        ]);

        Devoluciones:: create([

        ]);
        return redirect()->route("devoluciones.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function show(Devoluciones $devoluciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Devoluciones $devoluciones)
    {
        return view('devoluciones.edit',compact("devoluciones"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devoluciones $devoluciones)
    {
        $request->validate([

        ]);
        $devoluciones->update([

        ]);
        return redirect()->route("devoluciones.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devoluciones  $devoluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devoluciones $devoluciones)
    {
        $devoluciones->delete();

        return redirect()->route("devoluciones.index");

    }
}
