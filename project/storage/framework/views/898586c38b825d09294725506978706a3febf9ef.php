<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Google Login'), false); ?> <a href="<?php echo e(url()->previous(), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Social Settings'), false); ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Google Login'), false); ?></li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Google Login'), false); ?></h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form id="pageForm" action="<?php echo e(route('admin-social-update-all'), false); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?>
             <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <div class="form-group row mt-5">
                  <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Google Login'), false); ?></label>
                  <div class="col-sm-9">
                      <div class="btn-group mb-1">
                          <button type="button" class="btn dropdown-toggle <?php echo e($data->g_check == 1 ? 'btn-success' : 'btn-danger', false); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <?php echo e($data->g_check == 1 ? __('Activated') : __('Deactivated'), false); ?>

                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                              <a class="dropdown-item social-status-check cursor-pointer" data-href="<?php echo e(route('admin-social-googleup',1), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                              <a class="dropdown-item social-status-check cursor-pointer" data-href="<?php echo e(route('admin-social-googleup',0), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="form-group row mb-5">
                  <label for="gclient_id" class="col-sm-3 col-form-label"><?php echo e(__('App ID'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="gclient_id" name="gclient_id" placeholder="<?php echo e(__('App ID'), false); ?>" value="<?php echo e($data->gclient_id, false); ?>">
                  </div>
              </div>

              <div class="form-group row mb-5">
                  <label for="gclient_secret" class="col-sm-3 col-form-label"><?php echo e(__('App Secret'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="gclient_secret" name="gclient_secret" placeholder="<?php echo e(__('App Secret'), false); ?>" value="<?php echo e($data->gclient_secret, false); ?>">
                  </div>
              </div>


              <div class="form-group row mb-5">
                  <label for="website_url" class="col-sm-3 col-form-label"><?php echo e(__('Website URL'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="website_url"  placeholder="<?php echo e(__('Website URL'), false); ?>" value="<?php echo e(url('/'), false); ?>">
                  </div>
              </div>
            
              <div class="form-group row mb-5">
                  <label for="gredirect" class="col-sm-3 col-form-label"><?php echo e(__('Redirect URL'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="gredirect" name="gredirect" placeholder="<?php echo e(__('Redirect URL'), false); ?>" value="<?php echo e($data->gredirect, false); ?>">
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



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/socialsetting/google.blade.php ENDPATH**/ ?>