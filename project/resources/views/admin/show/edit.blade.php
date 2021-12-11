@extends('layouts.admin')


@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Update') }} <a href="{{ url()->previous() }}"
                class="btn back-btn btn-sm">{{ __('Back') }}</a></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboaard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Update') }}</li>
        </ol>
    </div>

    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('Update') }}</h6>
        </div>
        <div class="card-body">

            <form action="{{ route('admin-show-update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="showname">{{ __('Show Name') }}</label>
                        <input type="text" class="form-control" name="show_name" id="showname"
                            placeholder="{{ __('Show Name') }}" value="{{ $data->show_name }}">
                    </div>


                    

                    <div class="form-group col-md-6">
                        <label for="date">{{ __('Realse Date') }}</label>
                        <input type="text" class="form-control date" name="relase_date" id="datepicker"
                            placeholder="{{ __('Realse Date') }}" value="{{ $data->relase_date }}" autocomplete="off">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="date">{{ __('Genre') }}</label>
                        <select name="genre_id[]" multiple class="form-control select-2">

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{in_array($category->id, $data->genre_id) ? 'selected' : ''}} >{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="title">{{ __('Show Access') }}</label>
                        <select class="form-control  mb-3" name="access" id="title">
                            <option value="free" {{ $data->access == 'free' ? 'selected' : '' }}>{{ __('Free') }}
                            </option>
                            <option value="premium" {{ $data->access == 'premium' ? 'selected' : '' }}>
                                {{ __('Premium') }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="languageimage">{{ __('Image Thumbnail') }}</label>
                        <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                            <input type="hidden" value="" id="image_file">
                            <label class="custom-file-label" for="languageimage">{{ __('Choose file') }}</label>
                        </div>
                    </div>

                    <div class="form-group ShowLanguageImage  {{ $data->image->image != null ? '' : 'd-none' }}">
                        <img src="{{ $data->image->image != null ? asset('assets/images/' . $data->image->image) : '' }}"
                            alt="image" width="150">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="area1">{{ __('Description') }}</label>
                        <textarea id="area1" class="form-control " name="description">{!! $data->description !!}</textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
        </div>
    </div>


@endsection
@push('plugin')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css" integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

@push('script')

    <script>
        $('.select-2').select2();
        $( "#datepicker" ).datepicker();
    </script>
@endpush