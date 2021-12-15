<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Create Movie')); ?>

                <a href="<?php echo e(url()->previous()); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin-episode-index')); ?>"><?php echo e(__('Movies')); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Create Movie')); ?></li>
            </ol>
        </div>
       
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="row py-3">
                        <div class="col-md-6 text-center video-area d-none">
                            <video src="https://www.youtube.com/" width="600" height="360" controls></video>
                        </div>
                        <div class="col-md-6 text-center url-area d-none">
                            <iframe width="100%" height="360" src="">
                            </iframe>
                        </div>

                        <div class="col-md-6 image-area d-none text-center">
                            <img src="" class="img-fluid" width="400" height="360" alt="image">
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('admin.movie.store')); ?>" enctype="multipart/form-data" method="POST"
                            id="form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="" id="is_video" name="is_video">

                            <div class="form-group">
                                <label for="title"><?php echo e(__('Video Type')); ?></label>
                                <select class="form-control form-control-sm  mb-3" name="video_type" id="video_type">
                                    <option value="file"><?php echo e(__('File')); ?></option>
                                    <option value="url"><?php echo e(__('Url')); ?></option>
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
                                            <input type="hidden" name="previous_video" id="previous_video" value="">
                                            <label class="custom-file-label" for="video"><?php echo e(__('Choose file')); ?></label>
                                        </div>
                                        <div class="progress mt-3 d-none">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="" name="video" id="getId" value="">
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
                                <div class="form-group col-md-6 col-md-6">
                                    <label for="title"><?php echo e(__('Movie Title')); ?></label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="<?php echo e(__('Movie Title')); ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title"><?php echo e(__('Movie Access')); ?></label>
                                    <select class="form-control  mb-3" name="access" >
                                        <option value="free"><?php echo e(__('Free')); ?></option>
                                        <option value="premium"><?php echo e(__('Premium')); ?></option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="title"><?php echo e(__('Movie Category')); ?></label>
                                    <select class="form-control select-2 mb-3" name="category[]" multiple>
                                     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="date"><?php echo e(__('Realse Date')); ?></label>
                                    <input type="text" class="form-control date" name="relase_date"
                                        placeholder="<?php echo e(__('Realse Date')); ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="duration"><?php echo e(__('Duration')); ?></label>
                                    <input type="text" class="form-control" name="duration"
                                        placeholder="<?php echo e(__('1 hour 30 min')); ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="tag"><?php echo e(__('Tag')); ?></label>
                                    <input type="text" class="form-control" id="tag" name="tag"
                                        placeholder="<?php echo e(__('Tag')); ?>">
                                </div>

                               
                                <div class="form-group col-md-6">
                                    <label for="producer"><?php echo e(__('Producer')); ?></label>
                                    <select class="form-control  mb-3 select-2" id="producer" name="producer[]"
                                        multiple="multiple" multiple="multiple">
                                        <?php $__currentLoopData = $cast_crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="directors"><?php echo e(__('Directors')); ?></label>
                                    <select class="form-control  mb-3 select-2" id="directors" name="directors[]"
                                        multiple="multiple" multiple="multiple">
                                        <?php $__currentLoopData = $cast_crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="cast"><?php echo e(__('Cast')); ?></label>
                                    <select class="form-control  mb-3 select-2" id="Cast" name="cast[]" multiple="multiple"
                                        multiple="multiple">
                                        <?php $__currentLoopData = $cast_crews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                 <div class="form-group col-md-12">
                                    <label for="description"><?php echo e(__('Description')); ?></label>
                                    <textarea id="area1" class="form-control " name="description"
                                        placeholder="<?php echo e(__('Description')); ?>"></textarea>
                                </div>
                            </div>


                            <button type="submit" id="insertButton" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('plugin'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

    <script>
        $('.date').datepicker({});
        $('#tag').tagify();
        $('.select-2').select2();

        var input = $('.VideoInsert');

        var fileHtml = `<label for="video"><?php echo e(__('Video File')); ?></label>
                <span class="ml-3"><?php echo e(__('(support (mp4,webm,avi,flv,mkv))')); ?></span>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="video_name" id="video" value="" data-href="<?php echo e(route('admin.episode.processing')); ?>">
                    <input type="hidden" name="previous_video" id="previous_video" value="">
                    <label class="custom-file-label" for="video"><?php echo e(__('Choose file')); ?></label>
                </div>
                <div class="progress mt-3 d-none">
                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>`;


        var urlHtml =
            `<label for="url"><?php echo e(__('Video Url')); ?></label>
                <input type="text" class="form-control form-control-sm" style="padding:19px .5rem;"  value="" id="urlVideo" placeholder="<?php echo e(__('Video Url')); ?>">`;




        $('#video_type').on('change', function() {
            var value = $(this).val();
            if (value == 'file') {
                input.html('');
                input.html(fileHtml);
                $('.url-area').addClass('d-none');
                $('.image-area').addClass('offset-md-6');
            } else {
                input.html('');
                $('.image-area').addClass('offset-md-6');
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
                                `<option value="${$value.id}">${$value.session_title}</option>`;
                        });

                        $('#tvSession').html(SessionData);
                    }
                });
            }
        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/movie/create.blade.php ENDPATH**/ ?>