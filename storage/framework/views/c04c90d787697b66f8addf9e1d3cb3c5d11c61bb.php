

<?php $__env->startSection('content'); ?>
<?php
use Illuminate\Http\Request;
?>


<center>
<form action="<?php echo e(route('compagne.voir',['language'=>app()->getLocale()])); ?>" method="POST">
<?php echo csrf_field(); ?>
<div>
      <select class="form-select" aria-label="Default select example" name="organisation">
         <?php $__currentLoopData = (\App\Organisation::all()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organisation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option  value="<?php echo e($organisation->id); ?>"><?php echo e($organisation->nom); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      </form> 
<br><br>

<input type="submit" name="answer" value="afficher les compagnes" onclick="showDiv()" />

<div id="compagne" style="display:none;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">date Reception</th>
      <th scope="col">Date Envoi</th>
      <th scope="col">dernier date evaluation</th>
      <th scope="col">numero de compagne</th>
    </tr>
  </thead>
  <tbody>
  
  <?php $__currentLoopData = (\App\Compagne::where('id_Organisation',$organisation->id)->get()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compagne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo e($compagne->dateRecepttion); ?></td>
      <td><?php echo e($compagne->dateEnvoie); ?></td>
      <td><?php echo e($compagne->dernierDelaiEvaluation); ?></td>
      <td><?php echo e($compagne->numCompagne); ?></td>
      <td> <a href="<?php echo e(route('sujet.voir',['id'=>$compagne->id_Compagne, 'language'=>app()->getLocale()] )); ?>" class="card-link">Ajouter Sujet</a></td>
      <td> <a href="<?php echo e(route('compagne.critere',['id'=>$compagne->id_Compagne, 'language'=>app()->getLocale()] )); ?>" class="card-link">Ajouter Critère</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<script>
function showDiv() {
   document.getElementById('compagne').style.display = "block";
}
</script>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/compagne/voir.blade.php ENDPATH**/ ?>