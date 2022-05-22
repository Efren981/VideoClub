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
                     <input type="text" class="form-control" id="nombre" placeholder=".." name="nombre_p">
                     <label for="nombre">Nombre</label>
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control" id="ap1" placeholder=".." name="ap_p">
                     <label for="ap1">Apellido Paterno</label>
                   </div>
                   <div class="form-floating mb-3">
                     <input type="text" class="form-control" id="ap2"placeholder=".." name="am_p">
                     <label for="ap2">Apellido Materno</label>
                   </div>
                   <div class="form-floating mb-3">
                     <select class="form-control" id="tipo" name="tipo">
                       <option value="">Selecciona un valor</option>
                       <option value="1">Socio</option>
                       <option value="2">Director</option>
                       <option value="3">Actor</option>
                      </select>
                     <label for="tipo">Ocupacion</label>
                   </div>
                   <div class="row my-5 d-flex justify-content-center">
                       <div class="col-3"></div>
                       <div class="col-3">
                         <a href="{{url("registro_personas")}}" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

                       </div>
                       <div class="col-3">
                         <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agregar nueva publicacion">Guardar</span></button>
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
