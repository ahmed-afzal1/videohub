<?php $__env->startSection('content'); ?>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Create')); ?> <a href="<?php echo e(url()->previous()); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a></h1>    
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboaard')); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Create')); ?></li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Create')); ?></h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form action="<?php echo e(route('admin-session-store')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
              <label for="session_title"><?php echo e(__('Season Title')); ?></label>
              <input type="text" class="form-control" name="session_title" value="" id="session_title" placeholder="<?php echo e(__('Session Title')); ?>">
            </div>
  
            <div class="form-group">
              <label for="show_id"><?php echo e(__('Select Show')); ?></label>
              <select class="form-control  mb-3" id="show_id" name="show_id">
                <option value="" selected><?php echo e(__('-select one-')); ?></option>
                  <?php $__currentLoopData = $tvshows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($item->id); ?>"><?php echo e($item->show_name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
  
              <div class="form-group">
                  <label for="image"><?php echo e(__('Session Thumbnail')); ?></label>
                  <span class="ml-3"><?php echo e(__('(support (jpeg,jpg,png))')); ?></span>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                      <label class="custom-file-label" for="image"><?php echo e(__('Choose file')); ?></label>
                  </div>
              </div>
  
              <div class="form-group ShowLanguageImage d-none mb-3">
                <img src="" alt="image" width="150">
              </div>
  
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
          </form>
      </div>
  </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/session/create.blade.php ENDPATH**/ ?>