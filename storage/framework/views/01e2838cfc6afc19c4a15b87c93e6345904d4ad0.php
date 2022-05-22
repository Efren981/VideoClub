<?php $__env->startSection("personas"); ?>
  active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="row">
  <div class="col">
    <div class="row">
      <div class="col">
        <h1 class="text-center mb-5">Personas</h1>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-6">
        <div class="card">
          <a href="<?php echo e(url("registro_personas/create")); ?>" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nueva persona"><span class="icon-pen"> Nuevo</span></a>
          <table class="table card" style="background: #e1e1e8">
                                  <thead>
                                  <tr>
                                      <th scope="col">#</th>
                                      <th scope="col" class=" justify-content-center text-center">Nombre</th>
                                      <th scope="col" class=" justify-content-center text-center">Apellido Paterno</th>
                                      <th scope="col" class=" justify-content-center text-center">Apellido Materno</th>
                                      <th scope="col" class=" justify-content-center text-center">Ocupacion</th>
                                        <th colspan="2" scope="col" class=" justify-content-center text-center">Acciones</th>

                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr scope="row">
                                      <th scope="col"><?php echo e($loop->index+1); ?></th>
                                      <td scope="col"><?php echo e($personas->nombre_p); ?></td>
                                      <td scope="col"><?php echo e($personas->ap_p); ?></td>
                                      <td scope="col"><?php echo e($personas->am_p); ?></td>
                                      <td scope="col"><?php echo e($personas->tipo); ?></td>
                                      <td scope="col"><a href="<?php echo e(route("registro_personas.edit",$personas->id)); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar personas"><span class="icon-compose">Editar</span></a></td>
                                      <td scope="col"><form action="<?php echo e(route("registro_personas.destroy",$personas->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><span class="icon-bin">Eliminar</span></button>
                                      </form></td>
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </tbody>
                                  </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/Personas/index.blade.php ENDPATH**/ ?>