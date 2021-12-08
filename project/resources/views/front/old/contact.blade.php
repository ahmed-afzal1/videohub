@extends('layouts.front')

@section('title')
{{ ('Contact Us | ') }}{{ $gs->website_title }}
@endsection

@section('content')
    <!-- Breadcrumb Area Start -->
	<div class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="pagetitle">
						{{ __('Contact Us') }}
					</h1>
					<ul class="pages">
						<li>
							<a href="{{ route('front.index') }}">
								{{ __('Home') }}
							</a>
						</li>
						<li class="active">
							<a href="{{ Request::url() }}">
							{{ __('Contact Us') }}
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->


<!-- Contact Us Area Start -->
<section class="contact-us">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5">
                <div class="right-area">
                    <div class="contact-info">
                        <div class="left ">
                            <div class="icon">
                                <img src="{{ asset('assets/front/images/matker.png') }}" alt="">
                                <p class="lable">
                                    {{ __("Address") }}
                                </p>
                            </div>
                        </div>
                        <div class="content d-flex align-self-center">
                            <div class="content">
                                <p> {{ $ps->street_address }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="left">
                            <div class="icon">
                                <img src="{{ asset('assets/front/images/envelop.png') }}" alt="">
                                <p class="lable">
                                    {{ __('Email') }}
                                </p>
                            </div>
                        </div>
                        <div class="content d-flex align-self-center">
                            <div class="content">
                                <p>
                                    {{ $ps->contact_email }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="left">
                            <div class="icon">
                                <img src="{{ asset('assets/front/images/call.png') }}" alt="">
                                <p class="lable">
                                    {{ __('Phone') }}
                                </p>
                            </div>
                        </div>
                        <div class="content d-flex align-self-center">
                            <div class="content">
                                <a href="javascript:;">
                                    {{ $ps->contact_number }}
                                </a>
                                <a href="javascript:;">
                                    {{ $ps->fax }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <h4 class="title">{{ __('Find us here') }} :</h4>
                        <ul>
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google-plus">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dribbble">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="left-area">
                    <div class="contact-form">
                        <form id="contactform" action="{{route('front.contact.submit')}}">
                            @csrf @include('includes.admin.form-both')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-input">
                                        <input type="text" placeholder="{{ __('Name') }} *" required name="name">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input">
                                        <input type="email" placeholder="{{ __('Email Address') }} *" required name="email">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input">
                                        <input type="text" placeholder="{{ __('Phone Number') }}" required name="phone">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input">
                                        <textarea placeholder="{{ __('Your Message') }} *" required name="text"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="captcha-area">
                                        <li>
                                            <p><img class="codeimg" src="{{ asset("assets/images/capcha_code.png ") }}" alt=""> <i data-href="{{url('contact/refresh_code')}}" class="fas fa-sync-alt pointer refresh_code "></i></p>
                                        </li>
                                        <li>
                                            <input name="codes" type="text" class="input-field" placeholder="{{ __('Enter Code') }}*" required="">
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-12">
                                    <button class="submit-btn mybtn1" type="submit">{{ __('Send Message') }}
                                        <span class="spinner-grow spinner-grow-sm d-none" style="padding:10px" role="status"></span>
                                    </button>

                                </div>
                                <input type="hidden" value="{{ $ps->contact_email }}" name="to">
                        </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>
<!-- Contact Us Area End-->
@endsection
