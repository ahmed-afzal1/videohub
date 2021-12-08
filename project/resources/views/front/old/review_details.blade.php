@extends('layouts.front')
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
@section('title')
{{ ('Reviews | ') }}{{ $gs->website_title }}
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="pagetitle">
              {{ __('Reviews') }}
            </h1>
            <ul class="pages">
              <li>
              <a href="{{route('front.index')}}">
                  {{ __('Home') }}
                </a>
              </li>
              <li class="active">
                <a href="{{ Request::url() }}">
                  {{ __('Reviews') }}
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Area End -->
    <section class="move-details">
        <div class="container">
            <div class="row move-info">
                <div class="col-md-2">
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
                                ( <a href="{{route('movie.show',$data->language->name .' language')}}" class="text-info">{{  $data->language->name }}</a>)
                                @endif
                            </p>
                            <div class="breadcrumb-move">
                                <ul>
                                
                                    @foreach ($data->genres() as $item)
                                    <li>
                                        <a href="{{route('movie.show',$item->slug . ' genre')}}">
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
                                        Share: 
                                </p>
                                <ul class="social-share">
                                    <li>
                                        <a class="facebook a2a_button_facebook" href="">
                                          <i class="fab fa-facebook-f"></i>
                                        </a>
                                      </li>
                                        <li>
                                            <a class="twitter a2a_button_twitter" href="">
                                              <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="linkedin a2a_button_linkedin" href="">
                                              <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="pinterest a2a_button_pinterest" href="">
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
    </section>





<section class="p-5">
    <div class="container">
   <div class="row">
       <div class="col-md-8 col-lg-8">
        <h3 class="pb-3 text-center">{{ __('Reviews Details') }}</h3>
        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th>All Ages</th>
                <th> {{ __('<18') }} </th>
                <th>18-30</th>
                <th>30-50</th>
                <th>50</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">All</th>
                <td>
                    {{ $infoAllusers['user18avg'] }}
                    <p><a class="text-primary" href="javascript:;">{{ $infoAllusers['user18count'] }}</a></p>
                </td>
                <td>
                    {{ $infoAllusers['user18_30avg'] }}
                    <p><a class="text-primary" href="javascript:;">{{ $infoAllusers['user18_30count'] }}</a></p>
                </td>
                <td>
                    {{ $infoAllusers['user30_50avg'] }}
                    <p><a class="text-primary" href="javascript:;">{{ $infoAllusers['user30_50count'] }}</a></p>
                </td>
                <td>
                    {{ $infoAllusers['user50plusavg'] }}
                    <p class="m-0 p-0"><a class="text-primary" href="javascript:;">{{ $infoAllusers['user_50pluscount'] }}</a></p>
                </td>
                
                
              </tr>
              <tr>
                <th>Male</th>
                <td>{{ $infoGander['gander_user18avg']}} <p><a class="text-primary" href="javascript:;">{{ $infoGander['gander_user18count'] }}</a></p></td>
                <td>{{ $infoGander['gander_user18_30avg']}} <p><a class="text-primary" href="javascript:;">{{ $infoGander['gander_user18_30count'] }}</a></p></td>
                <td>{{ $infoGander['gander_user30_50avg']}} <p><a class="text-primary" href="javascript:;">{{ $infoGander['gander_user30_50count'] }}</a></p></td>
                <td>{{ $infoGander['gander_user50plusavg']}} <p class="m-0 p-0"><a class="text-primary" href="javascript:;">{{ $infoGander['gander_user_50pluscount'] }}</a></p></td>
               
              </tr>
              <tr>
                <th>Female</th>
                <td>{{ $infoFemale['female_gander_user18avg']}} <p><a class="text-primary" href="javascript:;">{{ $infoFemale['female_gander_user18count'] }}</a></p></td>
                <td>{{ $infoFemale['female_gander_user18_30avg']}} <p><a class="text-primary" href="javascript:;">{{ $infoFemale['female_gander_user18_30count'] }}</a></p></td>
                <td>{{ $infoFemale['female_gander_user30_50avg']}} <p><a class="text-primary" href="javascript:;">{{ $infoFemale['female_gander_user30_50count'] }}</a></p></td>
                <td>{{ $infoFemale['female_gander_user50plusavg']}} <p class="m-0 p-0"><a class="text-primary" href="javascript:;">{{ $infoFemale['female_gander_user_50pluscount'] }}</a></p></td>
              </tr>
            </tbody>
          </table>
       </div>
   </div>
</div>
</section>





@endsection

@section('scripts')
<script>
  /*-----------------------------
      Accordion Active js
  -----------------------------*/
  $("#accordion").accordion({
    heightStyle: "content",
    collapsible: true,
    icons: {
      "header": "ui-icon-caret-1-e",
      "activeHeader": "ui-icon-caret-1-s"
    }
  });
  
</script>
@endsection