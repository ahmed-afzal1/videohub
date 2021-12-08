@extends('layouts.user')

@section('title')
{{ ('Reset Password | ') }}{{ $gs->website_title }}
@endsection
@section('content')

  <!-- User Main Content Area Start -->
  <section class="user-main-content">
    <div class="container">
        <div class="row">
          @include('user.inc.sitebar')
            <div class="col-xl-9  col-md-7">
                <div class="content-area">
                    <div class="header-area">
                        <h4 class="title">
                            <i class="far fa-edit"></i>{{ __('Change Password') }}
                        </h4>
                    </div>
                    <div class="update-profile-info">
                        <form id="userform" action="{{ route('user-reset-submit') }}" method="POST">
                        @csrf
                        @include('includes.user.form-both')

                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="password" class="input-field" placeholder="{{ __('Current Password') }}"
                                        required="" name="cpass">
                                </div>

                                <div class="col-lg-12">
                                    <input type="password" class="input-field" placeholder="{{ __('New Password') }}"
                                        required=""  name="newpass">
                                </div>
                                <div class="col-lg-12">
                                    <input type="password" class="input-field" placeholder="{{ __('Confirm Password') }}"
                                        required="" name="renewpass">
                                </div>
                            </div>

                            <div class="form-links">
                                <button class="mybtn1" type="submit">{{ __('Update Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- User Main Content Area End -->

@endsection