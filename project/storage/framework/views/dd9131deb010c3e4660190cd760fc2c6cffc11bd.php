
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link href="<?php echo e(asset('assets/admin/img/logo/logo.png'), false); ?>" rel="icon">
  <title>RuangAdmin - Login</title>
<link href="<?php echo e(asset('assets/admin/vendor/fontawesome-free/css/all.min.css'), false); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css'), false); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('assets/admin/css/ruang-admin.min.css'), false); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><?php echo e(('Login'), false); ?></h1>
                  </div>
                  <?php echo $__env->make('includes.admin.form-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form id="loginform" class="user" action="<?php echo e(route('admin.login.submit'), false); ?>" method="POST"><?php echo csrf_field(); ?>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="<?php echo e(__('Enter Email Address'), false); ?>">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="<?php echo e(__('Password'), false); ?>">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" name="remember" id="rp" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="rp">
                          <?php echo e(__('Remember Me'), false); ?></label>
                      </div>
                    </div>
                    <input id="authdata" type="hidden" value="<?php echo e(__('Authenticating...'), false); ?>">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Login'), false); ?></button>
                    </div>
                  </form>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="<?php echo e(asset('assets/admin/vendor/jquery/jquery.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/ruang-admin.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/myscript.js'), false); ?>"></script>
<script type="text/javascript">
  var mainurl = "<?php echo e(url('/'), false); ?>";
   var admin_loader = <?php echo e($gs->is_admin_loader, false); ?>;
   var lang  = {
        'new': '<?php echo e(__('ADD NEW'), false); ?>',
        'edit': '<?php echo e(__('EDIT'), false); ?>',
        'update': '<?php echo e(__('Status Updated Successfully.'), false); ?>',
        'sss': '<?php echo e(__('Success !'), false); ?>',
    };


</script>
</body>

</html><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/login.blade.php ENDPATH**/ ?>