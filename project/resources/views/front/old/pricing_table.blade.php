@extends('layouts.front')

@section('title')
    {{ __('Princg Table | ') }}{{ $gs->website_title }}
@endsection
@section('style')
<style>

.panel {
background-color: #fff;
border-radius: 10px;
padding: 15px 25px;
position: relative;
width: 100%;
z-index: 10;
}

.pricing-table {
box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
display: flex;
flex-direction: column;
}

@media (min-width: 900px) {
.pricing-table {
  flex-direction: row;
}
}

.pricing-table * {
text-align: center;
text-transform: uppercase;
}

.pricing-plan {
border-bottom: 1px solid #e1f1ff;
padding: 25px;
}

.pricing-plan:last-child {
border-bottom: none;
}

@media (min-width: 900px) {
.pricing-plan {
  border-bottom: none;
  border-right: 1px solid #e1f1ff;
  flex-basis: 100%;
  padding: 25px 50px;
}

.pricing-plan:last-child {
  border-right: none;
}
}

.pricing-img {
margin-bottom: 25px;
max-width: 100%;
}

.pricing-header {
color: #888;
font-weight: 600;
letter-spacing: 1px;
}

.pricing-features {
color: #016FF9;
font-weight: 600;
letter-spacing: 1px;
margin: 50px 0 25px;
}

.pricing-features-item {
border-top: 1px solid #e1f1ff;
font-size: 12px;
line-height: 1.5;
padding: 15px 0;
}

.pricing-features-item:last-child {
border-bottom: 1px solid #e1f1ff;
}

.pricing-price {
color: #016FF9;
display: block;
font-size: 32px;
font-weight: 700;
}

.pricing-button {
border: 1px solid #9dd1ff;
border-radius: 10px;
color: #348EFE;
display: inline-block;
margin: 25px 0;
padding: 15px 35px;
text-decoration: none;
transition: all 150ms ease-in-out;
}

.pricing-button:hover,
.pricing-button:focus {
background-color: #e1f1ff;
}

.pricing-button.is-featured {
background-color: #48aaff;
color: #fff;
}

.pricing-button.is-featured:hover,
.pricing-button.is-featured:active {
background-color: #269aff;
}
</style>
@endsection
 
@section('content')
  <!-- Breadcrumb Area Start -->
  <div class="breadcrumb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="pagetitle">
            {{ __('Pricing Table') }}
          </h1>
          <ul class="pages">
            <li>
            <a href="{{route('front.index')}}">
                {{ __('Home') }}
              </a>
            </li>
            <li class="active">
              <a href="{{ Request::url() }}">
               {{ __('Pricing Table') }}
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Area End -->

 <!--Promotion Area Start-->
 <section class="pormotion-page py-5">
  <div class="container mt-2">
    <div class="row ">
      @foreach ($plans as $item)
        <div class="col-lg-3 col-md-6  p-0">
          <div class="single-promotion mr-4">
            <h4>
              <p>{{$item->plan_name}}</p>
              <p class="time">
                @if($item->time == 365)
                   {{ $item->duration }}  {{ __('Years(S)') }}
              @elseif($item->time == 30)
                   {{ $item->duration }}  {{ __('Month(s)') }}
              @else
                   {{ $item->duration }}  {{ __('Days(s)') }}
              @endif
              </p>
              $ {{ $item->price }}
            </h4>
            <p>
              {!! $item->description !!}
            </p>
            <a href="{{route('subscription.plan',$item->id)}}" class="mybtn1">{{ __('Order Now') }}</a>
          </div>
        </div>
      @endforeach
     
    </div>

    @if (count($plans) == 0)
      <h3 class="py-5 text-center">{{ __('Not Available') }}</h3>
    @endif
  </div>
</section>


@endsection