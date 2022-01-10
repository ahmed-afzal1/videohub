<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ZaiFlix Responsive  HTML5 Template</title>
    <meta name="description" content="ZaiFlix Responsive  HTML5 Template " />
    <meta name="keywords" content="business,corporate, creative, woocommerach, design, gallery, minimal, modern, landing page, cv, designer, freelancer, html, one page, personal, portfolio, programmer, responsive, vcard, one page" />
    <meta name="author" content="ZaiFlix" />
    <link rel="shortcut icon" href="<?php echo e(asset('assets/front/images/favicon.png'), false); ?>" type="image/x-icon">
    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- css file  -->
    <?php echo $__env->make('partials.front.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
            
    <!-- Pre Loader Area start -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Pre Loader Area End -->
    
    <!-- Register area start here  -->
    <section class="register-area" style="background-image: url(<?php echo e(asset('assets/front/images/register-bg.jpg'), false); ?>);">
      <div class="register-wrap">
        <div class="register-top">
          <h3>Sign up to Zaiflix</h3>
          <p>Already have an account? <a href="<?php echo e(route('user.login'), false); ?>">Login</a></p>
        </div>
        <div class="other-continue">
          <div class="continue-area">
            <a href="#" class="continue-btn"><img class="icon" src="<?php echo e(asset('assets/front/images/google.svg'), false); ?>" alt="google" />  Continue with Google</a>
            <a href="#" class="continue-btn"><img class="icon" src="<?php echo e(asset('assets/front/images/facebook.svg'), false); ?>" alt="facebook" /> Continue with Facebook</a>
          </div>
          <h3 class="or-text">OR</h3>
        </div>
        <div class="register-form">
          <form action="" method="post">
          <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="Username">Username</label>
              <input type="text" class="form-control" id="Username" name="username" />
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" id="Email" name="email" />
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" name="password" />
            </div>
            <div class="form-group">
              <label for="RePassword">Repeat Password</label>
              <input type="password" class="form-control" id="RePassword" name="password_confirmation" />
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="agree" />
              <label class="form-check-label" for="agree">By creating an account, you agree to our <a href="#">Privacy Policy</a>, <a href="#">Term and Conditions</a> and <a href="#">Notification settings</a></label>
            </div>
            <button type="submit" class="register-btn">Register</button>
          </form>
        </div>
      </div>
    </section>
    <!-- Register area end here  -->

    <!-- js file  -->
    <?php echo $__env->make('partials.front.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/front/user/auth/register.blade.php ENDPATH**/ ?>