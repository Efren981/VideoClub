@extends('layouts.app')

@section("socios")
    active
@endsection
@section("content")
    <div class="row mx-5 justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-title mt-4">
                    <h4 class="alert alert-primary text-center mx-4">Actualizar Genero</h4>
                </div>
                <form method="POST" action="{{route("registro_genero.update",$registro_genero->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row mx-5 d-flex justify-content-center">
                        <div class="col-10">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="newcontent" placeholder=".." name="descripcion_g" value="{{$registro_genero->descripcion_g}}">
                                <label for="newcontent">Nuevo Genero</label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 d-flex justify-content-center">
                        <div class="col-3"></div>
                        <div class="col-3">
                            <a href="{{url("registro_genero")}}" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

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