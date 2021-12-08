<?php if(Session::has('success')): ?>
                  <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <?php echo e(Session::get('success')); ?>

            </div>


<?php endif; ?>

<?php if(Session::has('unsuccess')): ?>

            <div class="alert alert-danger alert-dismissible m-2 p-1">
                  <?php echo e(Session::get('unsuccess')); ?>

            </div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
<div class="alert alert-danger alert-dismissible validation">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<ul class="text-left">
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\videohub\project\resources\views/includes/form-success.blade.php ENDPATH**/ ?>