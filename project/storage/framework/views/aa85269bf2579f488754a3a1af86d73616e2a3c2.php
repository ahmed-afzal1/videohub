<?php $__env->startSection('content'); ?>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Update')); ?> <a href="<?php echo e(url()->previous()); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a></h1>    
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboaard')); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Update')); ?></li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Update')); ?></h6>
      </div>
      <div class="card-body">

        <div class="loader" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form action="<?php echo e(route('admin-cast-crew-update',$castAndCrew->id)); ?>" enctype="multipart/form-data" method="POST">
          <?php echo csrf_field(); ?>
        
          <div class="form-group">
            <label for="name"><?php echo e(__('Name')); ?></label>
            <input type="text" class="form-control" name="name" value="<?php echo e($castAndCrew->name); ?>" id="name" placeholder="<?php echo e(__('Name')); ?>">
          </div>
    
            <div class="form-group">
              <label for="languageimage"><?php echo e(__('Image')); ?></label>
              <span class="ml-3"><?php echo e(__('(support (jpeg,jpg,png))')); ?></span>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="image" accept="image/*">
                  <label class="custom-file-label" for="languageimage"><?php echo e(__('Choose file')); ?></label>
              </div>
          </div>
    
        <div class="form-group ShowLanguageImage <?php echo e($castAndCrew->image->image ? '' : 'd-none'); ?>">
            <img src="<?php echo e($castAndCrew->image->image ? asset('assets/images/'.$castAndCrew->image->image) : ''); ?>" alt="image" width="150">
        </div>
     
    
          <div class="form-group">
            <label for="bio"><?php echo e(__('Bio')); ?></label>
            <textarea name="bio" id="bio" class="form-control"  rows="5" placeholder="<?php echo e(__('Enter Bio')); ?>"><?php echo e($castAndCrew->bio); ?></textarea>
          </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/cast_crew/edit.blade.php ENDPATH**/ ?>