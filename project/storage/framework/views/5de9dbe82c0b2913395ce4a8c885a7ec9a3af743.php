<ul>

<?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <li>
       <?php echo e($child->menus); ?>

       <button class="btn btn-primary delete" data-id="<?php echo e($child->id); ?>"><i class="fa fa-trash"></i></button>
   <?php if(count($child->childs)): ?>
            <?php echo $__env->make('admin.menu.manageChild',['childs' => $child->childs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
   </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/menu/manageChild.blade.php ENDPATH**/ ?>