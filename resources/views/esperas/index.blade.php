@extends('layouts.app')

@section("Generos")
    active
@endsection
@section("content")
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 class="text-center mb-5">Registro Esperas</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <a href="{{url("esperas/create")}}" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nuevo Genero"><span class="icon-pen"> Nuevo</span></a>
                        <table class="table card" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">Id espera</th>
                                <th colspan="2" scope="col" class=" justify-content-center text-center">Id Socio</th>
                                <th colspan="2" scope="col" class=" justify-content-center text-center">Id Pelicula</th>
                                <th colspan="2" scope="col" class=" justify-content-center text-center">Prioridad</th>
                                <th colspan="2" scope="col" class=" justify-content-center text-center">fecha</th>
                                <th colspan="2" scope="col" class=" justify-content-center text-center">Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datos as $esperas)
                                <tr scope="row">
                                    <th scope="col">{{$loop->index+1}}</th>
                                    <td scope="col">{{$esperas->idSocio}}</td>
                                    <td scope="col">{{$esperas->idPelicula}}</td>
                                    <td scope="col">{{$esperas->prioridad}}</td>
                                    <td scope="col">{{$esperas->fecha}}</td>
                                    <td scope="col">{{$esperas->estado}}</td>
                                    <td scope="col"><a href="{{route("esperas.edit",$esperas->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion"><span class="icon-compose">Editar</span></a></td>

                                        <form action="{{route("esperas.destroy",$esperas->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta espera"><span class="icon-bin">Eliminar</span></button>
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
