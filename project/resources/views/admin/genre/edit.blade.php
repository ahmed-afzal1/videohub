@extends('layouts.load')

@section('content')


<div class="col-lg-12">
  <!-- Form Basic -->
    <div class="card-body">
      @include('includes.admin.form-error')  
    <form id="ModalFormSubmit" action="{{route('admin-cat-update',$data->id)}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="Genre">{{ __('Genre Name') }}</label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}" id="Genre" placeholder="{{ __('Genre Name') }}">
        </div>

        <div class="form-group">
          <label for="languageimage">{{ __('Genre Image') }}</label>
          <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
          <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image" accept="image/*">
              <label class="custom-file-label" for="languageimage">{{ __('Choose file') }}</label>
          </div>
      </div>

    <div class="form-group ShowLanguageImage {{$data->image->image ? '' : 'd-none'}}">
        <img src="{{  $data->image->image ? asset('assets/images/genre_image/'.$data->image->image) : ''}}" alt="image" width="150">
    </div>
 

        <div class="form-group">
          <label for="slug">{{ __('Slug') }}</label>
        <input type="text" class="form-control" name="slug" id="slug" value="{{$data->slug}}" placeholder="{{ __('Slug') }}">
        </div>
        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
      </form>
    </div>
</div>
@endsection