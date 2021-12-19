@extends('layouts.admin')

@section('content')



    <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card">

            <div class="card-body">

                <form id="ModalFormSubmit" action="{{ route('admin-cat-store') }}" method="POST"
                    enctype='multipart/form-data'>
                    @csrf



                    <div class="form-group col-md-3 mb-3">
                        <label class="col-form-label">{{ __('Genre Image') }}</label>

                        <div id="image-preview" class="image-preview" style="background-image:url()">
                            <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                            <input type="file" name="image" id="image-upload" />
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="Genre">{{ __('Genre Name') }}</label>
                            <input type="text" class="form-control" name="name" value="" id="Genre"
                                placeholder="{{ __('Genre Name') }}">
                        </div>


                        <div class="form-group col-lg-6">
                            <label for="slug">{{ __('Slug') }}</label>
                            <input type="text" class="form-control" name="slug" id="slug" value=""
                                placeholder="{{ __('Slug') }}">
                        </div>


                    </div>


                    <button type="submit" class="btn btn-primary">{{ __('Create Genre') }}</button>
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
    </script>

@endpush
