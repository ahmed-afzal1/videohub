<!-- header area start here  -->
<header class="header-area d-none d-xl-block">
    <div class="header-wrap">
        <div class="container">
            <nav class="navbar navbar-expand-xl navbar-light">
                <a class="navbar-brand" href="{{ route('front.index') }}"><img
                        src="{{ asset('assets/front/images/logo.png') }}" alt="ZaiFlix" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="has-megamenu">
                            <a href="#">{{ __('Movies') }} <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                                <div class="d-flex align-items-start">
                                    <div class="nav nav-pills flex-column me-4" id="Movies-tab" role="tablist"
                                        aria-orientation="vertical">
                                        @if ($movies->where('access', 'premium')->count() > 0)
                                            <button class="nav-link active" id="Movies-ZaiflixPremium-tab"
                                                data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixPremium"
                                                type="button" role="tab" aria-controls="Movies-ZaiflixPremium"
                                                aria-selected="true">{{ __('Zaiflix Premium') }}</button>
                                        @endif
                                        @if ($movies->where('heighlight','LIKE','%trending%')->count() > 0)
                                            <button class="nav-link" id="Movies-TrendingMovies-tab"
                                                data-bs-toggle="pill" data-bs-target="#Movies-TrendingMovies"
                                                type="button" role="tab" aria-controls="Movies-TrendingMovies"
                                                aria-selected="false">{{ __('Trending Movies') }}</button>
                                        @endif
                                         @if ($movies->where('heighlight', 'top')->count() > 0)
                                        <button class="nav-link" id="Movies-TopRated-tab" data-bs-toggle="pill"
                                            data-bs-target="#Movies-TopRated" type="button" role="tab"
                                            aria-controls="Movies-TopRated"
                                            aria-selected="false">{{ __('Top Rated') }}</button>
                                        @endif
                                         @if ($movies->where('heighlight', 'new')->count() > 0)
                                        <button class="nav-link" id="Movies-LatestZaiflix-tab"
                                            data-bs-toggle="pill" data-bs-target="#Movies-LatestZaiflix" type="button"
                                            role="tab" aria-controls="Movies-LatestZaiflix"
                                            aria-selected="false">{{ __('Latest on Zaiflix') }}</button>
                                        @endif
                                        @if($movies->where('heighlight', 'recent')->count() > 0)
                                        <button class="nav-link" id="Movies-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixOriginals"
                                            type="button" role="tab" aria-controls="Movies-ZaiflixOriginals"
                                            aria-selected="false">{{ __('Zaiflix Originals') }}</button>
                                    </div>
                                    @endif
                                    @if($movies->where('heighlight', 'old')->count() > 0)
                                        <button class="nav-link" id="Movies-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixOriginals"
                                            type="button" role="tab" aria-controls="Movies-ZaiflixOriginals"
                                            aria-selected="false">{{ __('Zaiflix Originals') }}</button>
                                    </div>
                                    @endif
                                    
                                    <div class="tab-content" id="Movies-tabContent">
                                        <div class="tab-pane fade show active" id="Movies-ZaiflixPremium"
                                            role="tabpanel" aria-labelledby="Movies-ZaiflixPremium-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-TrendingMovies" role="tabpanel"
                                            aria-labelledby="Movies-TrendingMovies-tab">
                                            <div class="movies-list">

                                                @foreach ($movies->where('heighlight', 'trending')->get() as $movie)
                                                    <div class="single-movi">
                                                        <a href="#">
                                                            <div class="movi-thumbnail">
                                                                <img class="poster-image"
                                                                    src="{{ asset('assets/images/' . $movie->image->image) }}"
                                                                    alt="movi name" />
                                                                <div class="premium-icon"><img
                                                                        src="{{ asset('assets/images/' . $movie->image->image) }}"
                                                                        alt="premium" /></div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-TopRated" role="tabpanel"
                                            aria-labelledby="Movies-TopRated-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-LatestZaiflix" role="tabpanel"
                                            aria-labelledby="Movies-LatestZaiflix-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.pn') }}g"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-ZaiflixOriginals" role="tabpanel"
                                            aria-labelledby="Movies-ZaiflixOriginals-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="has-megamenu">
                            <a href="#">{{ __('Series') }} <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                                <div class="d-flex align-items-start">
                                    <div class="nav nav-pills flex-column me-4" id="Series-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="Series-ZaiflixPremium-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-ZaiflixPremium" type="button"
                                            role="tab" aria-controls="Series-ZaiflixPremium"
                                            aria-selected="true">{{ __('Zaiflix Premium') }}</button>
                                        <button class="nav-link" id="Series-TrendingMovies-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-TrendingMovies" type="button"
                                            role="tab" aria-controls="Series-TrendingMovies"
                                            aria-selected="false">{{ __('Trending Movies') }}</button>
                                        <button class="nav-link" id="Series-TopRated-tab" data-bs-toggle="pill"
                                            data-bs-target="#Series-TopRated" type="button" role="tab"
                                            aria-controls="Series-TopRated"
                                            aria-selected="false">{{ __('Top Rated') }}</button>
                                        <button class="nav-link" id="Series-LatestZaiflix-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-LatestZaiflix" type="button"
                                            role="tab" aria-controls="Series-LatestZaiflix"
                                            aria-selected="false">{{ __('Latest on Zaiflix') }}</button>
                                        <button class="nav-link" id="Series-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-ZaiflixOriginals"
                                            type="button" role="tab" aria-controls="Series-ZaiflixOriginals"
                                            aria-selected="false">{{ __('Zaiflix Originals') }}</button>
                                    </div>
                                    <div class="tab-content" id="Series-tabContent">
                                        <div class="tab-pane fade show active" id="Series-ZaiflixPremium"
                                            role="tabpanel" aria-labelledby="Series-ZaiflixPremium-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-TrendingMovies" role="tabpanel"
                                            aria-labelledby="Series-TrendingMovies-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-TopRated" role="tabpanel"
                                            aria-labelledby="Series-TopRated-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-LatestZaiflix" role="tabpanel"
                                            aria-labelledby="Series-LatestZaiflix-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-ZaiflixOriginals" role="tabpanel"
                                            aria-labelledby="Series-ZaiflixOriginals-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="has-megamenu">
                            <a href="#">{{ __('Kids') }} <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                                <div class="d-flex align-items-start">
                                    <div class="nav nav-pills flex-column me-4" id="Kids-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="Kids-ZaiflixPremium-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-ZaiflixPremium" type="button"
                                            role="tab" aria-controls="Kids-ZaiflixPremium"
                                            aria-selected="true">{{ __('Zaiflix Premium') }}</button>
                                        <button class="nav-link" id="Kids-TrendingMovies-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-TrendingMovies" type="button"
                                            role="tab" aria-controls="Kids-TrendingMovies"
                                            aria-selected="false">{{ __('Trending Movies') }}</button>
                                        <button class="nav-link" id="Kids-TopRated-tab" data-bs-toggle="pill"
                                            data-bs-target="#Kids-TopRated" type="button" role="tab"
                                            aria-controls="Kids-TopRated"
                                            aria-selected="false">{{ __('Top Rated') }}</button>
                                        <button class="nav-link" id="Kids-LatestZaiflix-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-LatestZaiflix" type="button"
                                            role="tab" aria-controls="Kids-LatestZaiflix"
                                            aria-selected="false">{{ __('Latest on Zaiflix') }}</button>
                                        <button class="nav-link" id="Kids-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-ZaiflixOriginals" type="button"
                                            role="tab" aria-controls="Kids-ZaiflixOriginals"
                                            aria-selected="false">{{ __('Zaiflix Originals') }}</button>
                                    </div>
                                    <div class="tab-content" id="Kids-tabContent">
                                        <div class="tab-pane fade show active" id="Kids-ZaiflixPremium" role="tabpanel"
                                            aria-labelledby="Kids-ZaiflixPremium-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-TrendingMovies" role="tabpanel"
                                            aria-labelledby="Kids-TrendingMovies-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-TopRated" role="tabpanel"
                                            aria-labelledby="Kids-TopRated-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-LatestZaiflix" role="tabpanel"
                                            aria-labelledby="Kids-LatestZaiflix-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-ZaiflixOriginals" role="tabpanel"
                                            aria-labelledby="Kids-ZaiflixOriginals-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item1.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>

                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item2.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item3.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item4.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item5.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item6.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item7.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item8.png') }}"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="{{ asset('assets/front/images/megamenu-item9.pn') }}g"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="{{ asset('assets/front/images/premium.svg') }}"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Live TV</a>
                        </li>
                        <li>
                            <a href="{{ route('front.plan') }}">Subscription</a>
                        </li>
                    </ul>
                    <div class="header-right d-flex align-items-center">
                        <div class="search-form">
                            <form action="#">
                                <div class="search-input-wrap">
                                    <input type="search" name="%s" id="search" placeholder="Search titles here..." />
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown language-dropdown">
                            <button class="language-btn" data-bs-toggle="dropdown">
                                <img class="flag" src="{{ asset('assets/front/images/usa-flag.png') }}"
                                    alt="usa" />
                                <span class="btn-text">EN</span>
                                <i class="agnle-down fas fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">EN</a></li>
                                <li><a href="#">BN</a></li>
                                <li><a href="#">Hi</a></li>
                            </ul>
                        </div>
                        <a class="login" href="{{ route('user.login') }}">Login</a>
                        <a class="header-btn" href="{{ route('user.register') }}">Register</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- header area end here  -->
