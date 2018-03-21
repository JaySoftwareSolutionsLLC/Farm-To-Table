<!-- This file is the layout file for all pages in the app, this helps keep the code DRY -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Farm to Market</title>
    <link rel="stylesheet" href="<?php echo asset('css/general/reset.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/general/main.css')?>" type="text/css">
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <header>
        <h2>Farm to Table</h2>
        <nav>
            <a href="<?php echo e(route('farms.index')); ?>"><h3>Farms</h3></a>
            <a href="<?php echo e(route('markets.index')); ?>"><h3>Markets</h3></a>
        </nav>
    </header>
    <?php if(count($errors) > 0): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <?php echo $__env->yieldContent('main'); ?>
</body>
</html>
