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
    <link rel="shortcut icon" href="<?php echo e(asset('assets/front/images/favicon.png')); ?>" type="image/x-icon">
    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- css file  -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/plugins.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/scss/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>">
    <script src="<?php echo e(asset('assets/front/js/modernizr-3.11.2.min.j')); ?>s"></script>
    <?php echo $__env->yieldPushContent('css'); ?>
  </head>
  <body>
    
    <!-- Pre Loader Area start -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Pre Loader Area End -->

    <!-- header area start here  -->
    <header class="header-area transparent-header d-none d-xl-block">
        <div class="header-wrap">
            <div class="container">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <a class="navbar-brand" href="index.html"><img src="<?php echo e(asset('assets/front/images/logo.png')); ?>" alt="ZaiFlix" /></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                          <li class="has-megamenu">
                            <a href="#"><?php echo e(__('Movies')); ?> <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                              <div class="d-flex align-items-start">
                                <div class="nav nav-pills flex-column me-4" id="Movies-tab" role="tablist" aria-orientation="vertical">
                                  <button class="nav-link active" id="Movies-ZaiflixPremium-tab" data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixPremium" type="button" role="tab" aria-controls="Movies-ZaiflixPremium" aria-selected="true"><?php echo e(__('Zaiflix Premium')); ?></button>
                                  <button class="nav-link" id="Movies-TrendingMovies-tab" data-bs-toggle="pill" data-bs-target="#Movies-TrendingMovies" type="button" role="tab" aria-controls="Movies-TrendingMovies" aria-selected="false"><?php echo e(__('Trending Movies')); ?></button>
                                  <button class="nav-link" id="Movies-TopRated-tab" data-bs-toggle="pill" data-bs-target="#Movies-TopRated" type="button" role="tab" aria-controls="Movies-TopRated" aria-selected="false"><?php echo e(__('Top Rated')); ?></button>
                                  <button class="nav-link" id="Movies-LatestZaiflix-tab" data-bs-toggle="pill" data-bs-target="#Movies-LatestZaiflix" type="button" role="tab" aria-controls="Movies-LatestZaiflix" aria-selected="false"><?php echo e(__('Latest on Zaiflix')); ?></button>
                                  <button class="nav-link" id="Movies-ZaiflixOriginals-tab" data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixOriginals" type="button" role="tab" aria-controls="Movies-ZaiflixOriginals" aria-selected="false"><?php echo e(__('Zaiflix Originals')); ?></button>
                                </div>
                                <div class="tab-content" id="Movies-tabContent">
                                  <div class="tab-pane fade show active" id="Movies-ZaiflixPremium" role="tabpanel" aria-labelledby="Movies-ZaiflixPremium-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Movies-TrendingMovies" role="tabpanel" aria-labelledby="Movies-TrendingMovies-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Movies-TopRated" role="tabpanel" aria-labelledby="Movies-TopRated-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                              <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                              <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Movies-LatestZaiflix" role="tabpanel" aria-labelledby="Movies-LatestZaiflix-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.pn')); ?>g" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Movies-ZaiflixOriginals" role="tabpanel" aria-labelledby="Movies-ZaiflixOriginals-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="has-megamenu">
                            <a href="#"><?php echo e(__('Series')); ?> <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                              <div class="d-flex align-items-start">
                                <div class="nav nav-pills flex-column me-4" id="Series-tab" role="tablist" aria-orientation="vertical">
                                  <button class="nav-link active" id="Series-ZaiflixPremium-tab" data-bs-toggle="pill" data-bs-target="#Series-ZaiflixPremium" type="button" role="tab" aria-controls="Series-ZaiflixPremium" aria-selected="true"><?php echo e(__('Zaiflix Premium')); ?></button>
                                  <button class="nav-link" id="Series-TrendingMovies-tab" data-bs-toggle="pill" data-bs-target="#Series-TrendingMovies" type="button" role="tab" aria-controls="Series-TrendingMovies" aria-selected="false"><?php echo e(__('Trending Movies')); ?></button>
                                  <button class="nav-link" id="Series-TopRated-tab" data-bs-toggle="pill" data-bs-target="#Series-TopRated" type="button" role="tab" aria-controls="Series-TopRated" aria-selected="false"><?php echo e(__('Top Rated')); ?></button>
                                  <button class="nav-link" id="Series-LatestZaiflix-tab" data-bs-toggle="pill" data-bs-target="#Series-LatestZaiflix" type="button" role="tab" aria-controls="Series-LatestZaiflix" aria-selected="false"><?php echo e(__('Latest on Zaiflix')); ?></button>
                                  <button class="nav-link" id="Series-ZaiflixOriginals-tab" data-bs-toggle="pill" data-bs-target="#Series-ZaiflixOriginals" type="button" role="tab" aria-controls="Series-ZaiflixOriginals" aria-selected="false"><?php echo e(__('Zaiflix Originals')); ?></button>
                                </div>
                                <div class="tab-content" id="Series-tabContent">
                                  <div class="tab-pane fade show active" id="Series-ZaiflixPremium" role="tabpanel" aria-labelledby="Series-ZaiflixPremium-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Series-TrendingMovies" role="tabpanel" aria-labelledby="Series-TrendingMovies-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Series-TopRated" role="tabpanel" aria-labelledby="Series-TopRated-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Series-LatestZaiflix" role="tabpanel" aria-labelledby="Series-LatestZaiflix-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Series-ZaiflixOriginals" role="tabpanel" aria-labelledby="Series-ZaiflixOriginals-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="has-megamenu">
                            <a href="#"><?php echo e(__('Kids')); ?> <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                              <div class="d-flex align-items-start">
                                <div class="nav nav-pills flex-column me-4" id="Kids-tab" role="tablist" aria-orientation="vertical">
                                  <button class="nav-link active" id="Kids-ZaiflixPremium-tab" data-bs-toggle="pill" data-bs-target="#Kids-ZaiflixPremium" type="button" role="tab" aria-controls="Kids-ZaiflixPremium" aria-selected="true"><?php echo e(__('Zaiflix Premium')); ?></button>
                                  <button class="nav-link" id="Kids-TrendingMovies-tab" data-bs-toggle="pill" data-bs-target="#Kids-TrendingMovies" type="button" role="tab" aria-controls="Kids-TrendingMovies" aria-selected="false"><?php echo e(__('Trending Movies')); ?></button>
                                  <button class="nav-link" id="Kids-TopRated-tab" data-bs-toggle="pill" data-bs-target="#Kids-TopRated" type="button" role="tab" aria-controls="Kids-TopRated" aria-selected="false"><?php echo e(__('Top Rated')); ?></button>
                                  <button class="nav-link" id="Kids-LatestZaiflix-tab" data-bs-toggle="pill" data-bs-target="#Kids-LatestZaiflix" type="button" role="tab" aria-controls="Kids-LatestZaiflix" aria-selected="false"><?php echo e(__('Latest on Zaiflix')); ?></button>
                                  <button class="nav-link" id="Kids-ZaiflixOriginals-tab" data-bs-toggle="pill" data-bs-target="#Kids-ZaiflixOriginals" type="button" role="tab" aria-controls="Kids-ZaiflixOriginals" aria-selected="false"><?php echo e(__('Zaiflix Originals')); ?></button>
                                </div>
                                <div class="tab-content" id="Kids-tabContent">
                                  <div class="tab-pane fade show active" id="Kids-ZaiflixPremium" role="tabpanel" aria-labelledby="Kids-ZaiflixPremium-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Kids-TrendingMovies" role="tabpanel" aria-labelledby="Kids-TrendingMovies-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Kids-TopRated" role="tabpanel" aria-labelledby="Kids-TopRated-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Kids-LatestZaiflix" role="tabpanel" aria-labelledby="Kids-LatestZaiflix-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane fade" id="Kids-ZaiflixOriginals" role="tabpanel" aria-labelledby="Kids-ZaiflixOriginals-tab">
                                    <div class="movies-list">
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item1.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                          
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item2.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item3.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item4.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item5.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item6.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item7.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item8.png')); ?>" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                      <div class="single-movi">
                                        <a href="#">
                                          <div class="movi-thumbnail">
                                            <img class="poster-image" src="<?php echo e(asset('assets/front/images/megamenu-item9.pn')); ?>g" alt="movi name" />
                                            <div class="premium-icon"><img src="<?php echo e(asset('assets/front/images/premium.svg')); ?>" alt="premium" /></div>
                                          </div>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <a href="#">Live TV</a>
                          </li>
                          <li>
                            <a href="#">Subscription</a>
                          </li>
                        </ul>
                        <div class="header-right d-flex align-items-center">
                            <div class="search-form">
                                <form action="#">
                                    <div class="search-input-wrap">
                                        <input type="search" name="%s" id="search" placeholder="Search titles here..." />
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="dropdown language-dropdown">
                                <button class="language-btn" data-bs-toggle="dropdown" >
                                    <img class="flag" src="<?php echo e(asset('assets/front/images/usa-flag.png')); ?>" alt="usa" />
                                    <span class="btn-text">EN</span>
                                    <i class="agnle-down fas fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" >
                                  <li><a href="#">EN</a></li>
                                  <li><a href="#">BN</a></li>
                                  <li><a href="#">Hi</a></li>
                                </ul>
                            </div>
                            <a class="login" href="sign-in.html">Login</a>
                            <a class="header-btn" href="sign-up.html">Register</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- header area end here  -->

    <!-- mobilemenu area start here  -->
    <div class="mobile-menu-area d-block d-xl-none">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <a class="navbar-brand" href="index.html"><img src="<?php echo e(asset('assets/front/images/logo.png')); ?>" alt="ZaiFlix" /></a>
          </div>
          <div class="col-6 text-end">
              <button class="menu-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileoffcanvas" aria-controls="mobileoffcanvas">
                <i class="fas fa-bars"></i>
              </button>
          </div>
        </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileoffcanvas">
      <div class="offcanvas-header">
        <a class="navbar-brand" href="index.html"><img src="<?php echo e(asset('assets/front/images/logo.png')); ?>" alt="ZaiFlix" /></a>
        <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
          <a class="login" href="sign-in.html">Login</a>
          <a class="header-btn" href="sign-up.html">Register</a>
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

    <?php echo $__env->yieldContent('contents'); ?>

    <!-- footer area start here  -->
    <footer class="footer-area">
      <div class="footer-widget-area">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-3 col-md-6 col-sm-6">
              <div class="single-widget about-widget">
                <a href="index.html" class="brand-logo"><img src="<?php echo e(asset('assets/front/images/logo.png')); ?>" alt="logo" /></a>
                <p>Wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole</p>
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
    <script src="<?php echo e(asset('assets/front/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/front/js/main.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
  </body>
</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/layouts/front.blade.php ENDPATH**/ ?>