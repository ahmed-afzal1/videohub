@extends('layouts.user')
@section('title')
{{ ('Dashboard | ') }}{{ $gs->website_title }}
@endsection
@section('content')

<!-- User Main Content Area Start -->
<section class="user-main-content">
  <div class="container">
      <div class="row">
          @include('user.inc.sitebar')

          <div class="col-xl-9  col-md-7">
              @if($order)
              <div class="content-area">
                  <div class="header-area">
                      <h4 class="title">
                              <i class="far fa-clock"></i>{{ __('My Subscription') }}
                      </h4>
                  </div>

                  <div class="info">
                   
                      <p class="premuim-memplan"><b>{{ __('Current Plan') }}:</b> {{ $order->plan->plan_name }} </p>
                  <p class="text-muted"><b>{{ __('Starting Date') }}:</b> <span>{{ $order->created_at->format('d-M-Y') }}</span></p>
                  @php
                      if($order->plan->time ==1){
                        $time = 'day';
                      }elseif($order->plan->time == 30){
                        $time = 'month';
                      }else{
                        $time = 'year';
                      }

                   
                  @endphp
                      <p>  <b>{{ Carbon\CarbonImmutable::parse($order->created_at)->add($order->plan->duration, $time)->format('d-M-Y') }}</b> <strong>{{ __('Subscription expires on') }}</strong> </p>
                      <div>
                          <a href="{{ route('pricing.table') }}" class="mybtn1" onclick="">{{ __('Upgrade Plan') }} </a>
                      </div>
                  </div>
              </div>
              @else
              <div class="content-area">
                <div class="header-area">
                    <h4 class="title">
                            <i class="far fa-clock"></i>{{ __('My Subscription') }}
                    </h4>
                </div>

                <div class="info">
                    
                    <h4 class="text-muted py-4">{{ __('No Subscription Plan') }}</h4>
                    <div>
                        <a href="{{ route('pricing.table') }}" class="mybtn1" onclick="">{{ __('Upgrade Plan') }} </a>
                    </div>
                </div>
            </div>
              @endif
          </div>
      </div>
  </div>
</section>
<!-- User Main Content Area End -->


@endsection

