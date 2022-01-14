@extends('layouts.load')

@section('content')

<div class="row">
    <div class="col-lg-12 p-0">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>

        <div class="card-body ml-5 ">
        @include('includes.admin.form-error')  
        <form id="ModalFormSubmit" action="{{route('admin.heighlight.update',$data->id)}}" method="POST">
            @csrf
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="trending" id="trending" {{ in_array('trending',$data->heighlight ) ? 'checked': '' }}>
                <label class="custom-control-label" for="trending">{{ __('Trending Now') }}</label>
            </div>

            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="new" id="new" {{ in_array('new', $data->heighlight ) ? 'checked': '' }}>
                <label class="custom-control-label" for="new">{{ __('New Movie') }}</label>
            </div>

            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="recent" id="recent" {{ in_array('recent',$data->heighlight ) ? 'checked': '' }}>
                <label class="custom-control-label" for="recent">{{ __('Recent view') }}</label>
            </div>

            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="top" id="top" {{ in_array('top',$data->heighlight ) ? 'checked': '' }}>
                <label class="custom-control-label" for="top">{{ __('Top Movie') }}</label>
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input" name="old" id="old" {{ in_array('old',$data->heighlight ) ? 'checked': '' }}>
                <label class="custom-control-label" for="old">{{ __('Old Movie') }}</label>
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


@endsection