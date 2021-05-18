

<?php $__env->startSection('content'); ?>

<center>
<form action="<?php echo e(route('sujet.dimension',['id'=>request()->id, 'language'=>app()->getLocale()] )); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h5 class="card-title">Dimension Sujet d'évaluation</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Titre de dimension</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="titre">
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Type</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="type">
</textarea>
    </div>
    </li>
    <li class="list-group-item">
    <div>
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="number" class="form-control"  aria-describedby="emailHelp" name="nombre">
</textarea>
    </div>
    </li>
  </ul>
  
  <button type="submit" class="btn btn-primary" name="btnCreerC">Ajouter le dimension</button>
  
</div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/sujet/dimension.blade.php ENDPATH**/ ?>