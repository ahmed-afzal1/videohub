@extends('layouts.admin')

@section('content')
<input type="hidden" id="headerdata" value="{{ __('Season') }}">
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Season') }}</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Season') }}</li>
      </ol>
  </div>

  <!-- Row -->
  <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
          <div class="card mb-4">
            @include('includes.form-success')
              <div class="table-responsive p-3">
                <a class="btn btn-primary" href="{{route('admin-session-create')}}">
                    <i class="fas fa-plus"></i> {{ __('Add New Season') }}
                </a>
                  <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                      <thead class="thead-light">
                          <tr>
                              <th>{{ __('Season Name') }}</th>
                              <th>{{ __('Show') }}</th>
                              <th>{{ __('Image') }}</th>
                              <th>{{ __('Action') }}</th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach ($datas as $data)
                            <tr>
                                <td>{{$data->session_title}}</td>
                                <td>{{$data->show->show_name}}</td>
                                <td>
                                    <img src="{{$data->image->image ? asset('assets/images/'.$data->image->image) : asset('assets/images/noimages.png')}}" alt="">
                                </td>
                                <td>
                                    <div class="action-list"><a  href="{{route('admin-session-edit',$data->id) }}" class="btn btn-primary btn-sm mr-2"> <i class="fas fa-edit mr-1"></i>{{__('Edit')}}</a><a href="javascript:;" data-href=" {{route('admin-session-delete',$data->id)}}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>
                                </td>
                            </tr>
                         @endforeach
                      </tbody>
                  </table>
              </div>
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
{{-- DELETE MODAL ENDS --}}

@endsection


