<link rel="stylesheet" href="https://cdn.tutorialjinni.com/izitoast/1.4.0/css/iziToast.min.css">
<script src="https://cdn.tutorialjinni.com/izitoast/1.4.0/js/iziToast.js"></script>
<?php if(session()->has('notify')): ?>
    <?php $__currentLoopData = session('notify'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script> 
            "use strict";
            iziToast.<?php echo e($msg[0], false); ?>({message:"<?php echo e(__($msg[1]), false); ?>", position: "topRight"}); 
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if($errors->any()): ?>
    <?php
        $collection = collect($errors->all());
        $errors = $collection->unique();
    ?>

    <script>
        "use strict";
        <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        iziToast.error({
            message: '<?php echo e(__($error), false); ?>',
            position: "topRight"
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>

<?php endif; ?>
<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/partials/toaster.blade.php ENDPATH**/ ?>