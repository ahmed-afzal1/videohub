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
        <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form  action="<?php echo e(route('admin-show-update',$data->id)); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
              <label for="showname"><?php echo e(__('Show Name')); ?></label>
            <input type="text" class="form-control" name="show_name" id="showname" placeholder="<?php echo e(__('Show Name')); ?>" value="<?php echo e($data->show_name); ?>">
            </div>
  
  
              <div class="form-group">
                  <label for="languageimage"><?php echo e(__('Image Thumbnail')); ?></label>
                  <span class="ml-3"><?php echo e(__('(support (jpeg,jpg,png))')); ?></span>
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                      <input type="hidden" value="" id="image_file">
                      <label class="custom-file-label" for="languageimage"><?php echo e(__('Choose file')); ?></label>
                  </div>
              </div>
  
              <div class="form-group ShowLanguageImage  <?php echo e($data->image->image != null ? '' : 'd-none'); ?>">
                <img src="<?php echo e($data->image->image != null ? asset('assets/images/'.$data->image->image) : ''); ?>" alt="image" width="150">
              </div>
  
              <div class="form-group">
                <label for="date"><?php echo e(__('Realse Date')); ?></label>
              <input type="text" class="form-control date" name="relase_date" placeholder="<?php echo e(__('Realse Date')); ?>" value="<?php echo e($data->relase_date); ?>">
              </div>
  
              <div class="form-group">
                <label for="title"><?php echo e(__('Show Access')); ?></label>
                <select class="form-control  mb-3" name="access" id="title">
                    <option value="free" <?php echo e($data->access == 'free' ? 'selected':''); ?>><?php echo e(__('Free')); ?></option>
                    <option value="premium"<?php echo e($data->access == 'premium' ? 'selected':''); ?>><?php echo e(__('Premium')); ?></option>
                </select>
            </div>
  
              <div class="form-group">
                  <label for="area1"><?php echo e(__('Description')); ?></label>
                   <textarea id="area1" class="form-control " name="description"><?php echo $data->description; ?></textarea>
              </div>
              
            <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
          </form>
      </div>
  </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/show/edit.blade.php ENDPATH**/ ?>