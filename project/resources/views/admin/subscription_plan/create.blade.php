@extends('layouts.admin')
@section('content')

    <div class="card mb-4">
        
        <div class="card-body">

            <form id="" action="{{ route('admin-subscription-plan-store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="plan_name">{{ __('Plan Name') }}</label>
                        <input type="text" class="form-control" name="plan_name" required id="plan_name"
                            placeholder="{{ __('Plan Name') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Price') }}</label>
                        <input type="text" class="form-control" name="price" required id="price"
                            placeholder="{{ __('Plan Price') }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Duration in Days') }}</label>
                        <input type="text" class="form-control" name="duration" required
                            placeholder="{{ __('Plan Duration') }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Status') }}</label>
                        <select name="status" id="" class="form-control">

                            <option value="1">{{ __('Active') }}</option>
                            <option value="0">{{ __('Inactive') }}</option>

                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price">{{ __('Plan Features') }}</label>
                        <select name="plan_features[]" multiple class="form-control select-2">

                            @foreach ($features as $featrue)
                                <option value="{{ $featrue->id }}">{{ __($featrue->features) }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">{{ __('Short Description') }}</label>
                        <input type="text" name="description" id="description" placeholder="{{ __('Description') }}"
                            class="form-control">
                    </div>





                    {{-- <div class="more-field text-right col-md-12">
                        <button type="button" class="btn btn-primary" id="add_more_feature"> <i class="fa fa-plus"></i>
                            {{ __('Add Features') }}</button>
                    </div>

                    <div id="feature_section" class="col-md-12">
                        <div class="feature-area mt-5 position-relative">

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="feature[0][key]"
                                            placeholder="{{ __('Enter Feature Name') }}" id="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <select class="form-control  mb-3" name="feature[0][value]">
                                            <option value="yes">{{ __('Yes') }}</option>
                                            <option value="no">{{ __('No') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}



                </div>
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </form>
        </div>
    </div>
@endsection

@push('plugin')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"
        integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css"
        integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

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


@push('script')

    <script>
        'use strict'
        $(document).ready(function() {
            $('.select-2').select2();

        });
    </script>


@endpush
