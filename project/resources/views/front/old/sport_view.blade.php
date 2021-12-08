@extends('layouts.front')
@section('title')
{{ ('Sports Details | ') }} {{ $gs->website_title }}
@endsection

@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="pagetitle">
					{{ __('Sports Video') }}
				</h1>
				<ul class="pages">
					<li>
					<a href="{{route('front.index')}}">
							{{ __('Home') }}
						</a>
					</li>
					<li class="active">
						<a href="{{ Request::url() }}">
							{{ $data->title }}
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->

  <!-- Move details Area start -->
<section class="move-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="video-play-area">
                    <div class="embed-responsive embed-responsive-16by9">
						@if ($data->video_type == 'url')
						<iframe class="embed-responsive-item" src="{{ $data->video }}" allowfullscreen></iframe>
						@else
						<video src="{{ $data->video_type == 'file' ? asset('assets/videos/sports-videos/'.$data->video) : '' }}"  width="400" height="360" controls class="embed-responsive-item""></video>
						@endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top-moves">
                    <h4 class="title">
                        {{ __('Related Videos') }}
                    </h4>
                    <ul>
                        @foreach ($related_videos as $sports_video)
                        
                            @if($sports_video->access != 'free')
                            <li>
                                <div class="single-move-with-short-info item-p">
                                    <a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('sports.details',$sports_video->slug) : 'javascript:;' }}">
                                    <div class="left-img">
                                    <img src="{{ asset('assets/images/sports-videos-images/'.$sports_video->image->image) }}" alt="">
                                    @if($sports_video->access != 'free')
                                            <span class="p-video"><i class="fa fa-lock"></i>Premium</span>
                                    @endif
                                    </div>
                                    
                                    <div class="right-content">
                                        <h5 class="name">
                                                {{ $sports_video->title }}
                                        </h5>
                                       </a>
                                        <p class="date">
                                            {{ $sports_video->relase_date }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li>
                                <div class="single-move-with-short-info">
                                    <a href="{{route('sports.details',$sports_video->slug)}}">
                                    <div class="left-img">
                                    <img src="{{ asset('assets/images/sports-videos-images/'.$sports_video->image->image) }}" alt="">
                                    </div>
                                    
                                    <div class="right-content">
                                        <h5 class="name">
                                                {{ $sports_video->title }}
                                        </h5>
                                       </a>
                                        <p class="date">
                                            {{ $sports_video->relase_date }}
                                        </p>
                                        <ul class="path">
                                            <li>
                                                <a href="{{route('sports.category.view',$sports_video->SportsCategory->slug)}}">
                                                {{ $sports_video->SportsCategory->name }}
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endif
                      
						@endforeach
                       
                    </ul>
                </div>
            </div>
        </div>
    
</section>
<!-- Move details Area end -->
<input type="hidden" value="{{ Auth::user() }}" id="userInfo">
@endsection

