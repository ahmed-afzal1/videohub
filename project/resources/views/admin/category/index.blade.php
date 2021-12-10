@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">

                    @if (request()->routeIs('category.search'))
                        <h4>

                            <a href="{{ route('category.index') }}" class="btn btn-primary"><i
                                    class="fa fa-arrow-left"></i>
                                @lang('Back')</a>
                        </h4>

                         <div class="card-header-form">

                            <p class="text-muted">@lang('Search Result for '. request()->search)</p>

                         </div>

                    @else


                        <h4>

                            <button class="btn btn-primary add"><i
                                    class="fa fa-plus"></i>
                                @lang('Add Category')</button>
                        </h4>
                        <div class="card-header-form">
                            <form method="GET" action="{{ route('category.search') }}">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="@lang('Search')" name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>@lang('Sl').</th>
                                <th>@lang('Name')</th>
                               
                                <th>@lang('Status')</th>
                                <th>@lang('Action')</th>
                            </tr>
                            @forelse ($categories as $category)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                   

                                    <td class="w-25">
                                        <select name="status" class="form-control status"
                                                    data-url="{{ route('category.status', $category->id) }}">

                                                    <option value="1" {{ $category->status ? 'selected' : '' }}>
                                                        {{ __('Active') }}</option>
                                                    <option value="0" {{ $category->status ? '' : 'selected' }}>
                                                        {{ __('Deactive') }}</option>

                                                </select>
                                    </td>
                                    <td>

                                        <button data-href="{{ route('category.update', $category) }}" data-name="{{$category->name}}" class="btn btn-primary edit"><i
                                                class="fa fa-pen"></i></button>
                                        <a href="" data-url="{{ route('category.destroy', $category) }}"
                                            class="btn btn-danger delete"><i class="fa fa-trash"></i></a>

                                    </td>


                                </tr>
                            @empty

                                <tr>

                                    <td class="text-center" colspan="100%">@lang('No Data Found')</td>

                                </tr>

                            @endforelse
                        </table>
                    </div>
                </div>
                @if ($categories->hasPages())
                    {{ $categories->links('partials.paginate') }}
                @endif
            </div>
        </div>
    </div>

   

    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
               
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@lang('Add Category')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">

                        <div class="form-group col-md-12">

                            <label for="">@lang('Category Name')</label>
                            <input type="text" name="name" class="form-control" placeholder="{{__('Category Name')}}">
                        </div>
                       
                       
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn-primary">@lang('Save Category')</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    
    
    <div class="modal fade" tabindex="-1" role="dialog" id="edit">
        <div class="modal-dialog" role="document">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@lang('Update Category')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">

                        <div class="form-group col-md-12">

                            <label for="">@lang('Category Name')</label>
                            <input type="text" name="name" class="form-control" placeholder="{{__('Category Name')}}">
                        </div>
                       
                       
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn-primary">@lang('Update Category')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
    <div class="modal fade" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
            <form action="" method="POST">
                @csrf
                @method("DELETE")
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@lang('Delete Category')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-danger">@lang('Are You Sure to Delete this Category ?')</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                        <button type="submit" class="btn btn-danger">@lang('Delete')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection


@push('script')


    <script>
        $(function() {
            'use strict'
            $('.add').on('click', function(e) {
                e.preventDefault();
                const modal = $('#add');
               
                modal.modal('show');
            })  
            
            
            $('.edit').on('click', function(e) {
                e.preventDefault();
                const modal = $('#edit');
                modal.find('form').attr('action', $(this).data('href'));
                modal.find('input[name=name]').val($(this).data('name'));
                modal.modal('show');
            }) 
            
            $('.delete').on('click', function(e) {
                e.preventDefault();
                const modal = $('#delete');
                modal.find('form').attr('action', $(this).data('url'));
                modal.modal('show');
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