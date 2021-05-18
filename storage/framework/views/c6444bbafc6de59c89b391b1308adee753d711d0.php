

<?php $__env->startSection('content'); ?>
<?php
use Illuminate\Http\Request;
?>


<center>
    <br><br><br>
    <h1>Les campagnes</h1>
    <form method="POST" action="<?php echo e(route('user.questionnaire1', app()->getLocale())); ?>">
              <?php echo csrf_field(); ?>
    <ul class="list-group">
    <?php $__currentLoopData = (\App\Compagne::where('id_Organisation','131')->get()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compagne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="list-group-item list-group-item-danger" name="compagne" value="<?php echo e($compagne->id_Compagne); ?>"><a href="<?php echo e(route('user.sujet',['idC'=>request()->compagne, 'language'=>app()->getLocale()] )); ?>"><?php echo e($compagne->numCompagne); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </form>
    <br><br>


</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.accederQuestionnaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/user/questionnaire1.blade.php ENDPATH**/ ?>