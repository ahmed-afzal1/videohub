@extends('layouts.admin')

@section('content')

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Series') }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboaard') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('Series') }}</li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">

                        <a class="btn btn-primary" href="{{ route('admin-show-create') }}">
                            <i class="fas fa-plus"></i> {{ __('Add New Series') }}
                        </a>

                    </div>
                    <div class="table-responsive p-3">

                        <table class="table align-items-center table-flush ">
                            <thead class="thead-light">
                                <tr>
                                    <th width="20%">{{ __('Show Name') }}</th>
                                    <th width="20%">{{ __('Image') }}</th>
                                    <th width="15%">{{ __('Status') }}</th>
                                    <th width="31%">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shows as $show)
                                    <tr>
                                        <td>
                                            {{ $show->show_name }}
                                        </td>
                                        <td class="w-25">
                                            <img src="{{ $show->image->image ? asset('assets/images/' . $show->image->image) : asset('assets/images/noimages.png') }}"
                                                alt="" class="w-25">
                                        </td>
                                        
                                        <td>
                                              <select name="status" class="status form-control" data-url="{{ route('admin-show-status', $show->id) }}" class="form-control">
                                                    <option value="1" {{$show->status ? 'selected' : ''}}>{{__('Active')}}</option>
                                                    <option value="0" {{$show->status ? '' : 'selected'}}>{{__('Inactive')}}</option>
                                                </select>
                                        </td>
                                        <td>
                                            <div class="action-list"><a href="{{ route('admin-show-edit', $show->id) }}"
                                                    class="btn btn-primary btn-sm mr-2"> <i
                                                        class="fas fa-edit mr-1"></i>{{ __('Edit') }}</a><a
                                                    href="javascript:;"
                                                    data-href=" {{ route('admin-show-delete', $show->id) }}"
                                                    data-toggle="modal" data-target="#confirm-delete"
                                                    class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>
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

    $(function(){
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