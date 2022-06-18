@extends('layouts.app')

@section("pelicula")
    active
@endsection
@section("content")
    <div class="container">
        <h4>Gestion Peliculas</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('peliculas.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="texto">
                        </div>
                        <div class="col-auto">
                            <input type="submit" class="btn btn-primary" value="buscar">
                        </div>
                        <div class="col-auto">
                            <a href="{{route('peliculas.create')}}" class="btn btn-success">Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>opciones</th>
                            <th>id_pelicula</th>
                            <th>titulo</th>
                            <th>id_genero</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($peliculas as $pelicula)
                            <tr>
                                <td><a href="{{route('peliculas.edit',$pelicula->id_pelicula)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{route('peliculas.destroy',$pelicula->id_pelicula)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </form>
                                </td>
                                <td>{{$pelicula->id_pelicula}}</td>
                                <td>{{$pelicula->titulo}}</td>
                                <td>{{$pelicula->id_genero}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
