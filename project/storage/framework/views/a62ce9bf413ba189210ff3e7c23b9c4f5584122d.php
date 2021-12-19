<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">


        <div class="row">
            <div class="col-lg-12">

                <div class="card mb-4">
                    <div class="card-body">
                        <form action="" method="post">

                            <?php echo csrf_field(); ?>


                            <div class="form-group">
                                <textarea class="form-control" rows="10" name="css" id="customCss"><?php echo e($content, false); ?></textarea>

                            </div>


                            <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>


                        </form>
                    </div>
                </div>

            </div>
        </div>



    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('style'); ?>

        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/codemirror.css'), false); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/showhint.css'), false); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/monokai.css'), false); ?>">

    <?php $__env->stopPush(); ?>


    <?php $__env->startPush('script'); ?>

        <script src="<?php echo e(asset('assets/admin/js/codemirror.js'), false); ?>"></script>
        <script src="<?php echo e(asset('assets/admin/js/sublime.js'), false); ?>"></script>
        <script src="<?php echo e(asset('assets/admin/js/css.js'), false); ?>"></script>
        <script src="<?php echo e(asset('assets/admin/js/showhint.js'), false); ?>"></script>
        <script src="<?php echo e(asset('assets/admin/js/csshint.js'), false); ?>"></script>

    <?php $__env->stopPush(); ?>


    <?php $__env->startPush('script'); ?>

        <script>
            "use strict";

            var editor = CodeMirror.fromTextArea(document.getElementById("customCss"), {
                lineNumbers: true,
                mode: "text/css",
                theme: "monokai",
                keyMap: "sublime",
                autoCloseBrackets: true,
                matchBrackets: true,
                showCursorWhenSelecting: true,
                matchBrackets: true,
               
            });
        </script>

    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/css/index.blade.php ENDPATH**/ ?>