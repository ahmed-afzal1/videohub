@extends('layouts.admin')


@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Email Configuration') }} <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>    
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Email Configuration') }}</li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{__('Email Configuration')}}</h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form id="pageForm" action="{{ route('admin-group-submit') }}" enctype="multipart/form-data" method="POST">@csrf
             @include('includes.admin.form-both')

            
              <div class="form-group row mb-3">
                  <label for="type" class="col-sm-3 col-form-label">{{ __('Select User Type') }}</label>
                  <div class="col-sm-9">
                      <select name="" id="" class="form-control form-control-sm" name="type" id="type">
                        <option value="subscription">{{ __('Subscribers') }}</option>
                        <option value="customer">{{ __('All Customer') }}</option>
                      </select>
                  </div>
              </div>

              <div class="form-group row mb-3">
                  <label for="subject" class="col-sm-3 col-form-label">{{ __('Email Subject') }}</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="{{ __('Email Subject') }}">
                  </div>
              </div>



              <div class="form-group row mb-3">
                  <label for="body" class="col-sm-3 col-form-label">{{ __('Email Body') }}</label>
                  <div class="col-sm-9">
                      <textarea id="area1" class="form-control " name="body" id="body"></textarea>
                  </div>
              </div>

             
          
              <div class="form-group row">
                  <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">{{__('Send Mail')}}</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>

@endsection

