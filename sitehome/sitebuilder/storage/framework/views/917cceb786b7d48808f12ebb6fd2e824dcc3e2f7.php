<!DOCTYPE html>
<html>
<head>
    <title><?php echo e($cdata[0]); ?></title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
   
    <link href="<?php echo e(URL::to('src/assets/admin/css/laraspace.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::to('src/css/login.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::to('src/css/style.css')); ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="<?php echo e(URL::to('src/images/favicon.ico')); ?>">
    
    <?php echo $__env->yieldContent('styles'); ?>
            <!-- Load JS here for greater performance <?php echo $__env->make('layouts.partials.favicons', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
 <script src="<?php echo e(asset('src/js/signup.js')); ?>"></script>
</head>
<body id="app" class="layout-default skin-default">
    <?php echo $__env->make('layouts.partials.laraspace-notifs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('layouts.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="mobile-menu-overlay"></div>
    
    <?php echo $__env->make('layouts.partials.sidebar',['type' => 'default'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--<?php if(config('laraspace.skintools')): ?>
        <?php echo $__env->make('layouts.partials.skintools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?> -->

    <script src="<?php echo e(URL::to('src/assets/admin/js/core/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('src/assets/admin/js/demo/skintools.js')); ?>"></script>
<script src="<?php echo e(URL::to('src/bootstrap/js/bootstrap-checkbox.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
