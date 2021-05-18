

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('users')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('user.affecteUser',['user'=>request()->user, 'language'=>app()->getLocale()] )); ?>">
                        <?php echo csrf_field(); ?>

                        

                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">Compagnes</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = (\App\User::where('idOrganisation',request()->user)->get()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th scope="row">1</th>
                            <td name="idUser"><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td>
                            <?php $__currentLoopData = (\App\Compagne::where('id_Organisation',request()->user)->get()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compagne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($compagne->numCompagne); ?><input type="checkbox" name="compagne" value="<?php echo e($compagne->id_Compagne); ?>"><br/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" > 
                                     affect
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/user/affecteUser.blade.php ENDPATH**/ ?>