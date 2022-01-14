@extends('layouts.admin')

@section('content')
<input type="hidden" id="headerdata" value="{{ __('PAGE') }}">
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Pages') }}</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('Pages') }}</li>
      </ol>
  </div>

  <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12 p-0">
          <div class="card mb-4">
            <div class="card-header">
                <a class="btn btn-primary" href="{{route('admin-page-create')}}">
                    <i class="fas fa-plus"></i> {{ __('Add New Page') }}
                </a>
            </div>
              @include('includes.admin.form-success')
              <div class="table-responsive p-3">
                  <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                      <thead class="thead-light">
                          <tr>
                            <th width="30%">{{ __('Page Title') }}</th>
                            <th width="50%">{{ __('Page Details') }}</th>
                            <th width="20%">{{ __('Actions') }}</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($datas as $data)
                             <tr>
                                 <td>{{$data->title}}</td>
                                 <td>{{$data->details}}</td>
                                 <td>
                                    <div class="action-list"><a  href="{{route('admin-page-edit',$data->id) }}" class="btn btn-primary mr-2"> <i class="fa fa-pen"></i></a><a href="javascript:;" data-href=" {{route('admin-page-delete',$data->id)}}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></div>
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
              <p class="text-center">{{ __('You are about to delete this Page.') }}</p>
              <p class="text-center">{{ __('Do you want to proceed?') }}</p>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
              <button type="submit" class="btn btn-danger btn-ok">{{ __('Delete') }}</button>
          </div>

      </div>
  </div>
</div>
{{-- DELETE MODAL ENDS --}}

@endsection
