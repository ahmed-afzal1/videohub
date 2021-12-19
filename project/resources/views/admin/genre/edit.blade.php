@extends('layouts.admin')

@section('content')


    <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card-body">
            <form action="{{ route('admin-cat-update', $data->id) }}" method="POST" enctype='multipart/form-data'>
                @csrf


                <div class="form-group col-md-3 mb-3">
                    <label class="col-form-label">{{ __('Genre Image') }}</label>

                    <div id="image-preview" class="image-preview"
                        style="background-image:url({{ $data->image->image ? asset('assets/images/' . $data->image->image) : '' }})">
                        <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                        <input type="file" name="image" id="image-upload" />
                    </div>

                </div>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="Genre">{{ __('Genre Name') }}</label>
                        <input type="text" class="form-control" name="name" value="{{ $data->name }}" id="Genre"
                            placeholder="{{ __('Genre Name') }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="slug">{{ __('Slug') }}</label>
                        <input type="text" class="form-control" name="slug" id="slug" value="{{ $data->slug }}"
                            placeholder="{{ __('Slug') }}">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
        </div>
    </div>
@endsection
