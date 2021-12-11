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
                            placeholder="{{ __('Plan Duration') }}" value="{{ $plan->duration }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Status') }}</label>
                        <select name="status" id="" class="form-control">

                            <option value="1" {{ $plan->status ? 'selected' : '' }}>{{ __('Active') }}</option>
                            <option value="0" {{ !$plan->status ? 'selected' : '' }}>{{ __('Inactive') }}</option>

                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Features') }}</label>
                        <select name="plan_features[]" multiple class="form-control select-2">

                            @foreach ($features as $feat)
                                <option value="{{ $feat->id }}" {{in_array($feat->id, $plan->plan_features) ? 'selected' : ''}}>{{ __($feat->features) }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">{{ __('Short Description') }}</label>
                        <input type="text" name="description" id="description" placeholder="{{ __('Description') }}"
                            class="form-control" value="{{ $plan->description }}">
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
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css" integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


@endpush


@push('script')

    <script>
        'use strict'
        $(document).ready(function() {
            $('.select-2').select2();

        });
    </script>


@endpush