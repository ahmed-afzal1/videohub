@extends('layouts.admin')

@section('content')

    <div class="container-fluid" id="container-wrapper">


        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary mb-" href="{{ route('admin-cast-crew-create') }}">
                            <i class="fas fa-plus"></i> {{ __('Add New Cast & Crew') }}
                        </a>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive p-3">

                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="20%">{{ __('Name') }}</th>
                                        <th width="15%">{{ __('Image') }}</th>
                                        <th width="30%">{{ __('Bio') }}</th>
                                        <th width="20%">{{ __('Status') }}</th>
                                        <th width="15%">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($castAndCrews as $castAndCrew)
                                        <tr>
                                            <td>
                                                {{ $castAndCrew->name }}
                                            </td>
                                            <td>
                                                <img src="{{ $castAndCrew->image->image != null ? url('assets/images/' . $castAndCrew->image->image) : url('assets/images/noimage.png') }}"
                                                    class="w-75 rounded">
                                            </td>
                                            <td>
                                                {{ Str::limit($castAndCrew->bio, 50) }}
                                            </td>
                                            <td>

                                                <select name="status" class="form-control status"
                                                    data-url="{{ route('admin-cast-crew-status', $castAndCrew->id) }}">

                                                    <option value="1" {{ $castAndCrew->status ? 'selected' : '' }}>
                                                        {{ __('Active') }}</option>
                                                    <option value="0" {{ $castAndCrew->status ? '' : 'selected' }}>
                                                        {{ __('Deactive') }}</option>

                                                </select>

                                            </td>
                                            <td>
                                                <a href="{{ route('admin-cast-crew-edit', $castAndCrew->id) }}" class="btn btn-primary"> <i class="fas fa-pen"></i></a>
                                                <a href="javascript:void(0);" data-href=" {{ route('admin-cast-crew-delete', $castAndCrew->id) }}" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @empty

                                        <tr>
                                            <td class="text-center" colspan="100%">{{ __('No Cast and Crew Found') }}
                                            </td>

                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>
                        </div>


                        @if ($castAndCrews->hasPages())
                            <div class="card-footer">

                                {{ $castAndCrews->links() }}

                            </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="submit-loader">
                    <img src="{{ asset('assets/images/genarel-settings/' . $gs->admin_loader) }}" alt="">
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

    {{-- ATTRIBUTE MODAL ENDS --}} {{-- DELETE MODAL --}}

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
                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{-- DELETE MODAL ENDS --}}
    <input type="hidden" value="1" id="isValue">
@endsection

@push('style')


    <style>
        .dropdown-style {
            position: absolute;
            will-change: transform;
            top: 0px;
            left: 0px;
            transform: translate3d(0px, 38px, 0px);
        }

    </style>


@endpush



@push('script')

    <script>
        'use strict'

        $(function() {

            $('.delete').on('click', function() {
                const modal = $('#confirm-delete');
                modal.find('form').attr('action', $(this).data('href'))
                modal.modal('show')
            })


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
