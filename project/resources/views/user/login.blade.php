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
    <link rel="shortcut icon" href="{{asset('assets/front/images/favicon.png')}}" type="image/x-icon">
    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- css file  -->
    @include('partials.front.style')
  </head>
  <body>
            
    <!-- Pre Loader Area start -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Pre Loader Area End -->
    
    <!-- Register area start here  -->
    <section class="register-area" style="background-image: url({{asset('assets/front/images/register-bg.jpg')}});">
      <div class="register-wrap">
        <div class="register-top">
          <h3>Let’s Sign You In</h3>
          <p>Don't have an account? <a href="{{route('user.register')}}">Register</a></p>
        </div>
        <div class="register-form">
          <form action="#">
            <div class="form-group">
              <label for="Username">Username or Email Adress</label>
              <input type="text" class="form-control" id="Username" name="Username" />
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" name="Password" />
            </div>
            <div class="form-group form-check remember-check">
              <input type="checkbox" class="form-check-input" id="Remember" />
              <label class="form-check-label " for="Remember">Remember Me</label>
              <a href="#" class="float-end forget-password">Forget Password?</a>
            </div>
            <button type="submit" class="register-btn">Register</button>
          </form>
        </div>
        <div class="other-continue mt-5">
          <h3 class="or-text">OR</h3>
          <div class="continue-area mb-0">
            <a href="#" class="continue-btn"><img class="icon" src="{{asset('assets/front/images/google.svg')}}" alt="google" />  Continue with Google</a>
            <a href="#" class="continue-btn"><img class="icon" src="{{asset('assets/front/images/facebook.svg')}}" alt="facebook" /> Continue with Facebook</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Register area end here  -->

    <!-- js file  -->
    @include('partials.front.script')
  </body>
</html>