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
        <form action="{{route('admin-cast-crew-update',$data->id)}}" enctype="multipart/form-data" method="POST">
          @csrf
          @include('includes.form-success')
          <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" id="name" placeholder="{{ __('Name') }}">
          </div>
    
            <div class="form-group">
              <label for="languageimage">{{ __('Image') }}</label>
              <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="image" accept="image/*">
                  <label class="custom-file-label" for="languageimage">{{ __('Choose file') }}</label>
              </div>
          </div>
    
        <div class="form-group ShowLanguageImage {{$data->image->image ? '' : 'd-none'}}">
            <img src="{{  $data->image->image ? asset('assets/images/'.$data->image->image) : ''}}" alt="image" width="150">
        </div>
     
    
          <div class="form-group">
            <label for="bio">{{ __('Bio') }}</label>
            <textarea name="bio" id="bio" class="form-control"  rows="5" placeholder="{{ __('Enter Bio') }}">{{ $data->bio }}</textarea>
          </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  </div>


@endsection

