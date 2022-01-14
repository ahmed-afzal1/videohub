@extends('layouts.admin')

@section('content')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ __('Blog') }}</h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('Blog') }}</li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12 p-0">
        <div class="card mb-4">
          <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin-blog-create')}}">
              <i class="fas fa-plus"></i> {{ __('Add New Blog') }}
            </a>
          </div>
          @include('includes.admin.form-both')
          <div class="table-responsive p-3">
            {{-- <a class="btn btn-primary mb-3" href="{{route('admin-blog-create')}}">
              <i class="fas fa-plus"></i> {{ __('Add New Blog') }}
          </a> --}}
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>{{ __('Title') }}</th>
                  <th>{{ __('Image') }}</th>
                  <th>{{ __('Action') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                      <td>{{$blog->title}}</td>
                      <td><img src="{{$blog->image->image ? asset('assets/images/'.$blog->image->image) : asset('assets/images/noimage.png')}}" alt="" class="img-fluid"></td>
                      <td>
                        <div class="action-list"><a  href="{{route('admin-blog-edit',$blog->id) }}" class="btn btn-primary edit mr-2"> <i class="fa fa-pen"></i></a><a href="javascript:;" data-href=" {{route('admin-blog-delete',$blog->id)}}" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a></div>
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


{{-- DELETE MODAL --}}

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

