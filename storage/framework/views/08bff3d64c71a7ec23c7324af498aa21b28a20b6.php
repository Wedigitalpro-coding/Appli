

<?php $__env->startSection('content'); ?>



<center>
<form action="<?php echo e(route('sujet.voir',['id'=>request()->id,'language'=>app()->getLocale()])); ?>" method="POST">
<?php echo csrf_field(); ?>
<div>
      <select class="form-select" aria-label="Default select example" name="ssujet">
         <?php $__currentLoopData = (\App\Sujet::all()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($sujet->id); ?>"><?php echo e($sujet->titre); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div><br> <br>
      <button type="submit" class="btn btn-primary" name="btnaffecteS">Ajouter le sujet</button>
      </form> 
<br><br>

</div>

</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/sujet/voir.blade.php ENDPATH**/ ?>