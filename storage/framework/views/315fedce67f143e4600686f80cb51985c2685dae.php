<?php $__env->startSection('main'); ?>
<section>
    <h2><?php echo e($farm->name); ?></h2>

    <ul>
        <li>Location City: <?php echo e($farm->city); ?></li>
        <li>Website: <?php echo e($farm->website); ?></li>
    </ul>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>