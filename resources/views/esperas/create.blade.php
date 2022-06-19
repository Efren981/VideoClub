@extends('layouts.app')

@section("esperas")
    active
@endsection
@section("content")
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="row">
                <div class="card">
                    <h1 class="card-title mt-4 mb-4 alert-primary text-center">Registro de una espera</h1>
                    <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                    <form method="POST" action="{{url("esperas")}}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('idSocio') is-invalid @enderror" id="idSocio" placeholder=".." name="idSocio">
                                            <label for="idSocio">Id Socio</label>
                                            @error('idSocio')
                                            <div class="invalid-feedback">{{$message}}<div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('idPelicula') is-invalid @enderror" id="idPelicula" placeholder=".." name="idPelicula">
                                            <label for="idPelicula">Id pelicula</label>
                                            @error('idPelicula')
                                                <div class="invalid-feedback">{{$message}}<div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
<<<<<<< HEAD
                                            <input type="text" class="form-control @error('prioridad') is-invalid @enderror" id="prioridad" placeholder=".." name="prioridad">
=======
<<<<<<< HEAD
                                            <input type="text" class="form-control @error('prioridad') is-invalid @enderror" id="prioridad" placeholder=".." name="prioridad" value="{{old("prioridad")}}}">
=======
                                            <input type="text" class="form-control @error('prioridad') is-invalid @enderror" id="prioridad" placeholder=".." name="prioridad" value="{{old("prioridad")}}">
>>>>>>> 0a86df09b3e932c17325048f2cb688887ae9cd82
>>>>>>> 449b499f38da5e58a2a4ab2f044b5b2c7efda926
                                            <label for="idSocio">Prioridad</label>
                                            @error('Prioridad')
                                            <div class="invalid-feedback">{{$message}}<div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" placeholder=".." name="fecha">
                                            <label for="fecha">Fecha</label>
                                            @error('fecha')
                                                <div class="invalid-feedback">{{$message}}<div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" placeholder=".." name="estado">
                                            <label for="estado">Estado</label>
                                            @error('estado')
                                            <div class="invalid-feedback">{{$message}}<div>
                                                </div>
                                                    @enderror
                                        </div>
                                        <div class="row my-5 d-flex justify-content-center">
                                            <div class="col-3"></div>
                                            <div class="col-3 m-3">
                                                <a href="{{url("esperas")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>
                                            </div>
                                        </div>
                                            <div class="col-3 m-3">
                                                <button class="btn btn-primary"  type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                                            </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
