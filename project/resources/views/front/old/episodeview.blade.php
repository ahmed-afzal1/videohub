@extends('layouts.front')
@section('title')
{{ ('Episode | ') }}{{ $gs->website_title }}
@endsection


@section('style')
    <style>
        /*-----------------------------
** Product Details Area Start
------------------------------*/
.video-gallery-box {
  background: #222;
  padding: 20px 20px;
  margin-top: 30px;
  margin-bottom: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; 
  margin-top: 70px;
  }
  .video-gallery-box .one-item-slider {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1; }
  .video-gallery-box .all-item-slider {
    width: 390px;
    height: 435px;
    overflow: auto; }
    .video-gallery-box .all-item-slider::-webkit-scrollbar {
      width: 7px;
      border-radius: 10px;
      background-color: #414141; }
    .video-gallery-box .all-item-slider::-webkit-scrollbar-thumb {
      background-color: #009688;
      border-radius: 10px; }
    .video-gallery-box .all-item-slider li {
      margin-bottom: 00px; }
      .video-gallery-box .all-item-slider li a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 10px 10px;
        border-left: 4px solid #000;
        -webkit-transition: all 0.3s ease-in;
        -o-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in; }
        .video-gallery-box .all-item-slider li a.active, .video-gallery-box .all-item-slider li a:hover {
          background: #404040;
          border-left: 4px solid #009688; }
        .video-gallery-box .all-item-slider li a .left {
          width: 150px;
          height: 80px;
          margin-right: 10px; }
          .video-gallery-box .all-item-slider li a .left img {
            width: 100%;
            height: 100%; }
        .video-gallery-box .all-item-slider li a .right {
          -webkit-box-flex: 1;
          -ms-flex: 1;
          flex: 1; }
          .video-gallery-box .all-item-slider li a .right .title {
            color: #fff;
            font-size: 14px; }
          .video-gallery-box .all-item-slider li a .right .date {
            color: #fff;
            font-size: 12px;
            margin-bottom: 0px; }


            .video-gallery-session{
                padding-bottom: 70px;
            }
            .video-gallery-session .session-list{
                display: block;
                text-align: center;
            }
            .video-gallery-session .session-list li{
                display: inline-block;
            }
            .video-gallery-session .session-list li a{
                display: block;
                background: #ddd;
                color: #222;
                padding: 6px 20px;
                margin: 2px;
                -webkit-transition: all .3 linear;
                -moz-transition: all .3 linear;
                transition: all .3 linear;
            }
            .video-gallery-session .session-list li a:hover{
                background: #eb1436;
                color: #fff;
            }

            .all-item-slider .left{
                position: relative;
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
                    {{ __('Episode') }}
                </h1>
                <ul class="pages">
                    <li>
                        <a href="{{ route('front.index') }}">
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ Request::url() }}">
                        {{ __('Episode') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<div class="container">
    <div class="row">
        @if($data)
        <div class="col-12">
            @if($data->episodes->count() > 0)
            <div class="video-gallery-box">
                <div class="one-item-slider">

                   
                    <iframe id="url" class="embed-responsive-item {{ $data->episodes[0]->video_type == 'url' ? '' : 'd-none' }}" src="{{ $data->episodes[0]->video }}" allowfullscreen width="100%" height="435" ></iframe>
                  
                    <video id="file" src="{{ $data->video_type == 'file' ? asset('assets/videos/movie-videos/'.$data->video) : '' }}" width="100%" height="435"  controls class="embed-responsive-item {{ $data->episodes[0]->video_type == 'file' ? '' : 'd-none' }}"></video>
                  

                </div>
                <ul class="all-item-slider">
                    @foreach ($data->episodes as $key => $item)
                    @if($item->access == 'free')
                    <li>
                        <a  class="{{ $key == 0 ? 'active' : '' }}" href="javascript:;" rel="{{$item->video_type}}"   data="{{$item->video_type == 'file' ? asset('assets/videos/episode-videos/'.$item->video) : $item->video}}">
                            <div class="left">
                            <img src="{{asset('assets/images/episode-image/'.$item->image->image)}}" alt="episode image">
                            </div>
                            <div class="right">
                                <h4 class="title">
                                   {{ $item->title }}
                                </h4>
                                <p class="date">
                                    {{ date('Y', strtotime($item->relase_date)) }}
                                </p>
                            </div>
                        </a>
                    </li>
                   @else
                   <li class="item-p">
                   @if(Auth::user() && Auth::user()->plan && Auth::user()->planTime())
                   <a  class="{{ $key == 0 ? 'active' : '' }} item-p" href="javascript:;" rel="{{$item->video_type}}"   data="{{$item->video_type == 'file' ? asset('assets/videos/episode-videos/'.$item->video) : $item->video}}">
                    @else
                    <a  class="{{ $key == 0 ? 'active' : '' }}" href="javascript:;">
                    @endif
                        <div class="left">
                        <img src="{{asset('assets/images/episode-image/'.$item->image->image)}}" alt="episode image">
                        @if($item->access != 'free')
                        <span class="p-video"><i class="fa fa-lock"></i>Premium</span>
                        @endif
                        </div>
                      
                        <div class="right">
                            <h4 class="title">
                               {{ $item->title }}
                            </h4>
                            <p class="date">
                                {{ date('Y', strtotime($item->relase_date)) }}
                            </p>
                        </div>
                    </a>
                </li>
                   @endif
                    @endforeach
                    
                </ul>
            </div>
            @else
                <h4 class="text-center py-5">Episode Coming Soon...</h4>
            @endif
        </div>
        @else
        <h4 class="text-center align-item-center justify-content center">Episode Coming soon</h4>
        @endif
    </div>
</div>

@if($data)
<div class="video-gallery-session">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="session-list">


                  @foreach ($data->show->session as $session)
                  <li>
                    <a href="{{ route('front.session.view',[$data->show->slug , $session->slug]) }}">
                       {{ $session->session_title }}
                    </a>
                </li>
                  @endforeach
                   
                </ul>
            </div>
        </div>
    </div>
</div>

@endif

@endsection


@section('script')
    <script>

        $(".all-item-slider a").on('click', function () {
            $(".all-item-slider a").each(function () {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            let href = $(this).attr('data');
            let check = $(this).attr('rel');
            $(".one-item-slider video").attr('src','');
            $(".one-item-slider iframe").attr('src','');
           
            if(check == 'file'){
                
                $(".one-item-slider video").attr('src',href);
                $(".one-item-slider video").removeClass('d-none');
                $(".one-item-slider iframe").addClass('d-none');
                
            }else{
                $(".one-item-slider iframe").attr('src',href);
                $(".one-item-slider iframe").removeClass('d-none');
                $(".one-item-slider video").addClass('d-none');
               
            }
            
            
        });
    </script>

@endsection