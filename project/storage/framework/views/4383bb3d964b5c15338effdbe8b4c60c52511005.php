<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Website Contents'), false); ?> <a href="<?php echo e(url()->previous(), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Genarel Setting'), false); ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Website Contents'), false); ?></li>
      </ol>
  </div>

  <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Website Contents'), false); ?></h6>
      </div>
      <div class="card-body">
        <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
          <form id="pageForm" action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?>
             <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="form-group row">
                  <label for="title" class="col-sm-3 col-form-label"><?php echo e(__('Website Title'), false); ?></label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" name="website_title" id="title" placeholder="<?php echo e(__('Website Title'), false); ?>" value="<?php echo e($gs->website_title, false); ?>">
                  </div>
              </div>
              <div class="form-group row">
                  <label for="theme_color" class="col-sm-3 col-form-label"><?php echo e(__('Theme Color'), false); ?></label>
                  <div class="col-sm-9 input-group colorpicker-component cp">
                      <input type="text" class="form-control cp colorpicker-element" id="theme_color" name="theme_color" placeholder="<?php echo e(__('Theme Color'), false); ?>" value="<?php echo e($gs->theme_color, false); ?>">
                      <span class="input-group-addon"><i></i></span>
                  </div>
              </div>

              <div class="form-group row mb-5">
                  <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Secendary Color'), false); ?></label>
                  <div class="col-sm-9 input-group colorpicker-component cp">
                      <input type="text" class="form-control cp colorpicker-element" id="secendary_color" name="secendary_color" placeholder="<?php echo e(__('Secendary Color'), false); ?>" value="<?php echo e($gs->secendary_color, false); ?>">
                      <span class="input-group-addon"><i></i></span>
                  </div>
              </div>

              <div class="form-group row mt-5">
                  <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Tawk.to'), false); ?></label>
                  <div class="col-sm-9">
                      <div class="btn-group mb-1">
                          <button type="button" class="btn dropdown-toggle <?php echo e($gs->is_tawk == 1 ? 'btn-success' : 'btn-danger', false); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <?php echo e($gs->is_tawk == 1 ? __('Activated') : __('Deactivated'), false); ?>

                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,is_tawk'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,is_tawk'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="form-group row mb-5">
                  <label for="tawk_id" class="col-sm-3 col-form-label"><?php echo e(__('Tawk.to ID'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="tawk_id" name="tawk_id" placeholder="<?php echo e(__('Tawk.to ID'), false); ?>" value="<?php echo e($gs->tawk_id, false); ?>">
                  </div>
              </div>

              <div class="form-group row mt-5">
                  <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Sign Up Verification'), false); ?></label>
                  <div class="col-sm-9">
                      <div class="btn-group mb-1">
                          <button type="button" class="btn <?php echo e($gs->is_verification == 1 ? 'btn-success' : 'btn-danger', false); ?> dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e($gs->is_verification == 1 ? __('Activated') : __('Deactivated'), false); ?>

                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,is_verification'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,is_verification'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                          </div>
                      </div>
                  </div>
              </div>


              <div class="form-group row mt-5">
                  <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Sign Up Verification'), false); ?></label>
                  <div class="col-sm-9">
                      <div class="btn-group mb-1">
                          <button type="button" class="btn <?php echo e($gs->is_disqus == 1 ? 'btn-success' : 'btn-danger', false); ?> dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e($gs->is_disqus == 1 ? __('Activated') : __('Deactivated'), false); ?>

                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,is_disqus'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,is_disqus'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                          </div>
                      </div>
                  </div>
              </div>

             
              <div class="form-group row">
                  <label for="disqus" class="col-sm-3 col-form-label"><?php echo e(__('Disqus Website Short Name'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="disqus" name="disqus" placeholder="<?php echo e(__('Disqus Website Short Name'), false); ?>" value="<?php echo e($gs->disqus, false); ?>">
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

<?php $__env->startSection('script'); ?>
    <script>
      $('.cp').colorpicker();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/generalsetting/websitecontent.blade.php ENDPATH**/ ?>