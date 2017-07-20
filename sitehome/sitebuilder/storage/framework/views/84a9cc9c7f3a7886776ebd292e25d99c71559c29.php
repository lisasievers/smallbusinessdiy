<div class="signupstage">
<?php $__env->startSection('page_heading','Welcome, '.Session::get('name'). '!'); ?>
</div>
<?php $__env->startSection('section'); ?>
<div class="col-sm-12 ">
<h3 class="stepscount">You have just <span class="clock">2</span> more steps to complete</h3>
        <?php echo $__env->make('layouts.partials.progress', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
        <form role="form" id="sign_form" method="post" action="<?php echo e(route('userwebsite.builtby')); ?>" >
           <div class=" setup-content2" id="step-2">
      <div class="col-xss-6 ">
        
          <h3 class="diy-color"> Pick a plan to get started.</h3>
          <div class="col-md-12">
            <label class="control-label">Do you want to build the website yourself? else, We will help you!!</label>
<div class="col-md-6">
  <div class="box-content youwill">
<div class="col-md-4">
                 <img src="<?php echo e(URL::to('src/images/icons/clipboard.svg')); ?>" />
             </div>    
             <div class="col-md-8">
                 <h3>Do IT For Me</h3>
               </div>
              <div class="col-md-nxt">If you'd rather leave the job to experts, just choose a template and our design team will whip up a magical site for you.</div>
<div class="col-md-121">
<div class="radiobox"><input type="radio" id="youwill" name="whodo" value="youwill" required=""><span class="youwilltext"></span></div>
</div>
</div>
</div>
<div class="col-md-6">
  <div class="box-content iwill">
<div class="col-md-4">
                 <img src="<?php echo e(URL::to('src/images/icons/user-interface.svg')); ?>" />
             </div>    
             <div class="col-md-8">
                 <h3>I Will Do IT</h3>
               </div>
            <div class="col-md-nxt">Design your website from scratch with our easy-to-use drag and drop tools. No technical skills required.</div>   
<div class="col-md-121">
<div class="radiobox"><input type="radio" id="iwill" name="whodo" value="iwill" required=""><span class="iwilltext"></span></div>  

</div>
</div>
</div>
<!--<div class="controls doradio">
<input type="radio" class="" id="pay_cash" name="whodo" value="iwill" style="margin-left:2px;margin-right:10px" required=""><label for="pay_cash"> I will <span class="diy-color">DO IT</span></label>
<input type="radio" class="" id="pay_adjust" name="whodo" value="youwill" style="margin-left:50px;margin-right:10px;" required=""><label for="pay_adjust"> <span class="diy-color">DO IT</span> for me</label>
</div>-->
          </div>
            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
          <div class="form-group-footer">
          <a href="<?php echo e(route('userwebsite.domain')); ?>" class="btn btn-default prevDoBtn btn pull-left">Previous</a>
          <button class="btn btn-primary  btn pull-right" type="submit">Next</button>
       </div>
      </div>
    </div>

  </form>
  
</div>
   </div>
   <div class="clear"></div>       
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>