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
                    <li>Movies</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <div class="movies-page section-bottom">
        <div class="container">
            <div class="section-header-two">
                <h3 class="section-title">Filter Option</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 order-last order-lg-first">
                    <div class="sidebar-area">
                        <div class="search-widget">
                            <form action="">
                                <div class="search-wrap">
                                    <input type="text" id="searchwidget" name="%s" placeholder="Search movie title" />
                                    <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="single-widget category-widget">
                            <h3 class="widget-title">By Category</h3>
                            <div class="custome-scrollbar">
                                <ul class="category-list">
                                    @foreach ($categories as $category)
                                        <li class="category" data-category_id="{{ $category->id }}"><a
                                                href="">{{ __($category->name) }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="single-widget year-widget">
                            <h3 class="widget-title">Year</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group right-divider">
                                            <select class="form-control" name="category_year">
                                                @foreach ($categories as $category)
                                                 <option value="{{ $category->id }}">{{ __($category->name) }}</option>
                                                    
                                                @endforeach
                                               
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select class="form-control" id="years">
                                            @foreach ($moviesAll as $movie)
                                                <option>{{$movie->relase_date}}</option>
                                            @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="single-widget imdb-widget">
                            <h3 class="widget-title">Imdb Rating</h3>
                            <input type="text" id="Imdbrating" />
                            <div class="rating-point d-flex justify-content-between align-items-center">
                                <span>1.0</span>
                                <span>10</span>
                            </div>
                        </div>
                        <div class="single-widget language-widget">
                            <h3 class="widget-title">Language</h3>
                            <form action="#">
                                <div class="form-group right-divider">
                                    <select class="form-control" id="language">
                                        <option>English</option>
                                        <option>Hindi</option>
                                        <option>Bangla</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-first order-lg-last">
                    <div class="row appearFilterData">
                        @foreach ($moviesAll as $movie)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                <div class="single-movies">
                                    <div class="movis-thumbnail">
                                        <img src="{{ asset('assets/images/' . @$movie->image->image) }}" alt="movis" />
                                    </div>
                                    <div class="movi-verlay">
                                        <div class="imdb-wrap">
                                            <div class="imdb"><img
                                                    src="{{ asset('assets/front/images/imdb.png') }}"
                                                    alt="imdb" /><span>{{ \App\helper\Helper::GetIMDBRating($movie->title) }}</span>
                                            </div>
                                            <span class="season">16+</span>
                                        </div>
                                        <img class="premium"
                                            src="{{ asset('assets/front/images/premium-label.svg') }}" alt="premium" />
                                        <a href="{{ route('movie.details', $movie->slug) }}" class="play-btn"><i
                                                class="fas fa-play"></i></a>
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
                                            <h3 class="movies-title"><a
                                                    href="{{ route('movie.details', $movie->slug) }}">{{ $movie->title }}</a>
                                            </h3>
                                            <ul class="movies-meta">
                                                @foreach ($movie->category_id as $cat)
                                                    @php
                                                        $category = \App\Models\Category::find($cat);
                                                    @endphp
                                                    <li>{{ $category->name }}</li>
                                                @endforeach
                                            </ul>
                                            <p class="movie-content">{{ Str::limit($movie->description, 50) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{-- {{$moviesAll->links()}}
                  <div class="pagination-area">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="pages-show">Showing {{count($paginationResult->data)}} from {{$paginationResult->total}} data</p>
                      </div>
                      <div class="col-md-6 text-md-end">
                        <ul class="pagination-page">
                          <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">...</a></li>
                          <li><a href="#">8</a></li>
                          <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
    'use strict'
        $(function() {
            
            $('.category-list .category').on('click', function() {
                let category = $(this).data('category_id');
               
                $.ajax({
                    method: "GET",
                    data: {
                        category: category
                    },
                    url: "{{ route('filter.movies') }}",
                    success: function(response) {
                        

                        
                        $('.appearFilterData').html(response)
                    }
                })
            })

            $('#Imdbrating').on('change',function(){
                let value = $(this).val();
                
                $.ajax({
                    method: "GET",
                    data: {
                        value: value
                    },
                    url: "{{ route('filter.movies') }}",
                    success: function(response) {
                        

                        
                        $('.appearFilterData').html(response)
                    }
                })
            })

            $('#searchwidget').on('keyup',function(){
                let search = $(this).val();
                
                $.ajax({
                    method: "GET",
                    data: {
                        search: search
                    },
                    url: "{{ route('filter.movies') }}",
                    success: function(response) {
                        

                        
                        $('.appearFilterData').html(response)
                    }
                })
            })
        })
    </script>
@endpush
