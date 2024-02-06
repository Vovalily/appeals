<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('answer.add', $appeal->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <textarea type="text" name="answer" placeholder="Ответ"><?php echo e($appeal->answer); ?></textarea>
            <label>Закрепить</label>
            <input type="checkbox" name="is_fixed" <?php if($appeal->is_fixed == 1): ?> checked <?php endif; ?>>

        <button type="submit">Отправить</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/show_appeal.blade.php ENDPATH**/ ?>