@extends('layouts.app')

@section("pelicula")
    active
@endsection
@section("content")
    <div class="container">
        <h4>Editar Pelicula</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('peliculas.update',$pelicula->id_pelicula)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="id_pelicula">id_pelicula</label>
                        <input type="text" class="form-control" name="id_pelicula" required maxlength="50"value="{{$pelicula->id_pelicula}}">
                    </div>
                    <div class="form-group">
                        <label for="titulo">titulo</label>
                        <input type="text" class="form-control" name="titulo" required maxlength="50"value="{{$pelicula->titulo}}">
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
    </body>
    </html>
@endsection