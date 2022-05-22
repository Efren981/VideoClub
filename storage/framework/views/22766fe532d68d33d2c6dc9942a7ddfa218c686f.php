<?php $__env->startSection("personas"); ?>
  active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="row mx-5 justify-content-center">
  <div class="col-6">
    <div class="card">
      <div class="card-title mt-4">
          <h4 class="alert alert-primary text-center mx-4">Actualizar Persona</h4>
      </div>
      <form method="POST" action="<?php echo e(route("registro_personas.update",$registro_persona->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row mx-5 d-flex justify-content-center">
          <div class="col-10">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="newname" placeholder=".." name="nombre_p" value="<?php echo e($registro_persona->nombre_p); ?>">
              <label for="newname">Nuevo nombre</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="newapp" placeholder=".." name="ap_p" value="<?php echo e($registro_persona->ap_p); ?>">
              <label for="newapp">Nuevo apellido paterno</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="newamp" placeholder=".." name=am_p value="<?php echo e($registro_persona->am_p); ?>">
              <label for="newamp">Nuevo apellido materno</label>
            </div>
            <div class="form-floating mb-3">
              <select class="form-control" id="tipo" name="tipo">
                  <option value="">Selecciona tipo</option>
                  <option value="1">Socio</option>
                  <option value="2">Director</option>
                  <option value="3">Actor</option>
               </select>
                <label for="tipo">Ocupacion</label>
            </div>
          </div>
          </div>
          <div class="row my-5 d-flex justify-content-center">
              <div class="col-3"></div>
              <div class="col-3">
                <a href="<?php echo e(url("registro_personas")); ?>" class="btn btn-danger mb-4 text-white" data-toggle="tooltip" title="Regresar el menu principal">Cancelar</a>

              </div>
              <div class="col-3">
                <button class="btn btn-primary" type="submit" data-toggle="tooltip" title="Guardar cambios">Guardar</button>
              </div>
              <div class="col-3"></div>
          </div>
        </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/Personas/update.blade.php ENDPATH**/ ?>