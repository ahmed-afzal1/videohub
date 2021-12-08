@extends('layouts.admin')


@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Payment Information') }} <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>    
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Payment Information') }}</li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{__('Payment Information')}}</h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form id="pageForm" action="{{ route('admin-gs-update') }}" enctype="multipart/form-data" method="POST">@csrf
             @include('includes.admin.form-both')

              <div class="form-group row ">
                  <label for="secendary_color" class="col-sm-3 col-form-label">{{ __('Stripe') }}</label>
                  <div class="col-sm-9">
                      <div class="btn-group mb-1">
                          <button type="button" class="btn dropdown-toggle {{ $gs->stripe_check == 1 ? 'btn-success' : 'btn-danger' }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             {{ $gs->stripe_check == 1 ? __('Activated') : __('Deactivated') }}
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','1,stripe_check')}}">{{ __('Activated') }}</a>
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','0,stripe_check')}}">{{ __('Deactivated') }}</a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="form-group row mb-3">
                  <label for="stripe_key" class="col-sm-3 col-form-label">{{ __('Stripe Key') }}</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="stripe_key" name="stripe_key" placeholder="{{ __('Stripe Key') }}" value="{{$gs->stripe_key}}">
                  </div>
              </div>

              <div class="form-group row mb-3">
                  <label for="stripe_secret" class="col-sm-3 col-form-label">{{ __('Stripe Secret') }}</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="stripe_secret" name="stripe_secret" placeholder="{{ __('Stripe Secret') }}" value="{{$gs->stripe_secret}}">
                  </div>
              </div>

              <hr>


              <div class="form-group row mt-3">
                <label for="secendary_color" class="col-sm-3 col-form-label">{{ __('Paypal') }}</label>
                <div class="col-sm-9">
                    <div class="btn-group mb-1">
                        <button type="button" class="btn dropdown-toggle {{ $gs->paypal_check == 1 ? 'btn-success' : 'btn-danger' }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{ $gs->paypal_check == 1 ? __('Activated') : __('Deactivated') }}
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                            <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','1,paypal_check')}}">{{ __('Activated') }}</a>
                            <a class="dropdown-item social-status-check cursor-pointer" data-href="{{route('admin.gs.status','0,paypal_check')}}">{{ __('Deactivated') }}</a>
                        </div>
                    </div>
                </div>
            </div>


              <div class="form-group row">
                <label for="secendary_color" class="col-sm-3 col-form-label">{{ __('Paypal Sandbox') }}</label>
                <div class="col-sm-9">
                    <div class="btn-group mb-1">
                        <button type="button" class="btn dropdown-toggle {{ $gs->paypal_sendbox_check == 1 ? 'btn-success' : 'btn-danger' }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{ $gs->paypal_sendbox_check == 1 ? __('Activated') : __('Deactivated') }}
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                            <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','1,paypal_sendbox_check')}}">{{ __('Activated') }}</a>
                            <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','0,paypal_sendbox_check')}}">{{ __('Deactivated') }}</a>
                        </div>
                    </div>
                </div>
            </div>

              <div class="form-group row mb-3">
                  <label for="paypal_client_id" class="col-sm-3 col-form-label">{{ __('Paypal Client Id') }}</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="paypal_client_id" name="paypal_client_id" placeholder="{{ __('Paypal Client Id') }}" value="{{ $gs->paypal_client_id }}">
                  </div>
              </div>


              <div class="form-group row mb-3">
                  <label for="paypal_client_secret" class="col-sm-3 col-form-label">{{ __('Paypal Client Secret') }}</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="paypal_client_secret" name="paypal_client_secret" placeholder="{{ __('Paypal Client Secret') }}" value="{{$gs->paypal_client_secret}}">
                  </div>
              </div>

          
              <div class="form-group row">
                  <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>

@endsection

