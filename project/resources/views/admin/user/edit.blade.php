@extends('layouts.load')

@section('content')


<div class="col-lg-12">
  <!-- Form Basic -->
    <div class="card-body">
      @include('includes.admin.form-error')  
      <form id="ModalFormSubmit" action="{{route('admin-user-update',$data->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group ShowLanguageImage text-center mb-2  {{ $data->photo != null ? '' : 'd-none'}}">
			<img src="{{ $data->photo != null ? asset('assets/images/user-image/'.$data->photo) : ''}}" class="rounded-circle img-fluid" alt="image" width="150">
		</div>
		<div class="form-group">
			<label for="languageimage">{{ __('Image') }}</label>
			<span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
			<div class="custom-file">
				<input type="file" class="custom-file-input" name="photo" id="image" value="" accept="image/*">
				<input type="hidden" value="" id="image_file">
				<label class="custom-file-label" for="languageimage">{{ __('Choose file') }}</label>
			</div>
		</div>
		
          <div class="form-group mt-2">
            <label for="name">{{ __('Name') }}</label>
          	<input type="text" class="form-control" name="name" id="name" placeholder="{{ __('Name') }}" value="{{$data->name}}">
		  </div>
		  
          <div class="form-group mt-2">
            <label for="email">{{ __('Email') }}</label>
          	<input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Email') }}" value="{{$data->email}}">
		  </div>
		  
          <div class="form-group mt-2">
            <label for="phone">{{ __('Email') }}</label>
          	<input type="text" class="form-control" name="phone" id="phone" placeholder="{{ __('Phone') }}" value="{{$data->phone}}">
		  </div>
		  
          <div class="form-group mt-2">
            <label for="birthday">{{ __('Birthday') }}</label>
          	<input type="text" class="form-control date" name="birthday" id="birthday" placeholder="{{ __('Birthday') }}" value="{{$data->birthday}}">
		  </div>
		  

          <div class="form-group mt-2">
            <label for="birthday">{{ __('Gander') }}</label>
			<select name="gander" class="form-control form-control-sm">
				<option value="Male" {{$data->gander == 'Male' ? 'selected' : '' }} >{{ __('Male') }}</option>
				<option value="Female" {{$data->gander == 'Female' ? 'selected' : '' }} >{{ __('Female') }}</option>
			</select>
          </div>

         
          <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </form>
      </div>
  </div>
@endsection

@section('script')
<script>
    $('.date').datepicker({});
</script>
@endsection
