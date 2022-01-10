@extends('layouts.front')

@push('css')

@endpush


@section('contents')
    <!-- hero-slider area start here  -->
    <section class="hero-slider-area">
        <div class="hero-banner-slide">
            @foreach ($sliders as $slider)
                <div class="single-banner"
                    style="background-image: url({{ asset('assets/images/poster/' . $slider->poster) }});">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="exciting-collection"><img class="icon"
                                        src="{{ asset('assets/front/images/trending-up.svg') }}" alt="grid" /> Trending
                                    Now .
                                    2021</div>
                                <h1 class="banner-title">{{ @$slider->movie->tilte }}</h1>
                                <div class="hero-banner-rating d-flex align-items-center">
                                    <span class="hero-normal-rating px-2 me-4">16+</span>
                                    <span class="imdb-rating bg-yellow d-inline-flex align-items-center text-black-50"><img
                                            src="{{ asset('assets/front/images/imdb-banner.png') }}"
                                            alt="imdb"><span>{{ \App\helper\Helper::GetIMDBRating(@$slider->movie->title) }}</span></span>
                                </div>

                                <p class="banner-content">{{ @$slider->movie->description }}</p>
                                <div class="hero-cast-wrap">
                                    <p><span class="red-color">Cast: </span>

                                        @foreach ($slider->movie->cast as $cast)
                                            @php
                                                $cast = \App\Models\CastCrew::find($cast);
                                            @endphp
                                            {{ $cast->name }},
                                        @endforeach
                                    </p>
                                    <p><span class="red-color">Genre: </span>
                                        @if ($slider->movie->genre_id != null)
                                            @foreach ($slider->movie->genre_id as $genre)

                                                @php
                                                    $cast = \App\Models\Genre::find($genre);
                                                @endphp
                                                {{ $cast->name }},
                                            @endforeach
                                        @endif
                                    </p>
                                    <p><span class="red-color">Tag: </span>
                                        @if ($slider->movie->tag != null)
                                            @foreach ($slider->movie->tag as $tag)

                                                {{ $tag }},
                                            @endforeach
                                        @endif

                                    </p>
                                </div>
                                <div class="hero-btns d-flex align-content-center">
                                    <a href="{{ route('movie.details', $slider->movie->slug) }}"
                                        class="primary-btn text-capitalize">{{ __('Watch Now') }}</a>
                                    <button
                                        class="add-to-btn border-0 bg-transparent text-white d-flex align-items-center ms-4">
                                        <img src="{{ asset('assets/front/images/plus.svg') }}" alt="plus"
                                            class="me-1"> Add to List</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="hero-banner-thumbnail">
            @foreach ($sliders as $slider)
                <div class="single-thumbnail">
                    <img src="{{ asset('assets/images/poster/' . $slider->poster) }}" alt="thumbnail" />
                </div>
            @endforeach

        </div>
    </section>
    <!-- hero-slider area end here  -->

    <!-- Latest Movies area start here  -->
    <section class="latest-movies-area section-top">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">{{ __('Latest Movies') }}</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="{{ route('front.movies') }}" class="view-all-btn">{{ __('View all') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="latest-movies-slide three-items-slide">
                @foreach ($latestMovies as $latest)
                    <div class="single-movies">
                        <div class="movies-thumbnail">
                            <img src="{{ asset('assets/images/' . @$latest->image->image) }}" alt="movis" />
                        </div>
                        <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                            alt="premium" />
                        <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                alt="imdb" /><span>{{ \App\helper\Helper::GetIMDBRating($latest->title) }}</span></div>
                        <a href="{{ route('movie.details', $latest->slug) }}" class="play-btn"><i
                                class="fas fa-play"></i></a>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">{{ $latest->title }}</a></h3>
                            <ul class="movies-meta">
                                <li class="season"><span>16+</span></li>
                                @foreach ($latest->category_id as $cat)
                                    @php
                                        $category = \App\Models\Category::find($cat);
                                    @endphp
                                    <li>{{ $category->name }}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Movies area end here  -->

    <!-- Free Watch  area start here  -->
    <div class="free-watch section">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">{{ __('Free To Watch') }}</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="{{route('free.movies')}}" class="view-all-btn">{{ __('View all') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    
                    @foreach ($freeMovies as $free)
                        @if ($loop->first)
                           
                        <div class="single-watch-grid">
                            <div class="watch-thumbnail">
                                <a href="{{ route('movie.details', $free->slug) }}"><img src="{{ asset('assets/images/'.$free->image->image) }}"
                                        alt="watch-grid-image" /></a>
                            </div>
                            <a href="{{ route('movie.details', $free->slug) }}" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="watch-info">
                                <h3><a href="{{ route('movie.details', $free->slug) }}">{{__($free->title)}}</a></h3>
                                <p>{{__($free->description)}}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <div class="single-watch-list">
                        @foreach ($freeMovies as $free)
                            @if ($loop->first)
                                @continue
                            @endif
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <div class="watch-thumbnail">
                                        <a href="#"><img src="{{ asset('assets/front/images/watch-list-image-1.jpg') }}"
                                                class="img-fluid" alt="watch-list-image" /></a>
                                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="watch-info">
                                        <span class="date">2018</span>
                                        <h3 class="watch-title"><a href="#">300 Rise Of An Empire</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consec tetur adipis cing elit, sed do eiusmod tempor.
                                        </p>
                                        <ul class="watch-meta">
                                            <li><i class="far fa-clock"></i> 3hr 30mins</li>
                                            <li><i class="far fa-calendar-alt"></i> June 2, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Free Watch  area end here  -->

    <!-- Trailer area start here  -->
    <section class="trailer-area section">
        <div class="container">

            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Recommend Movies</h2>
                    </div>
                </div>
            </div>

            <div class="trailer-slider-wrap movi-banner-slide">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="trailer-video">
                            <img class="thumbnail-thumbnail"
                                src="{{ asset('assets/front/images/trailer-thumbnail.jpg') }}" alt="trailer-thumbnail" />
                            <a class="play-btn" href="#"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="trailer-info">
                            <h2 class="trailer-title">Godzilla Vs Kong </h2>
                            <h5 class="trailer-label">Trailer</h5>
                            <p class="trailer-content">Godzilla vs. Kong is a 2021 American monster film directed by Adam
                                Wingard. A sequel to Godzilla: King of the Monsters (2019) and Kong</p>
                            <a href="#" class="primary-btn">WATCH NOW</a>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="trailer-video">
                            <img class="thumbnail-thumbnail"
                                src="{{ asset('assets/front/images/trailer-thumbnail.jpg') }}" alt="trailer-thumbnail" />
                            <a class="play-btn" href="#"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="trailer-info">
                            <h2 class="trailer-title">Godzilla Vs Kong 1</h2>
                            <h5 class="trailer-label">Trailer</h5>
                            <p class="trailer-content">Godzilla vs. Kong is a 2021 American monster film directed by Adam
                                Wingard. A sequel to Godzilla: King of the Monsters (2019) and Kong</p>
                            <a href="#" class="primary-btn">WATCH NOW</a>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="trailer-video">
                            <img class="thumbnail-thumbnail"
                                src="{{ asset('assets/front/images/trailer-thumbnail.jpg') }}" alt="trailer-thumbnail" />
                            <a class="play-btn" href="#"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="trailer-info">
                            <h2 class="trailer-title">Godzilla Vs Kong 2</h2>
                            <h5 class="trailer-label">Trailer</h5>
                            <p class="trailer-content">Godzilla vs. Kong is a 2021 American monster film directed by Adam
                                Wingard. A sequel to Godzilla: King of the Monsters (2019) and Kong</p>
                            <a href="#" class="primary-btn">WATCH NOW</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Trailer area end here  -->

    <!-- Popular Tv Series start here  -->
    <section class="popular-tv-series section-top pb-100">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Popular Tv Series</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="popular-tv-series.html" class="view-all-btn">View all <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-1.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">The 100</a></h3>
                            <p>2014 | Series, Drama</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-2.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                    alt="imdb" /><span>6.5</span></div>
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">The Witcher</a></h3>
                            <p>2019 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-3.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Dexter</a></h3>
                            <p>2019 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-4.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Money Heist</a></h3>
                            <p>2019 | Drama, Action</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-5.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">The Walking Dead</a></h3>
                            <p>2014 | Series, Drama</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-6.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Doom Patrol</a></h3>
                            <p>2019 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-7.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Luther</a></h3>
                            <p>2015 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="{{ asset('assets/front/images/tv-series-8.png') }}" alt="tv series" /></a>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Barbaren</a></h3>
                            <p>2014 | Series, Drama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Tv Series end here  -->
@endsection

@section('js')

@endsection
