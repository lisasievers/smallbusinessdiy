<div class="proname-left">
        <div class="col-md-4">
                 <img src="<?php echo e(URL::to('src/images/dude.png')); ?>" />
             </div>    
             <div class="col-md-8">
                 <p>Welcome! </br><span><?php echo e(Session::get('name')); ?></span></p>
               </div>
           </div>
 <div class="clear"></div>          
<ul class="side-nav metismenu nav" id="side-menu">
            
    <?php if(Request::path() ==  'userwebsite') { ?> 
        <li class="<?php if($page=='User Dashboard'){ echo 'active'; } ?>">
            <a href="<?php echo e(route('userdashboard')); ?>"><i class="fa fa-th-large" aria-hidden="true"></i> Back to Dashboard</a>
            
        </li>

<?php } if(Request::path() !=  'userwebsite') { //$data['page']='';  ?> 
       
            <li class="<?php if($page=='User Dashboard'){ echo 'active'; } ?>">
                <a href="<?php echo e(route('userdashboard')); ?>"> <i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</a>
            
             </li>

        <li class="<?php if($data['page']=='Domain Registration' || $data['page']=='Website Build' || $data['page']=='Getstart Website' || $data['page']=='Templates' || $data['page']=='Website Form'){ echo 'active'; } ?>">
            <a id="whichweb" href="#"><i class="fa fa-desktop" aria-hidden="true"></i> Website</a>
            
        </li>
        <li class="<?php if($page=='Reports Home'){ echo 'active'; } ?>">
            <a id="whichreport" href="<?php echo e(route('user.reportshome')); ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Reports Dashboard</a>
            
        </li>
        <?php if( Auth::user()->type != 'admin'): ?> 
        <li class="<?php if($page=='Website Addition'){ echo 'active'; } ?>">
            <a id="addsite" href="<?php echo e(route('user-reports-addition')); ?>"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Website for reports</a>
            
        </li>
        <li class="<?php if($page=='Reports Tools'){ echo 'active'; } ?>">
            <a id="reportstools" href="<?php echo e(route('user.showreports')); ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Reports Tools</a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(route('user.freereports')); ?>"> <i class="fa fa-snowflake-o" aria-hidden="true"></i> FREE</a></li>   
              <li><a href="<?php echo e(route('user.paidreports')); ?>"><i class="fa fa-superpowers" aria-hidden="true"></i> PAID</a></li>    
             </ul> 
        </li>
        <li class="<?php if($page=='Reports Tools'){ echo 'active'; } ?>">
            <a id="reportstools" href="<?php echo e(route('user.showreports')); ?>"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
            
        </li>
        <?php endif; ?>
        <?php if( Auth::user()->type == 'admin'): ?> 
        <li class="<?php if($data['page']=='I will do IT'){ echo 'active'; } ?>">
            <a id="iwilldoit" href="<?php echo e(route('iwilldoituser')); ?>"><i class="fa fa-tty" aria-hidden="true"></i></i> I Will Do IT</a>
            
        </li>
        <li class="<?php if($data['page']=='Do IT for me'){ echo 'active'; } ?>">
            <a id="doituser" href="<?php echo e(route('doitforuser')); ?>"><i class="fa fa-cubes" aria-hidden="true"></i> Do IT For Me</a>
            
        </li>
        <li class="<?php if($data['page']=='Payments'){ echo 'active'; } ?>">
            <a id="payments" href="<?php echo e(route('payments')); ?>"><i class="fa fa-usd" aria-hidden="true"></i> Payments</a>
            
        </li>
        <li class="<?php if($data['page']=='Email Job'){ echo 'active'; } ?>">
            <a id="emailjob" href="#"><i class="fa fa-reply" aria-hidden="true"></i> Email Job</a>
            
        </li>
         <li class="<?php if($page=='Reports Tools'){ echo 'active'; } ?>">
            <a id="reportstools" href="<?php echo e(route('user.showreports')); ?>"><i class="fa fa-users" aria-hidden="true"></i> User Settings</a>
            
        </li> 
        <li class="<?php if($page=='Reports Tools'){ echo 'active'; } ?>">
            <a id="reportstools" href="<?php echo e(route('user.showreports')); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Email Marketing</a>
            
        </li> 
        <?php endif; ?>
 <?php } ?>       
</ul>