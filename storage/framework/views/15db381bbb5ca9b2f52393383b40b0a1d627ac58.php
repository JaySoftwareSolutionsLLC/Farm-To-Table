<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo asset('css/general/creation.css')?>" type="text/css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <section class="content">
        <h1>New Farm</h1>
        <form action="<?php echo e(route('farms.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <!-- <?php echo e(csrf_field()); ?> -->
            <!-- <input type="hidden" name="_token" value="GlI9ThPtwYz0zLlWeankKpyaujLSBH+3KcHbbQbd6v0="> -->
            <label for="name">Farm Name</label>
            <input type="text" name="name">
            <label for="city">Farm City</label>
            <input type="text" name="city">
            <label for="website">Farm Website</label>
            <input type="text" name="website">
            <button type="submit">Create</button>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>