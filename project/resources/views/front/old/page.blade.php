@extends('layouts.front')
@section('title')
    {{ $data->slug }} | {{ $gs->website_title }}
@endsection

@section('content')
@extends('layouts.front')

@section('title')
    {{ __('FAQ') }}
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="pagetitle">
              {{ $data->title }}
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
    <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="about-info">
                <p>
                    {!!  $data->details !!}
                </p>
              </div>
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
@endsection