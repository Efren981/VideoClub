@extends('layouts.app')

@section("socios")
  active
@endsection
@section("content")
<div class="row mx-5 justify-content-center">
  <div class="col-6">
    <div class="card">
      <div class="card-title mt-4">
          <h4 class="alert alert-primary text-center mx-4">Actualizar Socio</h4>
      </div>
      <form method="POST" action="{{route("socios.update",$socio->id)}}">
        @csrf
        @method('PUT')
        <div class="row mx-5 d-flex justify-content-center">
          <div class="col-10">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="newname" placeholder=".." name="matricula" value="{{$socio->matricula}}">
              <label for="newname">Nueva matricula</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="newcontent" placeholder=".." name="nombre" value="{{$socio->nombre}}">
              <label for="newcontent">Nuevo nombre</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="newtel" placeholder=".." name="telefono" value="{{$socio->telefono}}">
              <label for="newtel">Nuevo telefono</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" id="newdir" placeholder=".." name="direccion" value="{{$socio->direccion}}"></textarea>
              <label for="newdir">Nueva direccion</label>
            </div>
          </div>
          </div>
          <div class="row my-5 d-flex justify-content-center">
              <div class="col-3"></div>
              <div class="col-3">
                <a href="{{url("socios")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

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
