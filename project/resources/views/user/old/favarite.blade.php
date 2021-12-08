@extends('layouts.user')
@section('title')
{{ ('Favarite | ') }}{{ $gs->website_title }}
@endsection
@section('content')
    <!-- User Main Content Area Start -->
<section class="user-main-content">
    <div class="container">
        <div class="row">
            @include('user.inc.sitebar')
            
            <div class="col-xl-9  col-md-7">
                <div class="content-area">
                    <div class="header-area">
                        <h4 class="title">
                                <i class="far fa-clock"></i>{{ __('Watch Later') }} 
                        </h4>
                    </div>
                    <div class="row">
                        <input type="hidden" id="countVideo" value="{{ $data->count() }}">
                        @foreach ($data as $item)
                        
                        <div class="col-lg-6" id="{{ $item }}">
                            <div class="single-move-with-short-info">
                                <div class="remove" id="removeFavariteValue" data-href="{{route('favarite.list',$item->video->id)}}">
                                        <i class="fas fa-times"></i>
                                </div>
                                <a href="{{ route('movie.details',$item->video->slug) }}">
                                <div class="left-img">
                                    <img src="{{ asset('assets/images/movie-image/'.$item->video->image->image) }}" alt="image">
                                </div>
                                <div class="right-content">
                                    <h5 class="name">
                                            {{ $item->video->title }}
                                    </h5>
                                    <p class="date">
                                        {{ $item->video->relase_date }}
                                    </p>
                                    <ul class="path">
                                        @foreach ($item->video->genres() as $i)
                                        <li>
                                            <a href="{{route('movie.show',$i->slug)}}">
                                                {{ $i->name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <ul class="stars">
                                        <li>
                                                <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                                <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                                <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                                <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                                <i class="fas fa-star-half-alt"></i>
                                        </li>
                                    </ul>
                                    <div class="rating">
                                        {{  round( $item->video->videoReview->avg('review_value'),1) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                        @endforeach
                      
                        <div class="col-lg-6 {{ $data->count() > 0 ? 'd-none' : '' }} NoVideoParent">
                            <div class="single-move-with-short-info NoVideo">
                                <h1>{{ __('No Video') }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Pagination">{{  $data->links() }}</div>
            </div>
           
        </div>
      
    </div>
</section>
<!-- User Main Content Area End -->
@endsection
