@extends('layouts.app')

@section("prestamos")
    active
@endsection
@section("content")
    <div class="row mx-5 justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-title mt-4">
                    <h4 class="alert alert-primary text-center mx-4">Actualizar Prestamo</h4>
                </div>
                <form method="POST" action="{{route("prestamos.update",$prestamo->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control @error ('date') is-invalid @enderror" id="nombre" placeholder=".." name="date" value="{{$prestamo->fecha}}">
                        <label for="nombre">Fecha Prestamo</label>
                    </div>
                    @error('date')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error ('socio') is-invalid @enderror" id="ap1" placeholder=".." name="socio" value="{{$prestamo->socio}}">
                        <label for="ap1">Socio</label>
                    </div>
                    @error('socio')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error ('pelicula') is-invalid @enderror" id="ap2"placeholder=".." name="pelicula" value="{{$prestamo->pelicula}}">
                        <label for="ap2">Pelicula</label>
                    </div>
                    @error('pelicula')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error ('cinta') is-invalid @enderror" id="ap2"placeholder=".." name="cinta" value="{{$prestamo->cinta}}">
                        <label for="ap2">Cinta</label>
                    </div>
                    @error('cinta')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <div class="row my-5 d-flex justify-content-center">
                        <div class="col-3"></div>
                        <div class="col-3">
                            <a href="{{url("prestamos")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                        </div>
                        <div class="col-3"></div>
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
