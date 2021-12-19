@extends('layouts.admin')

@section('content')


    <div class="col-lg-12">
        <div class="card">

            <div class="card-body">

                <form id="ModalFormSubmit" action="{{ route('admin-user-update', $data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    

                    <div class="form-group col-md-3 mb-3">
                        <label class="col-form-label">{{ __('User Image') }}</label>

                        <div id="image-preview" class="image-preview" style="background-image:url({{ $data->photo != null ? asset('assets/images/users/' . $data->photo) : '' }})">
                            <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                            <input type="file" name="photo" id="image-upload" />
                        </div>

                    </div>


                    <div class="form-group mt-2">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('Name') }}"
                            value="{{ $data->name }}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Email') }}"
                            value="{{ $data->email }}">
                    </div>

                    <div class="form-group mt-2">
                        <label for="phone">{{ __('Email') }}</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="{{ __('Phone') }}"
                            value="{{ $data->phone }}">
                    </div> 
					
					<div class="form-group mt-2">
                        <label for="phone">{{ __('Address') }}</label>
                        <input type="text" class="form-control" name="address" id="phone" placeholder="{{ __('Address') }}"
                            value="{{ $data->address }}">
                    </div>

                    


                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('script')

    <script>
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "{{ __('Choose File') }}", // Default: Choose File
            label_selected: "{{ __('Update Image') }}", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

		$('.date').datepicker({});
    </script>

@endpush

