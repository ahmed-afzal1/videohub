@extends('layouts.front')

@push('css')

@endpush


@section('contents')
    <div class="movies-category-page section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="movies-category-page-title">{{ $pageTitle }}</h1>
                </div>
                <div class="col-lg-12">
                    <!-- Tab Nav List -->
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        @foreach ($categories as $cat)
                            @foreach ($freeMovies as $free)

                                @if (in_array($cat->id, $free->category_id))

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $loop->parent->first ? 'active' : '' }}"
                                            id="pills-{{ $cat->name }}-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-{{ $cat->name }}" type="button" role="tab"
                                            aria-controls="pills-{{ $cat->name }}"
                                            aria-selected="true">{{ $cat->name }}</button>
                                    </li>
                                @endif
                            @endforeach

                        @endforeach
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Series-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Series" type="button" role="tab" aria-controls="pills-Series"
                                aria-selected="false">Series</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Kids-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Kids" type="button" role="tab" aria-controls="pills-Kids"
                                aria-selected="false">Kids</button>
                        </li> --}}
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">

                        @foreach ($categories as $cat)


                            @foreach ($freeMovies as $free)

                                @if (in_array($cat->id, $free->category_id))

                                    <div class="tab-pane {{ $loop->parent->first ? 'fade show active' : '' }}"
                                        id="pills-{{ $cat->name }}" role="tabpanel"
                                        aria-labelledby="pills-{{ $cat->name }}-tab">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="single-tv-series text-center">
                                                    <div class="tv-series-thumbnail">
                                                        <a href="#"><img class="thumbnail"
                                                                src="{{ asset('assets/images/' . $free->image->image) }}"
                                                                alt="tv series" /></a>
                                                        <img class="premium" src="assets/images/premium-label.svg"
                                                            alt="premium" />
                                                    </div>
                                                    <div class="tv-series-info">
                                                        <h3 class="series-title"><a href="#">{{ $free->title }}</a>
                                                        </h3>
                                                        <p>2014 | Series, Drama</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="load-more-btn text-center">
                                            <button class="primary-btn">Load more <img src="assets/images/spinner.svg"
                                                    alt="spinner" class="ms-2"></button>
                                        </div>

                                    </div>
                                @endif

                            @endforeach


                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
