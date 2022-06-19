@extends('layouts.app')

@section("cinta")
    active
@endsection
@section("content")
<div class="container">
    <h4>Nueva Cinta</h4>
    <div class="row">
        <div class="col-xl-12">
            <form method="post" action="{{url('cintas')}}">
                @csrf
                <div class="form-group">
                    <label for="id_cinta">Numero de pelicula</label>
                    <input type="text" class="form-control" id="id_cinta" name="id_cinta">
                </div>
                <div class="form-group">
                    <label for="id_pelicula">codigo</label>
                    <input type="text" class="form-control"id="id_" name="codigo">
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
