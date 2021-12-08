<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Update')); ?> <a href="<?php echo e(route('admin-subscription-plan-index')); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a></h1>
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
      <form action="<?php echo e(route('admin-subscription-plan-update',$data->id)); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <div class="form-group">
            <label for="plan_name"><?php echo e(__('Plan Name')); ?></label>
            <input type="text" class="form-control" name="plan_name" value="<?php echo e($data->plan_name); ?>" required id="plan_name" placeholder="<?php echo e(__('Plan Name')); ?>" >
         </div>
         <div class="form-group">
            <label for="price"><?php echo e(__('Plan Price')); ?></label>
            <input type="text" class="form-control" name="price" value="<?php echo e($data->price); ?>" required id="price" placeholder="<?php echo e(__('Plan Price')); ?>" >
         </div>
         <div class="form-group">
            <label for="description"><?php echo e(__('Description')); ?></label>
            <textarea id="area1" class="form-control " name="description" placeholder="<?php echo e(__('Description')); ?>"><?php echo e($data->description); ?></textarea>
         </div>
         <?php
             $feature_value = json_decode($data->feature_value,true)
         ?>
         <div id="feature_section">
          
         <?php $__currentLoopData = json_decode($data->feature_key,true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         <div class="feature-area position-relative">
          <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
          <div class="row">
             <div class="col-sm-6 col-md-6 col-6">
                <div class="form-group">
                   <input type="text" class="form-control" name="feature_key[]" placeholder="<?php echo e(__('Enter Feature Name')); ?>" value="<?php echo e($item); ?>">
                </div>
             </div>
             <div class="col-sm-6 col-md-6 col-6">
                <div class="form-group">
                   <select class="form-control  mb-3" name="feature_value[]">
                      <option value="yes" <?php echo e($feature_value[$key] == 'yes' ? 'selected' : ''); ?>><?php echo e(__('Yes')); ?></option>
                      <option value="no" <?php echo e($feature_value[$key] == 'no' ? 'selected' : ''); ?>><?php echo e(__('No')); ?></option>
                   </select>
                </div>
             </div>
          </div>
        </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
         <div class="more-field text-center">
          <button type="button" class="btn btn-info" id="add_more_feature"><?php echo e(__('Add More')); ?></button>
      </div>
         <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
      </form>
   </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/subscription_plan/edit.blade.php ENDPATH**/ ?>