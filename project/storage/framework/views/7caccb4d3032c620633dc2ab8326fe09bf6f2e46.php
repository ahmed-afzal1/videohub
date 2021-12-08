<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Logo')); ?> <a href="<?php echo e(url()->previous()); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboaard')); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Genarel Setting')); ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Logo')); ?></li>
      </ol>
  </div>
  <div class="row">
    <div class="col-md-6"><div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Header Logo')); ?></h6>
        </div>
        <div class="card-body">
            <div class="text-center image-view-header mb-4">
                <img class="img-profile" src="<?php echo e($gs->header_logo ? asset('assets/images/genarel-settings/'.$gs->header_logo) : asset('assets/images/noimage.png')); ?>" style="max-width: 100px">
            </div>
            <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form id="pageForm" action="<?php echo e(route('admin-gs-update')); ?>" enctype="text/plain" method="POST"><?php echo csrf_field(); ?>
            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="header-logo" name="header_logo">
                    <label class="custom-file-label" for="header-logo"><?php echo e(__('Choose file')); ?></label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6"><div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Footer Logo')); ?></h6>
        </div>
        <div class="card-body">
            <div class="text-center image-view-footer mb-4">
                <img class="img-profile" src="<?php echo e($gs->footer_logo ? asset('assets/images/genarel-settings/'.$gs->footer_logo) : asset('assets/images/noimage.png')); ?>" style="max-width: 100px;">
            </div>
            <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
            <form id="pageForm" action="<?php echo e(route('admin-gs-update')); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?>
              <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="footer-logo" name="footer_logo">
                    <label class="custom-file-label" for="footer-logo"><?php echo e(__('Choose file')); ?></label>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
    $('#header-logo').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.image-view-header img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })

    $('#footer-logo').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.image-view-footer img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/generalsetting/logo.blade.php ENDPATH**/ ?>