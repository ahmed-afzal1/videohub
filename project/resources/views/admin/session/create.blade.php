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
        <form action="{{route('admin-session-store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('includes.form-success')
            <div class="form-group">
              <label for="session_title">{{ __('Season Title') }}</label>
              <input type="text" class="form-control" name="session_title" value="" id="session_title" placeholder="{{ __('Session Title') }}">
            </div>
  
            <div class="form-group">
              <label for="show_id">{{ __('Select Show') }}</label>
              <select class="form-control  mb-3" id="show_id" name="show_id">
                <option value="" selected>{{ __('-select one-') }}</option>
                  @foreach ($tvshows as $item)
                  <option value="{{$item->id}}">{{$item->show_name}}</option>
                  @endforeach
              </select>
            </div>
  
              <div class="form-group">
                  <label for="image">{{ __('Session Thumbnail') }}</label>
                  <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                      <label class="custom-file-label" for="image">{{ __('Choose file') }}</label>
                  </div>
              </div>
  
              <div class="form-group ShowLanguageImage d-none mb-3">
                <img src="" alt="image" width="150">
              </div>
  
            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
          </form>
      </div>
  </div>


@endsection

