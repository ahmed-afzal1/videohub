<?php $__env->startSection('content'); ?>

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Social Links'), false); ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Social Links'), false); ?></li>
        </ol>
    </div>
 <div class="row">
      

<div class="col-lg-12">

      <div class="card-body">
        <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Social Links'), false); ?></h6>
            </div>
            <div class="card-body">
                <div class="gocover" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                <form id="pageForm" class="form-horizontal" action="<?php echo e(route('admin-social-update-all'), false); ?>" method="POST">  
                    <?php echo csrf_field(); ?> 
                
                <div class="form-group row">
                  <label for="facebook_link" class="col-sm-3 col-form-label"><?php echo e(__('Facebook'), false); ?></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="facebook_link" name="facebook" placeholder="<?php echo e(__('Enter Facebook Link'), false); ?>" value="<?php echo e($data->facebook, false); ?>">
                  </div>
                  <div class="col-sm-3">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="f_status" value="1" id="f_status" <?php echo e($data->f_status == 1 ? 'checked' : '', false); ?>>
                        <label class="custom-control-label" for="f_status"> </label>
                      </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="google_link" class="col-sm-3 col-form-label"><?php echo e(__('Google +'), false); ?></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="google_link" name="gplus" placeholder="<?php echo e(__('Enter Google Link'), false); ?>" value="<?php echo e($data->gplus, false); ?>">
                  </div>
                  <div class="col-sm-3">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="g_status" value="1" id="g_status" <?php echo e($data->g_status == 1 ? 'checked' : '', false); ?>>
                        <label class="custom-control-label" for="g_status"> </label>
                      </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="twitter_link" class="col-sm-3 col-form-label"><?php echo e(__('Twitter'), false); ?></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="twitter_link" name="twitter" placeholder="<?php echo e(__('Enter Twitter Link'), false); ?>" value="<?php echo e($data->twitter, false); ?>">
                  </div>
                  <div class="col-sm-3">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="t_status" value="1" id="t_status" <?php echo e($data->t_status == 1 ? 'checked' : '', false); ?>>
                        <label class="custom-control-label" for="t_status"> </label>
                      </div>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="linkedin" class="col-sm-3 col-form-label"><?php echo e(__('Linkedin'), false); ?></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="<?php echo e(__('Enter Linkedin Link'), false); ?>" value="<?php echo e($data->linkedin, false); ?>">
                  </div>
                  <div class="col-sm-3">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="l_status" value="1" id="l_status" <?php echo e($data->l_status == 1 ? 'checked' : '', false); ?>>
                        <label class="custom-control-label" for="l_status"> </label>
                      </div>
                  </div>
                </div>


                <div class="form-group row">
                  <label for="dribble_link" class="col-sm-3 col-form-label"><?php echo e(__('Dribble'), false); ?></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="linkedin" name="dribble" placeholder="<?php echo e(__('Enter Dribble Link'), false); ?>" value="<?php echo e($data->dribble, false); ?>">
                  </div>
                  <div class="col-sm-3">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="d_status" value="1" id="d_status" <?php echo e($data->d_status == 1 ? 'checked' : '', false); ?>>
                        <label class="custom-control-label" for="d_status"> </label>
                      </div>
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
</div>
  



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/socialsetting/index.blade.php ENDPATH**/ ?>