<<<<<<< HEAD
@extends('layouts.app')

@section("prestamos")
    active
@endsection
@section("content")
<div class="container">
    <div class="row" >
        <div class="col" >
            <h1 class="text-center mb-5">Prestamos</h1>
        </div>
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="card">
                <a
                        href="{{url("prestamos/create")}}"
                        class="btn btn-dark btn-sm mb-4 text-white"
                        data-toggle="tooltip"
                        title="Cargar nuevo socio">
                    <span
                            class="icon-pen">
                        Generar Prestamo
                    </span>
                </a>
                <table class="table card" style="background: #e1e1e8">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class=" justify-content-center text-center">Fecha</th>
                        <th scope="col" class=" justify-content-center text-center">Socio</th>
                        <th scope="col" class=" justify-content-center text-center">Pelicula</th>
                        <th scope="col" class=" justify-content-center text-center">Cinta</th>
                        <th colspan="2" scope="col" class=" justify-content-center text-center">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datos as $prestamos)
                   <tr>
                       <td>{{$loop->index+1}}</td>
                       <td>{{$prestamos->fecha}}</td>

                       <td scope="col"><a href="{{route("prestamos.edit",$prestamos->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion"><span class="icon-compose">Editar</span></a></td>
                       <td scope="col"><form action="{{route("prestamos.destroy",$prestamos->id)}}" method="post">
                               @csrf
                               @method('delete')
                               <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><span class="icon-bin">Eliminar</span></button>
                           </form></td>
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

