<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ZaiFlix Responsive HTML5 Template</title>
    <meta name="description" content="ZaiFlix Responsive  HTML5 Template " />
    <meta name="keywords"
        content="business,corporate, creative, woocommerach, design, gallery, minimal, modern, landing page, cv, designer, freelancer, html, one page, personal, portfolio, programmer, responsive, vcard, one page" />
    <meta name="author" content="ZaiFlix" />
    <link rel="shortcut icon" href="{{ asset('assets/front/images/favicon.pn') }}g" type="image/x-icon">
    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- css file  -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/scss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">
    <script src="{{ asset('assets/front/js/modernizr-3.11.2.min.js') }}"></script>
</head>

<body>

    <!-- Pre Loader Area start -->
    {{-- <div id="preloader">
        <div id="status"></div>
    </div> --}}
    <!-- Pre Loader Area End -->


    @include('partials.front.header')

    <!-- mobilemenu area start here  -->
    <div class="mobile-menu-area d-block d-xl-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="ZaiFlix" /></a>
                </div>
                <div class="col-6 text-end">
                    <button class="menu-bar" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileoffcanvas" aria-controls="mobileoffcanvas">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileoffcanvas">
        <div class="offcanvas-header">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/front/images/logo.png') }}"
                    alt="ZaiFlix" /></a>
            <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="search-form">
                <form action="#">
                    <div class="search-input-wrap">
                        <input type="search" name="%ms" id="mobilesearch" placeholder="Search titles here..." />
                        <button class="search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="button-list d-flex align-items-center justify-content-center">
                <div class="dropdown language-dropdown">
                    <button class="language-btn" data-bs-toggle="dropdown">
                        <img class="flag" src="{{ asset('assets/front/images/usa-flag.png') }}"
                            alt="usa" />
                        <span class="btn-text">EN</span>
                        <i class="agnle-down fas fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">EN</a></li>
                        <li><a href="#">BN</a></li>
                        <li><a href="#">Hi</a></li>
                    </ul>
                </div>
                <div class="dropdown favourite-dropdown">
                    <button class="favourite-btn" data-bs-toggle="dropdown">
                        <img class="favourite" src="{{ asset('assets/front/images/favourite.svg') }}"
                            alt="favourite" />
                    </button>
                    <div class="dropdown-menu">
                        <ul>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="{{ asset('assets/front/images/favourite-1.png') }}"
                                            alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>The Last Breath</h4>
                                        <span class="time">Just Now</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="assets/images/favourite-1.png" alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>Money Heist</h4>
                                        <span class="time">Just Now</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="assets/images/favourite-2.png" alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>The Dexter</h4>
                                        <span class="time">1d Ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown notifications-dropdown">
                    <button class="notifications-btn has-notifications" data-bs-toggle="dropdown">
                        <img class="notifications" src="assets/images/notifications.svg" alt="notifications" />
                    </button>
                    <div class="dropdown-menu">
                        <ul>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="assets/images/favourite-1.png" alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>The Last Breath</h4>
                                        <span class="time">Just Now</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="assets/images/favourite-1.png" alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>Money Heist</h4>
                                        <span class="time">Just Now</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="assets/images/favourite-2.png" alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>The Dexter</h4>
                                        <span class="time">1d Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="assets/images/favourite-2.png" alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>The Dexter</h4>
                                        <span class="time">2d Ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="singtle-movi">
                                    <div class="movi-image">
                                        <img src="assets/images/favourite-1.png" alt="favourite" />
                                    </div>
                                    <div class="movi-info">
                                        <h4>The Last Breath</h4>
                                        <span class="time">3d Ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown profile-dropdown">
                    <button class="profile-btn" data-bs-toggle="dropdown">
                        <img class="avatar" src="assets/images/avatar.png" alt="avatar" />
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="single-item">
                                <div class="item-image">
                                    <img class="avatar" src="assets/images/avatar.png" alt="avatar" />
                                </div>
                                <div class="item-content">
                                    <h4>Maria M. Haq</h4>
                                    <p>maria.m@email.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-item">
                                <div class="item-icon">
                                    <img class="icon" src="assets/images/subscription.svg" alt="avatar" />
                                </div>
                                <div class="item-content">
                                    <h4>Subscription</h4>
                                    <p>Standard - 1 month</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-item">
                                <div class="item-icon">
                                    <img class="icon" src="assets/images/info.svg" alt="info" />
                                </div>
                                <div class="item-content">
                                    <h4>Info</h4>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-item">
                                <div class="item-icon">
                                    <img class="icon" src="assets/images/history.svg" alt="history" />
                                </div>
                                <div class="item-content">
                                    <h4>History</h4>
                                    <p>Watch History & More</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-item">
                                <div class="item-icon">
                                    <img class="icon" src="assets/images/settings.svg" alt="settings" />
                                </div>
                                <div class="item-content">
                                    <h4>Settings</h4>
                                    <p>Device & Controls</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="single-item">
                                <div class="item-icon">
                                    <img class="icon" src="assets/images/logout.svg" alt="logout" />
                                </div>
                                <div class="item-content">
                                    <h4>Log Out</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="mobile-menu">
                <ul class="navbar-nav">
                    <li>
                        <a href="#">Movies</a>
                    </li>
                    <li>
                        <a href="#">Series</a>
                    </li>
                    <li>
                        <a href="#">Kids</a>
                    </li>
                    <li>
                        <a href="#">Live TV</a>
                    </li>
                    <li>
                        <a href="#">Subscription</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- mobilemenu area end here  -->

    @yield('contents')

    <!-- footer area start here  -->
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget about-widget">
                            <a href="index.html" class="brand-logo"><img
                                    src="{{ asset('assets/front/images/logo.png') }}" alt="logo" /></a>
                            <p>Wonderful serenity has taken possession of my entire soul, like these sweet mornings of
                                spring which I enjoy with my whole</p>
                            <ul class="social-media">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget menu-widget">
                            <h3 class="widget-title">Explore</h3>
                            <ul>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">Series</a></li>
                                <li><a href="#">Watchlist</a></li>
                                <li><a href="#">Kids zone</a></li>
                                <li><a href="#">Podcasts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget menu-widget">
                            <h3 class="widget-title">About Us</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Support Center</a></li>
                                <li><a href="javascript:void(0)">Customer Support</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="javascript:void(0)">Copyright</a></li>
                                <li><a href="javascript:void(0)">Popular Campaign</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget menu-widget">
                            <h3 class="widget-title">Policy</h3>
                            <ul>
                                <li><a href="javascript:void(0)">Return Policy </a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                <li><a href="javascript:void(0)">Site Map</a></li>
                                <li><a href="javascript:void(0)">Store Hours</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-area text-center text-lg-start">
                            <p>© Copyright Your CompanyName</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center text-md-end">
                        <nav class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Adversite</a></li>
                                <li><a href="#">Supports</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer area end here  -->

    <!-- js file  -->
    <script src="{{ asset('assets/front/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>

    @stack('script')
</body>

</html>
