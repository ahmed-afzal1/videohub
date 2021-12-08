@extends('layouts.admin')


@section('content')

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Create') }} <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>    
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Create') }}</li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{ __('Create') }}</h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form  action="{{route('admin-show-store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('includes.form-success')
            <div class="form-group">
              <label for="showname">{{ __('Show Name') }}</label>
              <input type="text" class="form-control" name="show_name"  id="showname" placeholder="{{ __('Show Name') }}">
            </div>
  
              <div class="form-group">
                  <label for="languageimage">{{ __('Image Thumbnail') }}</label>
                  <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                      <label class="custom-file-label" for="languageimage">{{ __('Choose file') }}</label>
                  </div>
              </div>
  
              <div class="form-group ShowLanguageImage d-none">
                <img src="" alt="image" width="150">
              </div>
  
              <div class="form-group">
                <label for="date">{{ __('Realse Date') }}</label>
                <input type="text" class="form-control date" name="relase_date" placeholder="{{ __('Realse Date') }}">
              </div>
  
              <div class="form-group">
                <label for="title">{{ __('Show Access') }}</label>
                <select class="form-control  mb-3" name="access" id="title">
                    <option value="free">{{ __('Free') }}</option>
                    <option value="premium">{{ __('Premium') }}</option>
                </select>
              </div>
  
  
              <div class="form-group">
                  <label for="area1">{{ __('Description') }}</label>
                   <textarea id="area1" class="form-control " name="description"></textarea>
              </div>
            
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
          </form>
      </div>
  </div>


@endsection

