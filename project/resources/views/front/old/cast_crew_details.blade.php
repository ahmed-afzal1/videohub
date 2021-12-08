@extends('layouts.front')

@section('title')
    {{ __('Cast & Crew | ') }}{{ $gs->website_title }}
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
    <div class="container">
        <div class="row details-area">
            <div class="col-lg-8">
                <div class="director">
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('assets/images/cast-crew-image/'.$cost_crew_details->image->image) }}" alt="cast-crew">
                        </div>
                        <div class="content">
                            <h4 class="title">
                                {{ $cost_crew_details->name }}
                               </h4>
                            <p class="text">
                                {{ $cost_crew_details->bio }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="move-area">
        <div class="container">
            <h4 class="mb-3 border-bottom"> {{ __('All Movies') }}</h4>
            <select class="sorting m-4" id="cast_crew_wise_data">
                <option value="{{$cost_crew_details->id}},0"" selected>{{__('All') }}</option>
                <option value="{{$cost_crew_details->id}},Producer">{{ __('Producer') }}</option>
                <option value="{{$cost_crew_details->id}},Derector">{{ __('Directors') }}</option>
                <option value="{{$cost_crew_details->id}},Cast">{{ __('Cast') }}</option>
            </select>
            <div class="row" id="Movie-Show-Ajax">
                @foreach ($data as $movie) @if($movie->access == 'free')
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <a href="{{ route('movie.details',$movie->slug) }}" class="single-move">
                        <div class="image">
                            <img src="{{ asset('assets/images/movie-image/'.$movie->image->image) }}" alt="">
                        </div>
                        @if($movie->access != 'free')
                        <span class="p-video"><i class="fa fa-lock"></i>Premium</span> @endif
                        <div class="content">
                            <h4 class="title">
                                    {{ $movie->title }}
                                </h4>
                            <p class="date">
                                {{ date('Y', strtotime($movie->relase_date)) }}
                            </p>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 item-p">
                    <a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('movie.details',$movie->slug) : 'javascript:;' }}" class="single-move">
                        <div class="image">
                            <img src="{{ asset('assets/images/movie-image/'.$movie->image->image) }}" alt="">
                        </div>
                        @if($movie->access != 'free')
                        <span class="p-video"><i class="fa fa-lock"></i>Premium</span> @endif
                        <div class="content">
                            <h4 class="title">
                                    {{ $movie->title }}
                                </h4>
                            <p class="date">
                                {{ date('Y', strtotime($movie->relase_date)) }}
                            </p>
                        </div>
                    </a>
                </div>
                @endif 
                @endforeach
            </div>
        </div>
    </section>
    
@endsection

@section('script')
    <script>
        $('#cast_crew_wise_data').on('change',function(){
            $('#preloader').show();
            let castCrew = $(this).val();
            let url = mainurl+'/get/cast/crew/wise/movie/'+castCrew;
            let userinfo_crew = $('#userInfo').val();
            let userPlan_crew = $('#plan').val();
            if(castCrew != ''){
                $('#Movie-Show-Ajax').load(url);
            }
            $('#preloader').fadeOut(500);
        })


        $(document).on('click', '.pagination li', function (e) {
            e.preventDefault();
            var $this = $(this);
            $('#preloader').show();
            if ($this.find('a').attr('href') != '#' && $this.find('a').attr('href')) {
                $('#Movie-Show-Ajax').load($this.find('a').attr('href'), function (response, status, xhr) {
                if (status == "success") {
                    $("html,body").animate({
                    scrollTop: 0
                    }, 1);
                }
                 $('#preloader').fadeOut(500);
            });
        }
    });


    </script>
@endsection