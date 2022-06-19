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
                        <input type="text" class="form-control @error ('socios') is-invalid @enderror" id="ap1" placeholder=".." name="socio" value="{{$prestamo->socios}}">
                        <label for="ap1">Socio</label>
                    </div>
                    @error('socios')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error ('peliculas') is-invalid @enderror" id="ap2"placeholder=".." name="pelicula" value="{{$prestamo->peliculas}}">
                        <label for="ap2">Pelicula</label>
                    </div>
                    @error('peliculas')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error ('cintas') is-invalid @enderror" id="ap2"placeholder=".." name="cinta" value="{{$prestamo->cintas}}">
                        <label for="ap2">Cinta</label>
                    </div>
                    @error('cintas')
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
