@extends('layouts.admin')

@section('content')
<input type="hidden" id="headerdata" value="{{ __('PAGE') }}">
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Support') }}</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Support') }}</li>
      </ol>
  </div>

  <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              </div>
              @include('includes.admin.form-success')
              <div class="table-responsive p-3">
                  <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                      <thead class="thead-light">
                          <tr>
                            <th>{{ __('User') }}</th>
                            <th>{{ __('Subject') }}</th>
                            <th>{{ __('Message') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th>{{ __('Actions') }}</th>
                          </tr>
                      </thead>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">>
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <div class="submit-loader">
              <img src="{{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}" alt="">
          </div>
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
          </div>
      </div>
  </div>
</div>



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
              <p class="text-center">{{ __('You are about to delete this Page.') }}</p>
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
{{-- DELETE MODAL ENDS --}}

<div class="modal fade" id="vendorform" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white" id="exampleModalCenterTitle">{{ __('Send Message') }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-lg-12">
            <!-- Form Basic -->
                @include('includes.admin.form-error')  
                <form id="emailreply1" action="{{route('admin-send-message')}}" method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="to"><strong>{{ __('Email') }}</strong></label>
                    <input type="email" class="form-control eml-val" name="to" value="" id="to" placeholder="{{ __('Email') }}">
                    </div>
            
                    <div class="form-group">
                      <label for="Subject"><strong>{{ __('Subject') }}</strong></label>
                      <input type="text" class="form-control" name="subject" id="Subject" value="" placeholder="{{ __('Subject') }}">
                    </div>
  
                    <div class="form-group">
                      <label for="body"><strong>{{ __('Message') }}</strong></label>
                      <textarea type="text" class="form-control " name="message" id="body" rows="4"  placeholder="{{ __('Message Here') }}"></textarea>
                    </div>
                   <button type="submit" class="btn btn-primary">{{ __('Send Message') }}
                    <span class="spinner-grow spinner-grow-sm d-none" style="padding:10px" role="status"></span>
                  </button>
                  </form>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}
           
          </button>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
{{-- DATA TABLE --}}
    <script type="text/javascript">
            var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '{{ route('admin-message-datatables') }}',
               columns: [
                { data: 'name', name: 'name' },
                { data: 'subject', name: 'subject' },
                { data: 'message', name: 'message' },
                { data: 'created_at', name: 'created_at'},
                { data: 'action', searchable: false, orderable: false }

                     ],
               language: {
                processing: '<img src="{{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}">'
                },
				
            });


      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 col-md-4 text-right mb-2 ">'+
        '<a class="btn btn-primary" href="javascript:;" data-toggle="modal" data-target="#vendorform">'+
        '<i class="fas fa-envelope"></i> {{ __('Message') }}'+
        '</a>'+
        '</div>');
      });
{{-- DATA TABLE ENDS--}}
</script>


@endsection
