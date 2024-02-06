<?php use App\Enums\AppealEnum; ?>


<?php $__env->startSection('content'); ?>

    <table>
        <thead>
        <tr>
            <th>Человек</th>
            <th>Вопрос</th>
            <th>Ответ</th>
            <th>Статус</th>
            <th>Дата</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $appeals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($appeal->user_name); ?></td>
                <td><?php echo e($appeal->question); ?></td>
                <td><?php echo e($appeal->answer); ?></td>
                <td><?php echo e($appeal->status); ?></td>
                <td><?php echo e($appeal->created_at); ?></td>
                <td><a href="<?php echo e(route('appeals.destroy', $appeal->id)); ?>">Удалить</a></td>
                <td><a href="<?php echo e(route('appeals.show', $appeal->id)); ?>">Перейти</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/index.blade.php ENDPATH**/ ?>