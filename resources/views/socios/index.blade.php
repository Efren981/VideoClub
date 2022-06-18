@extends('layouts.app')

@section("socios")
  active
@endsection
@section("content")
<div class="row">
  <div class="col">
    <div class="row">
      <div class="col">
        <h1 class="text-center mb-5">Socios</h1>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-7 jus">
          <a href="{{url("socios/create")}}" class="btn btn-dark btn-sm mb-2 text-white "data-toggle="tooltip" title="Cargar nuevo socio"><span class="icon-pen"> Nuevo</span></a>
          <div class="card">
          <table class="table mt-4" style="background: #e1e1e8">
                                  <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col" >Matricula</th>
                                      <th scope="col" >Nombre</th>
                                      <th scope="col" >Telefono</th>
                                      <th scope="col" >Direccion</th>
                                      <th colspan="2" >Acciones</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($datos as $socios)
                                  <tr>
                                      <th scope="row">{{$loop->index+1}}</th>
                                      <td>{{$socios->matricula}}</td>
                                      <td>{{$socios->nombre}}</td>
                                      <td>{{$socios->telefono}}</td>
                                      <td>{{$socios->direccion}}</td>
                                      <td colspan="2">
                                          <a href="{{route("socios.edit",$socios->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion">
                                              <span class="icon-compose"></span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                              </svg></a>

                                            <form action="{{route("socios.destroy",$socios->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><span class="icon-bin"></span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg></button>
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
