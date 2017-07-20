<script>
    $(document).ready(function () {
      var sld= $('#chosensite').val();
    $('#whichweb').attr('href','site/'+sld);
 $("#chosensite").change(function () {
    //  console.log('rts');
    var sld= $(this).val();
    $('#whichweb').attr('href','site/'+sld);
    });

 });

  
</script>
<script>

</script>
<header class="site-header">
  <a class="brand-navbar" href="<?php echo e($cdata[1]); ?>">
       <img class="logo-inside" src="<?php echo e(url('images/SMBDIY_Logo2.png')); ?>" alt="SMBDIY">
    </a>

  <a href="#" class="nav-toggle">
    <div class="hamburger hamburger--htla">
      <span>toggle menu</span>
    </div>
  </a>

<div class="sitelists">
  <?php if( isset($sites) && count( $sites ) > 0 ): ?>
<label>List of sites</label>
<select id="chosensite">
 
<?php foreach( $sites as $site ): ?>
<option value="<?php echo e($site['siteData']['id']); ?>"><?php echo e($site['siteData']['site_name']); ?></option>
 <?php endforeach; ?>

  </select>
 <?php endif; ?>
 </div> 
<?php if(Request::path() !=  'userwebsite') { ?> <a href="<?php echo e(route('userwebsite')); ?>">Create New Site</a> <?php } ?>
    <ul class="action-list">
      
      <li>
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
        <div class="dropdown-menu dropdown-menu-right notification-dropdown">
          <h6 class="dropdown-header">Notifications</h6>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> New User was Registered</a>
          <a class="dropdown-item" href="#"><i class="fa fa-comment"></i> A Comment has been posted.</a>
        </div>
      </li>
      <li>
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="avatar"><img src="<?php echo e(asset('src/assets/admin/img/avatars/avatar.png')); ?>" alt="Avatar"></a>
        <div class="dropdown-menu dropdown-menu-right notification-dropdown">
          <a class="dropdown-item" href="<?php echo e(url('settings')); ?>"><i class="fa fa-cogs"></i> Settings</a>
          <a class="dropdown-item" href="<?php echo e(url('logout')); ?>"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
      </li>
    </ul>
</header>
