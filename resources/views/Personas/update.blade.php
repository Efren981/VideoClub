@extends('layouts.app')

@section("personas")
  active
@endsection
@section("content")
<div class="row mx-5 justify-content-center">
  <div class="col-6">
    <div class="card">
      <div class="card-title mt-4">
          <h4 class="alert alert-primary text-center mx-4">Actualizar Persona</h4>
      </div>
      <form method="POST" action="{{route("registro_personas.update",$registro_persona->id)}}">
        @csrf
        @method('PUT')
        <div class="row mx-5 d-flex justify-content-center">
          <div class="col-10">
            <div class="form-floating mb-3">
              <input type="text" class="form-control @error ('nombre_p') is-invalid @enderror" id="newname" placeholder=".." name="nombre_p" value="{{$registro_persona->nombre_p}}">
              <label for="newname">Nuevo nombre</label>
              @error('nombre_p')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control @error ('ap_p') is-invalid @enderror" id="newapp" placeholder=".." name="ap_p" value="{{$registro_persona->ap_p}}">
              <label for="newapp">Nuevo apellido paterno</label>
              @error('ap_p')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control @error ('am_p') is-invalid @enderror" id="newamp" placeholder=".." name=am_p value="{{$registro_persona->am_p}}">
              <label for="newamp">Nuevo apellido materno</label>
              @error('am_p')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <select class="form-control @error ('tipo') is-invalid @enderror" id="tipo" name="tipo">
                  <option value="">Selecciona tipo</option>
                  <option value="Socio">Socio</option>
                  <option value="Director">Director</option>
                  <option value="Actor">Actor</option>
               </select>
                <label for="tipo">Ocupacion</label>
                @error('tipo')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
          </div>
          </div>
          <div class="row my-5 d-flex justify-content-center">
              <div class="col-3"></div>
              <div class="col-3">
                <a href="{{url("registro_personas")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

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
