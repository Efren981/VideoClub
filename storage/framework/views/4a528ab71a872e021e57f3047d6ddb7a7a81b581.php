<?php $__env->startSection("socios"); ?>
  active
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="row d-flex justify-content-center">
   <div class="col-6 ">
     <div class="row">
       <div class="card">
         <h1 class="card-title mt-4 mb-4 alert-primary text-center">Registro de personas</h1>
         <div class="row d-flex justify-content-center">
           <div class="col-6">
             <div class="row d-flex justify-content-center">
               <div class="col-12">
                 <form method="POST" action="<?php echo e(url("registro_director")); ?>">
                   <?php echo csrf_field(); ?>
                        <div class="row">
                          <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control <?php $__errorArgs = ['name_art'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       id="nombre_art" placeholder="nombre" name="nombre_art">
                                <label for="nombre_art">Nombre Artistico</label>
                                <?php $__errorArgs = ['name_art'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control <?php $__errorArgs = ['name_art'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       id="nombre_real" placeholder="nombre" name="id_persona">
                                <label for="nombre_real">Nombre Real</label>
                                <?php $__errorArgs = ['name_art'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                          </div>
                        </div>
                        <div class="row my-5 d-flex justify-content-center">
                            <div class="col-3"></div>
                            <div class="col-3">
                              <a href="<?php echo e(url("registro_director")); ?>" class="btn btn-danger mb-4 text-white"><span class="icon-arrow-thin-left" data-toggle="tooltip" title="Regresar al menu principal">Cancelar</span></a>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/efren/Documentos/Proyectos_php/VideoClub/resources/views/director/create.blade.php ENDPATH**/ ?>