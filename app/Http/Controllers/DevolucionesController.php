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
<<<<<<< HEAD
        $request->validate(["id_detalle__prestamos"=>"numeric|required",
            "fecha_devolucion"=>"required",
=======
        $validate=$request->validate(["idDetallePrestamos"=>"numeric|required",
            "fechaDevolucion"=>"required",
>>>>>>> 449b499f38da5e58a2a4ab2f044b5b2c7efda926
            "observaciones"=>"required"],
            [],
            ['id_detalle__prestamos'=>'Numero de prestamo',
                'fecha_devolucion'=>'fecha de devolucion',
                'observaciones'=>'observaciones']);
        Devoluciones:: create(["id_detalle__prestamos"=>$request->id_detalle__prestamos,
            "fecha_devolucion"=>$request->fecha_devolucion,
            "observaciones"=>$request->observaciones]);
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
        $request->validate(["id_detalle__prestamos"=>"numeric|required",
            "fecha_devolucion"=>"required",
            "observaciones"=>"required"],
            [],
            ['id_detalle__prestamos'=>'Numero de prestamo',
                'fecha_devolucion'=>'fecha de devolucion',
                'observaciones'=>'observaciones']);
        $devoluciones->update(['id_detalle__prestamos'=>$request->id_detalle__prestamos,
            'fecha_devolucion'=>$request->fecha_devolucion,
            'observaciones'=>$request->observaciones]);
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
