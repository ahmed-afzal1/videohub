@extends('layouts.admin')

@section('content')
    <div class="container-fluid" id="container-wrapper">



        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('Favicon') }}</h6>
                    </div>
                    <div class="card-body">
                       
                        <div class="col-lg-6 col-md-12 offset-lg-3 col-sm-12">

                            <form action="{{ route('admin-gs-update') }}" enctype="multipart/form-data" method="POST">
                                @csrf


                                <div class="form-group col-md-3 mb-3">
                                    <label class="col-form-label">{{ __('Favicon Image') }}</label>

                                    <div id="image-preview" class="image-preview" style="background-image:url({{ $gs->favicon ? asset('assets/images/' . $gs->favicon) : asset('assets/images/noimage.png') }})">
                                        <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                                        <input type="file" name="favicon" id="image-upload" />
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
