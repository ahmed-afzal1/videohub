<?php $__env->startSection('content'); ?>
        <?php echo $__env->make('menu::layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <div class="cx-main-pannel">
              <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                  <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo">Laravel Menu Builder</a>
                  </div>
                  <button class="navbar-toggler show-sidebar" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                  </button>
                </div>
            </nav>
              <!-- End Navbar -->

            <div class="cx-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <nest-menu prefix="<?php echo e(menu_base_url().menu_prefix()); ?>"></nest-menu>
                        </div>
                    </div>
                 </div>
            </div>
         </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('menu::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\vendor\codexshaper\laravel-menu-builder\src/../resources/views/menus/index.blade.php ENDPATH**/ ?>