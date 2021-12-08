@extends('layouts.user')
@section('title')
{{ ('Profile | ') }}{{ $gs->website_title }}
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
                          <i class="far fa-edit"></i>{{ __('Update Profile') }}
                      </h4>
                  </div>
                  <div class="update-profile-info">
                      <form id="userform" action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('includes.user.form-both')

                        <div class="upload-img">
                              <div class="img">
                                <img class="image-view" src="{{ Auth::user()->photo != null ? asset('assets/images/user-image/'.Auth::user()->photo) : asset('assets/front/images/user.png') }}" alt="">
                              </div>
                              <div class="file-upload-area">
                                  <div class="upload-file">
                                      <input type="file" name="photo" class="upload" id="image-preview">
                                      <span>{{ __('Upload') }}</span>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-12">
                                  <label for="name" class="font-weight-bold">{{ __('Full Name') }}</label>
                                  <input type="text" class="input-field" id="name" placeholder="{{ __('Full Name') }}"
                                      required="" value="{{ Auth::user()->name }}" name="name">
                              </div>
                              <div class="col-lg-12">
                                <label for="email" class="font-weight-bold">{{ __('Email') }}</label>
                                  <input type="email" class="input-field" placeholder="{{ __('Email') }}"
                                      required="" id="email" value="{{ Auth::user()->email }}" name="email">
                              </div>
                              <div class="col-lg-12">
                                <label for="birthday" class="font-weight-bold">{{ __('Birthday') }}</label>
                                  <input type="text" class="input-field" placeholder="{{ __('Birthday') }}"
                                     id="birthday" value="{{ Auth::user()->birthday }}" name="birtday">
                              </div>
                              <div class="col-lg-12">
                                <label for="phone" class="font-weight-bold">{{ __('Phone') }}</label>
                                  <input type="text" class="input-field" placeholder="{{ __('Phone') }}"
                                      required="" id="phone" value="{{ Auth::user()->phone }}" name="phone">
                              </div>
                              <div class="col-lg-12">
                                <label for="phone" class="font-weight-bold">{{ __('Address') }}</label>
                                  <input type="text" class="input-field" placeholder="{{ __('Address') }}"
                                      required="" id="address" value="{{ Auth::user()->address }}" name="address">
                              </div>
                              <div class="col-lg-12">
                                <label for="gander" class="font-weight-bold">{{ __('Gander') }}</label>
                                  <select name="gander" required class="input-field">
                                      <option value="Male" {{Auth::user()->gander == 'Gander' ? 'selected' : ''}}>{{ __('Male') }}</option>
                                      <option value="Female"  {{Auth::user()->gander == 'Female' ? 'selected' : ''}}>{{ __('Female') }}</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-links">
                              <button class="mybtn1" type="submit">{{ __('Save Update') }}</button>
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
