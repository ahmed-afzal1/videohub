<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
 
  <div class="row">
      <div class="col-md-6">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Website Loader'), false); ?></h6>
              </div>

              <div class="card-body">
                
                <form action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?> 
                 
                  <div class="btn-group mb-3">
                      <button type="button" class="btn dropdown-toggle <?php echo e($gs->is_admin_loader == 1 ? 'btn-success' : 'btn-danger', false); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo e($gs->is_admin_loader == 1 ? __('Activated') : __('Deactivated'), false); ?>

                      </button>
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,is_admin_loader'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,is_admin_loader'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                      </div>
                  </div>
                    <div class="text-center website-loader mb-4">
                      <img class="img-profile" src="<?php echo e($gs->website_loader ? asset('assets/images/genarel-settings/'.$gs->website_loader) : asset('assets/images/noimage.png'), false); ?>" style="max-width: 100px">
                    </div>
                      <div class="form-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="website-loader" name="website_loader">
                              <label class="custom-file-label" for="website-loader"><?php echo e(__('Choose file'), false); ?></label>
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

      <div class="col-md-6">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Admin Loader'), false); ?></h6>
              </div>
              <div class="card-body">
                <form id="pageForm" action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?>
                  <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <div class="btn-group mb-3">
                      <button type="button" class="btn dropdown-toggle <?php echo e($gs->is_website_loader == 1 ? 'btn-success' : 'btn-danger', false); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo e($gs->is_website_loader == 1 ? __('Activated') : __('Deactivated'), false); ?>

                      </button>
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,is_website_loader'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                          <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,is_website_loader'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                      </div>
                  </div>
                  
              
                    <div class="text-center admin-loader mb-4">
                        <img class="img-profile" src="<?php echo e($gs->admin_loader ? asset('assets/images/genarel-settings/'.$gs->admin_loader) : asset('assets/images/noimage.png'), false); ?>" style="max-width: 100px;">
                    </div>
                      <div class="form-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="admin-loader" name="admin_loader">
                              <label class="custom-file-label" for="admin-loader"><?php echo e(__('Choose file'), false); ?></label>
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
    $('#website-loader').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.website-loader img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })

    $('#admin-loader').on('change',function(){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.admin-loader img').attr('src',e.target.result);
    };
    reader.readAsDataURL(file);
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/generalsetting/loader.blade.php ENDPATH**/ ?>