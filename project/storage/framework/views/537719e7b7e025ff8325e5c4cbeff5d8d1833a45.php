<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle ?? 'Not Set Page Title', false); ?></title>
    <link rel="shortcut icon" href="<?php echo e($gs->icon, false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/font-awsome.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/selectric.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/jquery-ui.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/select2.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/summernote.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/bootstrap-iconpicker.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/colorpicker.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/stisla.css'), false); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(menu_asset('css/menu.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/components.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/custom.css'), false); ?>">

    <?php echo $__env->yieldPushContent('style'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/mode.css'), false); ?>">

</head>

<body>

    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <?php echo $__env->make('admin.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="main-sidebar">
                <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $__env->make('admin.partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->yieldContent('content'); ?>
            </div>

        </div>
    </div>




    
    <script src="<?php echo e(asset('assets/admin/js/jquery.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/popper.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/jquery-ui.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/nicescroll.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/summernote.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/select2.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/sortable.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/moment-a.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/stisla.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/colorpicker.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/jquery.uploadpreview.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/chart.min.js'), false); ?>"></script>
    <script src="<?php echo e(menu_asset('js/menu.js'), false); ?>"></script> 
    <script src="<?php echo e(asset('assets/admin/js/scripts.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/custom.js'), false); ?>"></script>
    <?php echo $__env->make('admin.partials.toaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('script'); ?>

    <script>
        $(function() {
            'use strict'
            $('.clear').on('click', function(e) {
                e.preventDefault();
                const modal = $('#cleardb');
                modal.find('form').attr('action', $(this).data('href'))
                modal.modal('show');
            })

        })
    </script>
    

</body>

</html>
<?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/layouts/admin.blade.php ENDPATH**/ ?>