<?php $__env->startSection("Generos"); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
            <div class="card">
              <h1 class=" card-title mt-2 alert-primary text-center">Registrar nuevo genero</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-7">
                        <form method="POST" action="<?php echo e(url("registro_genero")); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="desc" placeholder=".." name="descripcion_g">
                                <label for="desc"> Descripcion Genero</label>
                            </div>

                            <div class="row my-5 d-flex justify-content-center">
                                <div class="col-3"></div>
                                <div class="col-3">
                                    <a href="<?php echo e(url("registro_genero")); ?>" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

                                </div>
                                <div class="col-3">
                                    <button class="btn btn-primary" type="submit"><span class="icon-checkmark" data-toggle="tooltip" title="Agrega nuevo genero">Guardar</span></button>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/Genero/create.blade.php ENDPATH**/ ?>