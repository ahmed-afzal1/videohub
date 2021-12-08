@foreach($conv->messages as $message)
        
          @if($message->user_id == null)
          <div class="single-chat media mb-3 bg-white p-3 shadow ">
            <div class="img  mr-3">
              <img src="{{Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo) :  asset('assets/images/img/boy.png')}}" class="img-thumbnail rounded-circle" alt="...">  
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
              <img src="{{Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo) :  asset('assets/images/img/boy.png')}}" class="img-thumbnail rounded-circle" alt="...">
              <a href="{{route('admin-user-show',$message->user_id)}}" class="d-block btn btn-success text-center mt-1 btn-sm">Profile</a>
              <p class="ticket-date">{{ $message->created_at->diffForHumans() }}</p>
            </div>
          </div>
          @endif
          @endforeach