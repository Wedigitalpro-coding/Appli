<?php $__env->startSection('content'); ?>
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                            <ul class="navbar-nav mr-auto">
                    <div class="content" id="app">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo e(route('user.user', app()->getLocale())); ?>"><?php echo e(__('New Survey')); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="<?php echo e(route('sujet.create', app()->getLocale())); ?>"><?php echo e(__('Subject')); ?></a>
                        <a class="nav-link" href="#"><?php echo e(__('Visualization')); ?></a>
                        <a class="nav-link" href="<?php echo e(route('compagne.voir', app()->getLocale())); ?>"><?php echo e(__('Companion')); ?></a>
                        <a class="nav-link" href="<?php echo e(route('compagne.voir', app()->getLocale())); ?>"><?php echo e(__('Users')); ?></a>
                    </div>
                    </div>
                </div>
                    </ul>
                       </div>
                       
                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/home.blade.php ENDPATH**/ ?>