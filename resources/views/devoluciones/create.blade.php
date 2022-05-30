@extends('layouts.app')

@section("devoluciones")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="alert alert-primary text-center" role="alert">
                <h3>Devoluciones</h3>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card shadow-sm al a">
                        <div class="card-body">
                            <div class="row mt-0">
                                <form method="POST" action="{{url("devoluciones")}}">
                                    <div class="row">
                                        <h5 class="text-center">Nueva Devolución</h5>
                                        <div class="mt-3">
                                            <div class="card shadow-sm al">
                                                <div class="card-body">
                                                    <form method="POST" action="{{url("devoluciones")}}">
                                                        @csrf
                                                        <div class="form-floating mb-3 ">
                                                            <input type="text" class="form-control" id="id_detalle__prestamos" placeholder=""
                                                                   name="id_detalle__prestamos">
                                                            <label for="id_detalle__prestamos">Numero de Prestamo</label>
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input type="date" class="form-control" id="fecha_devolucion" placeholder=""
                                                                   name="fecha_devolucion">
                                                            <label for="fecha_devolucion">Fecha de Devolucion</label>
                                                        </div>

                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="observaciones" placeholder=""
                                                                   name="observaciones">
                                                            <label for="observaciones">Observaciones</label>
                                                        </div>

                                                        <div class="row my-3 d-flex justify-content-center">
                                                            <div class="col-3">
                                                                <a href="{{url("devoluciones")}}" class="btn btn-danger mb-4 text-white"
                                                                   data-toggle="tooltip" title="Regresar al menu principal">Cancelar</a>
                                                            </div>
                                                            <div class="col-3">
                                                                <button class="btn btn-primary" type="submit"
                                                                        data-toggle="tooltip" title="Agregar nueva devolucion">Guardar</button>
                                                            </div>
                                                        </div>
                                                    </form>
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