@extends('layouts.app')

@section("pelicula")
    active
@endsection
@section("content")
    <div class="container">
        <h4 >Editar Pelicula</h4>
        <div class="row">
            <div class="col-xl-12">
              <form method="POST" action="{{route("peliculas.update",$pelicula->id)}}">
                  @csrf
                  @method('PUT')
                  <div class="row mx-5 d-flex justify-content-center">
                      <div class="col-10">
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control @error('idGenero') is-invalid @enderror" id="idGenero" placeholder=".." name="idGenero" value="{{$pelicula->idGenero}}">
                              <label for="newname">Nuevo Genero</label>
                              @error('idGenero')
                              <div class="invalid-feedback">{{$message}}<div>
                              @enderror
                          </div>
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" placeholder=".." name="titulo" value="{{$pelicula->titulo}}">
                              <label for="titulo">Nuevo titulo</label>
                              @error('titulo')
                              <div class="invalid-feedback">{{$message}}<div>
                              @enderror
                          </div>
                      </div>
                  </div>
                  <div class="row my-5 d-flex justify-content-center">
                      <div class="col-3"></div>
                      <div class="col-3">
                          <a href="{{url("peliculas")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

                      </div>
                      <div class="col-3">
                          <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="Guardar cambios">Guardar</button>
                      </div>
                      <div class="col-3"></div>
                  </div>
          </div>
      </div>
      </form>
            </div>
        </div>
    </div>
@endsection
