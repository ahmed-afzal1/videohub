<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="forntEnd-Developer" content="Mamunur Rashid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/images/genarel-settings/'.$gs->favicon)}}" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
	<!-- Plugin css -->
	<link rel="stylesheet" href="{{asset('assets/front/css/plugin.css')}}">
	<!-- stylesheet -->
	<link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
	
</head>

<body>
@php
    $gs = App\Models\Generalsetting::findOrFail(1);
@endphp

<!--Main-Menu Area Start-->
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('front.index') }}">
						<img src="{{ asset('assets/images/genarel-settings/'.$gs->header_logo) }}" alt="">
					</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fixed-height" id="main_menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('front.index') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.blog') }}">{{ __('Blog') }}</a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									{{ __('Pages') }}
								</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('front.faq') }}"> <i class="fa fa-angle-double-right"></i>{{ __('FAQ') }}</a>
                                    </li>
                                    @foreach (App\Models\Page::all() as $page)
                                    <li>
                                        <a class="dropdown-item" href="{{route('front.page',$page->slug)}}"> <i class="fa fa-angle-double-right"></i>{{ $page->title }}</a>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('front.contact') }}">{{ __('Contact') }} </a>
                            </li>
                            @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									{{ __('My Account') }}
								</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item {{ url()->current() == route('user-dashboard') ? 'active' : ''  }}" href="{{ route('user-dashboard') }}"> <i class="fa fa-angle-double-right"></i> {{ __("Dashboard") }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ url()->current() == route('user-profile') ? 'active' : ''  }}" href="{{ route('user-profile') }}"> <i class="fa fa-angle-double-right"></i>{{ __("Profile") }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ url()->current() == route('user-reset') ? 'active' : ''  }}" href="{{ route('user-reset') }}"> <i class="fa fa-angle-double-right"></i>{{ __('Change Password') }}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ url()->current() == route('user-logout') ? 'active' : ''  }}" href="{{ route('user-logout') }}"> <i class="fa fa-angle-double-right"></i></i>{{ __('Logout') }}</a>
                                    </li>
                                    
                                </ul>
                            </li>
								@else
								<li class="nav-item">
									<a class="nav-link  log-reg-btn{{ url()->current() == route('user.login') ? 'active' : ''  }}" href="{{ route('user.login') }}">{{ __('Login / Register') }}</a>
								</li>
								@endif
                            
                        </ul>
                        <a href="#" class="mybtn1 ml-4">Post your Ad</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--Main-Menu Area Start-->

<!-- User Info Top Area Start -->
<div class="user-info-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
    </div>
</div>
<!-- User Info Top Area End -->

<!-- User Info Top Area Start -->
<div class="user-info-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="user-profile-info">
                    <div class="left">
                        <img class="image-view" src="{{ Auth::user()->photo != null ? asset('assets/images/user-image/'.Auth::user()->photo) : asset('assets/front/images/user.png') }}" alt="">
                    </div>
                    <div class="right">
                        <h4 class="name">
                                {{ Auth::user()->name }}
                            </h4>
                        <p class="location">
                            <i class="fas fa-map-marker-alt"></i> {{ Auth::user()->address }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="user-info">
                    <div class="total-view">
                        <span>
                                Total View
                            </span>
                        <p>
                            245
                        </p>
                    </div>
                    <div class="total-download">
                        <span>
                                Total View
                            </span>
                        <p>
                            245
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- User Info Top Area End -->
@yield('content')

<!--Footer Area Start -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget about-widget">
                    <div class="footer-logo">
                        <a href="{{ route('front.index') }}">
								<img src="{{ asset('assets/images/genarel-settings/'.$gs->footer_logo) }}" alt="">
							</a>
                    </div>
                    <div class="text">
                        <p>
                            {{ $gs->footer_text }}
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget address-widget">
                    <h4 class="title">
							{{ __('Address') }}
						</h4>
                    <ul class="about-info">
                        <li>
                            <p>
                                <i class="fas fa-globe"></i> {{ $ps->street_address }}
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-phone"></i> {{ $ps->contact_number }}
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="far fa-envelope"></i> {{ $ps->contact_email }}
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-widget  footer-newsletter-widget">
                    <h4 class="title">
								{{ __('Newsletter') }}
							</h4>
                    <div class="newsletter-form-area">
                        <form action="#">
                            <input type="email" placeholder="{{ __('Your email address...') }}">
                            <button type="submit">
                                <i class="far fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                    <div class="social-links">
                        <h4 class="title">
										{{ __("We're social, connect with us") }}:
								</h4>
                        <div class="fotter-social-links">
                            <ul>
                                @php
                                    $social_link = App\Models\Socialsetting::find(1);
                                @endphp
                                <li>
                                <a href="{{$social_link->facebook}}" class="facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$social_link->twitter}}" class="twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$social_link->linkedin}}" class="linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$social_link->gplus}}" class="google-plus">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="copy-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="content">
                            <p>
                                {!! $gs->copy_right_text !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
	<!-- Back to Top Start -->
	<div class="bottomtotop">
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- Back to Top End -->
	<script>
	// var mainURL = '{{ route('front.index') }}';
	</script>
	<!-- jquery -->
	<script src="{{asset('assets/front/js/jquery.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('assets/front/js/notify.js')}}"></script>
	<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
	<!-- plugin js-->
	<script src="{{asset('assets/front/js/plugin.js')}}"></script>
	<script src="{{asset('assets/front/js/toltip.js')}}"></script>
	<!-- main -->
	<script src="{{asset('assets/front/js/main.js')}}"></script>
    <script src="{{asset('assets/front/js/myscript.js')}}"></script>
    @yield('script')
</body>

</html>