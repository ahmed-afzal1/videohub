<?php $__env->startSection('content'); ?>
      
         <nest-menu prefix="<?php echo e(menu_base_url().menu_prefix(), false); ?>"></nest-menu>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/menus/index.blade.php ENDPATH**/ ?>