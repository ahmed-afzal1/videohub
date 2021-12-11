@extends('layouts.admin')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Update') }} <a href="{{ route('admin-subscription-plan-index') }}"
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

            <form action="{{ route('admin-subscription-plan-update', $plan->id) }}" method="POST">
                @csrf

                <div class="row">


                    <div class="form-group col-md-6">
                        <label for="plan_name">{{ __('Plan Name') }}</label>
                        <input type="text" class="form-control" name="plan_name" value="{{ $plan->plan_name }}" required
                            id="plan_name" placeholder="{{ __('Plan Name') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Price') }}</label>
                        <input type="text" class="form-control" name="price" value="{{ $plan->price }}" required
                            id="price" placeholder="{{ __('Plan Price') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Duration in Days') }}</label>
                        <input type="text" class="form-control" name="duration" required
                            placeholder="{{ __('Plan Duration') }}" value="{{$plan->duration}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Status') }}</label>
                        <select name="status" id="" class="form-control">

                            <option value="1" {{$plan->status ? 'selected' : ''}}>{{ __('Active') }}</option>
                            <option value="0" {{!$plan->status ? 'selected' : ''}}>{{ __('Inactive') }}</option>

                        </select>
                    </div>
                  <div class="form-group col-md-12">
                        <label for="description">{{ __('Short Description') }}</label>
                       <input type="text" name="description" id="description"
                            placeholder="{{ __('Description') }}" class="form-control" value="{{$plan->description}}">
                    </div>
                  
                  <div class="more-field text-right col-md-12">
                        <button type="button" class="btn btn-primary" id="add_more_feature"> <i class="fa fa-plus"></i>
                            {{ __('Add Features') }}</button>
                    </div>
                  
                    <div id="feature_section" class="col-md-12">


                        @foreach ($plan->features as $key => $item)

                            <div class="feature-area position-relative ">
                                <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="feature[{{$key}}][key]"
                                                placeholder="{{ __('Enter Feature Name') }}" value="{{ $item['key'] }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-6">
                                        <div class="form-group">
                                            <select class="form-control  mb-3" name="feature[{{$key}}][value]">
                                                <option value="yes" {{ $item['value'] == 'yes' ? 'selected' : '' }}>
                                                    {{ __('Yes') }}</option>
                                                <option value="no" {{ $item['value'] == 'no' ? 'selected' : '' }}>
                                                    {{ __('No') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

               
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
        </div>
    </div>
@endsection


@push('style')

    <style>
        .remove-btn {
            width: 15px;
            height: 15px;
            background-color: red;
            padding: 10px;
            text-align: center;
            color: #fff;
            border-radius: 50%
        }

    </style>


@endpush

@push('plugin')
    <!-- include summernote css/js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endpush

@push('script')

    <script>
        'use strict'
        $(document).ready(function() {

            let counter = "{{count($plan->features)}}";

            $('#summernote').summernote();
           


            $('#add_more_feature').on('click', function() {
                $("#feature_section").append(
                    `

                     <div class="feature-area mt-5 position-relative">
                            <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="feature[${counter}][key]"
                                            placeholder="{{ __('Enter Feature Name') }}" id="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <select class="form-control  mb-3" name="feature[${counter}][value]">
                                            <option value="yes">{{ __('Yes') }}</option>
                                            <option value="no">{{ __('No') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                   `
                );
                counter++;
            });

            $(document).on('click', '.remove-btn', function() {

                $(this.parentNode).remove();

            });
        });
    </script>


@endpush

