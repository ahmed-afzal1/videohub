@extends('layouts.admin')

@section('content')
    <div class="container-fluid" id="container-wrapper">

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('Header Logo') }}</h6>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin-gs-update') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                           
                            <div class="form-group col-md-3 mb-3">
                                <label class="col-form-label">{{ __('Header logo') }}</label>

                                <div id="image-preview" class="image-preview" style="background-image:url({{ $gs->header_logo ? asset('assets/images/'. $gs->header_logo) : asset('assets/images/noimage.png') }})">
                                    <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                                    <input type="file" name="header_logo" id="image-upload" />
                                </div>

                            </div>

                            
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('Footer Logo') }}</h6>
                    </div>
                    <div class="card-body">
                       
                        
                        <form action="{{ route('admin-gs-update') }}" enctype="multipart/form-data"
                            method="POST">@csrf
                            @include('includes.admin.form-both')

                           <div class="form-group col-md-3 mb-3">
                                <label class="col-form-label">{{ __('Footer logo') }}</label>

                                <div id="image-preview_footer" class="image-preview" style="background-image:url({{ $gs->footer_logo ? asset('assets/images/' . $gs->footer_logo) : asset('assets/images/noimage.png') }})">
                                    <label for="image-upload_footer" id="image-label_footer">{{ __('Choose File') }}</label>
                                    <input type="file" name="footer_logo" id="image-upload_footer" />
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('script')
    <script>
        $('#header-logo').on('change', function() {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-view-header img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        })

        $('#footer-logo').on('change', function() {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-view-footer img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        })
    </script>
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
        
        $.uploadPreview({
            input_field: "#image-upload_footer", // Default: .image-upload
            preview_box: "#image-preview_footer", // Default: .image-preview
            label_field: "#image-label_footer", // Default: .image-label
            label_default: "{{ __('Choose File') }}", // Default: Choose File
            label_selected: "{{ __('Update Image') }}", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>

@endpush
