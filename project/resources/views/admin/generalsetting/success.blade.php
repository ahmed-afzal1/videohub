@extends('layouts.admin')


@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Success Messages') }} <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Genarel Setting') }}</li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Success Messages') }}</li>
      </ol>
  </div>


  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary">{{__('Success Messages')}}</h6>
    </div>
    <div class="card-body">
      <form>
        <div class="form-group row">
          <label for="title" class="col-sm-3 col-form-label">{{ __('Subscribe Success') }} *</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="website_title" id="title" placeholder="{{ __('Subscribe Success') }}">
          </div>
        </div>
       
        <div class="form-group row mb-5">
          <label for="tawk_id" class="col-sm-3 col-form-label">{{ __('Subscribe Error') }} *</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="tawk_id" name="tawk_id" placeholder="{{ __('Subscribe Error') }}">
          </div>
        </div>

        <div class="form-group row mb-5">
          <label for="success_title" class="col-sm-3 col-form-label">{{ __('Order Success Title ') }} *</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="success_title" rows="5" placeholder="{{ __('Order Success Title ') }}"></textarea>
          </div>
        </div>

        <div class="form-group row mb-5">
          <label for="success_text" class="col-sm-3 col-form-label">{{ __('Order Success Text') }} *</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="success_text" rows="5" placeholder="{{ __('Order Success Text') }}"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

