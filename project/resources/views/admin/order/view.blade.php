@extends('layouts.admin')
@section('style')
    <style>
        th{
            text-align: right;
        }
    </style>
@endsection
@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Order Detail') }}
    <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin-episode-index')}}">{{ __('Order Detail') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Order Detail') }}</li>
        </ol>
    </div>
    @include('includes.admin.form-error')
     @include('includes.admin.form-success')
    <div class="row">
        <div class="col-lg-12">
                <div class="row">
                    
                    <div class="col-md-12 col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
                                <h3 class="m-0 font-weight-bold text-primary">{{ __('Order Detail') }}</h3>
                              </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                  <thead>
                                    <tr>
                                      <th width="50%">{{  __('Order Number')  }} :</th>
                                      <td>{{ $data->order_number }}</td>
                                    </tr>
                                    <tr>
                                      <th>{{ __('Customer Name') }} :</th>
                                      <td>{{ $data->user->name }}</td>
                                    </tr>

                                    <tr>
                                      <th>{{ __('Subscription Plan') }} :</th>
                                      <td>{{ $data->plan->plan_name }}</td>
                                    </tr>
                                    <tr>
                                      <th>{{ __('Email') }} :</th>
                                      <td>{{ $data->email }}</td>
                                    </tr>
                                    <tr>
                                      <th>{{ __('Phone') }} :</th>
                                      <td>{{ $data->phone }}</td>
                                    </tr>

                                    <tr>
                                      <th>{{ __('Amount') }} :</th>
                                      <td>$ {{ $data->plan->price }}</td>
                                    </tr>

                                    <tr>
                                      <th>{{ __('Payment Type') }} :</th>
                                      <td>{{ $data->payment_type }}</td>
                                    </tr>

                                    <tr>
                                      <th>{{ __('Payment Txn Id') }} ({{ $data->payment_type == 'paypal' ? 'Paypal' : 'Stripe'}}) :</th>
                                      <td>{{ $data->txnid }}</td>
                                    </tr>

                                    @if($data->charge_id)
                                    <tr>
                                        <th>{{ __('Charge Id') }} {{ ('Stripe') }} :</th>
                                        <td>{{ $data->charge_id }}</td>
                                      </tr>
                                    @endif

                                    <tr>
                                        <th>{{ __('Payment Status') }} :</th>
                                        <td><span class="badge badge-success p-2">{{ $data->payment_status }}</span></td>
                                      </tr>

                                    <tr>
                                        <th>{{ __('Order Date') }} :</th>
                                        <td>{{\Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->diffForHumans()}}</td>
                                    </tr>
                                   
                                  </thead>
                                </table>
                              </div>
                          </div>
                    </div>
                </div>
        </div>
    </div>
</div>
   
@endsection

