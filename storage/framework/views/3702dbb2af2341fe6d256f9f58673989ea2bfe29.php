<?php $__env->startSection("devoluciones"); ?>
  active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="row">
  <div class="col">
    <div class="row">
      <div class="col">
        <h1 class="text-center mb-5">Devoluciones</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card shadow-sm al a">
          <div class="card-body">
            <div class="row mt-0">
              <form method="POST" action="<?php echo e(url("devoluciones")); ?>">
                <div class="row">
                  <div class="col">
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-dark" data-toggle="tooltip" title="Pagina de inicio">Inicio</a>
                    <a href="<?php echo e(url("devoluciones/create")); ?>" class="btn btn-dark" data-toggle="tooltip" title="Nueva devolucion">Nuevo</a>
                  </div>

                  <div class="mt-3">
                    <div class="card shadow-sm al">
                      <div class="card-body">
                        <table class="table">
                          <thead class="thead-light">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">No. prestamo</th>
                            <th scope="col">Fecha de devolucion</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">Aciones</th>
                          </tr>
                          </thead>
                          <tbody> <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devolucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <th scope="row"><?php echo e($loop->index+1); ?> </th>
                              <td><?php echo e($devolucion->id_detalle__prestamos); ?></td>
                              <td><?php echo e($devolucion->fecha_devolucion); ?></td>
                              <td><?php echo e($devolucion->observaciones); ?></td>
                              <td><a href="<?php echo e(route("devoluciones.edit",$devolucion->id)); ?>" class="btn btn-success btn-sm"
                                     data-toggle="tooltip" title="Editar">Editar</a></td>
                              <td >
                                <form action="<?php echo e(route("devoluciones.destroy",$devolucion->id)); ?>" method="post">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('delete'); ?>
                                  <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip"
                                          title="Eliminar">Eliminar</button>
                                </form></td>
                            </tr>
                          </tbody><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/devoluciones/index.blade.php ENDPATH**/ ?>