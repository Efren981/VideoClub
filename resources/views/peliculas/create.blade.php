@extends('layouts.app')

@section("pelicula")
    active
@endsection
@section("content")
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <h1 class="alert-primary text-center">Crear Pelicula</h1>
            <div class="card">
                <div class="row">
                    <div class="col-7">
                        <form method="POST" action="{{url("peliculas")}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <select class="form-control @error ('genero') is-invalid @enderror" id="genero" name="genero">
                                @error('genero')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error ('titulo') is-invalid @enderror" id="titulo" name="titulo">
                                <label for="titulo">Titulo</label>
                                @error('titulo')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="row my-5 d-flex justify-content-center">
                                <div class="col-3">
                                    <a href="{{url("socios")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-5">
                        <figure class="figure">
                            <img src="{{url("img/sirueta.jpeg")}}" class="text-lg-end" height="300px" width="300px">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
