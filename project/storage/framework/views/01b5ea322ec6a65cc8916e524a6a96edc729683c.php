<?php $__env->startSection('content'); ?>

<div class="row">

      <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post" action="<?php echo e(route('admin.password.update')); ?>">
                  <?php echo csrf_field(); ?>
                    <div class="card-header">

                        <h6><?php echo e(__('Change Password')); ?></h6>
                    
                    </div>
                    <div class="card-body">
                       
                        <div class="row">
                        
                          <div class="form-group col-md-12 col-12">
                            <label><?php echo e(__('Old Password')); ?></label>
                            <input type="password" class="form-control" name="old_pass" required >
                          </div>
                          
                          <div class="form-group col-md-12 col-12">
                            <label><?php echo e(__('New Password')); ?></label>
                            <input type="password" class="form-control" name="password" required>
                          </div>  
                          <div class="form-group col-md-12 col-12">
                            <label><?php echo e(__('Confirm Password')); ?></label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary"><?php echo e(__('Change Password')); ?></button>
                    </div>
                  </form>
                </div>
              </div> 
              
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form method="post" action="<?php echo e(route('admin.profile.update')); ?>" enctype="multipart/form-data">
                   <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url(<?php echo e(asset('assets/images/'.auth()->guard('admin')->user()->photo)); ?>);">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                          <div class="form-group col-md-6 col-12">
                            <label><?php echo e(__('Email')); ?></label>
                            <input type="email" class="form-control" name="email" value="<?php echo e(auth()->guard('admin')->user()->email); ?>" required>
                           
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label><?php echo e(__('Username')); ?></label>
                            <input type="text" class="form-control" name="username" value="<?php echo e(auth()->guard('admin')->user()->name); ?>">
                          </div>
                        </div>
                        <div class="col-md-12 text-right">

                          <button class="btn btn-primary"><?php echo e(__('Update Profile')); ?></button>
                        
                        </div>
                    </div>
                   
                  </form>
                </div>
              </div>

</div>


<?php $__env->stopSection(); ?>


<?php $__env->startPush('style'); ?>

  <style>
  
.avatar-upload {
   position: relative;
    max-width: 205px;
    top: -15px;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #ffffff;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f030";
  font-family: "FontAwesome";
  color: #757575;
  position: absolute;
  top: 7px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #f8f8f8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}


  
  </style>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>

<script>
  'use strict'


  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").on('change',function() {
    readURL(this);
});


</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/profile.blade.php ENDPATH**/ ?>