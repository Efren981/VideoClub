<?php $__env->startSection("cinta"); ?>
  active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="container">
    <h4>Gestion Cintas</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action="<?php echo e(route('cintas.index')); ?>" method="get">
                <div class="form-row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="texto">
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary" value="buscar">
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo e(route('cintas.create')); ?>" class="btn btn-success">Nuevo</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>opciones</th>
                        <th>id_cinta</th>
                        <th>id_pelicula</th>
                        <th>codigo</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $cintas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cinta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(route('cintas.edit',$cinta->id_cinta)); ?>" class="btn btn-warning btn-sm">Editar</a>
                        <form action="<?php echo e(route('cintas.destroy',$cinta->id_cinta)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                        </td>
                        <td><?php echo e($cinta->id_cinta); ?></td>
                        <td><?php echo e($cinta->id_pelicula); ?></td>
                        <td><?php echo e($cinta->codigo); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/cinta/index.blade.php ENDPATH**/ ?>