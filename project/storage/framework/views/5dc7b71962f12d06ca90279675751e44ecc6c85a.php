 

 <?php $__env->startSection('contents'); ?>
 <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
      <div class="container">
        <div class="breadcrumb-page">
          <ul>
            <li><a href="#">Home</a></li>
            <li>Setting</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- breadcrumb area end here  -->

    <div class="settings-page account-info-area section-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="settings-page-title"><?php echo e(__('Setting')); ?></h1>
          </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-xl-3">
              <div class="settings-left-part">
                <ul>
                  <li><a href="#" class="active"><span><i class="far fa-user"></i></span><?php echo e(__('Account info')); ?></a></li>
                  <li><a href="#"><span><i class="fas fa-wallet"></i></span><?php echo e(__('Billing & payment')); ?></a></li>
                  <li><a href="#"><span><i class="fas fa-people-arrows"></i></span><?php echo e(__('Referrals')); ?></a></li>
                  <li><a href="#"><span><i class="fas fa-atom"></i></span><?php echo e(__('Promocode')); ?></a></li>
                  <li><a href="#"><span><i class="fas fa-tablet-alt"></i></span><?php echo e(__('Device management')); ?></a></li>
                  <li><a href="#"><span><i class="far fa-file-alt"></i></span><?php echo e(__('Parental controls')); ?></a></li>
                </ul>
              </div>
              
            </div>

            <div class="col-lg-8 col-xl-9">
              <div class="settings-right-part">
                
                <div class="settings-title-wrap d-flex justify-content-between align-items-start">
                  <h3 class="settings-form-title"><?php echo e(__('Account info')); ?></h3>
                </div>

                <form method="post" action="<?php echo e(route('user.profile.update')); ?>">
                <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <label for="name" class="form-label"><?php echo e(__('Your name')); ?> *</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo e(auth()->user()->name); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label"><?php echo e(__('Email address')); ?> *</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo e(auth()->user()->email); ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label"><?php echo e(__('Phone Number')); ?></label>
                    <input type="text" class="form-control" name="phone" value="<?php echo e(auth()->user()->phone); ?>">
                  </div> 
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label"><?php echo e(__('Address')); ?></label>
                    <input type="text" class="form-control" name="address" value="<?php echo e(auth()->user()->address); ?>">
                  </div>

                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    
                  </div>
                  <button type="submit" class="primary-btn border-0 text-capitalize"><?php echo e(__('Update')); ?></button>
                </form>
              </div>
            </div>
        </div>

      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/front/user/dashboard.blade.php ENDPATH**/ ?>