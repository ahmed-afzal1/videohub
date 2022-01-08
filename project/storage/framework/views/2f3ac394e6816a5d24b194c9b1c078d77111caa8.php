<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Website Footer'), false); ?> <a href="<?php echo e(url()->previous(), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Genarel Setting'), false); ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Website Footer'), false); ?></li>
      </ol>
  </div>


  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Website Footer'), false); ?></h6>
    </div>
    <div class="card-body">

      <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form id="pageForm" action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
         <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="form-group row">
          <label for="footer_text" class="col-sm-3 col-form-label"><?php echo e(__('Footer Text'), false); ?> *</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="footer_text" name="footer_text" rows="5" placeholder="<?php echo e(__('Footer Text'), false); ?>"><?php echo e($gs->footer_text, false); ?></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label for="copy_right_text" class="col-sm-3 col-form-label"><?php echo e(__('Copyright Text'), false); ?> *</label>
          <div class="col-sm-9">
            <textarea class="form-control " name="copy_right_text" id="copy_right_text" rows="5"><?php echo e($gs->copy_right_text, false); ?></textarea>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-3"></div>
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/generalsetting/footer.blade.php ENDPATH**/ ?>