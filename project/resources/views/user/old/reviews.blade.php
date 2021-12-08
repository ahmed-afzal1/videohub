@extends('layouts.user')
@section('title')
{{ ('Profile | ') }}{{ $gs->website_title }}
@endsection

@section('content') 
<!-- User Main Content Area Start -->
<section class="user-main-content">
  <div class="container">
      <div class="row">
        @include('user.inc.sitebar')
          <div class="col-xl-9  col-md-7">
              <div class="content-area">
                  <div class="header-area">
                      <h4 class="title">
                          <i class="far fa-edit"></i>{{ __('My Reviews') }}
                      </h4>
                  </div>
               
                  @if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ Session::get('success') }}
                  </div>
                  @endif

                  @if($data)
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">{{ __('Movie') }}</th>
                        <th scope="col">{{ __('Review') }}</th>
                        <th scope="col">{{ __('Action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            
                            <td><a href="{{route('movie.details',$item->video->slug)}}"><img src="{{ asset('assets/images/movie-image/'.$item->video->image->image) }}" class="image-fluid" alt="movie" width="100" height="100"></a></td>
                            <td>
                                <a href="#10"{{ $item->review_value >= 1 ? 'style=color:blue;' : '' }} title="Give 10 stars">★</a>
                                <a href="#9" {{ $item->review_value >= 2 ? 'style=color:blue;' : '' }} title="Give 9 stars">★</a>
                                <a href="#8" {{ $item->review_value >= 3 ? 'style=color:blue;' : '' }} title="Give 8 stars">★</a>
                                <a href="#7" {{ $item->review_value >= 4 ? 'style=color:blue;' : '' }} title="Give 7 stars">★</a>
                                <a href="#6" {{ $item->review_value >= 5 ? 'style=color:blue;' : '' }} title="Give 6 stars">★</a>
                                <a href="#5" {{ $item->review_value >= 6 ? 'style=color:blue;' : '' }} title="Give 5 stars">★</a>
                                <a href="#4" {{ $item->review_value >= 7 ? 'style=color:blue;' : '' }} title="Give 4 stars">★</a>
                                <a href="#3" {{ $item->review_value >= 8 ? 'style=color:blue;' : '' }} title="Give 3 stars">★</a>
                                <a href="#2" {{ $item->review_value >= 9 ? 'style=color:blue;' : '' }} title="Give 2 stars">★</a>
                                <a href="#1" {{ $item->review_value >= 10 ? 'style=color:blue;' : ''}} title="Give 1 star">★</a>
                            </td>
                          <td>
                            <a href="javascript:;" data-href=" {{route('user.review.delete',$item->id) }}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                          </td>
                          </tr>

                          @empty
                          <tr>
                            <td colspan="2">
                              <p class="text-muted text-center">{{ __('No Review') }}</p>
                            </td>
                          </tr>
                          
                        @endforelse
                    </tbody>
                  </table>
                  @else
                  
                  @endif
              </div>
              {{ $data->links() }}
          </div>
      </div>
  </div>
</section>
<!-- User Main Content Area End -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">

          <div class="modal-header d-block text-center">
              <h4 class="modal-title d-inline-block">{{ __('Confirm Delete') }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
              <p class="text-center">{{ __('You are about to delete this Category. Everything under this category will be deleted') }}.</p>
              <p class="text-center">{{ __('Do you want to proceed?') }}</p>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
              <a class="btn btn-danger btn-ok">{{ __('Delete') }}</a>
          </div>

      </div>
  </div>
</div>
@endsection
