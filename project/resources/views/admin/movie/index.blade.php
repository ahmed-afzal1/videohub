@extends('layouts.admin')

@section('content')
    <input type="hidden" id="headerdata" value="{{ __('HEIGHLIGHT MOVIE') }}">
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Movies') }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('Movie') }}</li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12 p-0">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ route('admin.movie.create') }}">
                            <i class="fas fa-plus"></i> {{ __('Add New Movie') }}
                        </a>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">

                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Release Date') }}</th>
                                        <th>{{ __('Access') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($movies as $movie)
                                        <tr>
                                            <td>
                                                {{ $movie->title }}
                                            </td>
                                            <td class="w-25">
                                                <img src="{{ $movie->image->image ? asset('assets/images/' . $movie->image->image) : asset('assets/images/noimages.png') }}"
                                                    alt="" class="w-50 rounded">
                                            </td>
                                            <td>
                                                {{ $movie->relase_date }}
                                            </td>
                                            <td>
                                                {{ $movie->access }}
                                            </td>
                                            <td>
                                                <div class="action-list"><a
                                                        href="{{ route('admin.movie.edit', $movie->id) }}"
                                                        class="btn btn-primary mr-2"> <i class="fa fa-pen"></i></a><a
                                                        href="javascript:void(0)"
                                                        data-href=" {{ route('admin.movie.delete', $movie->id) }}"
                                                        
                                                        class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a><a
                                                        href="javascript:void(0)"
                                                        data-href="{{ route('admin.move.heighlight', $movie->id) }}"
                                                        class="btn btn-primary mr-2 heighight ml-2"
                                                        data-toggle="modal" data-target="#modal1"> <i
                                                            class="fas fa-star mr-1"></i>{{ __('Highlight') }}</a></div>
                                            </td>
                                        </tr>
                                    @empty

                                        <tr>

                                            <td class="text-center" colspan="100%">{{__('No Movie Has been Created Yet')}}</td>

                                        </tr>

                                    @endforelse
                                </tbody>
                            </table>
                        </div>


                    </div>

                    @if($movies->hasPages())
                        <div class="card-footer">
                            {{$movies->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="submit-loader">
                    <img src="{{ asset('assets/images/' . $gs->admin_loader) }}" alt="">
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

    {{-- DELETE MODAL --}}

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
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button class="btn btn-danger">{{ __('Delete') }}</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{-- DELETE MODAL ENDS --}}

@endsection


@push('plugin')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@endpush


@push('script')

    <script>
        $(document).ready(function() {

            $('.delete').on('click',function(){
                const modal = $('#confirm-delete')

                modal.find('form').attr('action', $(this).data('href'))
                modal.modal('show')
            })


            $('.select-multiple').select2();
        });
    </script>


@endpush
