@extends('layouts.admin')

@section('content')
    <input type="hidden" id="headerdata" value="{{ __('GENRE') }}">
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $pageTitle }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboaard') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a class="btn btn-primary" href="{{ route('admin-cat-create') }}"> <i class="fa fa-plus"></i>
                            {{ __('Add Genre') }}</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($datas as $data)

                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td class="w-25">
                                                <img src="{{ asset('assets/images/' . $data->image->image) }}"
                                                    class="rounded w-25">
                                            </td>
                                            <td>{{ $data->slug }}</td>
                                            <td>

                                                <select name="status" id="status" data-url="{{ route('admin-cat-status', $data->id) }}" class="form-control">
                                                    <option value="1" {{$data->status ? 'selected' : ''}}>{{__('Active')}}</option>
                                                    <option value="0" {{$data->status ? '' : 'selected'}}>{{__('Inactive')}}</option>
                                                </select>
                                               

                                            </td>
                                            <td>

                                               

                                                <a href="{{ route('admin-cat-edit', $data->id) }}"
                                                    class="btn btn-primary"><i class="fa fa-pen"></i></a>

                                                <button data-url="{{ route('admin-cat-delete', $data->id) }}"
                                                    class="btn btn-danger delete"><i class="fa fa-trash"></i></button>

                                            </td>
                                        </tr>
                                    @empty

                                        <tr>

                                            <td class="text-center" colspan="100%">{{ __('No Genre Found') }}</td>

                                        </tr>

                                    @endforelse
                                </tbody>

                            </table>
                        </div>

                        <div class="card-footer">

                            {{ $datas->links() }}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="post">
                @csrf
                <div class="modal-content">

                    <div class="modal-header d-block text-center">
                        <h4 class="modal-title d-inline-block">{{ __('Confirm Delete') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="text-center">
                            {{ __('You are about to delete this Category. Everything under this category will be deleted') }}.
                        </p>
                        <p class="text-center">{{ __('Do you want to proceed?') }}</p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button class="btn btn-danger" type="submit">{{ __('Delete') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('style')


<style>
input[type=checkbox]{
  height: 0;
  width: 0;
  visibility: hidden;
}

label {
  cursor: pointer;
  text-indent: -9999px;
  width: 200px;
  height: 100px;
  background: grey;
  display: block;
  border-radius: 100px;
  position: relative;
}

label:after {
  content: '';
  position: absolute;
  top: 5px;
  left: 5px;
  width: 90px;
  height: 90px;
  background: #fff;
  border-radius: 90px;
  transition: 0.3s;
}

input:checked + label {
  background: #bada55;
}

input:checked + label:after {
  left: calc(100% - 5px);
  transform: translateX(-100%);
}

label:active:after {
  width: 130px;
}


</style>


@endpush


@push('script')

    <script>
        'use strict'

        $(function() {
            $('.delete').on('click', function() {
                const modal = $('#confirm-delete');
                modal.find('form').attr('action', $(this).data('url'))
                modal.modal('show');
            })

            $('#status').on('change', function() {
              
                let status = $(this).val();
                let url = $(this).data('url');
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                    url: url,
                    data: {
                        status: status
                    },
                    method: "POST",
                    success: function(response) {
                        iziToast.success({
                            message: response.success,
                            position: 'topRight'
                        });
                    }
                })
            })
        })

    </script>

@endpush
