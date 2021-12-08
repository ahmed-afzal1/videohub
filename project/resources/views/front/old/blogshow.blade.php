@extends('layouts.front')
@section('title')
    {{ ('Blog Details | ') }}{{ $gs->website_title }}
@endsection

@section('content')
   <!-- Breadcrumb Area Start -->
   <div class="breadcrumb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="pagetitle">
            {{ __('Blog Details') }}
          </h1>
          <ul class="pages">
            <li>
            <a href="{{route('front.index')}}">
                {{ __('Home') }}
              </a>
            </li>
            <li class="active">
              <a href="{{ Request::url() }}">
                {{ $blog->title }}
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Area End -->

<section class="blog-details-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-8">
              <div class="blog-details">
                  <div class="img">
                      <img src="{{ asset('assets/images/blogs/'.$blog->image->image) }}" class="img-fluid" alt="">
                  </div>
                  <div class="content">
                      <h4 class="title">
                        {{ $blog->title }}
                      </h4>
                      <ul class="top-meta">
                          <li>
                              <a href="#">
                                  <i class="far fa-user"></i> {{ __('Admin') }}
                              </a>
                          </li>
                          <li>
                              <a href="javascript:;">
                                  <i class="fas fa-calendar"></i> {{ date('d M, Y',strtotime($blog->created_at)) }}
                              </a>
                          </li>
                          <li>
                              <a href="javascript:;">
                                  <i class="fas fa-eye"></i> {{ $blog->views }} {{ __('View(s)') }}
                              </a>
                          </li>
                      </ul>
                      <div class="text">
                          <p class="blog-text">
                              {!! $blog->description !!}
                          </p>
                      </div>
                  </div>

                  <div class="post-footer social-link a2a_kit a2a_kit_size_32">
                      <p class="title">
                          {{ __('Share') }} :
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
              

              @if($gs->is_disqus == 1)
              <div id="comment-area">
                  <div id="disqus_thread">
                      <script>
                          (function() { // DON'T EDIT BELOW THIS LINE
                              var d = document,
                                  s = d.createElement('script');
                              s.src = 'https://{{ $gs->disqus }}.disqus.com/embed.js';
                              s.setAttribute('data-timestamp', +new Date());
                              (d.head || d.body).appendChild(s);
                          })();
                      </script>
                      <noscript>{{ __('Please enable JavaScript to view the') }} <a href="https://disqus.com/?ref_noscript">{{ __('comments powered by Disqus.') }}</a></noscript>
                  </div>
              </div>
              @endif

          </div>
          <div class="col-lg-4 aside">
              <div class="categori-widget-area">
                  <h4 class="title">
                    {{ __('Categoris') }}
                  </h4>
                  <span class="separator"></span>
                  <ul class="categori-list">
                      @foreach($bcats as $cat)
                      @if($cat->blogs()->count() != 0)
                        <li>
                            <a href="{{ route('front.blogcategory',$cat->slug) }}" {!! $cat->id == $blog->category_id ? 'class="active"':'' !!}>
                                <span>{{ $cat->name }}</span>
                                <span>({{ $cat->blogs()->count() }})</span>
                            </a>
                        </li>
                        @endif
                      @endforeach

                  </ul>
              </div>
              <div class="recent-post-widget mt-30">
                  <h4 class="title">{{ __('Recent Post') }}</h4>
                  <span class="separator"></span>
                  <ul class="post-list">
                      @foreach (App\Models\Blog::orderBy('created_at', 'desc')->limit(4)->get() as $blog)
                      <li>
                          <div class="post">
                              <div class="post-img">
                                  <img style="width: 73px; height: 59px;" src="{{ asset('assets/images/blogs/'.$blog->image->image) }}" alt="blog-image">
                              </div>
                              <div class="post-details">
                                  <a href="{{ route('front.blog.show',$blog->slug) }}">
                                      <h4 class="post-title">
                                          {{strlen($blog->title) > 45 ? substr($blog->title,0,45)." .." : $blog->title}}
                                      </h4>
                                  </a>
                                  <p class="date">
                                      {{ date('M d - Y',(strtotime($blog->created_at))) }}
                                  </p>
                              </div>
                          </div>
                      </li>
                      @endforeach
                  </ul>
              </div>
              <div class="archives-widget">
                  <h4 class="title">{{ __('Archives') }}</h4>
                  <span class="separator"></span>
                  <ul class="archives-list">
                      @foreach($archives as $key => $archive)
                      <li>
                          <a href="{{ route('front.blogarchive',$key) }}">
                              <span>{{ $key }}</span>
                              <span>({{ count($archive) }})</span>
                          </a>
                      </li>
                      @endforeach
                  </ul>
              </div>
              <div class="tag-widget">
                  <h4 class="title">{{ __('Tags') }}</h4>
                  <span class="separator"></span>
                  <ul class="tags-list">
                      @foreach($tags as $tag) @if(!empty($tag))
                      <li>
                          <a href="{{ route('front.blogtags',$tag) }}">{{ $tag }} </a>
                      </li>
                      @endif @endforeach
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>
{{-- DISQUS START --}}   

{{-- DISQUS ENDS --}}
@endsection