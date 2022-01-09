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
                    <li><a href="#">Movies</a></li>
                    <li>Godzilla Vs Kong</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Movie details Area start here  -->
    <section class="movie-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="movie-details-left">
                        <div class="playerContainer">

                            <video id="my-video" class="video-js vjs-big-play-centered" controls
                                poster="{{ asset('assets/images/' . $movie->image->image) }}" data-setup="{}">
                                <source src="{{ $movie->vedio }}" type="video/mp4">

                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading
                                    to a web browser that <a href="http://videojs.com/html5-video-support/"
                                        target="_blank">supports HTML5 video</a>
                                </p>
                            </video>

                        </div>

                        <div class="movie-details-info">
                            <div class="info-top">
                                <div class="info-top-left">
                                    <h2>{{ $movie->title }}
                                        <span>({{ Carbon\Carbon::parse($movie->relase_date)->format('Y') }})</span>
                                    </h2>
                                </div>
                                <div class="info-top-right">
                                    <a class="share-btn" href="#"><img
                                            src="{{ asset('assets/front/images/share.svg') }}" alt="share" /></a>
                                    <a class="add-list-btn" href="#">+ Add to List</a>
                                </div>
                            </div>
                            <ul class="movie-meta">
                                <li><img class="meta-icon" src="{{ asset('assets/front/images/clock.svg') }}"
                                        alt="clock"> <span>{{ $movie->duration }}</span></li>
                                <li><img class="meta-icon" src="{{ asset('assets/front/images/video.svg') }}"
                                        alt="clock"> <span>1080p</span></li>
                                <li><img class="meta-icon" src="{{ asset('assets/front/images/calendar.svg') }}"
                                        alt="clock">
                                    <span>{{ Carbon\Carbon::parse($movie->relase_date)->format('Y') }}</span>
                                </li>
                            </ul>
                            <p class="movie-description">
                                {{ $movie->description }}
                            </p>
                            <a href="#" class="readmore-btn">Read More</a>
                        </div>
                        <div class="cast-area">
                            <h2 class="cast-title">Cast</h2>
                            <div class="row">
                                @foreach ($movie->cast as $cast)
                                    @php
                                        $cast = \App\Models\CastCrew::find($cast);
                                    @endphp
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                        <div class="single-cast">
                                            <div class="cast-image">
                                            
                                                <a href="#"><img src="{{ asset('assets/images/'.$cast->image->image) }}"
                                                        alt="cast" /></a>
                                            </div>
                                            <div class="cast-info">
                                                <h4><a href="#">{{$cast->name}}</a></h4>
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <a href="#" class="see-more">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Movie details Area end here  -->

    <!-- upcomming Movies area start here  -->
    <section class="upcomming-movies-area section-top">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Suggested Movies</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="#" class="view-all-btn">View all <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-1.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned
                                    at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-2.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-3.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-4.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-5.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-6.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-7.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="{{ asset('assets/front/images/tv-series-8.png') }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcomming Movies area end here  -->

    <!-- Trending Movies area start here  -->
    <section class="trending-movies-area section-bottom pt-100">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Trending Movies</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="#" class="view-all-btn">View all <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="five-items-slide">
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="{{ asset('assets/front/images/trending-movies-1.png') }}" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="{{ asset('assets/front/images/trending-movies-2.png') }}" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="{{ asset('assets/front/images/trending-movies-3.png') }}" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="{{ asset('assets/front/images/trending-movies-4.png') }}" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="{{ asset('assets/front/images/trending-movies-5.png') }}" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="{{ asset('assets/front/images/trending-movies-3.png') }}" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="{{ asset('assets/front/images/imdb.png') }}"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="{{ asset('assets/front/images/premium-label.svg') }}"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Movies area end here  -->

@endsection

@section('js')

@endsection
