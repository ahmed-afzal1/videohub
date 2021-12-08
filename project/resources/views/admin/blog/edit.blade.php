@extends('layouts.admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Edit Post') }}
    <a href="{{ route('admin-blog-index') }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin-blog-index')}}">{{ __('Blog') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Post') }}</li>
        </ol>
    </div>
    @include('includes.form-success')
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="row py-3">
                    <div class="col-md-6 image-area {{ $data->image->image != null ? '' : 'd-none'  }} text-center offset-3">
                        <img src="{{ $data->image->image != null ? asset('assets/images/'.$data->image->image) : '' }}" class="img-fluid" width="300" height="300" alt="image">
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin-blog-update',$data->id)}}" enctype="multipart/form-data" method="POST" >
                        @csrf
                        
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="video_image">{{ __('Post Thumbnail') }}</label>
                                    <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="video_image" accept="image/*">
                                        <label class="custom-file-label" for="photo">{{ __('Choose file') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title">{{ __('Blog Title') }}</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="{{ __('Blog Title') }}" value="{{ $data->title }}">
                        </div>

                        <div class="form-group">
                            <label for="slug">{{ __('Blog Slug') }}</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="{{ __('Blog Slug') }}" value="{{ $data->slug }}">
                        </div>

                        <div class="form-group">
                            <label for="tag">{{ __('Tag') }}</label>
                            <input type="text" class="form-control" id="tag" name="tags" placeholder="{{ __('Tags') }}" value="{{ $data->tags }}">
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="area1" class="form-control " name="description" placeholder="{{ __('Description') }}">{!! $data->description !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="source">{{ __('Source') }}</label>
                            <input type="text" class="form-control" name="source" id="source" placeholder="{{ __('Source') }}" value="{{ $data->source }}">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="seo" {{ $data->meta_tag != null || $data->meta_description != null ? 'checked' : '' }}>
                              <label class="custom-control-label" for="seo"> {{ __('Allow Blog SEO') }}</label>
                            </div>
                          </div>

                        <div class="showbox d-none">
                            <div class="form-group">
                                <label for="meta_tag">{{ __('Meta Tag') }}</label>
                                <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="{{ __('Meta Tag') }}" value="{{ $data->meta_tag }}">
                            </div>

                            <div class="form-group">
                                <label for="meta_description">{{ __('Description') }}</label>
                                <textarea  class="form-control" rows="4" id="meta_description" name="meta_description" placeholder="{{ __('Meta Description') }}">{{ $data->meta_description }}</textarea>
                            </div>
                          </div>
                          
                        <button type="submit" id="insertButton" class="btn btn-primary">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" value="1" id="isValue">
@endsection

@section('script')

<script>
    $('#tag').tagify();
    $('#meta_tag').tagify();

    $(document).on('click','#seo',function(){
        if($(this).is(':checked')){
           $('.showbox').removeClass('d-none');
            }else{
                $('.showbox').addClass('d-none');
            }
    });

    $(document).ready(function(){
        if($('#seo').is(':checked')){
           $('.showbox').removeClass('d-none');
            }else{
                $('.showbox').addClass('d-none');
            }
    });
 </script>


@endsection