@extends('layouts.admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Contact Us Page') }}
    <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">{{ __('Home Page Settings') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Us Page') }}</li>
        </ol>
    </div>
    @include('includes.admin.form-error')
     @include('includes.admin.form-success')
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-body ">
                    <form id="pageForm" action="{{route('admin-ps-update')}}" method="POST">
                        @csrf
                     
                        <div class="form-group">
                            <label for="description">{{ __('Contact Us Email Address') }} *</label>
                            <textarea  class="form-control" name="contact_email"rows="5" placeholder="{{ __('Contact Us Email Address') }}">{!! $data->contact_email !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Contact Form Success Text') }} *</label>
                            <textarea  class="form-control" name="success_message" rows="5"  placeholder="{{ __('Contact Form Success Text') }}">{!! $data->success_message !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="website">{{ __('Website') }} *</label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="{{ __('Website') }}" value="{{$data->website}}">
                        </div>

                        <div class="form-group">
                            <label for="Day">{{ __('Day') }} *</label>
                            <input type="text" class="form-control" name="day" id="Day" placeholder="{{ __('Mon - Sat') }}" value="{{$data->day}}">
                        </div>

                        <div class="form-group">
                            <label for="time">{{ __('Time') }} *</label>
                            <input type="text" class="form-control" name="time" id="time" placeholder="{{ __('9am - 8pm') }}" value="{{$data->time}}">
                        </div>

                        <div class="form-group">
                            <label for="street_address">{{ __('Street Address') }} *</label>
                            <textarea  class="form-control" name="street_address"rows="5" id="street_address" placeholder="{{ __('Street Address') }}">{!! $data->street_address !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="contact_number">{{ __('Phone Number') }} *</label>
                            <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="{{ __('Phone Number') }}" value="{{$data->contact_number}}">
                        </div>

                        <div class="form-group">
                            <label for="fax">{{ __('Fax') }} *</label>
                            <input type="text" class="form-control" name="fax" id="fax" placeholder="{{ __('Fax') }}" value="{{$data->fax}}">
                        </div>

                        <div class="form-group">
                            <label for="meta-key">{{ __('Meta Keys') }}</label>
                            <span>{{__('(Seperate By Comma. Optional)')}}</span>
                            <input type="text" class="form-control" name="meta_key" id="meta-key" placeholder="{{ __('Meta Keys') }}" value="{{$data->meta_key}}">
                        </div>

                       <div class="form-group">
                            <label for="description">{{ __('Meta Description') }}</label>
                            <span>{{{ __('(Optional)') }}}</span>
                            <textarea  class="form-control" name="meta_description" id="description" rows="5" placeholder="{{ __('Meta Description') }}">{!! $data->meta_description !!}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

