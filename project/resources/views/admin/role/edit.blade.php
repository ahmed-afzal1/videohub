@extends('layouts.admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('Role Edit') }}   <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Dashboard')}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ __('Role Edit') }}</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12">
      @include('includes.admin.form-both')
      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Role Create') }}</h6>
        </div>
        <div class="card-body">
          <form action="{{ route('admin-role-update',$data->id) }}" method="POST" id="pageForm">
            @csrf
            <div class="form-group row">
              <label for="name" class="col-sm-3 col-form-label">{{ __('Role Name') }}</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Role Name" value="{{ $data->name }}">
              </div>
            </div>
            <hr>
            <h4 class="text-center">{{__('Role Permission')}}</h4>
            <hr>
          <div class="row ">
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="genres"  value="Genres Section" {{ in_array('Genres Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="genres">{{ __('Genres Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="videosection"  value="Video Language Section" {{ in_array('Video Language Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="videosection">{{ __('Video Language Section')}}</label>
              </div>
            </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="cast_crew"  value="Cast & Crew Section" {{ in_array('Cast & Crew Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="cast_crew">{{ __('Cast & Crew Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="blogsection"  value="Blog Section" {{ in_array('Blog Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="blogsection">{{ __('Blog Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="languagesection"  value="Language Section" {{ in_array('Language Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="languagesection">{{ __('Language Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="supportmessage"  value="Support Message Section" {{ in_array('Support Message Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="supportmessage">{{ __('Support Message Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="customersection"  value="Customers Section" {{ in_array('Customers Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="customersection">{{ __('Customers Section') }}</label>
                </div>
              </div>
            </div>


            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="ordersection"  value="Orders Section" {{ in_array('Orders Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="ordersection">{{ __('Orders Section') }}</label>
                </div>
              </div>
            </div>


            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="staffsection"  value="Manage Staff Section" {{ in_array('Manage Staff Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="staffsection">{{ __('Manage Staff Section') }}</label>
                </div>
              </div>
            </div>
           
          
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="social_settings"  value="Social Section" {{ in_array('Social Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="social_settings">{{ __('Social Settings Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="movie" value="Movie Section" {{ in_array('Movie Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="movie">{{ __('Movie Section Section') }}</label>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="tv_show"  value="Tv Show Section" {{ in_array('Tv Show Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="tv_show">{{ __('Tv Shows Section Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="subscription" value="Subscription Plan Section" {{ in_array('Subscription Plan Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="subscription">{{ __('Subscription Plan Section') }}</label>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="gs_settings"  value="Genarel Settings Section" {{ in_array('Genarel Settings Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="gs_settings">{{ __('General Settings Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="home_setting"  value="Home Page Settings Section" {{ in_array('Home Page Settings Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="home_setting">{{ __('Home Page Settings Section') }}</label>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="menu_settings"  value="Menu Page Settings Section" {{ in_array('Menu Page Settings Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="menu_settings">{{ __('Menu Page Settings Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="sports" value="Sports Section" {{ in_array('Sports Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="sports">{{ __('Sports Section') }}</label>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="payment_settings"  value="Payment Settings Section" {{ in_array('Payment Settings Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="payment_settings">{{ __('Payment Settings Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="email_settings" value="Email Settings Section" {{ in_array('Email Settings Section', explode(',',$data->section)) ? 'checked' : '' }}> 
                  <label class="custom-control-label" for="email_settings">{{ __('Email Settings Section') }}</label>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="seo_tools" value="Seo Tools Section" {{ in_array('Seo Tools Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="seo_tools">{{ __('Seo Tools Section') }}</label>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="newsletter" value="Newsletter Section" {{ in_array('Newsletter Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="newsletter">{{ __('Newsletter Section') }}</label>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox" name="section[]" class="custom-control-input" id="role" value="Manage Role Section" {{ in_array('Manage Role Section', explode(',',$data->section)) ? 'checked' : '' }}>
                  <label class="custom-control-label" for="role">{{ __('Manage Role Section') }}</label>
                </div>
              </div>
            </div>
            
            
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <!--Row-->
</div>
{{-- <input type="hidden" id="isValue" value="1"> --}}
@endsection

