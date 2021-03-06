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
          <form id="pageForm" action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST"><?php echo csrf_field(); ?>
             <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <div class="form-group row ">
                  <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Stripe'), false); ?></label>
                  <div class="col-sm-9">
                      <div class="btn-group mb-1">
                          <button type="button" class="btn dropdown-toggle <?php echo e($gs->stripe_check == 1 ? 'btn-success' : 'btn-danger', false); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <?php echo e($gs->stripe_check == 1 ? __('Activated') : __('Deactivated'), false); ?>

                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,stripe_check'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                              <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,stripe_check'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="form-group row mb-3">
                  <label for="stripe_key" class="col-sm-3 col-form-label"><?php echo e(__('Stripe Key'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="stripe_key" name="stripe_key" placeholder="<?php echo e(__('Stripe Key'), false); ?>" value="<?php echo e($gs->stripe_key, false); ?>">
                  </div>
              </div>

              <div class="form-group row mb-3">
                  <label for="stripe_secret" class="col-sm-3 col-form-label"><?php echo e(__('Stripe Secret'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="stripe_secret" name="stripe_secret" placeholder="<?php echo e(__('Stripe Secret'), false); ?>" value="<?php echo e($gs->stripe_secret, false); ?>">
                  </div>
              </div>

              <hr>


              <div class="form-group row mt-3">
                <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Paypal'), false); ?></label>
                <div class="col-sm-9">
                    <div class="btn-group mb-1">
                        <button type="button" class="btn dropdown-toggle <?php echo e($gs->paypal_check == 1 ? 'btn-success' : 'btn-danger', false); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo e($gs->paypal_check == 1 ? __('Activated') : __('Deactivated'), false); ?>

                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                            <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,paypal_check'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                            <a class="dropdown-item social-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,paypal_check'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                        </div>
                    </div>
                </div>
            </div>


              <div class="form-group row">
                <label for="secendary_color" class="col-sm-3 col-form-label"><?php echo e(__('Paypal Sandbox'), false); ?></label>
                <div class="col-sm-9">
                    <div class="btn-group mb-1">
                        <button type="button" class="btn dropdown-toggle <?php echo e($gs->paypal_sendbox_check == 1 ? 'btn-success' : 'btn-danger', false); ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo e($gs->paypal_sendbox_check == 1 ? __('Activated') : __('Deactivated'), false); ?>

                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                            <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','1,paypal_sendbox_check'), false); ?>"><?php echo e(__('Activated'), false); ?></a>
                            <a class="dropdown-item gs-status-check cursor-pointer" data-href="<?php echo e(route('admin.gs.status','0,paypal_sendbox_check'), false); ?>"><?php echo e(__('Deactivated'), false); ?></a>
                        </div>
                    </div>
                </div>
            </div>

              <div class="form-group row mb-3">
                  <label for="paypal_client_id" class="col-sm-3 col-form-label"><?php echo e(__('Paypal Client Id'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="paypal_client_id" name="paypal_client_id" placeholder="<?php echo e(__('Paypal Client Id'), false); ?>" value="<?php echo e($gs->paypal_client_id, false); ?>">
                  </div>
              </div>


              <div class="form-group row mb-3">
                  <label for="paypal_client_secret" class="col-sm-3 col-form-label"><?php echo e(__('Paypal Client Secret'), false); ?></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="paypal_client_secret" name="paypal_client_secret" placeholder="<?php echo e(__('Paypal Client Secret'), false); ?>" value="<?php echo e($gs->paypal_client_secret, false); ?>">
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/generalsetting/p_information.blade.php ENDPATH**/ ?>