@extends('layouts.admin')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Create') }} <a href="{{ route('admin-subscription-plan-index') }}"
                class="btn back-btn btn-sm">{{ __('Back') }}</a></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboaard') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Create') }}</li>
        </ol>
    </div>

    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">

                    <button class="btn btn-primary add">
                        <i class="fas fa-plus"></i> {{ __('Add Subscription Features') }}
                    </button>

                </div>
                <div class="table-responsive p-3">

                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>{{ __('Sl') }}</th>
                                <th>{{ __('Feature') }}</th>
                                <th>{{ __('status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($features as $feature)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $feature->features }}</td>
                                    <td>

                                        <select name="status" class="form-control status"
                                            data-url="{{ route('admin.plan.features.status', $feature->id) }}">

                                            <option value="1" {{ $feature->status ? 'selected' : '' }}>
                                                {{ __('Active') }}</option>
                                            <option value="0" {{ $feature->status ? '' : 'selected' }}>
                                                {{ __('Deactive') }}</option>

                                        </select>
                                    </td>



                                    <td>
                                        <div class="action-list"><button
                                                data-href="{{ route('admin.plan.features.update', $feature->id) }}"
                                                data-feature="{{ $feature->features }}"
                                                class="btn btn-primary btn-sm mr-2 edit"> <i
                                                    class="fas fa-edit mr-1"></i>{{ __('Edit') }}</button>

                                        </div>
                                    </td>
                                </tr>
                            @empty

                                <tr>

                                    <td class="text-center" colspan="100%">{{ __('No subscription Found') }}</td>

                                </tr>

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('admin.plan.features.store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Add Feature') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="form-group col-md-12">

                                    <label for="features">{{ __('Feature') }}</label>
                                    <input type="text" name="features" class="form-control"
                                        placeholder="{{ __('Subscription Plan Featured') }}" id="features">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Create Feature') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('admin.plan.features.store') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Update Feature') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="form-group col-md-12">

                                    <label for="features">{{ __('Feature') }}</label>
                                    <input type="text" name="features" class="form-control"
                                        placeholder="{{ __('Subscription Plan Featured') }}" id="features">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Update Feature') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection


@push('script')

    <script>
        'use strict'
        $(function() {
            $('.add').on('click', function() {
                const modal = $('#add');

                modal.modal('show')
            })

            $('.edit').on('click', function() {
                const modal = $('#edit');
                modal.find('form').attr('action', $(this).data('href'))
                modal.find('#features').val($(this).data('feature'))
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
