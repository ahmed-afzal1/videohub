@extends('layouts.admin')


@section('content')



    <div class="row">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">

                    <button class="btn btn-primary add"> <i class="fa fa-plus"></i> {{ __('Add Sliders') }}</button>
                </div>

                <div class="card-body">

                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>{{ __('Slider Poster') }}</th>
                                <th>{{ __('Movie') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($sliders as $slider)

                                <tr>

                                    <td class="w-25">
                                    <img src="{{asset('assets/images/poster/'.$slider->poster)}}" alt="" class="w-100 rounded">
                                    </td>
                                    <td>{{ $slider->movie->title }}</td>
                                    <td>

                                        <button class="btn btn-primary edit" data-href="{{route('admin.frontend.slider.edit',$slider->id)}}" data-slider="{{$slider}}">{{__('Edit')}}</button>
                                        <button class="btn btn-danger delete" data-href="{{route('admin.frontend.slider.delete',$slider->id)}}" data-slider="{{$slider}}">{{__('Delete')}}</button>

                                    </td>

                                </tr>
                            @empty

                                <tr>

                                    <td class="text-center" colspan="100%">{{ __('No Data Found') }}</td>

                                </tr>

                            @endforelse
                        </tbody>
                    </table>


                </div>


            </div>


        </div>

    </div>

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{__('Add Sliders')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12 mb-3">
                                <label class="col-form-label">{{ __('Slider Poster') }}</label>

                                <div id="image-preview" class="image-preview w-100" style="background-image:url()">
                                    <label for="image-upload" id="image-label">{{ __('Choose File') }}</label>
                                    <input type="file" name="image" id="image-upload" />
                                </div>

                            </div>
                            <div class="form-group col-md-12">
                                <label for="">{{__('Select Movie')}}</label>

                                <select name="movie" id="" class="form-control">
                                    @foreach ($movies as $movie)
                                        <option value="{{$movie->id}}">{{$movie->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
    
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{__('Update Sliders')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="form-group col-md-12 mb-3">
                                <label class="col-form-label">{{ __('Slider Poster') }}</label>

                                <div id="image-preview-update" class="image-preview w-100" style="background-image:url()">
                                    <label for="image-upload-update" id="image-label-update">{{ __('Choose File') }}</label>
                                    <input type="file" name="image" id="image-upload-update" />
                                </div>

                            </div>

                            <div class="form-group col-md-12">
                                <label for="">{{__('Select Movie')}}</label>

                                <select name="movie" id="" class="form-control">
                                    @foreach ($movies as $movie)
                                        <option value="{{$movie->id}}">{{$movie->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{__('Delete Sliders')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{__('Are You Sure To Delete Sliders')}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
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

            $('.add').on('click', function() {
                const modal = $('#add');

                modal.modal('show');
            })  
            
            $('.delete').on('click', function() {
                const modal = $('#delete');
                modal.find('form').attr('action',$(this).data('href'))
                modal.modal('show');
            }) 
            
            $('.edit').on('click', function() {
                const modal = $('#edit');
                let imageUrl = "{{asset('assets/images/poster')}}"+'/' +$(this).data('slider').poster;
                modal.find('.image-preview').css("background-image", "url(" + imageUrl + ")")
                modal.find('select[name=movie]').val($(this).data('slider').movie_id)
                modal.find('form').attr('action',$(this).data('href'))
                modal.modal('show');
            })


            $.uploadPreview({
                input_field: "#image-upload", // Default: .image-upload
                preview_box: "#image-preview", // Default: .image-preview
                label_field: "#image-label", // Default: .image-label
                label_default: "{{ __('Choose File') }}", // Default: Choose File
                label_selected: "{{ __('Update Image') }}", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });
            
            $.uploadPreview({
                input_field: "#image-upload-update", // Default: .image-upload
                preview_box: "#image-preview-update", // Default: .image-preview
                label_field: "#image-label-update", // Default: .image-label
                label_default: "{{ __('Choose File') }}", // Default: Choose File
                label_selected: "{{ __('Update Image') }}", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });

        })
    </script>

@endpush