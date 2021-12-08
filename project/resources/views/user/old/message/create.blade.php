@extends('layouts.user')

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
                                <i class="far fa-clock"></i>{{ __('Support') }} 
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="gocover" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                          <div id="messages">
                          @foreach($conv->messages as $message)
                        
                          @if($message->user_id != null)
                          <div class="single-chat media mb-3 bg-white p-3 shadow ">
                            <div class="img  mr-3">
                              <img src="{{ asset('assets/images/user-image/'.Auth::user()->photo) }}" class="img-thumbnail rounded-circle" alt="...">
                              <p class="ticket-date">{{ $message->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="media-body">
                              {{ $message->message }}
                            </div>
                          </div>
                          @else
                          <div class="single-chat media mb-3 bg-white p-3 shadow ">
                            <div class="media-body">
                              {{ $message->message }}
                            </div>
                            <div class="img  mr-3">
                            <img src="{{asset('assets/images/admins/admin.jpg')}}" class="img-thumbnail rounded-circle" alt="...">
                              <p class="ticket-date">{{ $message->created_at->diffForHumans() }}</p>
                            </div>
                          </div>
                          @endif
                          @endforeach
                        </div>
                
                
                
                          <div class="card my-4">
                            <div class="card-body">
                                <form id="messageFormSubmit"  action="{{route('user.message.store')}}" method="POST" data-href="{{ route('user-message-load',$conv->id) }}">
                                    @csrf
                                <div class="form-group">
                                    <input type="hidden" name="conversation_id" value="{{$conv->id}}">
                                    <input type="hidden" name="user_id" value="{{$conv->user->id}}">
                                    <textarea class="form-control" name="message"  rows="5" style="resize: vertical;" required="" placeholder="{{ __('Message') }}"></textarea>
                                </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-primary btn-block " id="finalBtn">Send Message</button>
                                </div>
                              </form>
                            </div>
                          </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- User Main Content Area End -->


{{-- MESSAGE MODAL ENDS --}}


@endsection

@section('script')


<script>

      

      $("#messageFormSubmit").submit(function(e) {
        e.preventDefault();

          var form = $(this);
          var href = form.attr('data-href');
          var url = form.prop('action');
          $('#finalBtn').prop('disabled',true);
          $.ajax({
                  method:"POST",
                  url:$(this).prop('action'),
                  data:new FormData(this),
                  contentType: false,
                  cache: false,
                  processData: false,
                success: function(data)
                {
                  if ((data.errors)) {
                  $('#messageFormSubmit textarea').val('');
                  } else {
           
                  $('#messageFormSubmit textarea').val('');
                  $('#messages').load(href);
                  $.notify(data,'success');
                  }
                  $('#finalBtn').prop('disabled',false);
                }
              });


          });


      $('#confirm-delete').on('show.bs.modal', function(e) {
          $(this).find('.btn-ok').prop('href', $(e.relatedTarget).data('href'));
      });


</script>

@endsection