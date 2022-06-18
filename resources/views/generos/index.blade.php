@extends('layouts.app')

@section("Generos")
    active
@endsection
@section("content")
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 class="text-center mb-5">Genero</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <a href="{{url("registro_genero/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nuevo Genero"><span class="icon-pen"> Nuevo</span></a>
                        <table class="table card" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class=" justify-content-center text-center">Generos</th>

                                <th colspan="2" scope="col" class=" justify-content-center text-center">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datos as $genero)
                                <tr scope="row">
                                    <th scope="col">{{$loop->index+1}}</th>
                                    <td scope="col">{{$genero->descripcion_g}}</td>

                                    <td scope="col"><a href="{{route("registro_genero.edit",$genero->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion"><span class="icon-compose">Editar</span></a></td>
                                    <td scope="col">
                                        <form action="{{route("registro_genero.destroy",$genero->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><span class="icon-bin">Eliminar</span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
