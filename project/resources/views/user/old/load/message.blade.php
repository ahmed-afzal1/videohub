@foreach($conv->messages as $message)
@if($message->user_id != null)
<div class="single-chat media mb-3 bg-white p-3 shadow ">
    <div class="img  mr-3">
      <img src="{{ asset('assets/images/user-image/'.Auth::user()->photo) }}" class="img-thumbnail rounded-circle" alt="...">
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