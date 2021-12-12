@extends('layouts.admin')

@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Episode') }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('Episode') }}</li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ route('admin-episode-create') }}">
                            <i class="fas fa-plus"></i> {{ __('Add New Episode') }}
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-3">

                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">

                                    <tr>
                                        <th>{{ __('Show') }}</th>
                                        <th>{{ __('Season') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Access') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)

                                        <tr>
                                            <td>{{ $data->tvShow->show_name }}</td>
                                            <td>{{ $data->tvSeason->session_title }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td class="w-25">
                                                <img src="{{ $data->image->image ? asset('assets/images/' . $data->image->image) : asset('assets/images/noimages.png') }}"
                                                    alt="" class="w-25 rounded">
                                            </td>
                                            <td>{{ $data->access }}</td>
                                            <td>

                                                <select name="status" class="form-control status"
                                                    data-url="{{ route('admin-episode-status', $data->id) }}">

                                                    <option value="1" {{ $data->status ? 'selected' : '' }}>
                                                        {{ __('Active') }}</option>
                                                    <option value="0" {{ $data->status ? '' : 'selected' }}>
                                                        {{ __('Deactive') }}</option>

                                                </select>

                                            </td>
                                            <td>
                                                <div class="action-list"><a
                                                        href="{{ route('admin-episode-edit', $data->id) }}"
                                                        class="btn btn-primary btn-sm mr-2"> <i
                                                            class="fas fa-edit mr-1"></i>{{ __('Edit') }}</a><a
                                                        href="javascript:;"
                                                        data-href=" {{ route('admin-episode-delete', $data->id) }}"
                                                        data-toggle="modal" data-target="#confirm-delete"
                                                        class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                                </div>
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
                    <p class="text-center">
                        {{ __('You are about to delete this Category. Everything under this category will be deleted') }}.
                    </p>
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


@push('script')

    <script>
        $(function() {
            $('.status').on('change', function() {

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
