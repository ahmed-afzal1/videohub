@extends('layouts.front')

@section('css')

@endsection

@section('contents')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-page">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Pricing</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <div class="pricing-page section-bottom">
        <div class="container">
            <div class="section-title-area text-center">
                <h2>Choose Your Best Plan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit</p>
            </div>
            <div class="price-table">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                @foreach ($plans as $plan)
                                    @if ($loop->first)

                                        <th scope="col">
                                            <div class="table-header">
                                                <p>{{__('Plan Catagories')}}</p>
                                            </div>
                                        </th>

                                    @endif
                                    <th scope="col">
                                        <div class="table-header">
                                            <span>{{ __($plan->plan_name) }}</span>
                                            <p>{{ __($plan->description) }}</p>
                                        </div>
                                    </th>

                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($plans as $plan)
                                    @if ($loop->first)
                                        <td>
                                            <div class="plan-time">
                                                <p>Price</p>
                                            </div>
                                        </td>
                                    @endif

                                    <td>
                                        <div class="plan-time">
                                            <h2 class="price">${{ $plan->price }}</h2>
                                            <a href="#" class="plan-btn">{{ __('Choose Plan') }}</a>
                                        </div>
                                    </td>
                                @endforeach
                            </tr>

                            @foreach ($plans as $key => $plan)

                                @if ($loop->first)
                                    <tr>
                                        <td class="features" colspan="4">{{ __('Features') }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            @foreach ($features as $feature)


                                <tr>
                                    <td>{{ $feature->features }}</td>

                                    @foreach($plans as $plan)

                                        @if(in_array($feature->id, $plan->plan_features))
                                        <td><i class="fa fa-check"></i></td>
                                        @else
                                         <td><i class="fa fa-times"></i></td>
                                        @endif
                                    @endforeach

                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
