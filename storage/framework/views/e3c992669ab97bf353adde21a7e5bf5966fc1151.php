<?php $__env->startSection("Generos"); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
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
                        <a href="<?php echo e(url("registro_genero/create")); ?>" class="btn btn-dark btn-sm mb-4 text-white"data-toggle="tooltip" title="Cargar nuevo Genero"><span class="icon-pen"> Nuevo</span></a>
                        <table class="table card" style="background: #e1e1e8">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" class=" justify-content-center text-center">Generos</th>

                                <th colspan="2" scope="col" class=" justify-content-center text-center">Acciones</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr scope="row">
                                    <th scope="col"><?php echo e($loop->index+1); ?></th>
                                    <td scope="col"><?php echo e($genero->descripcion_g); ?></td>

                                    <td scope="col"><a href="<?php echo e(route("registro_genero.edit",$genero->id)); ?>" class="btn btn-success btn-sm" data-toggle="tooltip" title="Editar difusion"><span class="icon-compose">Editar</span></a></td>
                                    <td scope="col">
                                      <form action="<?php echo e(route("registro_genero.destroy",$genero->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="btn btn-danger btn-sm" type="submit" data-toggle="tooltip" title="Eliminar esta difusion"><span class="icon-bin">Eliminar</span></button>
                                      </form>
                                    </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/Genero/index.blade.php ENDPATH**/ ?>