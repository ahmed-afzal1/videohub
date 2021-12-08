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
                                <a class="btn btn-primary btn-sm" href="javascript:;" data-toggle="modal" data-target="#vendorform">Message</a>
                        </h4>
                    </div>
                    <div class="row">
                        @include('includes.form-success') 
                        @include('includes.form-error') 
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">{{ __('Subject') }}</th>
                                <th scope="col">{{ __('Message') }}</th>
                                <th scope="col">{{ __('Time') }}</th>
                                <th scope="col">{{ __('Actjion') }}</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($convs as $conv)
                                <tr class="conv">
                                  <input type="hidden" value="{{$conv->id}}">
                                  <td>{{$conv->subject}}</td>
                                  <td>{{$conv->message}}</td>
  
                                  <td>{{$conv->created_at->diffForHumans()}}</td>
                                  <td>
                                    <a href="{{route('user.message.show',$conv->id)}}" class="btn btn-primary btn-sm view ml-1"><i class="fa fa-eye"></i></a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#confirm-delete" data-href="{{route('user-message-delete1',$conv->id)}}"class="btn btn-sm btn-danger remove-btn"><i class="fa fa-trash"></i></a>
                                  </td>
  
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
           {{ $convs->links() }}
        </div>
      
    </div>
</section>
<!-- User Main Content Area End -->

{{-- MESSAGE MODAL --}}
<div class="message-modal">
  <div class="modal" id="vendorform" tabindex="-1" role="dialog" aria-labelledby="vendorformLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="vendorformLabel">{{ __('Message') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <div class="modal-body">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-md-12">
              <div class="contact-form">
                <form id="emailreply1">
                  {{csrf_field()}}
                  <ul>
                    <li>
                      <input type="text" class="input-field" id="subj1" name="subject" placeholder="{{ __('Subject') }}" required="">
                    </li>
                    <li>
                      <textarea class="input-field textarea" name="message" id="msg1" placeholder="{{ __('Message') }}" required=""></textarea>
                    </li>
                  </ul>
                  <button class="btn btn-primary" id="emlsub1" type="submit">{{ __('Send') }}</button>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

{{-- MESSAGE MODAL ENDS --}}

{{-- CONFIRM DELETE MODAL --}}

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <div class="modal-header d-block text-center">
        <h4 class="modal-title d-inline-block">{{ __('Confirm Delete') }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>

                <div class="modal-body">
            <p class="text-center">{{ __('You are about to delete this Message.') }}</p>
            <p class="text-center">{{ __('Do you want to proceed?') }}</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <a class="btn btn-danger btn-ok">{{ __('Delete') }}</a>
                </div>
            </div>
        </div>
    </div>

{{-- CONFIRM DELETE MODAL ENDS --}}


@endsection

@section('script')

<script type="text/javascript">
    
          
      $(document).on("submit", "#emailreply1" , function(){
          var token = $(this).find('input[name=_token]').val();
          var subject = $(this).find('input[name=subject]').val();
          var message =  $(this).find('textarea[name=message]').val();
          $('#subj1').prop('disabled', true);
          $('#msg1').prop('disabled', true);
          $('#emlsub1').prop('disabled', true);
     $.ajax({
            type: 'post',
            url: "{{URL::to('/user/send/message')}}",
            data: {
                '_token': token,
                'subject'   : subject,
                'message'  : message,
                  },
            success: function( data) {
              
          $('#subj1').prop('disabled', false);
          $('#msg1').prop('disabled', false);
          $('#subj1').val('');
          $('#msg1').val('');
        $('#emlsub1').prop('disabled', false);
        if(data == 0)
        $.notify("Oops Something Goes Wrong !!","error");
        else
        $.notify(data,"success");
        $('.close').click();
            
      }

        });          
          return false;
        });
</script>

<script type="text/javascript">

      $('#confirm-delete').on('show.bs.modal', function(e) {
          $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
      });

</script>

@endsection