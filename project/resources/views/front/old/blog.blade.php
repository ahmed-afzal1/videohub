@extends('layouts.front')
@section('title')
    {{ ('Blog | ') }}{{ $gs->website_title }}
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="pagetitle">
              {{ __('Blog') }}
            </h1>
            <ul class="pages">
              <li>
              <a href="{{route('front.index')}}">
                  {{ __('Home') }}
                </a>
              </li>
              <li class="active">
                <a href="{{ Request::url() }}">
                  {{ __('Blog') }}
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Area End -->

<!-- Blog Area Start -->
<section class="blog-page">
  <div class="container">
      <div class="row">
          @forelse($blogs as $blog)
          <div class="col-lg-4 col-md-6">
              <div class="single-blog">
                  <div class="img">
                      <img src="{{  $blog->image->image ? asset('assets/images/blogs/'.$blog->image->image):asset('assets/images/noimage.png') }}" class="img-fluid" alt="">
                  </div>
                  <div class="content">
                      <a href='{{route('front.blog.show',$blog->slug)}}'>
                          <h4 class="blog-title my-2">
                              {{$blog->title}}
                          </h4>
                      </a>
                      <ul class="top-meta d-flex">
                          <li>
                              <p>{{date('d', strtotime($blog->created_at))}} {{date('M', strtotime($blog->created_at))}}</p>
                          </li>
                          <li>
                              <a href="javascript:;">
                                  <i class="fas fa-eye"></i> {{ $blog->views }} {{ __('View(s)') }}
                              </a>
                          </li>
                      </ul>
                      <div class="text">
                          <p class="blog-text text-justify">
                              {{substr(strip_tags($blog->description),0,370)}}
                          </p>
                      </div>
                      <a href="{{route('front.blog.show',$blog->slug)}}" class="link">{{ __('Read More') }} <i class="fas fa-angle-double-right"></i></a>
                  </div>
              </div>
          </div>

          @empty
          <div class="page-center">
              <h3 class="text-center"> {{ __('No Post Found') }}</h3>
          </div>
          @endforelse
      </div>

      <div class="page-center">
          @if(isset($_GET['search'])) 
            {{ $blogs->appends(['search' => $_GET['search']])->links() }} 
          @else 
            {{ $blogs->links() }} 
          @endif
      </div>
  </div>
  </div>
</section>
@endsection