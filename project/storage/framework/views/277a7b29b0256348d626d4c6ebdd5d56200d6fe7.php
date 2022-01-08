<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Error Page'), false); ?> <a href="<?php echo e(url()->previous(), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Genarel Setting'), false); ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Error Page'), false); ?></li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Error Page'), false); ?></h6>
      </div>
      <div class="card-body">
         
          <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form id="pageForm" action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?>
             <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="form-group row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="image-view-error mb-4">
                        <img class="image-fluid border p-3" src="<?php echo e($gs->error_photo ? asset('assets/images/genarel-settings/'.$gs->error_photo) : asset('assets/images/noimage.png'), false); ?>" width="550" height="280">
                    </div>
                </div>
            </div>

              <div class="form-group row">
                  <label for="error-image" class="col-sm-3 col-form-label"><?php echo e(__('Upload Image'), false); ?> *</label>
                  <div class="col-sm-9">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="error_photo" id="error-image">
                          <label class="custom-file-label" for="error-image"><?php echo e(__('Upload file'), false); ?></label>
                      </div>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="error_title" class="col-sm-3 col-form-label"><?php echo e(__('Error Title'), false); ?> *</label>
                  <div class="col-sm-9">
                      <textarea class="form-control " name="error_title" id="error_title" rows="5"><?php echo $gs->error_text; ?></textarea>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="error_text" class="col-sm-3 col-form-label"><?php echo e(__('Error Text'), false); ?> *</label>
                  <div class="col-sm-9">
                      <textarea class="form-control " name="error_text" id="error_text" rows="5"><?php echo $gs->error_text; ?></textarea>
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-9">
                      <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $('#error-image').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.image-view-error img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/generalsetting/error.blade.php ENDPATH**/ ?>