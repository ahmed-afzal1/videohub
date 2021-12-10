<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset('assets/admin/img/logo/GO-logo.jpg')); ?> " rel="icon">
    
    <title>GO - Dashboard</title>
    <?php echo $__env->yieldPushContent('style'); ?>
<style>

        /*color picker Start*/
    .colorpicker-alpha {display:none !important;}
    .colorpicker{ min-width:128px !important;}
    .colorpicker-color {display:none !important;}
/*color picker End*/

span.input-group-addon {
    position: absolute;
    right: 10px;
    top: 0;
    background: #ddd;
    padding: 7px;
    height: 100%;
    width: 40px;
    text-align: center;
    line-height: 33px;
    z-index: 9999;
}

</style>
    <?php if ($__env->exists('admin.partials.style')) echo $__env->make('admin.partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>

</head>

<body id="page-top">
<div id="wrapper">
<!-- Sidebar -->
<?php if ($__env->exists('admin.partials.sidebar')) echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Sidebar -->

<div id="content-wrapper" class="d-flex flex-column">

        <!-- TopBar -->
        <?php if ($__env->exists('admin.partials.topbar')) echo $__env->make('admin.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!---Container Fluid-->
    
    <!-- Footer -->
    <?php if ($__env->exists('admin.partials.footer')) echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<?php if ($__env->exists('admin.partials.scripts')) echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if ($__env->exists('admin.partials.toaster')) echo $__env->make('admin.partials.toaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldPushContent('script'); ?>

</body>

</html>
<?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/layouts/admin.blade.php ENDPATH**/ ?>