@extends('layouts.admin')


@section('content')

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Update') }} <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>    
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Update') }}</li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">{{ __('Update') }}</h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form action="{{route('admin-session-update',$data->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @include('includes.form-success')
            <div class="form-group">
              <label for="session_title">{{ __('Season Title') }}</label>
            <input type="text" class="form-control" name="session_title" id="session_title" placeholder="{{ __('Session Title') }}" value="{{$data->session_title}}">
            </div>
  
            <div class="form-group">
              <label for="show_id">{{ __('Show') }}</label>
              <select class="form-control mb-3" id="show_id" name="show_id">
                @foreach ($tvshows as $key => $item)
                  <option value="{{$item->id}}" {{ $data->show_id == $item->id ? 'selected' : '' }}>{{$item->show_name}}</option>
                  @endforeach
              </select>
            </div>
  
            
              <div class="form-group">
                  <label for="languageimage">{{ __('Session Thumbnail') }}</label>
                  <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                      <input type="hidden" value="" id="image_file">
                      <label class="custom-file-label" for="languageimage">{{ __('Choose file') }}</label>
                  </div>
              </div>
  
              <div class="form-group ShowLanguageImage mb-3 {{ $data->image->image != null ? '' : 'd-none'}}">
                <img src="{{ $data->image->image != null ? asset('assets/images/'.$data->image->image) : ''}}" alt="image" width="150">
              </div>
  
            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
          </form>
      </div>
  </div>


@endsection

