<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel Menu Builder')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="<?php echo e(menu_asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(menu_asset('css/material-dashboard.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(menu_asset('css/menu.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(menu_asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
<div id="app">
    <main class="main-menu">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
<!-- Scripts -->
<script src="<?php echo e(menu_asset('js/app.js')); ?>" ></script>
<script src="<?php echo e(menu_asset('js/bootstrap-material-design.min.js')); ?>" ></script>


<script src="<?php echo e(menu_asset('js/menu.js')); ?>" ></script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\video\videohub\project\vendor\codexshaper\laravel-menu-builder\src/../resources/views/layouts/app.blade.php ENDPATH**/ ?>