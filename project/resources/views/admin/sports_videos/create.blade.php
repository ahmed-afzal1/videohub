@extends('layouts.admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Create Sports Video') }}
    <a href="{{ url()->previous() }}" class="btn back-btn btn-sm">{{__('Back')}}</a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin-sports-video-index')}}">{{ __('Sports Video') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('Create Sports Video') }}</li>
        </ol>
    </div>


     @include('includes.admin.form-both')
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="row py-3">
                    <div class="col-md-6 text-center video-area d-none">
                        <video src="https://www.youtube.com/"  width="400" height="360" controls></video>
                    </div>
                    <div class="col-md-6 text-center url-area d-none">
                        <iframe width="400" height="360" src="">
                        </iframe>
                    </div>
                  
                    <div class="col-md-6 image-area d-none text-center">
                        <img src="" class="img-fluid" width="400" height="360" alt="image">
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin-sports-video-store')}}" enctype="multipart/form-data" method="POST" id="form">
                        @csrf
                        <input type="hidden" value="" id="is_video" name="is_video">

                        <div class="form-group">
                            <label for="title">{{ __('Video Type') }}</label>
                            <select class="form-control form-control-sm  mb-3" name="video_type" id="video_type">
                                <option value="file">{{ __('File') }}</option>
                                <option value="url">{{ __('Url') }}</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group VideoInsert">
                                    <label for="video">{{ __('Video File') }}</label>
                                    <span class="ml-3">{{ __('(support (mp4,webm,avi,flv,mkv))') }}</span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="video_name" id="video" value="" data-href="{{route('admin-sports-video.processing')}}">
                                        <input type="hidden" name="previous_video" id="previous_video" value="">
                                        <label class="custom-file-label" for="video">{{ __('Choose file') }}</label>
                                    </div>
                                    <div class="progress mt-3 d-none">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="" name="video" id="getId" value="">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="video_image">{{ __('Video Thumbnail') }}</label>
                                    <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="video_image" id="video_image" accept="image/*">
                                        <input type="hidden" value="" id="image_file">
                                        <label class="custom-file-label" for="video">{{ __('Choose file') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title">{{ __('Video Title') }}</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="{{ __('Movie Title') }}">
                        </div>

                        <div class="form-group">
                            <label for="title">{{ __('Movie Access') }}</label>
                            <select class="form-control  mb-3" name="access" id="title">
                                <option value="free">{{ __('Free') }}</option>
                                <option value="premium">{{ __('Premium') }}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title">{{ __('Sports Video Category') }}</label>
                            <select class="form-control  mb-3" name="sports_category_id" id="sports_category">
                                <option value="">{{ __('-Select One-') }}</option>
                                @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date">{{ __('Realse Date') }}</label>
                            <input type="text" class="form-control date" name="relase_date" placeholder="{{ __('Realse Date') }}">
                        </div>

                        <div class="form-group">
                            <label for="duration">{{ __('Duration') }}</label>
                            <input type="text" class="form-control" name="duration" placeholder="{{ __('1 hour 30 min') }}">
                        </div>

                        <div class="form-group">
                            <label for="tag">{{ __('Tag') }}</label>
                            <input type="text" class="form-control" id="tag" name="tag" placeholder="{{ __('Tag') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="area1" class="form-control " name="description" placeholder="{{ __('Description') }}"></textarea>

                        </div>
                        <button type="submit" id="insertButton" class="btn btn-primary">{{ __('Save') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        @endsection

        @section('script')

        <script>
            $('.date').datepicker({});
            $('#tag').tagify();
        </script> 

   <script>
       var loading = `<span class="spinner-grow spinner-grow-sm"  role="status"></span> Please wait Data Processing...`;


            $("#form").submit(function(e) {
                e.preventDefault();
                nicEditors.findEditor('area1').saveContent();
                var des = $('#area1').val();
                var form = $(this);
                var formdata = new FormData(document.getElementById('form'));
                formdata.append('video_image', $(this));
                formdata.append('video_name', $(this));
                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: formdata,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#insertButton').html(loading).prop('disabled', true);;
                    },
                    success: function(data) {
                        $('#insertButton').html('Submit').prop('disabled', false);
                        if ((data.errors)) {
                            $('.alert-danger').show();
                            $('.alert-danger ul').html('');
                            for (var error in data.errors) {
                                $('.alert-danger ul').append('<li>' + data.errors[error] + '</li>');
                            }
                            $('body, html').animate({
                                scrollTop: $('html').offset().top
                            }, 'slow');
                        } else {
                            $('.alert-danger').hide();
                            $('.alert-success').show();
                            $('.alert-success p').html(data);
                            $('body, html').animate({
                                scrollTop: $('html').offset().top
                            }, 'slow');
                        }

                    }
                });
            });
        </script>

        <script>
        var input = $('.VideoInsert');
        var fileHtml = `<label for="video">{{ __('Video File') }}</label>
                        <span class="ml-3">{{ __('(support (mp4,webm,avi,flv,mkv))') }}</span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="video_name" id="video" value="" data-href="{{route('admin.episode.processing')}}">
                            <input type="hidden" name="previous_video" id="previous_video" value="">
                            <label class="custom-file-label" for="video">{{ __('Choose file') }}</label>
                        </div>
                        <div class="progress mt-3 d-none">
                            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>`;


        var urlHtml = `<label for="url">{{ __('Video Url') }}</label>
                        <input type="text" class="form-control form-control-sm" style="padding:19px .5rem;"  value="" id="urlVideo" placeholder="{{ __('Video Url') }}">`;


        $('#video_type').on('change',function(){
            var value = $(this).val();
            if(value == 'file'){
                input.html('');
                input.html(fileHtml);
                $('.url-area').addClass('d-none');
                $('.image-area').addClass('offset-md-6');
            }else{
                input.html('');
                $('.image-area').addClass('offset-md-6');
                input.html(urlHtml);
                $('.video-area').addClass('d-none');
            }
        });



        $(document).on('keyup', '#urlVideo', function(){
            let url = $(this).val();
        
                if (url.indexOf('youtube') > -1) {
                    LinkUrl = '';
                    let realUrl = youtube(url);
                    $('.url-area').removeClass('d-none');
                    $('.image-area').removeClass('offset-md-6');
                    $('.url-area iframe').attr('src',realUrl); 
                    $('#getId').val(realUrl);
                } 

                else if(url.indexOf('dailymotion') > -1){
                    LinkUrl = '';
                var dailyMotionId = getDailyMotionId(url)
                    $('.url-area').removeClass('d-none');
                    $('.url-area iframe').attr('src',dailyMotionId); 
                    $('.image-area').removeClass('offset-md-6');
                    $('#getId').val(dailyMotionId);
                }

                else if(url.indexOf('vimeo')> -1){
                    LinkUrl = '';
                    let vimeoUrl = vimeo(url);
                    $('.url-area').removeClass('d-none');
                    $('.image-area').removeClass('offset-md-6');
                    $('.url-area iframe').attr('src',vimeoUrl); 
                    $('#getId').val(vimeoUrl);
                }
        });



        // DailyMotion----------------------//
        function getDailyMotionId(url) {
                var m = url.match(/^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                if (m !== null) {
                    if(m[4] !== undefined) {
                        return `https://www.dailymotion.com/embed/video/${m[4]}`;
                    }
                    return `https://www.dailymotion.com/embed/video/${m[2]}`;
                }
            return null;
        }

        //  Youtube --------------------------------------//
        function getId(url) {
                const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
                const match = url.match(regExp);

            return (match && match[2].length === 11)
            ? match[2]
            : null;
        }

        
        function youtube(url){
                var videoID = getId(url);
                let path = `https://www.youtube.com/embed/${videoID}`;
                return path;
        }



        function vimeo(url){
                var videoID = vimeoID(url);
                let path = `https://player.vimeo.com/video/${videoID}`;
                return path;
        }


        function vimeoID(url) {
        vimeo_Reg = /https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/;
        var match = url.match(vimeo_Reg);
        if (match){
            return match[3];
            }
        }



        // ajax call session get data

        $(document).on('change','#TvShow',function(){
            let showId = $(this).val();
            let = getDataUrl = "{{ url('admin/episode/session/get') }}/"+showId;
            if(showId != ''){
                $.ajax({
                    url: getDataUrl,
                    type: "get",
                    success: function(data){
                        let SessionData = '<option value="" selected>{{ __('Select One') }}</option>';
                        data.data.map(function($value){
                            SessionData += `<option value="${$value.id}">${$value.session_title}</option>`;
                        });

                        $('#tvSession').html(SessionData);
                    }
                });
            }
        })



        </script>

        @endsection