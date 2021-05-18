

<?php $__env->startSection('content'); ?>
<div class="container"><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header"><?php echo e(__('evaluation subject')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('user.sujet',['sujet'=>request()->sujet, 'language'=>app()->getLocale()] )); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row"> 
                        <?php $__currentLoopData = (\App\Sujet::where('id','13')->get()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sujet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label>Subject title: <?php echo e($sujet->titre); ?></label>
                            <label>Subject description: <?php echo e($sujet->description); ?></label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <ul class="list-group">
                        <?php $__currentLoopData = (\App\Dimension::where('idSujet','15')->get()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dimension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item list-group-item-secondary" name="dimension" value="<?php echo e($dimension->id); ?>"><?php echo e($dimension->titre); ?></li>
                        <?php $__currentLoopData = (\App\Critere::where('idCompagne','61')->get()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $critere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($critere->titre); ?><input type="radio" name="critere" value="<?php echo e($critere->id); ?>"><br/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul> <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4" >
                                <button type="submit" class="btn btn-primary" > 
                                  Submit the questionnaire
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

<?php echo $__env->make('user.accederQuestionnaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\myapp\resources\views/user/sujet.blade.php ENDPATH**/ ?>