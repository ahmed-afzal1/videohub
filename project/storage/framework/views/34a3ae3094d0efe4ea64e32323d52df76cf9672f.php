<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Breadcumb Banner'), false); ?> <a href="<?php echo e(url()->previous(), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Genarel Setting'), false); ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Breadcumb Banner'), false); ?></li>
      </ol>
  </div>
</div>


<div class="row">
    <div class="col-md-12"><div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Breadcumb Banner'), false); ?></h6>
        </div>
        <div class="card-body">
            <div class="text-center image-view mb-4">
                <img class="image-fluid border p-3" src="<?php echo e($gs->breadcumb_banner ? asset('assets/images/genarel-settings/'.$gs->breadcumb_banner) : asset('assets/images/noimage.png'), false); ?>" width="500" height="250">
            </div>
            <div class="col-lg-6 col-md-12 offset-lg-3 col-sm-12">
              <div class="loader" style="background: url(<?php echo e(asset('assets/images/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
              <form id="pageForm" action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?>
                <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="breadcumb_banner" id="breadcum_banner">
                    <label class="custom-file-label" for="breadcum_banner"><?php echo e(__('Choose file'), false); ?></label>
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
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>
    $('#breadcum_banner').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.image-view img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/generalsetting/breadcumb.blade.php ENDPATH**/ ?>