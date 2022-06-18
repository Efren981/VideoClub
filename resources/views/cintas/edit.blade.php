@extends('layouts.app')

@section("cinta")
  active
@endsection
@section("content")
<div class="container">
    <h4>Editar Cinta</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('cintas.update',$cinta->id_cinta)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_cinta">id_cinta</label>
                    <input type="text" class="form-control" name="id_cinta" required maxlength="50" value="{{$cinta->id_cinta}}">
                </div>
                <div class="form-group">
                    <label for="id_pelicula">id_pelicula</label>
                    <input type="text" class="form-control" name="id_pelicula" required maxlength="50" value="{{$cinta->id_pelicula}}">
                </div>
                <div class="for-group">
                    <input type="submit" class="btn btn-primary" value="guardar">
                    <input type="reset" class="btn btn-default" value="cancelar">
                    <a href="javascript:history.back()">ir al listado</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
