

<div class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('assets/images/genarel-settings/'.$gs->header_logo) }}" alt="" >
        </div>
        <div class="sidebar-brand-text mx-3">{{ $gs->website_title }}</div>
    </a>



    @if(Auth::guard('admin')->user()->IsSuper())
        @include('admin.load.roles.super')
    @else
        @include('admin.load.roles.normal');
    @endif

</div>