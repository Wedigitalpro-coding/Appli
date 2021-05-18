

<?php $__env->startSection('content'); ?>

<div class="card mb-3" style="max-width: 540px;" >
  <div class="row g-0">
    <div class="col-md-4" >     <img src="https://global-switzerland.ch/wp-content/uploads/2017/10/global-switzerland_entreprise_symbole.png">

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color:#8B008B;" ><?php echo e(__('New Organization')); ?></h5>
        <p class="card-text"><?php echo e(__('This form will allow you to create the organization you wish evaluate')); ?></p> <br>
            <form action="<?php echo e(route('organisation', app()->getLocale())); ?>" method="POST">
                 <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Name')); ?></label>
                    <input type="text" class="form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  aria-describedby="emailHelp" name="nom">
                 <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                  <?php echo e($errors->first('nom')); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
               
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><?php echo e(__('field')); ?></label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="domaine">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><?php echo e(__('Speciality')); ?></label>
                    <input type="text" class="form-control <?php $__errorArgs = ['specialite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleInputPassword1" name="specialite">
                    <?php $__errorArgs = ['specialite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                  <?php echo e($errors->first('specialite')); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><?php echo e(__('address')); ?></label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="adresse">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><?php echo e(__('Number of departements')); ?></label>
                    <input type="text" class="form-control <?php $__errorArgs = ['nbrDepartement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleInputPassword1" name="nbrDepartement">
                    <?php $__errorArgs = ['nbrDepartement'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                  <?php echo e($errors->first('nbrDepartement')); ?>

                  </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="btn btn-primary" name="btnCreer"><?php echo e(__('Create')); ?></button>
            </form>
            
            <br>
      </div>

      
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/organisation.blade.php ENDPATH**/ ?>