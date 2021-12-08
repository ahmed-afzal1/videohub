@extends('layouts.front')

@section('title')
{{ ('Plan Order | ') }}{{ $gs->website_title }}
@endsection


@section('content')
    <!-- Breadcrumb Area Start -->
	<div class="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="pagetitle">
						{{ __('Contact Us') }}
					</h1>
					<ul class="pages">
						<li>
							<a href="{{ route('front.index') }}">
								{{ __('Home') }}
							</a>
						</li>
						<li class="active">
							<a href="{{ Request::url() }}">
							{{ __('Contact Us') }}
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcrumb Area End -->

    <section class="order-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="order-details-box">
                        <div class="header">
                            <h4 class="title">
                                    {{ __('Enter Your Details') }}
                                </h4> @if (session('unsuccess'))
                            <div class="alert alert-success">
                                {{ session('unsuccess') }}
                            </div>
                            @endif @php $user = Auth::user(); @endphp
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-lg-12">
                                <div class="content">
                                    @include('includes.admin.form-both') @include('includes.form-error')
                                    <form id="payment-form" method="POST" action="$">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="text" name="customer_name" class="input-field" placeholder="{{ __('Enter Full Name') }}" value="{{$user->name}}">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" name="customer_email" class="input-field" placeholder="{{ __('Enter Email address') }}" value="{{$user->email}}">
                                            </div>
    
                                            <div class="col-lg-6">
                                                <input type="text" name="customer_phone" class="input-field" placeholder="{{ __('Enter Phone') }}" value="{{$user->phone}}">
                                            </div>
    
                                            <input type="hidden" value="{{$data->id}}" name="plan_id">
                                            <div class="col-lg-4 mt-3">
                                                <select class="input-field" id="method" name="method" required="">
                                                    <option value="" selected>{{__('Select Payment Type')}}</option>
                                                    <option value="Paypal">{{ __('Paypal') }}</option>
                                                    <option value="Stripe">{{ __('Stripe') }}</option>
                                                </select>
                                            </div>
    
                                            <div id="card-view" class="col-lg-12 pt-3 d-none">
                                                <div class="row">
    
                                                    <div class="col-lg-6">
    
                                                        <input type="text" class="input-field card-elements" name="cardNumber" placeholder="{{ __('Card Number')}}" autocomplete="off" oninput="validateCard(this.value);" />
    
                                                        <span id="errCard"></span>
    
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="input-field card-elements" placeholder="{{ __('CVC') }}" name="cardCVC" oninput="validateCVC(this.value);">
                                                        <span id="errCVC"></span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="input-field card-elements" placeholder="{{__('Month')}}" name="month">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="input-field card-elements" placeholder="{{__('Year')}}" name="year">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="cmd" value="_xclick">
                                            <input type="hidden" name="no_note" value="1">
                                            <input type="hidden" name="lc" value="UK">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="ref_id" id="ref_id" value="">
                                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
    
                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <input type="hidden" name="order_amount" value="{{$data->price}}">
                                            <input type="hidden" name="currency_sign" value="$">
    
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn-checkout">{{__('Checkout')}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4 col-md-6  p-0">
                    <div class="single-promotion mr-4">
                        <h4>
                            <p>{{$data->plan_name}}</p>
                            <p class="time">
                              @if($data->time == 365)
                                 {{ $data->duration }}  {{ __('Years(S)') }}
                            @elseif($data->time == 30)
                                 {{ $data->duration }}  {{ __('Month(s)') }}
                            @else
                                 {{ $data->duration }} {{ __('Days(s)')}}
                            @endif
                            </p>
                            $ {{ $data->price }}
                          </h4>
                        <p>
                            {!! $data->description !!}
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection


@section('script')
<script>
    $("#method").on('change',function(){
        var val = $(this).val();
        if(val== 'Stripe'){
            $('#payment-form').prop('action','{{ route('stripe.submit') }}');
            $('#card-view').removeClass('d-none');
            $('.card-elements').prop('required',true);
        }
        if(val == 'Paypal') {
            $('#payment-form').prop('action','{{ route('paypal.submit') }}');
            $('#card-view').addClass('d-none');
            $('.card-elements').prop('required',false);
        }
    })
</script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
var cnstatus = false;
var dateStatus = false;
var cvcStatus = false;

function validateCard(cn) {
  cnstatus = Stripe.card.validateCardNumber(cn);
  if (!cnstatus) {
    $("#errCard").html('Card number not valid<br>');
  } else {
    $("#errCard").html('');
  }
//   btnStatusChange();


}

function validateCVC(cvc) {
  cvcStatus = Stripe.card.validateCVC(cvc);
  if (!cvcStatus) {
    $("#errCVC").html('CVC number not valid');
  } else {
    $("#errCVC").html('');
  }
//   btnStatusChange();
}

</script>
@endsection