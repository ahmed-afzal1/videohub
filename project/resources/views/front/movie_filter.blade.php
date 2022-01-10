 @foreach ($movies as $movie)   
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="{{ asset('assets/images/'.@$movie->image->image) }}" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="{{asset('assets/front/images/imdb.png')}}" alt="imdb" /><span>{{\App\helper\Helper::GetIMDBRating($movie->title)}}</span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="{{asset('assets/front/images/premium-label.svg')}}" alt="premium" />
                          <a href="{{route('movie.details', $movie->slug)}}" class="play-btn"><i class="fas fa-play"></i></a>
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
                            <h3 class="movies-title"><a href="{{route('movie.details', $movie->slug)}}">{{$movie->title}}</a></h3>
                            <ul class="movies-meta">
                              @foreach ($movie->category_id as $cat)
                                    @php
                                        $category = \App\Models\Category::find($cat);
                                    @endphp
                                    <li>{{ $category->name }}</li>
                                @endforeach
                            </ul>
                            <p class="movie-content">{{Str::limit($movie->description,50)}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach