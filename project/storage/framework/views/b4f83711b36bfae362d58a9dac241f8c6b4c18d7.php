<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>


<?php $__env->startSection('contents'); ?>
    <!-- hero-slider area start here  -->
    <section class="hero-slider-area">
        <div class="hero-banner-slide">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="single-banner"
                    style="background-image: url(<?php echo e(asset('assets/images/poster/' . $slider->poster), false); ?>);">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="exciting-collection"><img class="icon"
                                        src="<?php echo e(asset('assets/front/images/trending-up.svg'), false); ?>" alt="grid" /> Trending
                                    Now .
                                    2021</div>
                                <h1 class="banner-title"><?php echo e(@$slider->movie->tilte, false); ?></h1>
                                <div class="hero-banner-rating d-flex align-items-center">
                                    <span class="hero-normal-rating px-2 me-4">16+</span>
                                    <span class="imdb-rating bg-yellow d-inline-flex align-items-center text-black-50"><img
                                            src="<?php echo e(asset('assets/front/images/imdb-banner.png'), false); ?>"
                                            alt="imdb"><span><?php echo e(\App\helper\Helper::GetIMDBRating(@$slider->movie->title), false); ?></span></span>
                                </div>

                                <p class="banner-content"><?php echo e(@$slider->movie->description, false); ?></p>
                                <div class="hero-cast-wrap">
                                    <p><span class="red-color">Cast: </span>
                                        <?php $__currentLoopData = $slider->movie->cast; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $cast = \App\Models\CastCrew::find($cast);
                                            ?>
                                            <?php echo e($cast->name, false); ?>,
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                    <p><span class="red-color">Genre: </span>
                                        <?php if($slider->movie->genre_id != null): ?>
                                            <?php $__currentLoopData = $slider->movie->genre_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $cast = \App\Models\Genre::find($genre);
                                                ?>
                                                <?php echo e($genre->name, false); ?>,
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </p>
                                    <p><span class="red-color">Tag: </span>
                                         <?php if($slider->movie->tag != null): ?>
                                            <?php $__currentLoopData = $slider->movie->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             
                                                <?php echo e($tag, false); ?>,
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    
                                    </p>
                                </div>
                                <div class="hero-btns d-flex align-content-center">
                                    <a href="<?php echo e(route('movie.details', $slider->movie->slug), false); ?>" class="primary-btn text-capitalize">Watch Now</a>
                                    <button
                                        class="add-to-btn border-0 bg-transparent text-white d-flex align-items-center ms-4">
                                        <img src="<?php echo e(asset('assets/front/images/plus.svg'), false); ?>" alt="plus"
                                            class="me-1"> Add to List</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="hero-banner-thumbnail">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-thumbnail">
                <img src="<?php echo e(asset('assets/images/poster/' . $slider->poster), false); ?>" alt="thumbnail" />
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </section>
    <!-- hero-slider area end here  -->

    <!-- Latest Movies area start here  -->
    <section class="latest-movies-area section-top">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title"><?php echo e(__('Latest Movies'), false); ?></h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="<?php echo e(route('front.movies'), false); ?>" class="view-all-btn"><?php echo e(__('View all'), false); ?> <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="latest-movies-slide three-items-slide">
                <?php $__currentLoopData = $latestMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-movies">
                        <div class="movies-thumbnail">
                            <img src="<?php echo e(asset('assets/images/' . @$latest->image->image), false); ?>" alt="movis" />
                        </div>
                        <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                            alt="premium" />
                        <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                alt="imdb" /><span><?php echo e(\App\helper\Helper::GetIMDBRating($latest->title), false); ?></span></div>
                        <a href="<?php echo e(route('movie.details', $latest->slug), false); ?>" class="play-btn"><i
                                class="fas fa-play"></i></a>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#"><?php echo e($latest->title, false); ?></a></h3>
                            <ul class="movies-meta">
                                <li class="season"><span>16+</span></li>
                                <?php $__currentLoopData = $latest->category_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $category = \App\Models\Category::find($cat);
                                    ?>
                                    <li><?php echo e($category->name, false); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- Latest Movies area end here  -->

    <!-- Free Watch  area start here  -->
    <div class="free-watch section">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Free To Watch</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="free-movies.html" class="view-all-btn">View all <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-watch-grid">
                        <div class="watch-thumbnail">
                            <a href="#"><img src="<?php echo e(asset('assets/front/images/watch-grid-image.jpg'), false); ?>"
                                    alt="watch-grid-image" /></a>
                        </div>
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="watch-info">
                            <h3><a href="#">Dracula Untold Story</a></h3>
                            <p>Lorem ipsum dolor sit amet, consec tetur adipis cing elit, sed do eiusmod tempor incididunt
                                ut labore et.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-watch-list">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="watch-thumbnail">
                                    <a href="#"><img src="<?php echo e(asset('assets/front/images/watch-list-image-1.jpg'), false); ?>"
                                            class="img-fluid" alt="watch-list-image" /></a>
                                    <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="watch-info">
                                    <span class="date">2018</span>
                                    <h3 class="watch-title"><a href="#">300 Rise Of An Empire</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipis cing elit, sed do eiusmod tempor.</p>
                                    <ul class="watch-meta">
                                        <li><i class="far fa-clock"></i> 3hr 30mins</li>
                                        <li><i class="far fa-calendar-alt"></i> June 2, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-watch-list">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="watch-thumbnail">
                                    <a href="#"><img src="<?php echo e(asset('assets/front/images/watch-list-image-2.jpg'), false); ?>"
                                            class="img-fluid" alt="watch-list-image" /></a>
                                    <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="watch-info">
                                    <span class="date">2015</span>
                                    <h3 class="watch-title"><a href="#">The Sinister</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipis cing elit, sed do eiusmod tempor.</p>
                                    <ul class="watch-meta">
                                        <li><i class="far fa-clock"></i> 3hr 24mins</li>
                                        <li><i class="far fa-calendar-alt"></i> June 2, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-watch-list">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="watch-thumbnail">
                                    <a href="#"><img src="<?php echo e(asset('assets/front/images/watch-list-image-3.jpg'), false); ?>"
                                            class="img-fluid" alt="watch-list-image" /></a>
                                    <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="watch-info">
                                    <span class="date">2019</span>
                                    <h3 class="watch-title"><a href="#">The Maze Runner</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consec tetur adipis cing elit, sed do eiusmod tempor.</p>
                                    <ul class="watch-meta">
                                        <li><i class="far fa-clock"></i> 3hr 20mins</li>
                                        <li><i class="far fa-calendar-alt"></i> June 2, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Free Watch  area end here  -->

    <!-- Trailer area start here  -->
    <section class="trailer-area section">
        <div class="container">

            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Recommend Movies</h2>
                    </div>
                </div>
            </div>

            <div class="trailer-slider-wrap movi-banner-slide">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="trailer-video">
                            <img class="thumbnail-thumbnail"
                                src="<?php echo e(asset('assets/front/images/trailer-thumbnail.jpg'), false); ?>" alt="trailer-thumbnail" />
                            <a class="play-btn" href="#"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="trailer-info">
                            <h2 class="trailer-title">Godzilla Vs Kong </h2>
                            <h5 class="trailer-label">Trailer</h5>
                            <p class="trailer-content">Godzilla vs. Kong is a 2021 American monster film directed by Adam
                                Wingard. A sequel to Godzilla: King of the Monsters (2019) and Kong</p>
                            <a href="#" class="primary-btn">WATCH NOW</a>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="trailer-video">
                            <img class="thumbnail-thumbnail"
                                src="<?php echo e(asset('assets/front/images/trailer-thumbnail.jpg'), false); ?>" alt="trailer-thumbnail" />
                            <a class="play-btn" href="#"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="trailer-info">
                            <h2 class="trailer-title">Godzilla Vs Kong 1</h2>
                            <h5 class="trailer-label">Trailer</h5>
                            <p class="trailer-content">Godzilla vs. Kong is a 2021 American monster film directed by Adam
                                Wingard. A sequel to Godzilla: King of the Monsters (2019) and Kong</p>
                            <a href="#" class="primary-btn">WATCH NOW</a>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="trailer-video">
                            <img class="thumbnail-thumbnail"
                                src="<?php echo e(asset('assets/front/images/trailer-thumbnail.jpg'), false); ?>" alt="trailer-thumbnail" />
                            <a class="play-btn" href="#"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="trailer-info">
                            <h2 class="trailer-title">Godzilla Vs Kong 2</h2>
                            <h5 class="trailer-label">Trailer</h5>
                            <p class="trailer-content">Godzilla vs. Kong is a 2021 American monster film directed by Adam
                                Wingard. A sequel to Godzilla: King of the Monsters (2019) and Kong</p>
                            <a href="#" class="primary-btn">WATCH NOW</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Trailer area end here  -->

    <!-- Popular Tv Series start here  -->
    <section class="popular-tv-series section-top pb-100">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Popular Tv Series</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="popular-tv-series.html" class="view-all-btn">View all <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-1.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">The 100</a></h3>
                            <p>2014 | Series, Drama</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-2.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                    alt="imdb" /><span>6.5</span></div>
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">The Witcher</a></h3>
                            <p>2019 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-3.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Dexter</a></h3>
                            <p>2019 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-4.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Money Heist</a></h3>
                            <p>2019 | Drama, Action</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-5.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">The Walking Dead</a></h3>
                            <p>2014 | Series, Drama</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-6.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Doom Patrol</a></h3>
                            <p>2019 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-7.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Luther</a></h3>
                            <p>2015 | Drama, Scifi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-tv-series text-center">
                        <div class="tv-series-thumbnail">
                            <a href="#"><img class="thumbnail"
                                    src="<?php echo e(asset('assets/front/images/tv-series-8.png'), false); ?>" alt="tv series" /></a>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                        </div>
                        <div class="tv-series-info">
                            <h3 class="series-title"><a href="#">Barbaren</a></h3>
                            <p>2014 | Series, Drama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Tv Series end here  -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/front/index.blade.php ENDPATH**/ ?>