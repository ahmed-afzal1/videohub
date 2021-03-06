@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
   
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          </div>
         
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" >
              <thead class="thead-light">
                <tr>
                  <th>{{ __('Customer Name') }}</th>
                  <th>{{ __('Subscription Plan Name') }}</th>
                  <th>{{ __('Order Amount') }}</th>
                  <th>{{ __('Payment Status') }}</th>
                  <th>{{ __('Order Date') }}</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($orders as $order)

                  <tr>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->plan->plan_name}}</td>
                    <td>{{$order->order_amount}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>
                    {{$order->created_at->format('Y-m-d')}}
                    </td>
                  </tr>
                    
                @empty


                @endforelse
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="submit-loader">
               <img src="{{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}" alt="">
            </div>
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
  </div>

{{-- DELETE MODAL --}}

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block">{{ __('Confirm Delete') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center">{{ __('You are about to delete this Category. Everything under this category will be deleted') }}.</p>
                <p class="text-center">{{ __('Do you want to proceed?') }}</p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger btn-ok">{{ __('Delete') }}</a>
            </div>

        </div>
    </div>
</div>
{{-- DELETE MODAL ENDS --}}

@endsection

@section('script')

   

@endsection
