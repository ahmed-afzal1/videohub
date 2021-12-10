@extends('layouts.admin')

@section('content')


<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $pageTitle }}</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
      </ol>
  </div>

<div class="col-lg-12">
  <!-- Form Basic -->
  <div class="card">
  
    <div class="card-body">
       
      <form id="ModalFormSubmit" action="{{route('admin-cat-store')}}" method="POST" enctype='multipart/form-data' >
        @csrf
          <div class="form-group">
            <label for="Genre">{{ __('Genre Name') }}</label>
          <input type="text" class="form-control" name="name" value="" id="Genre" placeholder="{{ __('Genre Name') }}">
          </div>
  
          <div class="form-group">
              <label for="languageimage">{{ __('Genre Image') }}</label>
              <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                  <input type="hidden" value="" id="image_file">
                  <label class="custom-file-label" for="languageimage">{{ __('Choose file') }}</label>
              </div>
          </div>

          <div class="form-group ShowLanguageImage d-none">
            <img src="" alt="image" width="150">
          </div>

          <div class="form-group">
            <label for="slug">{{ __('Slug') }}</label>
          <input type="text" class="form-control" name="slug" id="slug" value="" placeholder="{{ __('Slug') }}">
          </div>
          <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>
      </div>
  </div>
  
  </div>
@endsection