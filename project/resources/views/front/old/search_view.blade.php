@extends('layouts.front')

@section('title')
    {{ __('Genre wise Movie | ') }}{{ $gs->website_title }}
@endsection
@section('style')
    <style>
        .p-video{
            left: 15px;
        }
    </style>
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
	<section class="move-area">
        <div class="container">

    
                <form>
                    <div class="row">
                      <div class="col-lg-2">
                        <input type="text" class="form-control form-control-sm" placeholder="{{ __('Movie Name') }}" id="search" value="">
                      </div>
                      <div class="col-lg-2">
                        <select class="js-example-basic-single" name="language_id" id="language">
                            <option value="0" selected>{{__('All')}}</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->id }}">{{$language->name}}</option>
                                @endforeach
                        </select>
                      </div>
                      <div class="col-lg-2">
                        <select class="js-example-basic-single" name="genre_id" id="genre">
                            <option value="0" selected>{{__('All')}}</option>
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="col-lg-2">
                        <select class="form-control form-control-sm" id="type">
                            <option value="0" selected>{{__('All')}}</option>
                            <option value="free">{{ __('Free') }}</option>
                            <option value="premium">{{ __('Premium') }}</option>
                        </select>
                      </div>
                      <div class="col-lg-2">
                        <select class="js-example-basic-single" name="rating" id="rating">
                            <option value="0" selected> {{__('All')}} </option>
                            <option value="10">10</option>
                            <option value="9">9</option>
                            <option value="8">8</option>
                            <option value="7">7</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                      </div>
                    </div>
                  </form>


            <div class="row mt-4" id="viewRejult">

                @forelse ($movies as $movie)
                @if($movie->access == 'free')
                @php
                $genre = '';
                    foreach ($movie->genres() as $key => $value) {
                          $genre .=  $value->name.',';
                        }
                @endphp
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 movie-item-v">
                    <a href="{{route('movie.details',$movie->slug)}}" class="single-move">
                        <div class="image">
                            <img src="{{ asset('assets/images/movie-image/'.$movie->image->image) }}" alt="">
                        </div>
                        
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
						    <span class="p-video"><i class="fa fa-lock"></i>{{ __('Premium') }}</span>
						@endif
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
                @empty
              
                        <h4 class=" py-4">{{ __('Movie Not Fount.') }}</h4> 
                   
                @endforelse
            </div>

            <div class="row paginate">
                <div class="col-12 text-center">
                        {{ $movies->links() }}
                </div>
            </div>
        </div>
   
    </section>
    <!-- Move Area End -->
<input type="hidden" id="languagevalue" value="{{$array['language']}}">
<input type="hidden" id="genrevalue"    value="{{$array['genre']}}">
<input type="hidden" id="ratingvalues"   value="{{$array['rating']}}">
<input type="hidden" id="searchvalue"   value="{{$array['search']}}">

@endsection

@section('script')
    <script>


        var languageValue = $('#languagevalue').val();
        var genrevalue = $('#genrevalue').val();
        var ratingvalues = $('#ratingvalues').val();
        var searchvalue = $('#searchvalue').val();
        var type = '0';
        

        if(languageValue != 0){
            languageValue = languageValue;
        }else{
            languageValue = 0;
        }

        if(genrevalue != 0){
            genrevalue = genrevalue;
        }else{
            genrevalue = 0;
        }


        if(ratingvalues != 0){
            ratingvalues = ratingvalues;
        }else{
            ratingvalues = 0;
        }

        if(searchvalue != ''){
            searchvalue = searchvalue;
        }else{
            searchvalue = 'notvalid';
        }
       

      
        $(document).on('change','#genre',function(){
            $('#preloader').show();
            genrevalue = $(this).val();
            let searchUrl = mainurl+'/search/movie/'+languageValue+'/'+ genrevalue + '/' + searchvalue + '/' + ratingvalues + '/' + type;
            let viewHtml = '';
            $('.paginate').addClass('d-none');
            $('#viewRejult').load(searchUrl);
            $('#preloader').fadeOut(500);

        })


        $(document).on('change','#type',function(){
            $('#preloader').show();
            type = $(this).val();
            let searchUrl = mainurl+'/search/movie/'+languageValue+'/'+ genrevalue + '/' + searchvalue + '/' + ratingvalues + '/' + type;
            let viewHtml = '';
            $('.paginate').addClass('d-none');
            $('#viewRejult').load(searchUrl);
            $('#preloader').fadeOut(500);

            })
     


        $(document).on('change','#language',function(){
            $('#preloader').show();
            languageValue = $(this).val();
            let searchUrl = mainurl+'/search/movie/'+languageValue+'/'+ genrevalue + '/' + searchvalue + '/' + ratingvalues + '/' + type;
            let viewHtml = '';
            $('.paginate').addClass('d-none');
            $('#viewRejult').load(searchUrl);
            $('#preloader').fadeOut(500);

            })

        $(document).on('change','#rating',function(){
            $('#preloader').show();

            ratingvalues = $(this).val();
            let searchUrl = mainurl+'/search/movie/'+languageValue+'/'+ genrevalue + '/' + searchvalue + '/' + ratingvalues + '/' + type;
            $('.paginate').addClass('d-none');
            $('#viewRejult').load(searchUrl);
            $('#preloader').fadeOut(500);

        })

        $(document).on('keyup','#search',function(){
           
            searchvalue = $(this).val();
            if(searchvalue){
                $('#preloader').show();
            let searchUrl = mainurl+'/search/movie/'+languageValue+'/'+ genrevalue + '/' + searchvalue + '/' + ratingvalues + '/' + type;
          
            $('#viewRejult').load(searchUrl);
            $('#preloader').fadeOut(500);
            $('.paginate').addClass('d-none');
            

            }else{
            $('#preloader').show();
            searchvalue = 'notvalid';
            let searchUrl = mainurl+'/search/movie/'+languageValue+'/'+ genrevalue + '/' + searchvalue + '/' + ratingvalues + '/' + type;
            let viewHtml = '';
            $('#viewRejult').load(searchUrl);
            $('#preloader').fadeOut(500);
            $('.paginate').addClass('d-none');
            }
           

        })




        $(document).on('click', '.pagination li', function (e) {
            e.preventDefault();
            var $this = $(this);
            $('#preloader').show();
            if ($this.find('a').attr('href') != '#' && $this.find('a').attr('href')) {
               
               
                $('#viewRejult').load($this.find('a').attr('href'), function (response, status, xhr) {
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