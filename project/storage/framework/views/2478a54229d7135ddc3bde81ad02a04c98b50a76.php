<div id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__(@$gs->website_title), false); ?></a>
    </div>
    <?php if(Auth::guard('admin')->user()->IsSuper()): ?>
        <ul class="sidebar-menu">


            <li class="nav-item <?php if(request()->is('/')): ?> active <?php endif; ?> ">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard'), false); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><?php echo e(__('Dashboard'), false); ?></span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo e(route('category.index'), false); ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span><?php echo e(__('Manage Category'), false); ?></span>
                </a>
            </li>

            <li class="nav-item dropdown">

                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span><?php echo e(__('Manage Subscription'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>

                        <a class="nav-link" href="<?php echo e(route('admin.plan.features'), false); ?>">

                            <span><?php echo e(__('Subsciption Features'), false); ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('admin-subscription-plan-index'), false); ?>">

                            <span><?php echo e(__('Subscription Plan'), false); ?></span>
                        </a>

                    </li>

                </ul>

            </li>


            <li class="nav-item <?php if(request()->is('forms')): ?> active <?php endif; ?>  ">
                <a class="nav-link" href="<?php echo e(route('admin-cat-index'), false); ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span><?php echo e(__('Genres'), false); ?></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin-cast-crew-index'), false); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span><?php echo e(__('Cast & Crew'), false); ?></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.menu_builder.index'), false); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span><?php echo e(__('Menu Builder'), false); ?></span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin-user-index'), false); ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span><?php echo e(__('Manage Users'), false); ?></span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.clear.cache'), false); ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span><?php echo e(__('Clear Cache'), false); ?></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.custom.css'), false); ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span><?php echo e(__('Custom Css'), false); ?></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('admin.order.index'), false); ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span><?php echo e(__('Orders'), false); ?></span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span><?php echo e(__('Frontend Settings'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin.frontend.slider'), false); ?>"><?php echo e(__('Slider Manager'), false); ?></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span><?php echo e(__('General Settings'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('admin-gs-logo'), false); ?>"><?php echo e(__('Logo'), false); ?></a>
                    </li>

                    <li>
                        <a class="nav-link" href="<?php echo e(route('admin-gs-fav'), false); ?>"><?php echo e(__('Favicon'), false); ?></a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(route('admin-gs-load'), false); ?>"><?php echo e(__('Loader'), false); ?></a>

                    </li>

                    <li>

                        <a class="nav-link"
                            href="<?php echo e(route('admin-gs-breadcumb'), false); ?>"><?php echo e(__('Breadcumb Banner'), false); ?></a>

                    </li>

                    <li>

                        <a class="nav-link"
                            href="<?php echo e(route('admin-gs-contents'), false); ?>"><?php echo e(__('Website Content'), false); ?></a>

                    </li>

                    <li>

                        <a class="nav-link"
                            href="<?php echo e(route('admin-gs-success'), false); ?>"><?php echo e(__('Success Messages'), false); ?></a>
                    </li>

                    <li>

                        <a class="nav-link" href="<?php echo e(route('admin-gs-footer'), false); ?>"><?php echo e(__('Footer'), false); ?></a>

                    </li>

                    <li>


                        <a class="nav-link" href="<?php echo e(route('admin-gs-error'), false); ?>"><?php echo e(__('Error Page'), false); ?></a>

                    </li>

                    <li>


                        <a class="nav-link"
                            href="<?php echo e(route('admin.general.cookie'), false); ?>"><?php echo e(__('GDPR Consent'), false); ?></a>

                    </li>
                </ul>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span><?php echo e(__('Payment Gateways Manage'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin.payment.stripe'), false); ?>"><?php echo e(__('Stripe Settings'), false); ?></a>
                    </li>
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin.payment.paypal'), false); ?>"><?php echo e(__('Paypal Settings'), false); ?></a>
                    </li>
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin.payment.bank'), false); ?>"><?php echo e(__('Bank Settings'), false); ?></a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span><?php echo e(__('Languages'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin-lang-index'), false); ?>"><?php echo e(__('Website Language'), false); ?></a>
                    </li>


                </ul>
            </li>  
            
            
            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span><?php echo e(__('Manage Blog'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('admin-blog-index'), false); ?>"><?php echo e(__('Blog Post'), false); ?></a>
                    </li>


                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span><?php echo e(__('Social Settings'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin-social-index'), false); ?>"><?php echo e(__('Social Links'), false); ?></a>

                    </li>

                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin-social-facebook'), false); ?>"><?php echo e(__('Facebook Login'), false); ?></a>


                    </li>

                    <li>

                        <a class="nav-link"
                            href="<?php echo e(route('admin-social-google'), false); ?>"><?php echo e(__('Google Login'), false); ?></a>

                    </li>


                </ul>
            </li>






            <li class="nav-item ">
                <a class="nav-link" href="<?php echo e(route('admin.movie.index'), false); ?>">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span><?php echo e(__('Movie'), false); ?></span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#showTable" aria-expanded="true"
                    aria-controls="collapseTable">
                    <i class="fa fa-tv"></i>
                    <span><?php echo e(__('Tv Show'), false); ?></span>
                </a>
                <div id="showTable" class="collapse" aria-labelledby="headingTable"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="nav-link" href="<?php echo e(route('admin-show-index'), false); ?>"><?php echo e(__('Shows'), false); ?></a>
                        <a class="nav-link"
                            href="<?php echo e(route('admin-session-index'), false); ?>"><?php echo e(__('Seasons'), false); ?></a>
                        <a class="nav-link"
                            href="<?php echo e(route('admin-episode-index'), false); ?>"><?php echo e(__('Episodes'), false); ?></a>
                    </div>
                </div>
            </li>






            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span><?php echo e(__('Menu Page Settings'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('admin-faq-index'), false); ?>"><?php echo e(__('FAQ Page'), false); ?></a>
                    </li>

                    <li>

                        <a class="nav-link"
                            href="<?php echo e(route('admin-page-index'), false); ?>"><?php echo e(__('Other Pages'), false); ?></a>

                    </li>
                </ul>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span><?php echo e(__('Sports'), false); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin-sports-cat-index'), false); ?>"><?php echo e(__('Sports Category'), false); ?></a>
                    </li>
                    <li>
                        <a class="nav-link"
                            href="<?php echo e(route('admin-sports-video-index'), false); ?>"><?php echo e(__('Sports Video'), false); ?></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-envelope"></i>
                    <span><?php echo e('Email Manager', false); ?></span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link"
                            href="<?php echo e(route('admin.email.config'), false); ?>"><?php echo e('Email
                            Configure', false); ?></a>
                    </li>
                    <li><a class="nav-link"
                            href="<?php echo e(route('admin.email.templates'), false); ?>"><?php echo e('Email
                            Templates', false); ?></a>
                    </li>
                </ul>
            </li>

            




</div>



<?php endif; ?>
</div>
<?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>