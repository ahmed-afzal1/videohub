@extends('layouts.admin')

@section('content')

    <div class="container-fluid" id="container-wrapper">
 

        <div class="row">

            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">

                        <a class="btn btn-primary" href="{{ route('admin-subscription-plan-create') }}">
                            <i class="fas fa-plus"></i> {{ __('Add New Plan') }}
                        </a>

                    </div>
                    <div class="table-responsive p-3">

                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>{{ __('Plan Name') }}</th>
                                    <th>{{ __('Plan Duration') }}</th>
                                    <th>{{ __('Plan Status') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($subscriptions as $subscription)
                                    <tr>
                                        <td>{{ $subscription->plan_name }}</td>
                                        <td>{{ $subscription->duration }}</td>
                                        <td>

                                            @if ($subscription->status)
                                                <span class="badge badge-success">{{ __('Active') }}</span>
                                            @else
                                                <span class="badge badge-danger">{{ __('Inactive') }}</span>

                                            @endif

                                        </td>

                                        <td>{{ $subscription->price }}</td>

                                        <td>
                                            <div class="action-list"><a
                                                    href="{{ route('admin-subscription-plan-edit', $subscription->id) }}"
                                                    class="btn btn-primary btn-sm mr-2"> <i
                                                        class="fas fa-pen mr-1"></i>{{ __('Edit') }}</a>

                                              
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
                        <p class="text-center">{{ __('You are about to delete this Subscription Plan.') }}</p>
                        <p class="text-center">{{ __('Do you want to proceed?') }}</p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button class="btn btn-danger" type="submit">{{ __('Delete') }}</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{-- DELETE MODAL ENDS --}}

@endsection


@push('script')

    <script>
        $(function() {
            $('.delete').on('click', function() {
                const modal = $('#confirm-delete');
                modal.find('form').attr('action', $(this).data('href'))
                modal.modal('show');
            })
        })
    </script>

@endpush
