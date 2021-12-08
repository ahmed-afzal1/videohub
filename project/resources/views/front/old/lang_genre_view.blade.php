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
					{{ $type }}
				</h1>
				<ul class="pages">
					<li>
					<a href="{{route('front.index')}}">
							{{ __('Home') }}
						</a>
					</li>
					<li class="active">
						<a href="javascript:;">
							{{ $type }}
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
                @foreach ($data as $value)
                @if($type == 'Genre')
                
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <a href="{{route('movie.show',$value->slug . '-genre')}}" class="single-move">
                        <div class="image">
                            <img src="{{ asset('assets/images/genre_image/'.$value->image->image) }}" alt="">
                        </div>
                        
                        <div class="content text-center">
                            <h4 class="title">
                                {{ $value->name }}
                            </h4>
                           
                        </div>
                    </a>
                </div>
                @elseif($type == 'Language')
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <a href="{{route('movie.show',$value->name . '-language')}}" class="single-move">
                        <div class="image">
                            <img src="{{ asset('assets/images/language_image/'.$value->image->image) }}" alt="">
                        </div>
                        
                        <div class="content text-center">
                            <h4 class="title">
                                {{ $value->name }}
                            </h4>
                           
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

