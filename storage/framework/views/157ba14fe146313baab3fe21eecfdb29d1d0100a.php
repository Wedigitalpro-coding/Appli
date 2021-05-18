

<?php $__env->startSection('content'); ?>

<center>
<form action="<?php echo e(route('compagne.critereRajout',['id'=>request()->id, 'language'=>app()->getLocale(),'idC'=>request()->idC] )); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Ajouter un autre critère</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Titre de critère</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="titre">
    </div>
    </li>
    <li class="list-group-item">    
    </li>
  </ul> <br>
  <button type="submit" class="btn btn-primary" name="btnCreerC">Ajouter le critère</button><br><br>
  <a href="<?php echo e(route('compagne.proposition',['id'=>request()->id, 'language'=>app()->getLocale(), 'idC'=>request()->idC] )); ?>" class="card-link">ajouter propositions</a>
</div>
</form>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/compagne/critereRajout.blade.php ENDPATH**/ ?>