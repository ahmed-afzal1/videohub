@forelse ($movies as $movie)
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
@empty
{{ __('No Video') }}

@endforelse
<br>

    <div class="col-12 text-center">
            {{ $movies->links() }}
    </div>
