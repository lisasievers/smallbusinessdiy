<div class="signupstage">
<?php $__env->startSection('page_heading','List of Websites from i will do IT'); ?>
</div>
<?php $__env->startSection('section'); ?>
<div class="col-sm-12 ">
	 <?php if( Auth::user()->type == 'admin'): ?>
	    <?php echo $__env->make('layouts.partials.admin_iwilldoitusers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
	 <?php else: ?>
	    <?php echo $__env->make('layouts.partials.userdash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
	 <?php endif; ?>
     
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>