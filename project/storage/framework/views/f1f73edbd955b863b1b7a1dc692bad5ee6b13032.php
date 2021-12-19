<ul class="sidebar-menu">


    <li class="nav-item <?php if(request()->is('/')): ?> active <?php endif; ?> ">
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


    <li class="nav-item <?php if(request()->is('forms')): ?> active <?php endif; ?>  ">
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

    <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#blog" aria-expanded="true"
            aria-controls="collapseTable">
            <i class="fas fa-fw fa-newspaper"></i>
            <span><?php echo e(__('Blog')); ?></span>
        </a>
        <div id="blog" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link" href="<?php echo e(route('admin-blog-index')); ?>"><?php echo e(__('Blog Post')); ?></a>
            </div>
        </div>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#language" aria-expanded="true"
            aria-controls="collapseTable">
            <i class="fas fa-file-code"></i>
            <span><?php echo e(__('Language')); ?></span>
        </a>
        <div id="language" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link" href="<?php echo e(route('admin-lang-index')); ?>"><?php echo e(__('Website Language')); ?></a>


            </div>
        </div>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#social" aria-expanded="true"
            aria-controls="collapseTable">
            <i class="fas fa-paper-plane"></i>
            <span><?php echo e(__('Social Settings')); ?></span>
        </a>
        <div id="social" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link" href="<?php echo e(route('admin-social-index')); ?>"><?php echo e(__('Social Links')); ?></a>
                <a class="nav-link" href="<?php echo e(route('admin-social-facebook')); ?>"><?php echo e(__('Facebook Login')); ?></a>
                <a class="nav-link" href="<?php echo e(route('admin-social-google')); ?>"><?php echo e(__('Google Login')); ?></a>

            </div>
        </div>
    </li>

    <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(route('admin.movie.index')); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span><?php echo e(__('Movie')); ?></span>
        </a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#showTable" aria-expanded="true"
            aria-controls="collapseTable">
            <i class="fa fa-tv"></i>
            <span><?php echo e(__('Tv Show')); ?></span>
        </a>
        <div id="showTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link" href="<?php echo e(route('admin-show-index')); ?>"><?php echo e(__('Shows')); ?></a>
                <a class="nav-link" href="<?php echo e(route('admin-session-index')); ?>"><?php echo e(__('Seasons')); ?></a>
                <a class="nav-link" href="<?php echo e(route('admin-episode-index')); ?>"><?php echo e(__('Episodes')); ?></a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('admin-subscription-plan-index')); ?>">
            <i class="fas fa-fw fa-palette"></i>
            <span><?php echo e(__('Subscription Plan')); ?></span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link has-dropdown" data-toggle="dropdown">
            <i class="fas fa-cogs"></i>
            <span><?php echo e(__('General Settings')); ?></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="<?php echo e(route('admin-gs-logo')); ?>"><?php echo e(__('Logo')); ?></a>
            </li>

            <li>
                <a class="nav-link" href="<?php echo e(route('admin-gs-fav')); ?>"><?php echo e(__('Favicon')); ?></a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo e(route('admin-gs-load')); ?>"><?php echo e(__('Loader')); ?></a>

            </li>

            <li>

                <a class="nav-link" href="<?php echo e(route('admin-gs-breadcumb')); ?>"><?php echo e(__('Breadcumb Banner')); ?></a>

            </li>

            <li>

                <a class="nav-link" href="<?php echo e(route('admin-gs-contents')); ?>"><?php echo e(__('Website Content')); ?></a>

            </li>

            <li>

                <a class="nav-link" href="<?php echo e(route('admin-gs-success')); ?>"><?php echo e(__('Success Messages')); ?></a>
            </li>

            <li>

                <a class="nav-link" href="<?php echo e(route('admin-gs-footer')); ?>"><?php echo e(__('Footer')); ?></a>

            </li>

            <li>


                <a class="nav-link" href="<?php echo e(route('admin-gs-error')); ?>"><?php echo e(__('Error Page')); ?></a>

            </li>
        </ul>

    </li>



    <li class="nav-item dropdown">
        <a class="nav-link has-dropdown" data-toggle="dropdown">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Menu Page Settings')); ?></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="<?php echo e(route('admin-faq-index')); ?>"><?php echo e(__('FAQ Page')); ?></a>
            </li>

            <li>

                <a class="nav-link" href="<?php echo e(route('admin-page-index')); ?>"><?php echo e(__('Other Pages')); ?></a>

            </li>
        </ul>

    </li>

    <li class="nav-item dropdown">
        <a class="nav-link has-dropdown" data-toggle="dropdown">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Sports')); ?></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="<?php echo e(route('admin-sports-cat-index')); ?>"><?php echo e(__('Sports Category')); ?></a>
            </li>
            <li>
                <a class="nav-link" href="<?php echo e(route('admin-sports-video-index')); ?>"><?php echo e(__('Sports Video')); ?></a>
            </li>
        </ul>



        </div>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link has-dropdown" data-toggle="dropdown">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Payment Settings')); ?></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="<?php echo e(route('admin-gs-payments')); ?>"><?php echo e(__('Payment Information')); ?></a>
            </li>

            <li>

                <a class="nav-link" href="<?php echo e(route('admin-currency-index')); ?>"><?php echo e(__('Currencies')); ?></a>
            </li>
        </ul>
    </li>


    <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#email" aria-expanded="true"
            aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span><?php echo e(__('Email Settings')); ?></span>
        </a>
        <div id="email" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="nav-link" href="<?php echo e(route('admin-mail-config')); ?>"><?php echo e(__('Email Configurations')); ?></a>
                <a class="nav-link" href="<?php echo e(route('admin-group-show')); ?>"><?php echo e(__('Group Email')); ?></a>
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
</ul>
<?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/load/roles/super.blade.php ENDPATH**/ ?>