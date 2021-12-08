@extends('layouts.front')
@section('title')
{{ ('Movie Details | ') }} {{ $gs->website_title }}
@endsection

@section('style')
<style>
.bottom-area .left{
    position: relative;
}

.rating2 {
    direction: rtl;
    background: #ddd;
    padding: 0 25px;
    border: 1px solid blue;
    display: none; 
    cursor: pointer;
 
}
.rating1 a{
    font-size: 14px;
    display: inline-block;
    font-size: 24px;
    color: #fdb62f;
    transition: .3s ease-in;
    
}
 .rating1{
    position: absolute;
    left: -185px;
    top: 5px;
 }

.left-img{
    position: relative;
}



.rating1 a:hover,
.rating1 a:hover ~ a,
.rating1 a:focus,
.rating1 a:focus ~ a		{
    color: blue;
    cursor: pointer;
}
.rating2 {
    direction: rtl;
}
.rating2 a {
    float:none
}
p.line-height-1{
    line-height: .8;
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
					{{ __('Movie Details') }}
				</h1>
				<ul class="pages">
					<li>
					<a href="{{route('front.index')}}">
							{{ __('Home') }}
						</a>
					</li>
					<li class="active">
						<a href="{{ Request::url() }}">
							{{ $data->title }}
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->

  <!-- Move details Area start -->
<section class="move-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-play-area">
                    <div class="embed-responsive embed-responsive-16by9">
						@if ($data->video_type == 'url')
						<iframe class="embed-responsive-item" src="{{ $data->video }}" allowfullscreen></iframe>
						@else
						<video src="{{ $data->video_type == 'file' ? asset('assets/videos/movie-videos/'.$data->video) : '' }}"  width="400" height="360" controls class="embed-responsive-item""></video>
						@endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row move-info">
            <div class="col-md-4">
                <div class="move-thumb">
                    <img src="{{ asset('assets/images/movie-image/'.$data->image->image) }}" alt="image">
                </div>
            </div>
            <div class="col-md-8">
                <div class="short-details">
                    <div class="top-area">
                        <h3 class="move-name">
                            {{ $data->title }} (<a href="{{route('movie.show',$data->slug . ' date')}}" class="text-info">{{ date('Y', strtotime($data->relase_date)) }}</a>)
                        </h3>
                        <p class="">
                            {{ date('d M Y', strtotime($data->relase_date)) }} 
                            @if($data->language_id)
                            ( <a href="{{route('movie.show',$data->language->name .'-language')}}" class="text-info">{{  $data->language->name }}</a>)
                            @endif
                        </p>
                        <div class="breadcrumb-move">
                            <ul>
							
								@foreach ($data->genres() as $item)
								<li>
                                    <a href="{{route('movie.show',$item->slug . '-genre')}}">
                                            {{ $item->name }}
                                    </a>
                                </li>
								@endforeach
                            </ul>
                        </div>
                        <div class="download-option">
                            <h4 class="title">
                                Download:
                            </h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        3D.BluRay
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        720p.BluRay
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        1080p.BluRay
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="middle-area">
                        <ul>
                            <li class="d-flex">
                                <p>
                                <img src="{{asset('assets/front/images/geart.png')}}" alt=""> <span class="favarite_value">{{ $favariteValues->count() }}</span>
                                </p>
                            <span class="fas fa-plus px-3 mt-1 text-dark {{ $isFavarite != false ? 'd-none': ''  }} cursor-pointer" title="Watch later" id="addFavarite" data-href="{{route('favarite.list',$data->id)}}"></span>
                                <span class="fas fa-check px-3 mt-1 text-success {{ $isFavarite != false ? '': 'd-none'  }} cursor-pointer" title="Watch later" id="removeFavarite" data-href="{{route('favarite.list',$data->id)}}">{{ $isFavarite != false ? ' Saved': ' '  }}</span>
                            </li>
                            <li>
                                <p>
                                    <img src="{{ asset('assets/front/images/critics.png') }}" alt=""> 89% - Critics
                                </p>
                            </li>
                            <li>
                                <p>
                                    <img src="{{ asset('assets/front/images/popcon.png') }}" alt=""> 91% - Audience
                                </p>
                            </li>

                            @if($rating != null && $rating != 'n/A')
                            <li class="imdb-rating">
                                <p>
                                    <img src="{{ asset('assets/front/images/imdb.png') }}" alt="">{{ $rating  }} <i class="fas fa-star"></i>
                                </p>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="bottom-area d-flex justify-content-between align-item-center">
                        <div class="left">
                            <input type="hidden" value="{{ $data->id }}" id="ThisVideoId">
                            <div class="rating1 rating2" id="ratingValueGet">
                               
                            @if(Auth::user())
                                @if(Auth::user()->review)
                                @php
                                   if(Auth::user()->review->thisVideo($data->id)){
                                    $v =    Auth::user()->review->thisVideo($data->id)->review_value;
                                    }else{
                                        $v = 0;
                                    }  
                                   
                                @endphp
                                <a href="#10"{{ $v >= 10 ? 'style=color:blue;' : '' }} title="Give 10 stars">★</a>
                                <a href="#9" {{ $v >= 9 ? 'style=color:blue;' : '' }} title="Give 9 stars">★</a>
                                <a href="#8" {{ $v >= 8 ? 'style=color:blue;' : '' }} title="Give 8 stars">★</a>
                                <a href="#7" {{ $v >= 7 ? 'style=color:blue;' : '' }} title="Give 7 stars">★</a>
                                <a href="#6" {{ $v >= 6 ? 'style=color:blue;' : '' }} title="Give 6 stars">★</a>
                                <a href="#5" {{ $v >= 5 ? 'style=color:blue;' : '' }} title="Give 5 stars">★</a>
                                <a href="#4" {{ $v >= 4 ? 'style=color:blue;' : '' }} title="Give 4 stars">★</a>
                                <a href="#3" {{ $v >= 3 ? 'style=color:blue;' : '' }} title="Give 3 stars">★</a>
                                <a href="#2" {{ $v >= 2 ? 'style=color:blue;' : '' }} title="Give 2 stars">★</a>
                                <a href="#1" {{ $v >= 1 ? 'style=color:blue;' : '' }} title="Give 1 star">★</a>
                                @else
                                <a href="#10" title="Give 10 stars">★</a>
                                <a href="#9" title="Give 9 stars">★</a>
                                <a href="#8" title="Give 8 stars">★</a>
                                <a href="#7" title="Give 7 stars">★</a>
                                <a href="#6" title="Give 6 stars">★</a>
                                <a href="#5" title="Give 5 stars">★</a>
                                <a href="#4" title="Give 4 stars">★</a>
                                <a href="#3" title="Give 3 stars">★</a>
                                <a href="#2" title="Give 2 stars">★</a>
                                <a href="#1" title="Give 1 star">★</a>
                                @endif
                            @else
                            <a href="#10" title="Give 10 stars">★</a>
                            <a href="#9" title="Give 9 stars">★</a>
                            <a href="#8" title="Give 8 stars">★</a>
                            <a href="#7" title="Give 7 stars">★</a>
                            <a href="#6" title="Give 6 stars">★</a>
                            <a href="#5" title="Give 5 stars">★</a>
                            <a href="#4" title="Give 4 stars">★</a>
                            <a href="#3" title="Give 3 stars">★</a>
                            <a href="#2" title="Give 2 stars">★</a>
                            <a href="#1" title="Give 1 star">★</a>
                            @endif
                        </div>
                            <div class="stars-area">
                               <ul>
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

                             
                            <a  href="{{ route('front.all.review',$data->slug) }}"><p class="vote text-primary" rel="{{Auth::user() && Auth::user()->review && Auth::user()->review->thisVideo($data->id) ? 1 : 0}}">
                                {{ $data->videoReview->count() > 0  ? $data->videoReview->count() : 0 }} {{ __('vote') }} </p>
                            </a>
                            </div>
                           
                            <div class="rating" id="Rating" rel="{{ round($data->videoReview->sum('review_value'),1) }}" rel2={{Auth::user() && Auth::user()->review && Auth::user()->review->thisVideo($data->id) ? Auth::user()->review->thisVideo($data->id)->review_value : 0}}>
                                {{ round($data->videoReview->avg('review_value'),1) }}
                               
                            </div>
                         
                            <div class="ReviewClick justify-content-center  align-item-center mt-2 ml-3 cursor-pointer">
                                |  <i class="fas fa-star {{ Auth::user() && Auth::user()->review && Auth::user()->review->thisVideo($data->id) != null ? 'text-primary' : '' }}" id="rate-star"> </i> <span class=" font-weight-bold text-bold" id="numberReview"> {{Auth::user() && Auth::user()->review && Auth::user()->review->thisVideo($data->id) ? 'Your Rate '. Auth::user()->review->thisVideo($data->id)->review_value : 'Rate This'}}</span>
                            </div>
                        </div>
                        <div class="right social-link a2a_kit a2a_kit_size_32">
                            <p class="label">
                                    {{ __('Share') }}: 
                            </p>
                            <ul class="social-share">
                                <li>
                                    <a class="facebook a2a_button_facebook" href="#">
                                      <i class="fab fa-facebook-f"></i>
                                    </a>
                                  </li>
                                    <li>
                                        <a class="twitter a2a_button_twitter" href="#">
                                          <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="linkedin a2a_button_linkedin" href="#">
                                          <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest a2a_button_pinterest" href="#">
                                          <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                      
                                    <a class="a2a_dd plus" href="https://www.addtoany.com/share">
                                        <i class="fas fa-plus"></i>
                                      </a>
                                </li>
                            </ul>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row details-area">
            <div class="col-lg-8">
                
                <div class="synopsis">
                    <h4 class="title mt-2">
                        {{ __('Synopsis') }}
                    </h4>
                    <p class="text">
                           {!! $data->description !!}
                    </p>
                </div>
                <p class="line-height-1"><span style="font-weight:bold"> {{ __('Directors') }} :</span>
                    @foreach ($data->directors() as $d => $director)
                        @if($data->directors()->count() > $d+1)
                            <a href="{{route('cost.crew.details',$director->name)}}" class="text-info">{{ $director->name }}</a> ,
                        @else
                            <a href="{{route('cost.crew.details',$director->name)}}" class="text-info">{{ $director->name }}</a>
                        @endif
                    @endforeach
                </p>
                <p class="line-height-1"><span style="font-weight:bold"> {{ __('Producers') }} :</span>
                    @foreach ($data->producer() as $p => $producer)
                        @if($data->directors()->count() > $p+1)
                            <a href="{{route('cost.crew.details',$producer->name)}}" class="text-info">{{ $producer->name }}</a> ,
                        @else
                            <a href="{{route('cost.crew.details',$producer->name)}}" class="text-info">{{ $producer->name }}</a>
                        @endif
                    @endforeach
                </p>

                
                <div class="cast">
                    <h4 class="title">
                           {{ __('Cast') }}
                    </h4>
                    <ul class="cust-list">
                        @foreach ($data->cast() as $cast)
                        <li>
                            <div class="box">
                                <div class="image">
                                        <img src="{{ asset('assets/images/cast-crew-image/'.$cast->image->image) }}" alt="cast">
                                </div>
                                <div class="content">
                                    <h4 class="name">
                                        <a href="{{route('cost.crew.details',$cast->name)}}" class="text-info">{{ $cast->name }}</a>
                                    </h4>
                                </div>
                             </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
             
              
            </div>
            <div class="col-lg-4">
                <div class="top-moves">
                    <h4 class="title">
                        {{ __('Top Movies') }}
                    </h4>
                    <ul>
                        @foreach ($topMovies as $movie)
                        @if($movie->id != $data->id)
                            @if($movie->access != 'free')
                            <li>
                                <div class="single-move-with-short-info item-p">
                                    <a href="{{ Auth::user() && Auth::user()->plan && Auth::user()->planTime() ? route('movie.details',$movie->slug) : 'javascript:;' }}">
                                    <div class="left-img">
                                    <img src="{{ asset('assets/images/movie-image/'.$movie->image->image) }}" alt="">
                                    @if($movie->access != 'free')
                                            <span class="p-video"><i class="fa fa-lock"></i>Premium</span>
                                    @endif
                                    </div>
                                    
                                    <div class="right-content">
                                        <h5 class="name">
                                                {{ $movie->title }}
                                        </h5>
                                       </a>
                                        <p class="date">
                                            {{ $movie->relase_date }}
                                        </p>
                                        <ul class="path">
                                            @foreach ($movie->genres() as $genre)
                                            <li>
                                                <a href="{{route('movie.show',$genre->slug . ' genre')}}">
                                                    {{ $genre->name }}
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
                                            {{  round( $movie->videoReview->avg('review_value'),1) }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li>
                                <div class="single-move-with-short-info">
                                    <a href="{{route('movie.details',$movie->slug)}}">
                                    <div class="left-img">
                                    <img src="{{ asset('assets/images/movie-image/'.$movie->image->image) }}" alt="">
                                    </div>
                                    
                                    <div class="right-content">
                                        <h5 class="name">
                                                {{ $movie->title }}
                                        </h5>
                                       </a>
                                        <p class="date">
                                            {{ $movie->relase_date }}
                                        </p>
                                        <ul class="path">
                                            @foreach ($movie->genres() as $genre)
                                            <li>
                                                <a href="{{route('movie.show',$genre->slug . ' genre')}}">
                                                    {{ $genre->name }}
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
                                            {{  round( $movie->videoReview->avg('review_value'),1) }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        @endif
						@endforeach
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="move-review-area" id="comment-area">
                    <div class="heading-area">
                        <h4 class="title">
                            {{ __('Comment') }}
                        </h4>
                    </div>
                    


                    @if(Auth::check())

                    <div class="review-area">
                      <h4 class="title">{{ __('Write Comment') }}</h4>
                    </div>
                    <div class="write-comment-area">
                      <form id="comment-form" action="{{ route('movie.comment') }}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="movie_id" id="movie_id" value="{{$data->id}}">
                        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                        <div class="row">
                          <div class="col-lg-12">
                          <textarea placeholder="{{ __('Write Your Comments Here...') }}" name="text"></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <button class="submit-btn" type="submit">{{ __('Post Comment') }}</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <br>
                    <ul class="all-comment">
                       
                        @if($data->comments ?? ''->comments)  
                       
                          
                          @foreach($data->comments ?? ''->comments()->latest()->get() as $comment)

                          <li>
                            <div class="single-comment comment-section">
                                <div class="left-area">
                                  <img src="{{$comment->user->photo != null ? asset('assets/images/user-image/'.$comment->user->photo) : url('assets/images/noimage.png')}}" alt="">
                                  <h5 class="name">{{ $comment->user->name }}</h5>
                                  <p class="date">{{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                                <div class="right-area">
                                  <div class="comment-body">
                                    <p>
                                      {{ $comment->text }}
                                    </p>
                                  </div>
                                  <div class="comment-footer">
                                    <div class="links">
                                   
                                      <a href="javascript:;" class="comment-link reply mr-2"><i class="fas fa-reply "></i>{{ __('Reply') }}</a>
                                    
                                    @if(count($comment->replies) > 0)
                                      <a href="javascript:;" class="comment-link view-reply mr-2"><i class="fas fa-eye "></i>{{ __('View ') }} {{ count($comment->replies) == 1 ? __('Reply') : __('Replies')  }}</a>
                                    @endif
                                    @if(Auth::user()->id == $comment->user->id)
                                      <a href="javascript:;" class="comment-link edit mr-2"><i class="fas fa-edit "></i>{{ __('Edit') }}</a>
                                      <a href="javascript:;" data-href="{{ route('movie.comment.delete',$comment->id) }}" class="comment-link comment-delete mr-2"><i class="fas fa-trash"></i>{{ __('Delete') }}</a>
                                    @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="replay-area edit-area d-none">
                                <form class="update" action="{{ route('movie.comment.edit',$comment->id) }}" method="POST">
                                  {{csrf_field()}}
                                  <textarea placeholder="{{ __('Edit Your Comment') }}" name="text" required=""></textarea>
                                  <button type="submit">{{ __('Submit') }}</button>
                                  <a href="javascript:;" class="remove">{{ __('Cancel') }}</a>
                                </form>
                              </div>
                            
                        @if($comment->replies)
                          @foreach($comment->replies()->latest()->get() as $reply)
                            <div class="single-comment replay-review d-none">
                              <div class="left-area">
                                <img src="{{ $reply->user->photo != null ? asset('assets/images/user-image/'.$reply->user->photo) : url('assets/images/noimage.png') }}" alt="">
                                <h5 class="name">{{ $reply->user->name }}</h5>
                                <p class="date">{{ $reply->created_at->diffForHumans() }}</p>
                              </div>
                              <div class="right-area">
                                <div class="comment-body">
                                  <p>
                                    {{ $reply->text }}
                                  </p>
                                </div>
                        
                              </div>
                            </div>
                          @endforeach
                        @endif

                        <div class="replay-area reply-reply-area d-none">
                            <form class="reply-form" action="{{ route('movie.reply',$comment->id) }}" method="POST">
                              {{ csrf_field() }}
                              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                              <textarea placeholder="{{ __('Write Your Your Reply') }}" name="text" required=""></textarea>
                              <button type="submit">{{ __('Submit') }}</button>
                              <a href="javascript:;" class="remove">{{ __('Cancel') }}</a>
                            </form>
                          </div>
                          </li>
                          @endforeach
                        
                        @endif
                        </ul>
                    @else
                    <div class="row">
                    <div class="col-lg-12">
                    <br>
                      <h5 class="text-center"><a href="{{route('user.login')}}" class="btn mybtn1 mr-2">{{ __('Login') }}</a> {{ __(' To Comment') }} </h5>
                    <br>
                    </div>
                    </div>
                    @endif
                    
            
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="move-review-area">
                    <div class="heading-area">
                        <h4 class="title">
                            Movie Reviews
                        </h4>
                    </div>
                    
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- Move details Area end -->
<input type="hidden" value="{{ Auth::user() }}" id="userInfo">
@endsection

