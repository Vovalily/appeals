<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('appeals.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="user_name" placeholder="Имя">
        <textarea type="text" name="question" placeholder="Вопрос"></textarea>
        <button type="submit">Отправить</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/appeals/create.blade.php ENDPATH**/ ?>