

<div class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('admin.dashboard')); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->header_logo)); ?>" alt="" >
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo e($gs->website_title); ?></div>
    </a>



    <?php if(Auth::guard('admin')->user()->IsSuper()): ?>
        <?php echo $__env->make('admin.load.roles.super', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('admin.load.roles.normal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <?php endif; ?>

</div><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>