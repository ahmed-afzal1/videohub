@extends('layouts.admin')

@section('content')
<input type="hidden" id="headerdata" value="{{ __('FAQ') }}">
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Faq Page') }}</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('FAQ') }}</li>
      </ol>
  </div>

  <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">{{ __('INFORMATION') }}</h6>
              </div>
              @include('includes.admin.form-success')
             <form class="p-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">{{ __('Meta Tag') }}</label>
                    <input type="email" class="form-control" name="meta_tag" placeholder="{{ __('Meta Tag') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">{{ __('Meta Description') }}</label>
                    <input type="password" class="form-control" id="description" name="description" placeholder="{{ __('Meta Description') }}">
                </div>
                
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
          </div>
      </div>
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
                              <th width="30%">{{ __('Faq Title') }}</th>
                              <th width="60%">{{ __('Faq Details') }}</th>
                              <th width="30%">{{ __('Action') }}</th>
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
              <img src="{{asset('assets/images/'.$gs->admin_loader)}}" alt="">
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

{{-- ADD / EDIT MODAL ENDS --}} {{-- ATTRIBUTE MODAL --}}
<div class="modal fade" id="attribute" tabindex="-1" role="dialog" aria-labelledby="attribute" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="submit-loader">
              <img src="{{asset('assets/images/'.$gs->admin_loader)}}" alt="">
          </div>
          <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
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

{{-- ATTRIBUTE MODAL ENDS --}} {{-- DELETE MODAL --}}

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
              <p class="text-center">{{ __('You are about to delete this Content.') }}</p>
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

@endsection

@section('script')
{{-- DATA TABLE --}}
    <script type="text/javascript">
		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '{{ route('admin-faq-datatables') }}',
               columns: [
                        { data: 'title', name: 'title' },
                        { data: 'details', name: 'details' },
            			{ data: 'action', searchable: false, orderable: false }

                     ],
               language : {
                	processing: '<img src="{{asset('assets/images/'.$gs->admin_loader)}}">'
                }
			
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 col-md-4 text-right mb-2 ">'+
        '<a class="btn btn-primary " href="javascript:;" data-href="{{route('admin-faq-create')}}" id="add-data" data-toggle="modal" data-target="#modal1">'+
        '<i class="fas fa-plus"></i> {{ __('Add New Faq') }}'+
        '</a>'+
        '</div>');
      });
{{-- DATA TABLE ENDS--}}
</script>

@endsection
