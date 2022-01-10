@extends('layouts.admin')

@section('content')

    <div class="container-fluid" id="container-wrapper">


        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row py-3">
                            <div class="col-md-6 text-center video-area d-none">
                                <video width="100%" controls></video>
                            </div>
                            <div class="col-md-6 text-center url-area d-none">
                                <iframe width="100%" height="360" src="">
                                </iframe>
                            </div>

                            <div class="col-md-6 image-area d-none text-center">
                                <img src="" class="img-fluid upload-image-tag" width="400" height="360" alt="image">
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.movie.store') }}" enctype="multipart/form-data" method="POST"
                            id="form">
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
                                            <input type="file" class="custom-file-input vedio_processing" name="video_name"
                                                id="video" value="" data-href="{{ route('admin.movie.processing') }}">
                                            <input type="hidden" name="previous_video" id="previous_video" value="">
                                            <label class="custom-file-label" for="video">{{ __('Choose file') }}</label>
                                        </div>
                                        <div class="progress mt-3">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="" name="video" id="getId" value="">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="video_image">{{ __('Video Thumbnail') }}</label>
                                        <span class="ml-3">{{ __('(support (jpeg,jpg,png))') }}</span>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="video_image" id="video_image"
                                                accept="image/*">
                                            <input type="hidden" value="" id="image_file">
                                            <label class="custom-file-label" for="video">{{ __('Choose file') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-md-6">
                                    <label for="title">{{ __('Movie Title') }}</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="{{ __('Movie Title') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">{{ __('Movie Access') }}</label>
                                    <select class="form-control  mb-3" name="access">
                                        <option value="free">{{ __('Free') }}</option>
                                        <option value="premium">{{ __('Premium') }}</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">{{ __('Movie Category') }}</label>
                                    <select class="form-control js-example-tokenizer mb-3" name="category[]" multiple
                                        id="multiple">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="date">{{ __('Realse Date') }}</label>
                                    <input type="text" class="form-control date" name="relase_date"
                                        placeholder="{{ __('Realse Date') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="duration">{{ __('Duration') }}</label>
                                    <input type="text" class="form-control" name="duration"
                                        placeholder="{{ __('1 hour 30 min') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="tag">{{ __('Tag') }}</label>
                                    <select name="tag[]" class="form-control js-example-tokenizer"
                                        multiple="multiple"></select>

                                </div>


                                <div class="form-group col-md-6">
                                    <label for="producer">{{ __('Producer') }}</label>
                                    <select class="form-control  mb-3 js-example-tokenizer" id="producer" name="producer[]"
                                        multiple="multiple">
                                        @foreach ($cast_crews as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="directors">{{ __('Directors') }}</label>
                                    <select class="form-control  mb-3 js-example-tokenizer" id="directors"
                                        name="directors[]" multiple="multiple">
                                        @foreach ($cast_crews as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="cast">{{ __('Cast') }}</label>
                                    <select class="form-control  mb-3 js-example-tokenizer" id="Cast" name="cast[]"
                                        multiple="multiple" multiple="multiple">
                                        @foreach ($cast_crews as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="cast">{{ __('Genre') }}</label>
                                    <select class="form-control  mb-3 js-example-tokenizer" name="genre[]"
                                        multiple="multiple" multiple="multiple">
                                        @foreach ($genres as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="description">{{ __('Description') }}</label>
                                    <textarea id="area1" class="form-control " name="description"
                                        placeholder="{{ __('Description') }}"></textarea>
                                </div>
                            </div>



                            <button type="submit" id="insertButton" class="btn btn-primary">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('script')

    <script src="https://malsup.github.com/jquery.form.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-tokenizer').select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });
            $('.date').datepicker({});
            var input = $('.VideoInsert');

            var fileHtml = `<label for="video">{{ __('Video File') }}</label>
                <span class="ml-3">{{ __('(support (mp4,webm,avi,flv,mkv))') }}</span>
                <div class="custom-file">
                    <input type="file" class="custom-file-input vedio_processing" name="video_name" id="video" value="" data-href="{{ route('admin.episode.processing') }}">
                    <input type="hidden" name="previous_video" id="previous_video" value="">
                    <label class="custom-file-label" for="video">{{ __('Choose file') }}</label>
                </div>
                <div class="progress mt-3 ">
                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>`;


            var urlHtml =
                `<label for="url">{{ __('Video Url') }}</label>
                <input type="text" class="form-control form-control-sm" style="padding:19px .5rem;"  value="" id="urlVideo" placeholder="{{ __('Video Url') }}">`;




            $('#video_type').on('change', function() {
                var value = $(this).val();
                if (value == 'file') {
                    input.html('');
                    input.html(fileHtml);

                    $('.url-area').addClass('d-none');
                    $('.image-area').removeClass('offset-md-6');
                } else {
                    input.html('');
                    $('.image-area').removeClass('offset-md-6');
                    input.html(urlHtml);
                    $('.video-area').addClass('d-none');
                }
            });


            $(document).on('change', '.vedio_processing', function(event) {
                $('.video-area').removeClass('d-none')
                let file = event.target.files[0];
                let blobURL = URL.createObjectURL(file);
                document.querySelector("video").src = blobURL;

                let link = $(this).data('href');
                let vedio = $(this).val();


                function validate(formData, jqForm, options) {
                    var form = jqForm[0];
                    if (!form.file.value) {
                        alert('File not found');
                        return false;
                    }
                }

                    var bar = $('.progress-bar');
                    var percent = $('.progress-bar');
                   

                    $('form').ajaxForm({
                        beforeSubmit: validate,
                        beforeSend: function() {
                            
                            var percentVal = '0%';
                            var posterValue = $('input[name=file]').fieldValue();
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        uploadProgress: function(event, position, total, percentComplete) {
                            var percentVal = percentComplete + '%';
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        success: function() {
                            var percentVal = 'Wait, Saving';
                            bar.width(percentVal)
                            percent.html(percentVal);
                        },
                        complete: function(xhr) {
                            status.html(xhr.responseText);
                            alert('Uploaded Successfully');
                            window.location.href = "/file-upload";
                        }
                    });

            })


            $(document).on('change', '#video_image', function(e) {

                $('.image-area').removeClass('d-none');

                if (e.target.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.onload = function(e) {
                        $('.upload-image-tag').attr('src', e.target.result);
                    }
                    fileReader.readAsDataURL(e.target.files[0]);
                }
            })



            $(document).on('keyup', '#urlVideo', function() {
                let url = $(this).val();

                if (url.indexOf('youtube') > -1) {
                    LinkUrl = '';
                    let realUrl = youtube(url);
                    $('.url-area').removeClass('d-none');
                    $('.image-area').removeClass('offset-md-6');
                    $('.url-area iframe').attr('src', realUrl);
                    $('#getId').val(realUrl);
                } else if (url.indexOf('dailymotion') > -1) {
                    LinkUrl = '';
                    var dailyMotionId = getDailyMotionId(url)
                    $('.url-area').removeClass('d-none');
                    $('.url-area iframe').attr('src', dailyMotionId);
                    $('.image-area').removeClass('offset-md-6');
                    $('#getId').val(dailyMotionId);
                } else if (url.indexOf('vimeo') > -1) {
                    LinkUrl = '';
                    let vimeoUrl = vimeo(url);
                    $('.url-area').removeClass('d-none');
                    $('.image-area').removeClass('offset-md-6');
                    $('.url-area iframe').attr('src', vimeoUrl);
                    $('#getId').val(vimeoUrl);
                }
            });



            // DailyMotion----------------------//
            function getDailyMotionId(url) {
                var m = url.match(/^.+dailymotion.com\/(video|hub)\/([^_]+)[^#]*(#video=([^_&]+))?/);
                if (m !== null) {
                    if (m[4] !== undefined) {
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

                return (match && match[2].length === 11) ?
                    match[2] :
                    null;
            }


            function youtube(url) {
                var videoID = getId(url);
                let path = `https://www.youtube.com/embed/${videoID}`;
                return path;
            }



            function vimeo(url) {
                var videoID = vimeoID(url);
                let path = `https://player.vimeo.com/video/${videoID}`;
                return path;
            }


            function vimeoID(url) {
                vimeo_Reg =
                    /https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/;
                var match = url.match(vimeo_Reg);
                if (match) {
                    return match[3];
                }
            }



            // ajax call session get data

            $(document).on('change', '#TvShow', function() {
                let showId = $(this).val();
                let = getDataUrl = "{{ url('admin/episode/session/get') }}/" + showId;
                if (showId != '') {
                    $.ajax({
                        url: getDataUrl,
                        type: "get",
                        success: function(data) {
                            let SessionData =
                                '<option value="" selected>{{ __('Select One') }}</option>';
                            data.data.map(function($value) {
                                SessionData +=
                                    `<option value="${$value.id}">${$value.session_title}</option>`;
                            });

                            $('#tvSession').html(SessionData);
                        }
                    });
                }
            })
        });
    </script>

@endpush
