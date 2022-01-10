 <nav class="navbar navbar-expand-lg main-navbar">

     <ul class="navbar-nav mr-auto icon-menu">
         
     </ul>

     <ul class="navbar-nav navbar-right">

         <li>
             <a target="_blank" href="<?php echo e(route('front.index'), false); ?>" class="nav-link nav-link-lg"><i
                     class="fas fa-home pr-1"></i><span><?php echo e(__('Visit Frontend'), false); ?></span></a>
         </li>

         <li class="dropdown"><a href="#" data-toggle="dropdown"
                 class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                 <img alt="image"
                     src="<?php echo e(asset('assets/images/'.auth()->guard('admin')->user()->photo), false); ?>"
                     class="rounded-circle mr-1">
                 <div class="d-sm-none d-lg-inline-block"><?php echo e(Auth::guard('admin')->user()->name, false); ?></div>
             </a>
             <div class="dropdown-menu dropdown-menu-right">
                 <a href="<?php echo e(route('admin.profile'), false); ?>" class="dropdown-item has-icon">
                     <i class="far fa-user"></i> <?php echo e(__('Profile'), false); ?>

                 </a>

                 <div class="dropdown-divider"></div>
                 <a href="<?php echo e(route('admin.logout'), false); ?>" class="dropdown-item has-icon text-danger">
                     <i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout'), false); ?>

                 </a>
             </div>
         </li>
     </ul>
 </nav>
<?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/partials/topbar.blade.php ENDPATH**/ ?>