<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo asset('css/general/all-options.css')?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<ul class="main-content">
    <?php $__currentLoopData = $farms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $farm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('farms.show', $farm)); ?>">
            <li class="farm">
                <h3><?php echo e($farm->name); ?></h3>
                <img src="images/graphic-farm.png">
                <h4><?php echo e($farm->city); ?></h4>
                <h4><?php echo e($farm->website); ?></h4>
            </li>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
    <a href="<?php echo e(route('farms.create')); ?>"><button>+</button></a>
<?php echo e($farms->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>