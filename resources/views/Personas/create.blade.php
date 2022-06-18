@extends('layouts.app')

@section("socios")
  active
@endsection
@section("content")
<div class="row d-flex justify-content-center">
   <div class="col-6 ">
     <div class="row">
       <div class="card">
         <h1 class="card-title mt-4 mb-4 alert-primary text-center">Registro de personas</h1>
         <div class="row d-flex justify-content-center">
           <div class="col-6">
             <div class="row d-flex justify-content-center">
               <div class="col-12">
                 <form method="POST" action="{{url("registro_personas")}}">
                   @csrf
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control @error ('nombre') is-invalid @enderror" id="nombre" placeholder=".." name="nombre" value="{{old('nombre_p')}}">
                     <label for="nombre">Nombre</label>
                     @error('nombre')
                       <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control @error ('apellidoPaterno') is-invalid @enderror" id="ap1" placeholder=".." name="apellidoPaterno" value="{{old('ap_p')}}">
                     <label for="ap1">Apellido Paterno</label>
                     @error('apellidoPaterno')
                       <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control @error ('apellidoMaterno') is-invalid @enderror" id="ap2"placeholder=".." name="apellidoMaterno" value="{{old('am_p')}}">
                     <label for="ap2">Apellido Materno</label>
                     @error('apellidoMaterno')
                       <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control @error ('id_rango') is-invalid @enderror" id="ap2"placeholder=".." name="id_rango" value="{{old('id_rango')}}">
                     <label for="ap2">Rango</label>
                     @error('id_rango')
                       <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                   </div>
                   <div class="row my-5 d-flex justify-content-center">
                       <div class="col-3"></div>
                       <div class="col-3">
                         <a href="{{url("registro_personas")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

                       </div>
                       <div class="col-3">
                         <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar">Guardar</span></button>
                       </div>
                       <div class="col-3"></div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>
@endsection