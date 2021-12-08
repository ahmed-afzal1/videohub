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
                      <form action="#">
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
                          <li><a href="home.html">3D</a></li>
                          <li class="active"><a href="#">Action</a></li>
                          <li><a href="#">Advanture</a></li>
                          <li><a href="#">Animation</a></li>
                          <li class="active"><a href="#">Biography</a></li>
                          <li class="active"><a href="#">Comedy</a></li>
                          <li><a href="#">Crime</a></li>
                          <li><a href="#">Documentary</a></li>
                          <li><a href="#">Drama</a></li>
                          <li><a href="#">Family</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="single-widget year-widget">
                      <h3 class="widget-title">Year</h3>
                      <form action="#">
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group right-divider">
                              <select class="form-control" id="all">
                                <option>All</option>
                                <option>3D</option>
                                <option>Action</option>
                                <option>Advanture</option>
                                <option>Biography</option>
                                <option>Comedy</option>
                                <option>Drama</option>
                                <option>Family</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-group">
                              <select class="form-control" id="years">
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
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
                  <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-1.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-2.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-3.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-4.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-5.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-1.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.sv')}}g" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-6.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-7.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-8.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-4.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-5.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{asset('assets/front/images/tv-series-1.png')}}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
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
                            <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned at age three
                              when his mother was...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pagination-area">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="pages-show">Showing 10 from 160 data</p>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('js')
    
@endsection