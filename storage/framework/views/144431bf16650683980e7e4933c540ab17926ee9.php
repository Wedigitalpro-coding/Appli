

<?php $__env->startSection('content'); ?>

<center>
<form action="<?php echo e(route('compagne.rajout',['id'=>request()->id, 'language'=>app()->getLocale()] )); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title"><?php echo e(__('add other companion')); ?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Send Date')); ?></label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="dateEnvoie">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Date of receipt')); ?></label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="dateReception">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('deadline for evaluation')); ?></label>
    <input type="date" class="form-control"  aria-describedby="emailHelp" name="dernierDateEvaluation">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Companion number')); ?></label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="numCompagne">
    </div>
    </li>
    <li class="list-group-item">
    <div>
   
 </div>
    </li>
  </ul>
  <button type="submit" class="btn btn-primary" name="btnCreerC"><?php echo e(__('Add companion')); ?></button>
  <div class="card-body">
    
    <a href="<?php echo e(route('sujet.create',['id'=>request()->id, 'language'=>app()->getLocale(), 'idC'=>request()->idC] )); ?>" class="card-link"><?php echo e(__('Add a subject')); ?></a>
  </div>
</div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/compagne/rajout.blade.php ENDPATH**/ ?>