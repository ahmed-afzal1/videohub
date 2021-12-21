<div id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">{{ __(@$gs->website_title) }}</a>
    </div>
    @if (Auth::guard('admin')->user()->IsSuper())
        <ul class="sidebar-menu">


            <li class="nav-item @if (request()->is('/')) active @endif ">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>{{ __('Manage Category') }}</span>
                </a>
            </li>

            <li class="nav-item dropdown">

                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Manage Subscription') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>

                        <a class="nav-link" href="{{ route('admin.plan.features') }}">

                            <span>{{ __('Subsciption Features') }}</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('admin-subscription-plan-index') }}">

                            <span>{{ __('Subscription Plan') }}</span>
                        </a>

                    </li>

                </ul>

            </li>


            <li class="nav-item @if (request()->is('forms')) active @endif  ">
                <a class="nav-link" href="{{ route('admin-cat-index') }}">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>{{ __('Genres') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-cast-crew-index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>{{ __('Cast & Crew') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.menu_builder.index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>{{ __('Menu Builder') }}</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-user-index') }}">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>{{ __('Manage Users') }}</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.clear.cache') }}">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>{{ __('Clear Cache') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.custom.css') }}">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>{{ __('Custom Css') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.order.index') }}">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>{{ __('Orders') }}</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Frontend Settings') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin.frontend.slider') }}">{{ __('Slider Manager') }}</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('General Settings') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin-gs-logo') }}">{{ __('Logo') }}</a>
                    </li>

                    <li>
                        <a class="nav-link" href="{{ route('admin-gs-fav') }}">{{ __('Favicon') }}</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('admin-gs-load') }}">{{ __('Loader') }}</a>

                    </li>

                    <li>

                        <a class="nav-link"
                            href="{{ route('admin-gs-breadcumb') }}">{{ __('Breadcumb Banner') }}</a>

                    </li>

                    <li>

                        <a class="nav-link"
                            href="{{ route('admin-gs-contents') }}">{{ __('Website Content') }}</a>

                    </li>

                    <li>

                        <a class="nav-link"
                            href="{{ route('admin-gs-success') }}">{{ __('Success Messages') }}</a>
                    </li>

                    <li>

                        <a class="nav-link" href="{{ route('admin-gs-footer') }}">{{ __('Footer') }}</a>

                    </li>

                    <li>


                        <a class="nav-link" href="{{ route('admin-gs-error') }}">{{ __('Error Page') }}</a>

                    </li>

                    <li>


                        <a class="nav-link"
                            href="{{ route('admin.general.cookie') }}">{{ __('GDPR Consent') }}</a>

                    </li>
                </ul>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Payment Gateways Manage') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin.payment.stripe') }}">{{ __('Stripe Settings') }}</a>
                    </li>
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin.payment.paypal') }}">{{ __('Paypal Settings') }}</a>
                    </li>
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin.payment.bank') }}">{{ __('Bank Settings') }}</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>{{ __('Languages') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin-lang-index') }}">{{ __('Website Language') }}</a>
                    </li>


                </ul>
            </li>  
            
            
            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>{{ __('Manage Blog') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin-blog-index') }}">{{ __('Blog Post') }}</a>
                    </li>


                </ul>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>{{ __('Social Settings') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin-social-index') }}">{{ __('Social Links') }}</a>

                    </li>

                    <li>
                        <a class="nav-link"
                            href="{{ route('admin-social-facebook') }}">{{ __('Facebook Login') }}</a>


                    </li>

                    <li>

                        <a class="nav-link"
                            href="{{ route('admin-social-google') }}">{{ __('Google Login') }}</a>

                    </li>


                </ul>
            </li>
            
            
            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                   <span>{{ __('Tv Show') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                         <a class="nav-link" href="{{ route('admin-show-index') }}">{{ __('Shows') }}</a>

                    </li>

                    <li>
                        <a class="nav-link"
                            href="{{ route('admin-session-index') }}">{{ __('Seasons') }}</a>


                    </li>

                    <li>

                        <a class="nav-link"
                            href="{{ route('admin-episode-index') }}">{{ __('Episodes') }}</a>

                    </li>


                </ul>
            </li>






            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.movie.index') }}">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>{{ __('Movie') }}</span>
                </a>
            </li>

         






            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>{{ __('Menu Page Settings') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin-faq-index') }}">{{ __('FAQ Page') }}</a>
                    </li>

                    <li>

                        <a class="nav-link"
                            href="{{ route('admin-page-index') }}">{{ __('Other Pages') }}</a>

                    </li>
                </ul>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>{{ __('Sports') }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin-sports-cat-index') }}">{{ __('Sports Category') }}</a>
                    </li>
                    <li>
                        <a class="nav-link"
                            href="{{ route('admin-sports-video-index') }}">{{ __('Sports Video') }}</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-envelope"></i>
                    <span>{{ 'Email Manager' }}</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link"
                            href="{{ route('admin.email.config') }}">{{ 'Email
                            Configure' }}</a>
                    </li>
                    <li><a class="nav-link"
                            href="{{ route('admin.email.templates') }}">{{ 'Email
                            Templates' }}</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-role-index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>{{ __('Manage Role') }}</span>
                </a>
            </li> --}}




</div>


{{-- <li class="nav-item dropdown">
    <a class="nav-link has-dropdown" data-toggle="dropdown">
        <i class="fas fa-fw fa-columns"></i>
        <span>{{ __('Payment Settings') }}</span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{ route('admin-gs-payments') }}">{{ __('Payment Information') }}</a>
        </li>

        <li>

            <a class="nav-link" href="{{ route('admin-currency-index') }}">{{ __('Currencies') }}</a>
        </li>
    </ul>
</li>


<li class="nav-item dropdown">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#email" aria-expanded="true"
        aria-controls="collapsePage">
        <i class="fas fa-fw fa-columns"></i>
        <span>{{ __('Email Settings') }}</span>
    </a>
    <div id="email" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="nav-link" href="{{ route('admin-mail-config') }}">{{ __('Email Configurations') }}</a>
            <a class="nav-link" href="{{ route('admin-group-show') }}">{{ __('Group Email') }}</a>
        </div>
    </div>
</li>




<li class="nav-item">
    <a class="nav-link" href="{{ route('admin-subs-index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>{{ __('Subscribers') }}</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin-role-index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>{{ __('Manage Role') }}</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('admin-staff-index') }}">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>{{ __('Manage Staff') }}</span>
    </a>
</li>

<hr class="sidebar-divider">
<div class="version" id="version-ruangadmin"></div>
</ul>
@else
@include('admin.load.roles.normal') --}}
@endif
</div>
