@extends('layouts.admin')

@section('content')

    <div class="container-fluid" id="container-wrapper">

        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="card mb-4">
                    {{-- <div class="card-body">
                    <div class="row mb-3">
                     
                    
                            <form action="{{route('website.lang.import')}}" method="post" enctype="multipart/form-data">@csrf
                                <div class="form-group">
                                    <label for="language">{{ __('File Upload') }}</label>
                                    <span class="ml-3">{{ __('(support (csv))') }}</span>
                                    <div class="custom-file">
                                        <input type="hidden" name="language_id" value="{{$data->id}}">
                                        <input type="file" class="custom-file-input" name="csvfile" id="language"  value="">
                                        <label class="custom-file-label" for="language">{{ __('Choose file') }}</label>
                                    </div>
                                </div>
                                <div class="more-field text-center">
                                    <button type="submit" class="btn btn-info btn-sm">Upload</button>
                                </div>
                            </form>
                        </div>
    
                    </div> --}}

                    <div class="card-body">

                        <form action="{{ route('admin-lang-update', $data->id) }}" enctype="multipart/form-data"
                            method="POST" id="pageForm">
                            @csrf

                            <div class="row mb-2">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="Language">{{ __('Language') }}</label>
                                        <input type="text" class="form-control" name="language" id="Language"
                                            placeholder="Language Name" value="{{ $data->language }}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">{{ __('Language Direction') }} </label>
                                        <select name="rtl" class="form-control">
                                            <option value="1" {{ $data->rtl == 1 ? 'selected' : '' }}>
                                                {{ __('Left to Right') }}</option>
                                            <option value="0" {{ $data->rtl == 0 ? 'selected' : '' }}>
                                                {{ __('Right to Left') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h4 class="border-buttom py-3 mb-4 text-center">{{ __('SET LANGUAGE KEYS & VALUES') }}</h4>
                            <div id="language-section">
                                @php
                                    $data = Session::get('data');
                                @endphp
                                @if ($data == null)
                                    @foreach ($lang as $key => $value)
                                        <div class="language-area  position-relative">
                                            <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <textarea name="keys[]" class="form-control"
                                                            placeholder="Enter Language Key"
                                                            required="">{{ $key }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">

                                                    <div class="form-group">
                                                        <textarea name="values[]" class="form-control"
                                                            placeholder="Enter Language Value"
                                                            required="">{{ $value }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                @if ($data)
                                    @foreach ($data as $key => $value)
                                        <div class="language-area  position-relative">
                                            <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <textarea name="keys[]" class="form-control"
                                                            placeholder="Enter Language Key"
                                                            required="">{{ $key }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">

                                                    <div class="form-group">
                                                        <textarea name="values[]" class="form-control"
                                                            placeholder="Enter Language Value"
                                                            required="">{{ $value }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="more-field text-center mb-2">
                                <button type="button" class="btn btn-info"
                                    id="language-btn">{{ __('Add More Field') }}</button>
                            </div>

                            <button type="submit" id="insertButton" class="btn btn-primary">{{ __('Save') }}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <input type="hidden" value="0" id="isValue">
@endsection

@push('script')
    <script>
        function isEmpty(el) {
            return !$.trim(el.html())
        }

        $("#language-btn").on('click', function() {

            $("#language-section").append(
                `<div class="language-area  position-relative">
            <span class="remove-btn"><i class="fas fa-times"></i></span>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group ">
                        <textarea name="keys[]" class="form-control" placeholder="Enter Language Key" required=""></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    
                    <div class="form-group ">
                        <textarea name="values[]" class="form-control" placeholder="Enter Language Value" required=""></textarea>
                    </div>
                </div>
            </div>
        </div>`
            );
        });

        $(document).on('click', '.remove-btn', function() {

            $(this.parentNode).remove();



            if (isEmpty($('#language-section'))) {

                $("#language-section").append(
                    ` <div class="language-area  position-relative">
            <span class="remove-btn"><i class="fas fa-times"></i></span>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group ">
                        <textarea name="keys[]" class="form-control" placeholder="Enter Language Key" required=""></textarea>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    
                    <div class="form-group ">
                        <textarea name="values[]" class="form-control" placeholder="Enter Language Value" required=""></textarea>
                    </div>
                </div>
            </div>
        </div>`
                );
            }
        });
    </script>
@endpush
