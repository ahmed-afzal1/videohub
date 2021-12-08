@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Home Page Customization') }}
    <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">{{ __('Home Page Settings') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Home Page Customization') }}</li>
        </ol>
    </div>
    @include('includes.admin.form-error')
     @include('includes.admin.form-success')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('Home Page Customization') }}</h6>
                </div>
                <div class="card-body align-item-center">
                    <div class="loader" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                    <form id="pageForm" action="{{ route('admin-homepage-update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row">
                      <label for="trending" class="col-sm-3 col-form-label">{{ __('Trending Now Section') }}</label>
                      <div class="col-sm-9">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="trending" name="trending_section" value="1" {{ $ps->trending_section == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="trending"> </label>
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="new" class="col-sm-3 col-form-label">{{ __('New Movie Section') }}</label>
                      <div class="col-sm-9">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="new" name="new_section" value="1" {{ $ps->new_section == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="new"> </label>
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="recent" class="col-sm-3 col-form-label">{{ __('Recent View Section') }}</label>
                      <div class="col-sm-9">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="recent" id="recent_section" value="1" {{ $ps->recent_section == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="recent"> </label>
                          </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="old" class="col-sm-3 col-form-label">{{ __('Old Movie') }}</label>
                      <div class="col-sm-9">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="old" name="old_section" value="1" {{ $ps->old_section == 1 ? 'checked' : '' }}>
                            <label class="custom-control-label" for="old"> </label>
                          </div>
                      </div>
                    </div>
                   
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
             
            </div>
        </div>
    </div>


@endsection

