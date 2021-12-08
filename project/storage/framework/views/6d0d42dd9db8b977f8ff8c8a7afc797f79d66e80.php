
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
       
        <li class="nav-item dropdown no-arrow mx-1" id="notf_order"> 
            <a class="nav-link" href=""> <i class="fas fa-globe-americas text-white"></i></a>
        </li>
       
        
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle ShowLanguageImage" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
              
                <img class="img-profile rounded-circle " src="<?php echo e(Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo) :  asset('assets/images/admins/admin.jpg')); ?>" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small"><?php echo e(Auth::guard('admin')->user()->name); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <?php echo e(__('Profile')); ?>

                </a>
            <a class="dropdown-item" href="<?php echo e(route('admin.password')); ?>">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    <?php echo e(__('Settings')); ?>

                </a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <?php echo e(__('Logout')); ?>

                </a>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH D:\xampp\htdocs\videohub\project\resources\views/admin/partials/topbar.blade.php ENDPATH**/ ?>