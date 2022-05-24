<?php $__env->startSection("cinta"); ?>
  active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
    <div class="container">
        <h4>Nueva Cinta</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="<?php echo e(route('cintas.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="id_cinta">id_cinta</label>
                        <input type="text" class="form-control" name="id_cinta" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="id_pelicula">id_pelicula</label>
                        <input type="text" class="form-control" name="id_pelicula" required maxlength="50">
                    </div>
                    <div class="for-group">
                        <input type="submit" class="btn btn-primary" value="guardar">
                        <input type="reset" class="btn btn-default" value="cancelar">
                        <a href="javascript:history.back()">ir al listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/cinta/create.blade.php ENDPATH**/ ?>