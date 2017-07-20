<div class="signupstage">
<?php $__env->startSection('page_heading','Welcome, '.Session::get('name'). '!'); ?>
</div>
<?php $__env->startSection('section'); ?>
<div class="col-sm-12 ">
<h3 class="stepscount">You have just <span class="clock">3</span> more steps to complete</h3>
        <?php echo $__env->make('layouts.partials.progresspay', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>