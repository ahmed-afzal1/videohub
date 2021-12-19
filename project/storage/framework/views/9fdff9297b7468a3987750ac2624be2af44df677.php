<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Payment Information'), false); ?> <a href="<?php echo e(url()->previous(), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>    
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Payment Information'), false); ?></li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Payment Information'), false); ?></h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form id="pageForm" action="<?php echo e(route('admin-currency-update',$data->id), false); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
             <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <div class="form-group row mb-3">
                  <label for="name" class="col-sm-3 col-form-label"><?php echo e(__('Currency Name'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo e(__('Currency Name'), false); ?>" value="<?php echo e($data->name, false); ?>">
                  </div>
              </div>

              <div class="form-group row mb-3">
                  <label for="sign" class="col-sm-3 col-form-label"><?php echo e(__('Currency Sign'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="sign" name="sign" placeholder="<?php echo e(__('Currency Sign'), false); ?>" value="<?php echo e($data->sign, false); ?>">
                  </div>
              </div>

            
              <div class="form-group row mb-3">
                  <label for="value" class="col-sm-3 col-form-label"><?php echo e(__('Currency Value'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="value" name="value" placeholder="<?php echo e(__('Currency Value'), false); ?>" value="<?php echo e($data->value, false); ?>">
                  </div>
              </div>


              <div class="form-group row mb-3">
                  <label for="currency_format" class="col-sm-3 col-form-label"><?php echo e(__('Currency Format'), false); ?></label>
                  <div class="col-sm-9">
                      <select name="currency_format" class="form-control form-control-sm" id="currency_format">
                        <option value="0" <?php echo e($data->currency_format == 0 ? 'selected' : '', false); ?>><?php echo e(__('Before Price'), false); ?></option>
                        <option value="1" <?php echo e($data->currency_format == 1 ? 'selected' : '', false); ?> ><?php echo e(__('After Price'), false); ?></option>
                      </select>
                  </div>
              </div>

          
              <div class="form-group row">
                  <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/generalsetting/currencies.blade.php ENDPATH**/ ?>