<?php

namespace App\Http\Controllers;

use App\Models\Devolucion;
use Illuminate\Http\Request;

class DevolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Devolucion::all();
        return view("devoluciones.index",compact("datos"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("devoluciones.create");
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
        $request->validate(["id_detalle__prestamos"=>"numeric|required",
            "fecha_devolucion"=>"required",
            "observaciones"=>"required"],
            [],
            ['id_detalle__prestamos'=>'Numero de prestamo',
                'fecha_devolucion'=>'fecha de devolucion',
                'observaciones'=>'observaciones']);
        Devolucion:: create(["id_detalle__prestamos"=>$request->id_detalle__prestamos,
            "fecha_devolucion"=>$request->fecha_devolucion,
            "observaciones"=>$request->observaciones]);
        return redirect()->route("devoluciones.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function show(Devolucion $devolucion)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Devolucion $devolucione)
    {

        return view('devoluciones.edit',compact("devolucione"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devolucion $devolucione)
    {
        $request->validate(["id_detalle__prestamos"=>"numeric|required",
            "fecha_devolucion"=>"required",
            "observaciones"=>"required"],
            [],
            ['id_detalle__prestamos'=>'Numero de prestamo',
                'fecha_devolucion'=>'fecha de devolucion',
                'observaciones'=>'observaciones']);
        $devolucione->update(['id_detalle__prestamos'=>$request->id_detalle__prestamos,
            'fecha_devolucion'=>$request->fecha_devolucion,
            'observaciones'=>$request->observaciones]);
        return redirect()->route("devoluciones.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devolucion  $devolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devolucion $devolucione)
    {
        $devolucione->delete();

        return redirect()->route("devoluciones.index");
        //
    }
}
