@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
 
  <div class="row">
      <div class="col-md-6">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('Website Loader') }}</h6>
              </div>

              <div class="card-body">
                
                <form action="{{ route('admin-gs-update') }}" enctype="multipart/form-data" method="POST">@csrf 
                 
                  <div class="btn-group mb-3">
                      <button type="button" class="btn dropdown-toggle {{ $gs->is_admin_loader == 1 ? 'btn-success' : 'btn-danger' }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ $gs->is_admin_loader == 1 ? __('Activated') : __('Deactivated') }}
                      </button>
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','1,is_admin_loader')}}">{{ __('Activated') }}</a>
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','0,is_admin_loader')}}">{{ __('Deactivated') }}</a>
                      </div>
                  </div>
                    <div class="text-center website-loader mb-4">
                      <img class="img-profile" src="{{ $gs->website_loader ? asset('assets/images/genarel-settings/'.$gs->website_loader) : asset('assets/images/noimage.png') }}" style="max-width: 100px">
                    </div>
                      <div class="form-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="website-loader" name="website_loader">
                              <label class="custom-file-label" for="website-loader">{{ __('Choose file') }}</label>
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

      <div class="col-md-6">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">{{ __('Admin Loader') }}</h6>
              </div>
              <div class="card-body">
                <form id="pageForm" action="{{ route('admin-gs-update') }}" enctype="multipart/form-data" method="POST">@csrf
                  @include('includes.admin.form-both')
                  <div class="btn-group mb-3">
                      <button type="button" class="btn dropdown-toggle {{ $gs->is_website_loader == 1 ? 'btn-success' : 'btn-danger' }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ $gs->is_website_loader == 1 ? __('Activated') : __('Deactivated') }}
                      </button>
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','1,is_website_loader')}}">{{ __('Activated') }}</a>
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="{{route('admin.gs.status','0,is_website_loader')}}">{{ __('Deactivated') }}</a>
                      </div>
                  </div>
                  
              
                    <div class="text-center admin-loader mb-4">
                        <img class="img-profile" src="{{ $gs->admin_loader ? asset('assets/images/genarel-settings/'.$gs->admin_loader) : asset('assets/images/noimage.png') }}" style="max-width: 100px;">
                    </div>
                      <div class="form-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="admin-loader" name="admin_loader">
                              <label class="custom-file-label" for="admin-loader">{{ __('Choose file') }}</label>
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


@section('script')
<script>
    $('#website-loader').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.website-loader img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })

    $('#admin-loader').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.admin-loader img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })
</script>
@endsection