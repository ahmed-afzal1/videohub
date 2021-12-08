<?php $__env->startSection('content'); ?>


<div class="col-lg-12">
  <!-- Form Basic -->
    <div class="card-body">
      <?php echo $__env->make('includes.admin.form-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
    <form id="ModalFormSubmit" action="<?php echo e(route('admin-cat-update',$data->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="Genre"><?php echo e(__('Genre Name')); ?></label>
        <input type="text" class="form-control" name="name" value="<?php echo e($data->name); ?>" id="Genre" placeholder="<?php echo e(__('Genre Name')); ?>">
        </div>

        <div class="form-group">
          <label for="languageimage"><?php echo e(__('Genre Image')); ?></label>
          <span class="ml-3"><?php echo e(__('(support (jpeg,jpg,png))')); ?></span>
          <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image" accept="image/*">
              <label class="custom-file-label" for="languageimage"><?php echo e(__('Choose file')); ?></label>
          </div>
      </div>

    <div class="form-group ShowLanguageImage <?php echo e($data->image->image ? '' : 'd-none'); ?>">
        <img src="<?php echo e($data->image->image ? asset('assets/images/genre_image/'.$data->image->image) : ''); ?>" alt="image" width="150">
    </div>
 

        <div class="form-group">
          <label for="slug"><?php echo e(__('Slug')); ?></label>
        <input type="text" class="form-control" name="slug" id="slug" value="<?php echo e($data->slug); ?>" placeholder="<?php echo e(__('Slug')); ?>">
        </div>
        <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
      </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/genre/edit.blade.php ENDPATH**/ ?>