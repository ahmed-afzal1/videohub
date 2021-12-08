@extends('layouts.front')

@section('title')
    {{ __('Genre wise Movie | ') }}{{ $gs->website_title }}
@endsection

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="pagetitle">
					{{ __('Movies') }}
				</h1>
				<ul class="pages">
					<li>
					<a href="{{route('front.index')}}">
							{{ __('Home') }}
						</a>
					</li>
					<li class="active">
						<a href="javascript:;">
							{{ strtoupper(Request::route('slug')) }}
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->
    <!-- Move Area Start -->
	<section class="move-area">
        <div class="container">
            <div class="row">
                @foreach ($data as $video)
                @if($video->access == 'free')
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <a href="{{route('sports.details',$video->slug)}}" class="single-move">
                        <div class="image">
                            <img src="{{ asset('assets/images/sports-videos-images/'.$video->image->image) }}" alt="">
                        </div>
                        
                        <div class="content">
                            <h4 class="title">
                                {{ $video->title }}
                            </h4>
                            <p class="date">
                                {{ date('Y', strtotime($video->relase_date)) }}
                            </p>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 item-p">
                    <a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('movie.details',$video->slug) : 'javascript:;' }}" class="single-move">
                        <div class="image">
                            <img src="{{ asset('assets/images/sports-videos-images/'.$video->image->image) }}" alt="">
                        </div>
                        @if($video->access != 'free')
						    <span class="p-video"><i class="fa fa-lock"></i>{{ __('Premium') }}</span>
						@endif
                        <div class="content">
                            <h4 class="title">
                                {{ $video->title }}
                            </h4>
                            <p class="date">
                                {{ date('Y', strtotime($video->relase_date)) }}
                            </p>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        
 
    </section>
    <!-- Move Area End -->

   
@endsection

