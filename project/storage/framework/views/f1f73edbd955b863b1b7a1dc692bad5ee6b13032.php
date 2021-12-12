<ul class="scroll-menu">

    <hr class="sidebar-divider my-0">
    <li class="nav-item <?php if( request()->is('/') ): ?> active <?php endif; ?> ">
        <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><?php echo e(__('Dashboard')); ?></span></a>
    </li>
    <li class="nav-item ">
    <a class="nav-link" href="<?php echo e(route('category.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span><?php echo e(__('Manage Movie Category')); ?></span>
        </a>
    </li>
    
    <li class="nav-item ">
    <a class="nav-link" href="<?php echo e(route('admin.plan.features')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span><?php echo e(__('Manage Subsciption Features')); ?></span>
        </a>
    </li>
    
    
    <li class="nav-item <?php if( request()->is('forms') ): ?> active <?php endif; ?>  ">
    <a class="nav-link" href="<?php echo e(route('admin-cat-index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span><?php echo e(__('Genres')); ?></span>
        </a>
    </li>



    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('admin-user-index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span><?php echo e(__('Customers')); ?></span>
        </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('admin.order.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span><?php echo e(__('Orders')); ?></span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin-cast-crew-index')); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><?php echo e(__('Cast & Crew')); ?></span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#blog" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-newspaper"></i>
    <span><?php echo e(__('Blog')); ?></span>
        </a>
        <div id="blog" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-blog-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Blog Post')); ?></a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#language" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-file-code"></i>
    <span><?php echo e(__('Language')); ?></span>
        </a>
        <div id="language" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-lang-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Website Language')); ?></a>
                
                
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#social" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-paper-plane"></i>
    <span><?php echo e(__('Social Settings')); ?></span>
        </a>
        <div id="social" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-social-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Social Links')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-social-facebook')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Facebook Login')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-social-google')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Google Login')); ?></a>
                
            </div>
        </div>
    </li>

    <li class="nav-item ">
    <a class="nav-link" href="<?php echo e(route('admin.movie.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span><?php echo e(__('Movie')); ?></span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#showTable" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fa fa-tv"></i>
            <span><?php echo e(__('Tv Show')); ?></span>
        </a>
        <div id="showTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo e(route('admin-show-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Shows')); ?></a>
            <a class="collapse-item" href="<?php echo e(route('admin-session-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Seasons')); ?></a>
            <a class="collapse-item" href="<?php echo e(route('admin-episode-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Episodes')); ?></a>
            </div>
        </div>
    </li>
    
    <li class="nav-item">
    <a class="nav-link" href="<?php echo e(route('admin-subscription-plan-index')); ?>">
            <i class="fas fa-fw fa-palette"></i>
            <span><?php echo e(__('Subscription Plan')); ?></span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ganeral-setting" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-cogs"></i>
            <span><?php echo e(__('General Settings')); ?></span>
        </a>
        <div id="ganeral-setting" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-gs-logo')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Logo')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-gs-fav')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Favicon')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-gs-load')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Loader')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-gs-breadcumb')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Breadcumb Banner')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-gs-contents')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Website Content')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-gs-success')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Success Messages')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-gs-footer')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Footer')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-gs-error')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Error Page')); ?></a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Menu Page Settings')); ?></span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-faq-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('FAQ Page')); ?></a>
                
                <a class="collapse-item" href="<?php echo e(route('admin-page-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Other Pages')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Sports" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Sports')); ?></span>
        </a>
        <div id="Sports" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-sports-cat-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Sports Category')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-sports-video-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Sports Video')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Payment Settings')); ?></span>
        </a>
        <div id="payment" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-gs-payments')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Payment Information')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-currency-index')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Currencies')); ?></a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#email" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Email Settings')); ?></span>
        </a>
        <div id="email" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?php echo e(route('admin-mail-config')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Email Configurations')); ?></a>
                <a class="collapse-item" href="<?php echo e(route('admin-group-show')); ?>"><i class="fas fa-angle-double-right"></i><?php echo e(__('Group Email')); ?></a>
            </div>
        </div>
    </li>




    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin-subs-index')); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><?php echo e(__('Subscribers')); ?></span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin-role-index')); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><?php echo e(__('Manage Role')); ?></span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin-staff-index')); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><?php echo e(__('Manage Staff')); ?></span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/load/roles/super.blade.php ENDPATH**/ ?>