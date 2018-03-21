<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo asset('css/general/all-options.css')?>" type="text/css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<ul class="main-content">
    <?php $__currentLoopData = $markets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('markets.show', $market)); ?>">
            <li class="market">
                <h3><?php echo e($market->name); ?></h3>
                <img src="images/graphic-shop.png">
                <h4><?php echo e($market->city); ?></h4>
                <h4><?php echo e($market->website); ?></h4>
            </li>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
    <a href="<?php echo e(route('markets.create')); ?>"><button>+</button></a>
<?php echo e($markets->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>