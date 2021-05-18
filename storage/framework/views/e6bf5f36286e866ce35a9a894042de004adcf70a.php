

<?php $__env->startSection('content'); ?>



<div class="card mb-3" style="max-width: 540px;" >
  <div class="row g-0">
    <div class="col-md-4" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color:#8B008B;" >Nouvelle organisation</h5>
        <p class="card-text">Ce formulaire vous permettre de créer l'organisation que vous souhaite évaluer</p> <br>
            <form action="#" method="POST">
                 <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" name="nom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Domaine</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="domaine">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Spécialité</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="specialite">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Addresse</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="adresse">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre de départements</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nbrDepartement">
                </div>
                <button type="submit" class="btn btn-primary" name="btnCreer">Créer</button>
            </form><br>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/questionnaire.blade.php ENDPATH**/ ?>