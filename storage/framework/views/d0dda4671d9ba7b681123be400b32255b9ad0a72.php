

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('users')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('user.user', app()->getLocale())); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right"><?php echo e(__('Organization')); ?></label>

                            <div class="col-md-6">
                            <select class="form-control" aria-label="Default select example" name="organisation">
                            <?php $__currentLoopData = (\App\Organisation::all()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organisation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option  value="<?php echo e($organisation->id); ?>"><?php echo e($organisation->nom); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" > 
                                     show users
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/user/user.blade.php ENDPATH**/ ?>