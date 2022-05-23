<?php $__env->startSection("pelicula"); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
    <div class="container">
        <h4>Gestion Peliculas</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="<?php echo e(route('peliculas.index')); ?>" method="get">
                   <div class="form-row">
                       <div class="col-sm-4">
                           <input type="text" class="form-control" name="texto">
                       </div>
                       <div class="col-auto">
                           <input type="submit" class="btn btn-primary" value="buscar">
                       </div>
                       <div class="col-auto">
                           <a href="<?php echo e(route('peliculas.create')); ?>" class="btn btn-success">Nuevo</a>
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
                                <th>id_pelicula</th>
                                <th>titulo</th>
                                <th>id_genero</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $peliculas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelicula): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="<?php echo e(route('peliculas.edit',$pelicula->id_pelicula)); ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="<?php echo e(route('peliculas.destroy',$pelicula->id_pelicula)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </form>
                                </td>
                                <td><?php echo e($pelicula->id_pelicula); ?></td>
                                <td><?php echo e($pelicula->titulo); ?></td>
                                <td><?php echo e($pelicula->id_genero); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/pelicula/index.blade.php ENDPATH**/ ?>