@extends('layouts.front')
@section('title')
{{ ('Season | ') }}{{ $gs->website_title }}
@endsection


    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="pagetitle">
                {{ __('Season') }}
              </h1>
              <ul class="pages">
                <li>
                <a href="{{route('front.index')}}">
                    {{ __('Home') }}
                  </a>
                </li>
                <li class="active">
                  <a href="{{ Request::url() }}">
                    {{ __('Season') }}
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumb Area End -->

 
@section('content')

<div class="session-view">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-banner-img" style="background: url({{ asset('assets/images/tvshow-image/'.$data->image->image) }});">
                    <div class="inner-content">
                        <h4 class="title">
                            {{ $data->show_name }}
                        </h4>
                        <ul class="meta">
                            <li>
                                {{ $data->session->count() }} {{ __('Seasons') }}
                            </li>

                            <li>
                                {{ $data->episode->count() }} {{ __('Episodes') }}
                            </li>
                            <li>
                                <a href="#">{{ $data->language->name }}</a>
                            </li>

                            @foreach ($data->genres() as $genre)
                            <li>
                                <a href="#">{{ $genre->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <p class="short-dec">
                           {!! $data->description !!}
                        </p>
                    </div>
                  @if($data->session->count() > 0)
                    <a href="{{ URL::route('front.session.view', [$data->slug ,$data->session[0]->slug]) }}" class="video-play video-play-session">
                        <i class="fas fa-play"></i>
                    </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="header-area">
                    <h4 class="title">
                        {{ __('Session') }}
                    </h4>
                </div>
            </div>
            @if($data->session->count() > 0)
            @foreach ($data->session as $session)
            <div class="col-lg-2 col-md-4 col-6">
                <a href="{{ URL::route('front.session.view', [$data->slug ,$session->slug]) }}" class="single-move">
                    <div class="image">
                    <img src="{{asset('assets/images/session-image/'.$session->image->image)}}" alt="episode-image">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            {{ $session->session_title }}
                        </h4>
                        <p class="date">
                            {{ date('Y', strtotime($session->relase_date)) }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach
            @else
                <h4 class="text-center">{{ __('0 Session | Comeing Soon') }}</h4>
            @endif
            
        </div>
    </div>
</div>

@endsection