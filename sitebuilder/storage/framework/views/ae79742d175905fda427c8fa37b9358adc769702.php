<div class="signupstage">
<?php $__env->startSection('page_heading',''); ?>
</div>
<?php $__env->startSection('section'); ?>
<div class="col-sm-12 ">
	<h2>Free Report Tools</h2>
	<div class="col-md-3">
		<div class="tools-box">
		<a href="<?php echo e(route('user.qrcode.generation')); ?>">QR Code Generator</a>
	</div>
	</div>
     <div class="col-md-3">
     	<div class="tools-box">
     	<a href="<?php echo e(route('user.gmobiletest')); ?>">Mobile Friendly Test</a>
     </div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>