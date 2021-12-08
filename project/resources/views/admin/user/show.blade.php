@extends('layouts.admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Customer Details') }}
    <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin-episode-index')}}">{{ __('Customer Details') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Customer Details') }}</li>
        </ol>
    </div>
    @include('includes.admin.form-error')
     @include('includes.admin.form-success')
    <div class="row">
        <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header  d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">{{ __('Profile Photo') }}</h6>
                              </div>
                            <div class="card-body text-center">
                                <div class="profile-image text-center pb-2">
                                    <img src="{{ $data->photo ? asset('assets/images/user-image/'.$data->photo) : asset('assets/images/noimage.png') }}" alt="image" class="img-fluid rounded-circle" width="150" height="150">
                                </div>
                                <a class="btn btn-primary send" href="javascript:;" data-toggle="modal" data-href="{{ $data->email }}" data-target="#vendorform">
                                  <i class="fas fa-envelope"></i> {{ __('Message') }}
                                  </a>
                              
                            </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">{{ __('Information') }}</h6>
                              </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                  <thead>
                                    <tr>
                                      <th>{{ __('Name') }}</th>
                                      <td>{{ $data->name }}</td>
                                    </tr>

                                    <tr>
                                      <th class="eml-val">{{ __('Email') }}</th>
                                      <td>{{ $data->email }}</td>
                                    </tr>
                                    <tr>
                                      <th>{{ __('Phone') }}</th>
                                      <td>{{ $data->phone }}</td>
                                    </tr>
                                    <tr>
                                      <th>{{ __('Gander') }}</th>
                                      <td>{{ $data->gander }}</td>
                                    </tr>
                                    @if($data->birthday != null)
                                    <tr>
                                      <th>{{ __('Birthday') }}</th>
                                      <td>{{ $data->birthday }}</td>
                                    </tr>
                                   @endif
                                   
                                  </thead>
                                </table>
                              </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">{{ __('Activity Log') }}</h6>
                              </div>
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush">
                                  <thead>
                                    <tr>
                                      <th>{{ __('Join') }}</th>
                                      <td>{{\Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->diffForHumans()}}</td>
                                    </tr>
                                    @php
                                        $order = $data->plan;
                                       $order = $order->take(1)->last();
                                    @endphp
                                    @if($order)
                                    <tr>
                                      <th>{{ __('Current Plan') }}</th>
                                      <td>{{ $order->plan->plan_name }}</td>
                                    </tr>
                                    @endif
                                   
                                    <tr>
                                      <th>{{ __('Reviews') }}</th>
                                     <td> <a href="{{route('admin-user-review',$data->id)}}" class="text-primary btn btn-sm">{{ $data->reviews ? $data->reviews->count() : 0 }} {{ __('Items') }}</a></td>
                                    </tr>
                                    
                                  </thead>
                                </table>
                              </div>
                          </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
          <!-- Simple Tables -->
          <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">{{ __('Orders') }}</h6>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>{{ __('Order ID') }}</th>
                    <th>{{ __('Subscription Plan') }}</th>
                    <th>{{ __('Price') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Action') }}</th>
                  </tr>
                </thead>
                <tbody>
                    
                    @forelse ($data->plan as $item)
                    <tr>
                        <td><a href="{{ route('admin.order.view',$item->id) }}">#{{ $item->id }}</a></td>
                        <td>{{ $item->plan->plan_name }}</td>
                        <td>{{ $item->plan->price }}</td>
                        <td><span class="badge badge-success">{{ $item->payment_status }}</span></td>
                        <td>
                            <a href=" {{ route('admin.order.view',$item->id) }}" class="btn btn-sm btn-primary mr-2"><span class="fas fa-eye"></span> {{ __('Details') }}</a>
                            <a href="{{ route('admin.order.delete',$item->id) }}" class="btn btn-sm btn-danger"><span class="fas fa-trash-alt"></span> {{  __('Delete') }}</a>
                        </td>
                        
                      </tr>
                      @empty
                      <tr class="text-center">
                        <td colspan="5"><strong class="text-danger">{{ __('No Plan') }}</strong></td>
                      </tr>
                    @endforelse
                </tbody>
              </table>
            </div>
            <div class="card-footer"></div>
          </div>
        </div>
      </div>
</div>

<div class="modal fade" id="vendorform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="exampleModalCenterTitle">{{ __('Send Message') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-lg-12">
          <!-- Form Basic -->
              @include('includes.admin.form-error')  
              <form id="emailreply1" action="{{route('admin-send-message')}}" method="POST">
                @csrf
                  <div class="form-group">
                    <label for="to"><strong>{{ __('Email') }}</strong></label>
                  <input type="email" class="form-control eml-val" name="to" value="" id="to" placeholder="{{ __('Email') }}">
                  </div>
          
                  <div class="form-group">
                    <label for="Subject"><strong>{{ __('Subject') }}</strong></label>
                    <input type="text" class="form-control" name="subject" id="Subject" value="" placeholder="{{ __('Subject') }}">
                  </div>

                  <div class="form-group">
                    <label for="body"><strong>{{ __('Message') }}</strong></label>
                    <textarea type="text" class="form-control " name="message" id="body" rows="4"  placeholder="{{ __('Message Here') }}"></textarea>
                  </div>
                 <button type="submit" class="btn btn-primary">{{ __('Send Message') }}
                  <span class="spinner-grow spinner-grow-sm d-none" style="padding:10px" role="status"></span>
                </button>
                </form>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}
         
        </button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

@endsection