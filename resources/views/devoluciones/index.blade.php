@extends('layouts.app')

@section("devoluciones")
  active
@endsection
@section("content")
<div class="row">
  <div class="col">
    <div class="row">
      <div class="col">
        <h1 class="alert alert-success text-center mb-5">Devoluciones</h1>
      </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-3">
            <figure class="figure">
                <img src="{{asset("/images/videoclub.png")}}" alt="login" class="figure-img img-fluid" style= "padding: 1em;width:400%">
            </figure>
        </div>
      <div class="col-7 offset">
        <div class="card shadow-sm al a">
          <div class="card-body">
            <div class="row mt-0">
              <form method="POST" action="{{url("devoluciones")}}">
                <div class="row">
                  <div class="col">
                    <a href="{{url('/')}}" class="btn btn-dark" data-toggle="tooltip" title="Pagina de inicio">Inicio</a>
                    <a href="{{url("devoluciones/create")}}" class="btn btn-dark" data-toggle="tooltip" title="Nueva devolucion">Nuevo</a>
                  </div>

                  <div class="mt-3">
                    <div class="card shadow-sm al">
                      <div class="justify-content-center card-body">
                        <table class=" table text-center">
                          <thead class="thead-light">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">No. préstamo</th>
                            <th scope="col">Fecha de Devolución</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">Acciones</th>
                          </tr>
                          </thead>
                          <tbody> @foreach($datos as $devolucion)
                            <tr>
                              <th scope="row">{{$loop->index+1}} </th>
                              <td>{{$devolucion->id_detalle__prestamos}}</td>
                              <td>{{$devolucion->fecha_devolucion}}</td>
                              <td>{{$devolucion->observaciones}}</td>
                              <td><a href="{{route("devoluciones.edit",$devolucion->id)}}" class="btn btn-success btn-sm"
                                     data-toggle="tooltip" title="Editar">Editar</a></td>
                              <td >
                                <form action="{{route("devoluciones.destroy",$devolucion->id)}}" method="post">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip"
                                          title="Eliminar">Eliminar</button>
                                </form></td>
                            </tr>
                          </tbody>@endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
