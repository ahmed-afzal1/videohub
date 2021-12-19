<!-- header area start here  -->
<header class="header-area d-none d-xl-block">
    <div class="header-wrap">
        <div class="container">
            <nav class="navbar navbar-expand-xl navbar-light">
                <a class="navbar-brand" href="<?php echo e(route('front.index'), false); ?>"><img
                        src="<?php echo e(asset('assets/front/images/logo.png'), false); ?>" alt="ZaiFlix" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="has-megamenu">
                            <a href="#"><?php echo e(__('Movies'), false); ?> <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                                <div class="d-flex align-items-start">
                                    <div class="nav nav-pills flex-column me-4" id="Movies-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <?php if($movies->where('access', 'premium')->count() > 0): ?>
                                            <button class="nav-link active" id="Movies-ZaiflixPremium-tab"
                                                data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixPremium"
                                                type="button" role="tab" aria-controls="Movies-ZaiflixPremium"
                                                aria-selected="true"><?php echo e(__('Zaiflix Premium'), false); ?></button>
                                        <?php endif; ?>
                                        <?php if($movies->where('heighlight','LIKE','%trending%')->count() > 0): ?>
                                            <button class="nav-link" id="Movies-TrendingMovies-tab"
                                                data-bs-toggle="pill" data-bs-target="#Movies-TrendingMovies"
                                                type="button" role="tab" aria-controls="Movies-TrendingMovies"
                                                aria-selected="false"><?php echo e(__('Trending Movies'), false); ?></button>
                                        <?php endif; ?>
                                         <?php if($movies->where('heighlight', 'top')->count() > 0): ?>
                                        <button class="nav-link" id="Movies-TopRated-tab" data-bs-toggle="pill"
                                            data-bs-target="#Movies-TopRated" type="button" role="tab"
                                            aria-controls="Movies-TopRated"
                                            aria-selected="false"><?php echo e(__('Top Rated'), false); ?></button>
                                        <?php endif; ?>
                                         <?php if($movies->where('heighlight', 'new')->count() > 0): ?>
                                        <button class="nav-link" id="Movies-LatestZaiflix-tab"
                                            data-bs-toggle="pill" data-bs-target="#Movies-LatestZaiflix" type="button"
                                            role="tab" aria-controls="Movies-LatestZaiflix"
                                            aria-selected="false"><?php echo e(__('Latest on Zaiflix'), false); ?></button>
                                        <?php endif; ?>
                                        <?php if($movies->where('heighlight', 'recent')->count() > 0): ?>
                                        <button class="nav-link" id="Movies-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixOriginals"
                                            type="button" role="tab" aria-controls="Movies-ZaiflixOriginals"
                                            aria-selected="false"><?php echo e(__('Zaiflix Originals'), false); ?></button>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($movies->where('heighlight', 'old')->count() > 0): ?>
                                        <button class="nav-link" id="Movies-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Movies-ZaiflixOriginals"
                                            type="button" role="tab" aria-controls="Movies-ZaiflixOriginals"
                                            aria-selected="false"><?php echo e(__('Zaiflix Originals'), false); ?></button>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <div class="tab-content" id="Movies-tabContent">
                                        <div class="tab-pane fade show active" id="Movies-ZaiflixPremium"
                                            role="tabpanel" aria-labelledby="Movies-ZaiflixPremium-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-TrendingMovies" role="tabpanel"
                                            aria-labelledby="Movies-TrendingMovies-tab">
                                            <div class="movies-list">

                                                <?php $__currentLoopData = $movies->where('heighlight', 'trending')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="single-movi">
                                                        <a href="#">
                                                            <div class="movi-thumbnail">
                                                                <img class="poster-image"
                                                                    src="<?php echo e(asset('assets/images/' . $movie->image->image), false); ?>"
                                                                    alt="movi name" />
                                                                <div class="premium-icon"><img
                                                                        src="<?php echo e(asset('assets/images/' . $movie->image->image), false); ?>"
                                                                        alt="premium" /></div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-TopRated" role="tabpanel"
                                            aria-labelledby="Movies-TopRated-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-LatestZaiflix" role="tabpanel"
                                            aria-labelledby="Movies-LatestZaiflix-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.pn'), false); ?>g"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Movies-ZaiflixOriginals" role="tabpanel"
                                            aria-labelledby="Movies-ZaiflixOriginals-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
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
                            <a href="#"><?php echo e(__('Series'), false); ?> <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                                <div class="d-flex align-items-start">
                                    <div class="nav nav-pills flex-column me-4" id="Series-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="Series-ZaiflixPremium-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-ZaiflixPremium" type="button"
                                            role="tab" aria-controls="Series-ZaiflixPremium"
                                            aria-selected="true"><?php echo e(__('Zaiflix Premium'), false); ?></button>
                                        <button class="nav-link" id="Series-TrendingMovies-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-TrendingMovies" type="button"
                                            role="tab" aria-controls="Series-TrendingMovies"
                                            aria-selected="false"><?php echo e(__('Trending Movies'), false); ?></button>
                                        <button class="nav-link" id="Series-TopRated-tab" data-bs-toggle="pill"
                                            data-bs-target="#Series-TopRated" type="button" role="tab"
                                            aria-controls="Series-TopRated"
                                            aria-selected="false"><?php echo e(__('Top Rated'), false); ?></button>
                                        <button class="nav-link" id="Series-LatestZaiflix-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-LatestZaiflix" type="button"
                                            role="tab" aria-controls="Series-LatestZaiflix"
                                            aria-selected="false"><?php echo e(__('Latest on Zaiflix'), false); ?></button>
                                        <button class="nav-link" id="Series-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Series-ZaiflixOriginals"
                                            type="button" role="tab" aria-controls="Series-ZaiflixOriginals"
                                            aria-selected="false"><?php echo e(__('Zaiflix Originals'), false); ?></button>
                                    </div>
                                    <div class="tab-content" id="Series-tabContent">
                                        <div class="tab-pane fade show active" id="Series-ZaiflixPremium"
                                            role="tabpanel" aria-labelledby="Series-ZaiflixPremium-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-TrendingMovies" role="tabpanel"
                                            aria-labelledby="Series-TrendingMovies-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-TopRated" role="tabpanel"
                                            aria-labelledby="Series-TopRated-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-LatestZaiflix" role="tabpanel"
                                            aria-labelledby="Series-LatestZaiflix-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Series-ZaiflixOriginals" role="tabpanel"
                                            aria-labelledby="Series-ZaiflixOriginals-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
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
                            <a href="#"><?php echo e(__('Kids'), false); ?> <i class="fas fa-angle-down"></i></a>
                            <div class="mega-menu">
                                <div class="d-flex align-items-start">
                                    <div class="nav nav-pills flex-column me-4" id="Kids-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="Kids-ZaiflixPremium-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-ZaiflixPremium" type="button"
                                            role="tab" aria-controls="Kids-ZaiflixPremium"
                                            aria-selected="true"><?php echo e(__('Zaiflix Premium'), false); ?></button>
                                        <button class="nav-link" id="Kids-TrendingMovies-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-TrendingMovies" type="button"
                                            role="tab" aria-controls="Kids-TrendingMovies"
                                            aria-selected="false"><?php echo e(__('Trending Movies'), false); ?></button>
                                        <button class="nav-link" id="Kids-TopRated-tab" data-bs-toggle="pill"
                                            data-bs-target="#Kids-TopRated" type="button" role="tab"
                                            aria-controls="Kids-TopRated"
                                            aria-selected="false"><?php echo e(__('Top Rated'), false); ?></button>
                                        <button class="nav-link" id="Kids-LatestZaiflix-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-LatestZaiflix" type="button"
                                            role="tab" aria-controls="Kids-LatestZaiflix"
                                            aria-selected="false"><?php echo e(__('Latest on Zaiflix'), false); ?></button>
                                        <button class="nav-link" id="Kids-ZaiflixOriginals-tab"
                                            data-bs-toggle="pill" data-bs-target="#Kids-ZaiflixOriginals" type="button"
                                            role="tab" aria-controls="Kids-ZaiflixOriginals"
                                            aria-selected="false"><?php echo e(__('Zaiflix Originals'), false); ?></button>
                                    </div>
                                    <div class="tab-content" id="Kids-tabContent">
                                        <div class="tab-pane fade show active" id="Kids-ZaiflixPremium" role="tabpanel"
                                            aria-labelledby="Kids-ZaiflixPremium-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-TrendingMovies" role="tabpanel"
                                            aria-labelledby="Kids-TrendingMovies-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-TopRated" role="tabpanel"
                                            aria-labelledby="Kids-TopRated-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-LatestZaiflix" role="tabpanel"
                                            aria-labelledby="Kids-LatestZaiflix-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Kids-ZaiflixOriginals" role="tabpanel"
                                            aria-labelledby="Kids-ZaiflixOriginals-tab">
                                            <div class="movies-list">
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item1.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>

                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item2.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item3.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item4.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item5.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item6.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item7.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item8.png'), false); ?>"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="single-movi">
                                                    <a href="#">
                                                        <div class="movi-thumbnail">
                                                            <img class="poster-image"
                                                                src="<?php echo e(asset('assets/front/images/megamenu-item9.pn'), false); ?>g"
                                                                alt="movi name" />
                                                            <div class="premium-icon"><img
                                                                    src="<?php echo e(asset('assets/front/images/premium.svg'), false); ?>"
                                                                    alt="premium" /></div>
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
                            <a href="<?php echo e(route('front.plan'), false); ?>">Subscription</a>
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
                            <button class="language-btn" data-bs-toggle="dropdown">
                                <img class="flag" src="<?php echo e(asset('assets/front/images/usa-flag.png'), false); ?>"
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
                        <?php if(auth()->guard()->guest()): ?>
                        <a class="login" href="<?php echo e(route('user.login'), false); ?>">Login</a>
                        <a class="header-btn" href="<?php echo e(route('user.register'), false); ?>">Register</a>
                        <?php else: ?>
                             <div class="dropdown favourite-dropdown">
                            <button class="favourite-btn" data-bs-toggle="dropdown" >
                                <img class="favourite" src="assets/images/favourite.svg" alt="favourite" />
                            </button>
                            <div class="dropdown-menu" >
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
                              </ul>
                            </div>
                          </div>
                          <div class="dropdown notifications-dropdown">
                            <button class="notifications-btn has-notifications" data-bs-toggle="dropdown" >
                                <img class="notifications" src="assets/images/notifications.svg" alt="notifications" />
                            </button>
                            <div class="dropdown-menu" >
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
                            <button class="profile-btn" data-bs-toggle="dropdown" >
                              <img class="avatar" src="assets/images/avatar.png" alt="avatar" />
                            </button>
                            <ul class="dropdown-menu" >
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
                                <a href="<?php echo e(route('user.logout'), false); ?>" class="single-item">
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
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- header area end here  -->
<?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/partials/front/header.blade.php ENDPATH**/ ?>