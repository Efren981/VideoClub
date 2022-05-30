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
                     <input type="text" class="form-control @error ('nombre_p') is-invalid @enderror" id="nombre" placeholder=".." name="nombre_p" value="{{old('nombre_p')}}">
                     <label for="nombre">Nombre</label>
                     @error('nombre_p')
                       <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control @error ('ap_p') is-invalid @enderror" id="ap1" placeholder=".." name="ap_p" value="{{old('ap_p')}}">
                     <label for="ap1">Apellido Paterno</label>
                     @error('ap_p')
                       <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control @error ('am_p') is-invalid @enderror" id="ap2"placeholder=".." name="am_p" value="{{old('am_p')}}">
                     <label for="ap2">Apellido Materno</label>
                     @error('am_p')
                       <div class="invalid-feedback">{{$message}}</div>
                     @enderror
                   </div>
                   <div class="form-floating mb-3">
                     <select class="form-control @error ('tipo') is-invalid @enderror" id="tipo" name="tipo" value="{{old('tipo')}}">
                       <option value="">Selecciona un valor</option>
                       <option value="Socio">Socio</option>
                       <option value="Director">Director</option>
                       <option value="Actor">Actor</option>
                      </select>
                     <label for="tipo">Ocupacion</label>
                     @error('tipo')
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
