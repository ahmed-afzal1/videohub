@extends('layouts.front')
@section('title')
	{{ __('Home | ') }}{{ $gs->website_title }}
@endsection


@section('style')
<style>
	.search-move .search-ajax{
	position: absolute;
    width: 680px;
    max-height: 465px;
    top: 52px;
    left: 16px;
    background: #fff;
    border-radius: 4px;
	border-top: 2px solid blue;
	z-index: 999;
	overflow-y: scroll;

	}

	.search-move .search-ajax ul a li{
		border-bottom: 1px solid #eee;
		padding: 12px 0 !important;
	}

	.search-move .search-ajax ul a li:hover{
		background: #ddd;
	}
</style>
@endsection


@section('content')

    	<!-- Hero Area Start -->
	<section class="hero-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="content-wrapper">
						<div class="content">
							<div class="heading-area">
								<h1 class="title">
									{{ __('BROWSE ALL MOVIES & TV-SERIES ') }}
								</h1>
							</div>
							<form action="{{ route('front.search.post') }}" method="GET">
							
							<ul class="select-list mb-3">
								<li>
									<div class="select-item">
										<h6 class="title">
											{{ __('Language') }}:
										</h6>
										<select class="js-example-basic-single" name="language_id">
										<option value="" selected>{{__('Select Language')}}</option>
											@foreach ($languages as $language)
												<option value="{{ $language->id }}">{{$language->name}}</option>
											@endforeach
										</select>
									</div>
								</li>
								<li>
									<div class="select-item">
										<h6 class="title">
												{{ __('Genre') }}:
										</h6>
										<select class="js-example-basic-single" name="genre_id">
											<option value="" selected>{{__('Select Genre')}}</option>
											@foreach ($genres as $genre)
												<option value="{{ $genre->id }}">{{$genre->name}}</option>
											@endforeach
										</select>
									</div>
								</li>
								<li>
									<div class="select-item">
										<h6 class="title">
											{{ __('Rating') }}:
										</h6>
										<select class="js-example-basic-single" name="rating">
											<option value="" selected>{{__('Select Rating')}}</option>
											<option value="10">10</option>
											<option value="9">9</option>
											<option value="8">8</option>
											<option value="7">7</option>
											<option value="6">6</option>
											<option value="5">5</option>
											<option value="4">4</option>
											<option value="3">3</option>
											<option value="2">2</option>
											<option value="1">1</option>
										</select>
									</div>
								</li>
							</ul>
							<div class="search-move">
									<input type="text" placeholder="{{ __('Enter Your Movies Names') }}" name="search" value="" id="movieSearch" autocomplete="off">
									<button type="submit" class="submit-btn"><i class="fas fa-search"></i>{{ __('Search') }}</button>
									<div class="search-ajax d-none">
										<ul class="list-unstyled" id="view-ajax-search">
											
										  </ul>
									</div>
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- Hero Area End -->
    

    <!-- Move Area Start -->
	<section class="move-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					@if($ps->trending_section ==1)
					<div class="movelist-area">
						<div class="header-area">
							<h4 class="title">
								{{ __('Trending Now') }}
							</h4>
						</div>

						


						<div class="move-slider">
							@foreach ($trendingMovies as $trendingMovie)
							@if($trendingMovie->access != 'free')
							<div class="item item-p">
								<a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('movie.details',$trendingMovie->slug) : 'javascript:;' }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$trendingMovie->image->image) }}" alt="">
										</div>
										@if($trendingMovie->access != 'free')
										<span class="p-video"><i class="fa fa-lock"></i>Premium</span>
										@endif
										<div class="content">
											<h4 class="title">
												{{ $trendingMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($trendingMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@else
							<div class="item ">
								<a href="{{ route('movie.details',$trendingMovie->slug) }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$trendingMovie->image->image) }}" alt="">
										</div>
										
										<div class="content">
											<h4 class="title">
												{{ $trendingMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($trendingMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@endif
							
							@endforeach
							
						</div>
					</div>
					@endif
					@if($ps->new_section ==1)
					<div class="movelist-area">
						<div class="header-area">
							<h4 class="title">
								{{ __('New Movie') }}
							</h4>
						</div>
						<div class="move-slider">
							@foreach ($newMovies as $newMovie)
							@if($newMovie->access != 'free')
							<div class="item item-p">
								<a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('movie.details',$newMovie->slug) : 'javascript:;' }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$newMovie->image->image) }}" alt="">
										</div>
										@if($newMovie->access != 'free')
										<span class="p-video"><i class="fa fa-lock"></i>Premium</span>
										@endif
										<div class="content">
											<h4 class="title">
												{{ $newMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($newMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@else
							<div class="item">
								<a href="{{ route('movie.details',$newMovie->slug) }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$newMovie->image->image) }}" alt="">
										</div>
										
										<div class="content">
											<h4 class="title">
												{{ $newMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($newMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@endif
							@endforeach
						</div>
					</div>
					@endif
					@if($ps->recent_section ==1)
					<div class="movelist-area">
						<div class="header-area">
							<h4 class="title">
								{{ __('Recent View') }}
							</h4>
						</div>
						<div class="move-slider">
							@foreach ($recentMovies as $recentMovie)
							@if($recentMovie->access != 'free')
							<div class="item item-p">
								<a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('movie.details',$recentMovie->slug) : 'javascript:;' }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$recentMovie->image->image) }}" alt="">
										</div>
										@if($recentMovie->access != 'free')
										<span class="p-video"><i class="fa fa-lock"></i>Premium</span>
										@endif
										<div class="content">
											<h4 class="title">
												{{ $recentMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($recentMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@else
							<div class="item">
								<a href="{{ route('movie.details',$recentMovie->slug) }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$recentMovie->image->image) }}" alt="">
										</div>
										
										<div class="content">
											<h4 class="title">
												{{ $recentMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($recentMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@endif
							@endforeach
						</div>
					</div>
					@endif
					@if($ps->old_section ==1)
					<div class="movelist-area">
						<div class="header-area">
							<h4 class="title">
								{{ __('Old Movie') }}
							</h4>
						</div>
						<div class="move-slider">
							@foreach ($oldMovies as $oldMovie)
							@if($oldMovie->access != 'free')
							<div class="item item-p">
								<a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('movie.details',$oldMovie->slug) : 'javascript:;' }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$oldMovie->image->image) }}" alt="">
										</div>
										@if($oldMovie->access != 'free')
										<span class="p-video"><i class="fa fa-lock"></i>Premium</span>
										@endif
										<div class="content">
											<h4 class="title">
												{{ $oldMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($oldMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@else
							<div class="item">
								<a href="{{ route('movie.details',$oldMovie->slug) }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/movie-image/'.$oldMovie->image->image) }}" alt="">
										</div>
										
										<div class="content">
											<h4 class="title">
												{{ $oldMovie->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($oldMovie->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@endif
							@endforeach
							
						</div>
					</div>
					@endif

					<div class="movelist-area">
						<div class="header-area">
							<h4 class="title">
								{{ __('Popular Shows') }}
							</h4>
						</div>

						


						<div class="move-slider">
							@foreach ($populerShows as $populerShow)
							@if($populerShow->access != 'free')
							<div class="item item-p">
								<a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('tvshow.view',$populerShow->slug) : 'javascript:;' }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/tvshow-image/'.$populerShow->image->image) }}" alt="">
										</div>
										@if($populerShow->access != 'free')
										<span class="p-video"><i class="fa fa-lock"></i>Premium</span>
										@endif
										<div class="content">
											<h4 class="title">
												{{ $populerShow->show_name }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($populerShow->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@else
							<div class="item">
								<a href="{{ route('tvshow.view',$populerShow->slug) }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/tvshow-image/'.$populerShow->image->image) }}" alt="">
										</div>
										
										<div class="content">
											<h4 class="title">
												{{ $populerShow->show_name }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($populerShow->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@endif
							@endforeach
						</div>
					</div>

					<div class="movelist-area">
						<div class="header-area">
							<h4 class="title">
								{{ __('Latest Sports Video') }}
							</h4>
						</div>


						<div class="move-slider">
							@foreach ($sportsVideos as $sport)
							@if($sport->access != 'free')
							<div class="item item-p">
								<a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('sports.details',$sport->slug) : 'javascript:;' }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/sports-videos-images/'.$sport->image->image) }}" alt="">
										</div>
										@if($sport->access != 'free')
										<span class="p-video"><i class="fa fa-lock"></i>Premium</span>
										@endif
										<div class="content">
											<h4 class="title">
												{{ $sport->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($sport->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@else
							<div class="item">
								<a href="{{ route('sports.details',$sport->slug) }}" class="single-move">
										<div class="image">
											<img src="{{ asset('assets/images/sports-videos-images/'.$sport->image->image) }}" alt="">
										</div>
										
										<div class="content">
											<h4 class="title">
												{{ $sport->title }}
											</h4>
											<p class="date">
												{{ date('Y', strtotime($sport->relase_date)) }}
											</p>
										</div>
									</a>
								</div>
							@endif
							@endforeach
							
						</div>
					
				</div>
			</div>
		</div>
	</section>
	
@endsection

