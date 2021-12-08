@extends('layouts.admin')
@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Messages') }}
        <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
      </h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{ __('Message') }}</li>
        
      </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
          <div class="gocover" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <div id="messages">
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
              <img src="{{$message->user->photo ? asset('assets/images/user-image/'.$message->user->photo) :  asset('assets/images/img/boy.png')}}" class="img-thumbnail rounded-circle" alt="...">
              <a href="{{route('admin-user-show',$message->user_id)}}" class="d-block btn btn-success text-center mt-1 btn-sm">{{__('Profile')}}</a>
              <p class="ticket-date">{{ $message->created_at->diffForHumans() }}</p>
            </div>
          </div>
          @endif
          @endforeach
        </div>



          <div class="card my-4">
            <div class="card-body">
              <form id="messageform" action="{{route('admin-message-store')}}" data-href="{{ route('admin-message-load',$conv->id) }}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <input type="hidden" name="conversation_id" value="{{$conv->id}}">
                  <input type="hidden" name="user_id" value="{{  $conv->user->id }}">
                  <textarea name="message" class="form-control" rows="5" placeholder="{{__('Enter Message')}}..."></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block">{{__('Send Message')}}</button>
                </div>
              </form>
            </div>
          </div>
       
        </div>
    </div>
  </div>


  <input type="hidden" id="isValue" value="1">
@endsection