<ul class="scroll-menu">

    <hr class="sidebar-divider my-0">
    <li class="nav-item @if( request()->is('/') ) active @endif ">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>
    <li class="nav-item ">
    <a class="nav-link" href="{{route('category.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>{{ __('Manage Category') }}</span>
        </a>
    </li>
    
    
    <li class="nav-item @if( request()->is('forms') ) active @endif  ">
    <a class="nav-link" href="{{route('admin-cat-index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>{{ __('Genres') }}</span>
        </a>
    </li>



    <li class="nav-item">
    <a class="nav-link" href="{{route('admin-user-index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>{{ __('Customers') }}</span>
        </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="{{route('admin.order.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>{{ __('Orders') }}</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin-cast-crew-index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>{{ __('Cast & Crew') }}</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#blog" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-newspaper"></i>
    <span>{{__('Blog')}}</span>
        </a>
        <div id="blog" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin-blog-index')}}"><i class="fas fa-angle-double-right"></i>{{ __('Blog Post') }}</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#language" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-file-code"></i>
    <span>{{__('Language')}}</span>
        </a>
        <div id="language" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin-lang-index')}}"><i class="fas fa-angle-double-right"></i>{{ __('Website Language') }}</a>
                
                
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#social" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-paper-plane"></i>
    <span>{{__('Social Settings')}}</span>
        </a>
        <div id="social" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin-social-index')}}"><i class="fas fa-angle-double-right"></i>{{ __('Social Links') }}</a>
                <a class="collapse-item" href="{{route('admin-social-facebook')}}"><i class="fas fa-angle-double-right"></i>{{ __('Facebook Login') }}</a>
                <a class="collapse-item" href="{{route('admin-social-google')}}"><i class="fas fa-angle-double-right"></i>{{ __('Google Login') }}</a>
                
            </div>
        </div>
    </li>

    <li class="nav-item ">
    <a class="nav-link" href="{{route('admin.movie.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>{{ __('Movie') }}</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#showTable" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fa fa-tv"></i>
            <span>{{ __('Tv Show') }}</span>
        </a>
        <div id="showTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin-show-index')}}"><i class="fas fa-angle-double-right"></i>{{ __('Shows') }}</a>
            <a class="collapse-item" href="{{route('admin-session-index')}}"><i class="fas fa-angle-double-right"></i>{{ __('Seasons') }}</a>
            <a class="collapse-item" href="{{ route('admin-episode-index') }}"><i class="fas fa-angle-double-right"></i>{{ __('Episodes') }}</a>
            </div>
        </div>
    </li>
    
    <li class="nav-item">
    <a class="nav-link" href="{{route('admin-subscription-plan-index')}}">
            <i class="fas fa-fw fa-palette"></i>
            <span>{{ __('Subscription Plan') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ganeral-setting" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-cogs"></i>
            <span>{{ __('General Settings') }}</span>
        </a>
        <div id="ganeral-setting" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin-gs-logo') }}"><i class="fas fa-angle-double-right"></i>{{ __('Logo') }}</a>
                <a class="collapse-item" href="{{ route('admin-gs-fav') }}"><i class="fas fa-angle-double-right"></i>{{ __('Favicon') }}</a>
                <a class="collapse-item" href="{{ route('admin-gs-load') }}"><i class="fas fa-angle-double-right"></i>{{ __('Loader') }}</a>
                <a class="collapse-item" href="{{ route('admin-gs-breadcumb') }}"><i class="fas fa-angle-double-right"></i>{{ __('Breadcumb Banner') }}</a>
                <a class="collapse-item" href="{{ route('admin-gs-contents') }}"><i class="fas fa-angle-double-right"></i>{{ __('Website Content') }}</a>
                <a class="collapse-item" href="{{ route('admin-gs-success') }}"><i class="fas fa-angle-double-right"></i>{{ __('Success Messages') }}</a>
                <a class="collapse-item" href="{{ route('admin-gs-footer') }}"><i class="fas fa-angle-double-right"></i>{{ __('Footer') }}</a>
                <a class="collapse-item" href="{{ route('admin-gs-error') }}"><i class="fas fa-angle-double-right"></i>{{ __('Error Page') }}</a>
            </div>
        </div>
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>{{ __('Menu Page Settings') }}</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin-faq-index') }}"><i class="fas fa-angle-double-right"></i>{{ __('FAQ Page') }}</a>
                
                <a class="collapse-item" href="{{ route('admin-page-index') }}"><i class="fas fa-angle-double-right"></i>{{ __('Other Pages') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Sports" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>{{ __('Sports') }}</span>
        </a>
        <div id="Sports" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin-sports-cat-index') }}"><i class="fas fa-angle-double-right"></i>{{ __('Sports Category') }}</a>
                <a class="collapse-item" href="{{ route('admin-sports-video-index') }}"><i class="fas fa-angle-double-right"></i>{{ __('Sports Video') }}</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#payment" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>{{ __('Payment Settings') }}</span>
        </a>
        <div id="payment" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin-gs-payments') }}"><i class="fas fa-angle-double-right"></i>{{ __('Payment Information') }}</a>
                <a class="collapse-item" href="{{ route('admin-currency-index') }}"><i class="fas fa-angle-double-right"></i>{{ __('Currencies') }}</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#email" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>{{ __('Email Settings') }}</span>
        </a>
        <div id="email" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin-mail-config') }}"><i class="fas fa-angle-double-right"></i>{{ __('Email Configurations') }}</a>
                <a class="collapse-item" href="{{ route('admin-group-show') }}"><i class="fas fa-angle-double-right"></i>{{ __('Group Email') }}</a>
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