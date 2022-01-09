@extends('layouts.admin')


@section('content')


    <div class="card mb-4">

        <div class="card-body">
            
            <form enctype="multipart/form-data" action="{{ route('admin-cast-crew-store') }}" method="POST">
                @csrf



                <div class="form-group col-md-3 mb-3">
                    <label class="col-form-label">{{__('Image')}}</label>

                    <div id="image-preview" class="image-preview">
                        <label for="image-upload" id="image-label">{{__('Choose File')}}</label>
                        <input type="file" name="image" id="image-upload" />
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-12">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" name="name" value="" id="name"
                            placeholder="{{ __('Name') }}">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="bio">{{ __('Bio') }}</label>
                        <textarea name="bio" id="bio" class="form-control" rows="5"
                            placeholder="{{ __('Enter Bio') }}"></textarea>
                    </div>


                </div>


                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>


@endsection


@push('script')

    <script>
        $(function() {
            'use strict'

            $.uploadPreview({
                input_field: "#image-upload", // Default: .image-upload
                preview_box: "#image-preview", // Default: .image-preview
                label_field: "#image-label", // Default: .image-label
                label_default: "{{ __('Choose File') }}", // Default: Choose File
                label_selected: "{{ __('Update Image') }}", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });
        })
    </script>

@endpush
