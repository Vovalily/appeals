<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('appeals.create')); ?>">Cоздать</a>
<a href="<?php echo e(route('admin.index')); ?>">Авторизация</a>
<div class="d-flex flex-wrap gap-2">
    <?php dd(  unset($appeals);); ?>
<?php $__currentLoopData = $apeals_fixed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($appeal->user_name); ?></h5>
                    <div>
                        <p class="card-text"><?php echo e($appeal->question); ?></p>
                    </div>
                    <div>
                        <p class="card-text"><?php echo e($appeal->answer); ?></p>
                    </div>
                </div>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="d-flex flex-wrap gap-2">
    <?php $__currentLoopData = $appeals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($appeal->user_name); ?></h5>
                <div>
                    <p class="card-text"><?php echo e($appeal->question); ?></p>
                </div>
                <div>
                    <p class="card-text"><?php echo e($appeal->answer); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    <?php echo e($appeals->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/appeals/index.blade.php ENDPATH**/ ?>