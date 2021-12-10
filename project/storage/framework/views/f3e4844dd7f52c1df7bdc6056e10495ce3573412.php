<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Edit Movie')); ?>

                <a href="<?php echo e(url()->previous()); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin-episode-index')); ?>"><?php echo e(__('Edit Movie')); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Edit Movie')); ?></li>
            </ol>
        </div>
        <?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="row py-3">

                        <div class="col-md-6 text-center video-area <?php echo e($data->video_type == 'file' ? '' : 'd-none'); ?>">
                            <video
                                src="<?php echo e($data->video_type == 'file' ? asset('assets/videos/movie-videos/' . $data->video) : ''); ?>"
                                width="400" height="360" controls
                                class="<?php echo e($data->video_type == 'file' ? '' : 'd-none'); ?>"></video>
                        </div>
                        <div class="col-md-6 text-center url-area <?php echo e($data->video_type == 'url' ? '' : 'd-none'); ?>">
                            <iframe width="400" height="360" src="<?php echo $data->video_type == 'url' ? $data->video : ''; ?>"
                                class="<?php echo e($data->video_type == 'url' ? '' : 'd-none'); ?>">
                            </iframe>
                        </div>

                        <div class="col-md-6 image-area <?php echo e($data->image->image != null ? '' : 'd-none'); ?> text-center">
                            <img src="<?php echo e(asset('assets/images/' . $data->image->image)); ?>" class="img-fluid"
                                width="400" height="360" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.movie.update', $data->id)); ?>" enctype="multipart/form-data"
                            method="POST" id="form">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="title"><?php echo e(__('Video Type')); ?></label>
                                <select class="form-control form-control-sm  mb-3" name="video_type" id="video_type">
                                    <option value="file" <?php echo e($data->video_type == 'file' ? 'selected' : ''); ?>>
                                        <?php echo e(__('File')); ?></option>
                                    <option value="url" <?php echo e($data->video_type == 'url' ? 'selected' : ''); ?>>
                                        <?php echo e(__('Url')); ?></option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group VideoInsert">
                                        <label for="video"><?php echo e(__('Video File')); ?></label>
                                        <span class="ml-3"><?php echo e(__('(support (mp4,webm,avi,flv,mkv))')); ?></span>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="video_name" id="video"
                                                value="" data-href="<?php echo e(route('admin.movie.processing')); ?>">
                                            <label class="custom-file-label" for="video"><?php echo e(__('Choose file')); ?></label>
                                        </div>
                                        <div class="progress mt-3 d-none">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="video_image"><?php echo e(__('Video Thumbnail')); ?></label>
                                        <span class="ml-3"><?php echo e(__('(support (jpeg,jpg,png))')); ?></span>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="video_image" id="video_image"
                                                accept="image/*">
                                            <input type="hidden" value="" id="image_file">
                                            <label class="custom-file-label" for="video"><?php echo e(__('Choose file')); ?></label>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" value="<?php echo e($data->video_type == 'url' ? $data->video : ''); ?>"
                                    id="getId" name="video">
                                <input type="hidden" value="<?php echo e($data->video_type); ?>" id="type">

                                <div class="form-group col-md-6 ">
                                    <label for="title"><?php echo e(__('Movie Title')); ?></label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="<?php echo e(__('Movie Title')); ?>" value="<?php echo e($data->title); ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title"><?php echo e(__('Movie Access')); ?></label>
                                    <select class="form-control  mb-3" name="access" id="title">
                                        <option value="free" <?php echo e($data->access == 'free' ? 'selected' : ''); ?>>
                                            <?php echo e(__('Free')); ?></option>
                                        <option value="premium" <?php echo e($data->access == 'premium' ? 'selected' : ''); ?>>
                                            <?php echo e(__('Premium')); ?></option>
                                    </select>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="date"><?php echo e(__('Realse Date')); ?></label>
                                    <input type="text" class="form-control date" name="relase_date"
                                        placeholder="<?php echo e(__('Realse Date')); ?>"
                                        value="<?php echo e(date('d-m-Y', strtotime($data->release_date))); ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="duration"><?php echo e(__('Duration')); ?></label>
                                    <input type="text" class="form-control" name="duration"
                                        placeholder="<?php echo e(__('1 hour 30 min')); ?>" value="<?php echo e($data->duration); ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="tag"><?php echo e(__('Tag')); ?></label>
                                    <input type="text" class="form-control" id="tag" name="tag"
                                        placeholder="<?php echo e(__('Tag')); ?>" value="<?php echo $data->tag; ?>">
                                </div>

                                

                                <div class="form-group col-md-6">
                                    <label for="producer"><?php echo e(__('Producer')); ?></label>
                                    <select class="form-control  mb-3 select-2" id="producer" name="producer[]"
                                        multiple="multiple" multiple="multiple">
                                        <?php $__currentLoopData = $cast_crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($producer->id); ?>"
                                                <?php echo e(in_array($producer->id, $data->producer) ? 'selected' : ''); ?>>
                                                <?php echo e($producer->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="directors"><?php echo e(__('Directors')); ?></label>
                                    <select class="form-control  mb-3 select-2" id="directors" name="directors[]"
                                        multiple="multiple" multiple="multiple">
                                        <?php $__currentLoopData = $cast_crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($directors->id); ?>"
                                                <?php echo e(in_array($directors->id, $data->directors) ? 'selected' : ''); ?>>
                                                <?php echo e($directors->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="cast"><?php echo e(__('Cast')); ?></label>
                                    <select class="form-control  mb-3 select-2" id="cast" name="cast[]" multiple="multiple"
                                        multiple="multiple">
                                        <?php $__currentLoopData = $cast_crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cast->id); ?>"
                                                <?php echo e(in_array($cast->id, $data->cast) ? 'selected' : ''); ?>>
                                                <?php echo e($cast->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="description"><?php echo e(__('Description')); ?></label>
                                    <textarea id="area1" class="form-control " name="description"
                                        placeholder="<?php echo e(__('Description')); ?>"><?php echo $data->description; ?></textarea>
                                </div>



                            </div>



                            <button type="submit" id="UpdateButton" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugin'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

    <script>
        $('.select-2').select2();
        $('.date').datepicker({});
        $('#tag').tagify();



        var input = $('.VideoInsert');
        var video = $('#getId').val();
        var type = $('#type').val()

        var fileHtml = `<label for="video"><?php echo e(__('Video File')); ?></label>
                <span class="ml-3"><?php echo e(__('(support (mp4,webm,avi,flv,mkv))')); ?></span>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="video_name" id="video" value="" data-href="<?php echo e(route('admin.episode.processing')); ?>">
                    <input type="hidden" name="previous_video" id="previous_video" value="<?php echo e($data->video_type == 'file' ? true : false); ?>">
                    <label class="custom-file-label" for="video"><?php echo e(__('Choose file')); ?></label>
                </div>
                <div class="progress mt-3 d-none">
                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>`;


        var urlHtml =
            `<label for="url"><?php echo e(__('Video Url')); ?></label>
                <input type="text" class="form-control form-control-sm" style="padding:19px .5rem;" name="video" value="${type == 'file' ? '': video}" id="urlVideo" placeholder="<?php echo e(__('Video Url')); ?>">`;


        $('#video_type').on('change', function() {
            var value = $(this).val();

            if (value == 'file') {
                input.html('');
                input.html(fileHtml);
                $('.url-area').addClass('d-none');
                $('.video-area').removeClass('d-none');
                var videoTag = $('.video-area video').attr('src');
                if (videoTag != '') {
                    $('.video-area video').removeClass('d-none');
                }

            } else {
                input.html('');
                input.html(urlHtml);
                $('.video-area').addClass('d-none');
                $('.url-area').removeClass('d-none');
                var videoTag = $('.url-area iframe').attr('src');
                if (videoTag != '') {
                    $('.url-area iframe').removeClass('d-none');
                }
            }
        });




        $(document).ready(function() {
            var value = $('#video_type').find(":selected").val();

            if (value == 'file') {
                input.html('');
                input.html(fileHtml);
                $('.url-area').addClass('d-none');

            } else {
                input.html('');
                input.html(urlHtml);
                $('.video-area').addClass('d-none');
            }
        });


        $(document).on('keyup', '#urlVideo', function() {
            let url = $(this).val();

            if (url.indexOf('youtube') > -1) {
                LinkUrl = '';
                let realUrl = youtube(url);
                $('.url-area').removeClass('d-none');
                $('.url-area iframe').removeClass('d-none');
                $('.image-area').removeClass('offset-md-6');
                $('.url-area iframe').attr('src', realUrl);
                $('#getId').val(realUrl);
            } else if (url.indexOf('dailymotion') > -1) {
                LinkUrl = '';
                var dailyMotionId = getDailyMotionId(url)
                $('.url-area').removeClass('d-none');
                $('.url-area iframe').removeClass('d-none');
                $('.image-area').removeClass('offset-md-6');
                $('.url-area iframe').attr('src', dailyMotionId);
                $('#getId').val(dailyMotionId);
            } else if (url.indexOf('vimeo') > -1) {
                LinkUrl = '';
                let vimeoUrl = vimeo(url);
                $('.url-area').removeClass('d-none');
                $('.url-area iframe').removeClass('d-none');
                $('.url-area iframe').attr('src', vimeoUrl);
                $('.image-area').removeClass('offset-md-6');
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
            let PreviousId = $('#getSessionId').val();
            let = getDataUrl = "<?php echo e(url('admin/episode/session/get')); ?>/" + showId;
            if (showId != '') {
                $.ajax({
                    url: getDataUrl,
                    type: "get",
                    success: function(data) {
                        let SessionData =
                            '<option value="" selected><?php echo e(__('Select One')); ?></option>';
                        data.data.map(function($value) {
                            SessionData +=
                                `<option value="${$value.id}" ${$value.id == PreviousId ? 'selected' : ''}>${$value.session_title}</option>`;
                        });

                        $('#tvSession').html(SessionData);
                    }
                });
            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/movie/edit.blade.php ENDPATH**/ ?>