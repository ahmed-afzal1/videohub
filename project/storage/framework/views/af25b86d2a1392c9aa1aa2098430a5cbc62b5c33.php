<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-page">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Movies</a></li>
                    <li>Godzilla Vs Kong</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Movie details Area start here  -->
    <section class="movie-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="movie-details-left">
                        <div class="playerContainer">
                            <?php if($movie->video_type == 'url'): ?>
                                <iframe class="embed-responsive-item" src="<?php echo e($movie->video, false); ?>" allowfullscreen></iframe>
                            <?php else: ?>
                             <video class="xdPlayer" preload="auto">
                                        <source src="<?php echo e($movie->video_type == 'file' ? asset('assets/videos/movie-videos/' . $movie->video) : '', false); ?>" type="video/mp4" />
                                        <!-- You Can Also Add Other Video Formet Source -->
                                    </video>
                                    <!-- Video Controls -->
                                    <div id="superplay" title="Play">
                                        <svg class="icon" version="1.1" id="Capa1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            x="0px" y="0px" viewBox="0 0 17.804 17.804"
                                            style="enable-background:new 0 0 17.804 17.804;" xml:space="preserve">
                                            <g>
                                                <g id="c98_play">
                                                    <path d="M2.067,0.043C2.21-0.028,2.372-0.008,2.493,0.085l13.312,8.503c0.094,0.078,0.154,0.191,0.154,0.313
                                    c0,0.12-0.061,0.237-0.154,0.314L2.492,17.717c-0.07,0.057-0.162,0.087-0.25,0.087l-0.176-0.04
                                    c-0.136-0.065-0.222-0.207-0.222-0.361V0.402C1.844,0.25,1.93,0.107,2.067,0.043z" />
                                                </g>
                                                <g id="Capa1_78_"></g>
                                            </g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                            <g></g>
                                        </svg>
                                    </div>
                                    <div id="unlock" title="UnLock">
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="24px"
                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path
                                                d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h2c0-1.66 1.34-3 3-3s3 1.34 3 3v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z" />
                                        </svg>
                                    </div>
                                    <div id='speed-list'>
                                        <p class='speed-item' data-speed='0.5'>0.5x</p>
                                        <p class='speed-item' data-speed='0.75'>0.75x</p>
                                        <p class='speed-item active' data-speed='1'>1x</p>
                                        <p class='speed-item' data-speed='1.5'>1.5x</p>
                                        <p class='speed-item' data-speed='2'>2x</p>
                                    </div>
                                    <div id="video-controls">
                                        <div class="progress">
                                            <span class="current-time">00/00</span>
                                            <input class="seek" id="seek" value="0" min="0" type="range" step="1">
                                            <span class="total-time">00/00</span>
                                        </div>
                                        <div class="controls-main">
                                            <div class="controls-left">
                                                <div class="volume">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 0 24 24" width="24px" fill="#000000">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M3 9v6h4l5 5V4L7 9H3zm7-.17v6.34L7.83 13H5v-2h2.83L10 8.83zM16.5 12c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM14 3.23v2.06c2.89.86 5 3.54 5 6.71s-2.11 5.85-5 6.71v2.06c4.01-.91 7-4.49 7-8.77 0-4.28-2.99-7.86-7-8.77z" />
                                                        </svg>
                                                    </div>
                                                    <div class="volume">
                                                        <input id="volumeSeek" value="1" type="range" max="1" min="0"
                                                            step="0.01">
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="center_p">
                                                <div class="icon" id="rew">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M11.99 5V1l-5 5 5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6h-2c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8zm-1.1 11h-.85v-3.26l-1.01.31v-.69l1.77-.63h.09V16zm4.28-1.76c0 .32-.03.6-.1.82s-.17.42-.29.57-.28.26-.45.33-.37.1-.59.1-.41-.03-.59-.1-.33-.18-.46-.33-.23-.34-.3-.57-.11-.5-.11-.82v-.74c0-.32.03-.6.1-.82s.17-.42.29-.57.28-.26.45-.33.37-.1.59-.1.41.03.59.1.33.18.46.33.23.34.3.57.11.5.11.82v.74zm-.85-.86c0-.19-.01-.35-.04-.48s-.07-.23-.12-.31-.11-.14-.19-.17-.16-.05-.25-.05-.18.02-.25.05-.14.09-.19.17-.09.18-.12.31-.04.29-.04.48v.97c0 .19.01.35.04.48s.07.24.12.32.11.14.19.17.16.05.25.05.18-.02.25-.05.14-.09.19-.17.09-.19.11-.32.04-.29.04-.48v-.97z" />
                                                    </svg>
                                                </div>
                                                <div class="plybtn" id="play">
                                                    <button class="player-btn toggle-play icon" title="Toggle Play">
                                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 17.804 17.804"
                                                            style="enable-background:new 0 0 17.804 17.804;"
                                                            xml:space="preserve">
                                                            <g>
                                                                <g id="c_98_play">
                                                                    <path
                                                                        d="M2.067,0.043C2.21-0.028,2.372-0.008,2.493,0.085l13.312,8.503c0.094,0.078,0.154,0.191,0.154,0.313
                                            c0,0.12-0.061,0.237-0.154,0.314L2.492,17.717c-0.07,0.057-0.162,0.087-0.25,0.087l-0.176-0.04
                                            c-0.136-0.065-0.222-0.207-0.222-0.361V0.402C1.844,0.25,1.93,0.107,2.067,0.043z" />
                                                                </g>
                                                                <g id="Capa_1_78_"></g>
                                                            </g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                            <g></g>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="icon" id="for">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                        width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                            <rect fill="none" height="24" width="24" />
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <g />
                                                            <g>
                                                                <path
                                                                    d="M18,13c0,3.31-2.69,6-6,6s-6-2.69-6-6s2.69-6,6-6v4l5-5l-5-5v4c-4.42,0-8,3.58-8,8c0,4.42,3.58,8,8,8s8-3.58,8-8H18z" />
                                                                <polygon
                                                                    points="10.9,16 10.9,11.73 10.81,11.73 9.04,12.36 9.04,13.05 10.05,12.74 10.05,16" />
                                                                <path
                                                                    d="M14.32,11.78c-0.18-0.07-0.37-0.1-0.59-0.1s-0.41,0.03-0.59,0.1s-0.33,0.18-0.45,0.33s-0.23,0.34-0.29,0.57 s-0.1,0.5-0.1,0.82v0.74c0,0.32,0.04,0.6,0.11,0.82s0.17,0.42,0.3,0.57s0.28,0.26,0.46,0.33s0.37,0.1,0.59,0.1s0.41-0.03,0.59-0.1 s0.33-0.18,0.45-0.33s0.22-0.34,0.29-0.57s0.1-0.5,0.1-0.82V13.5c0-0.32-0.04-0.6-0.11-0.82s-0.17-0.42-0.3-0.57 S14.49,11.85,14.32,11.78z M14.33,14.35c0,0.19-0.01,0.35-0.04,0.48s-0.06,0.24-0.11,0.32s-0.11,0.14-0.19,0.17 s-0.16,0.05-0.25,0.05s-0.18-0.02-0.25-0.05s-0.14-0.09-0.19-0.17s-0.09-0.19-0.12-0.32s-0.04-0.29-0.04-0.48v-0.97 c0-0.19,0.01-0.35,0.04-0.48s0.06-0.23,0.12-0.31s0.11-0.14,0.19-0.17s0.16-0.05,0.25-0.05s0.18,0.02,0.25,0.05 s0.14,0.09,0.19,0.17s0.09,0.18,0.12,0.31s0.04,0.29,0.04,0.48V14.35z" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="controls-right">
                                                <div id="lock" title="Lock">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <g fill="none">
                                                            <path d="M0 0h24v24H0V0z" />
                                                            <path d="M0 0h24v24H0V0z" opacity=".87" />
                                                        </g>
                                                        <path
                                                            d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z" />
                                                    </svg>
                                                </div>
                                                <div id="speedbtn" title="Playback Speed">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M20.38 8.57l-1.23 1.85a8 8 0 0 1-.22 7.58H5.07A8 8 0 0 1 15.58 6.85l1.85-1.23A10 10 0 0 0 3.35 19a2 2 0 0 0 1.72 1h13.85a2 2 0 0 0 1.74-1 10 10 0 0 0-.27-10.44z" />
                                                        <path
                                                            d="M10.59 15.41a2 2 0 0 0 2.83 0l5.66-8.49-8.49 5.66a2 2 0 0 0 0 2.83z" />
                                                    </svg>
                                                </div>
                                                <div class='fullscreen' title="FullScreen">
                                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                              <?php endif; ?>
                                   
                        </div>

                        <div class="movie-details-info">
                            <div class="info-top">
                                <div class="info-top-left">
                                    <h2><?php echo e($movie->title, false); ?> <span>(<?php echo e(Carbon\Carbon::parse($movie->relase_date)->format('Y'), false); ?>)</span></h2>
                                </div>
                                <div class="info-top-right">
                                    <a class="share-btn" href="#"><img
                                            src="<?php echo e(asset('assets/front/images/share.svg'), false); ?>" alt="share" /></a>
                                    <a class="add-list-btn" href="#">+ Add to List</a>
                                </div>
                            </div>
                            <ul class="movie-meta">
                                <li><img class="meta-icon" src="<?php echo e(asset('assets/front/images/clock.svg'), false); ?>"
                                        alt="clock"> <span><?php echo e($movie->duration, false); ?></span></li>
                                <li><img class="meta-icon" src="<?php echo e(asset('assets/front/images/video.svg'), false); ?>"
                                        alt="clock"> <span>1080p</span></li>
                                <li><img class="meta-icon" src="<?php echo e(asset('assets/front/images/calendar.svg'), false); ?>"
                                        alt="clock"> <span><?php echo e(Carbon\Carbon::parse($movie->relase_date)->format('Y'), false); ?></span></li>
                            </ul>
                            <p class="movie-description">
                            <?php echo e($movie->description, false); ?>

                            </p>
                            <a href="#" class="readmore-btn">Read More</a>
                        </div>
                        <div class="cast-area">
                            <h2 class="cast-title">Cast</h2>
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-cast">
                                        <div class="cast-image">
                                            <a href="#"><img src="<?php echo e(asset('assets/front/images/cast-1.png'), false); ?>"
                                                    alt="cast" /></a>
                                        </div>
                                        <div class="cast-info">
                                            <h4><a href="#">Rebecca Hall</a></h4>
                                            <span>as Ilene Andrews</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-cast">
                                        <div class="cast-image">
                                            <a href="#"><img src="<?php echo e(asset('assets/front/images/cast-2.png'), false); ?>"
                                                    alt="cast" /></a>
                                        </div>
                                        <div class="cast-info">
                                            <h4><a href="#">Brian Tyree Henry</a></h4>
                                            <span>as Bernie Hayes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-cast">
                                        <div class="cast-image">
                                            <a href="#"><img src="<?php echo e(asset('assets/front/images/cast-3.png'), false); ?>"
                                                    alt="cast" /></a>
                                        </div>
                                        <div class="cast-info">
                                            <h4><a href="#">Julian Dennison</a></h4>
                                            <span>as Josh Valentine</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="see-more">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Movie details Area end here  -->

    <!-- upcomming Movies area start here  -->
    <section class="upcomming-movies-area section-top">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Suggested Movies</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="#" class="view-all-btn">View all <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-1.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February 2008,Orphaned
                                    at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-2.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-3.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-4.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-5.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-6.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-7.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-movies">
                        <div class="movis-thumbnail">
                            <img src="<?php echo e(asset('assets/front/images/tv-series-8.png'), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                            <div class="imdb-wrap">
                                <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                        alt="imdb" /><span>6.5</span></div>
                                <span class="season">16+</span>
                            </div>
                            <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                                alt="premium" />
                            <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                            <div class="share-add-btn">
                                <div class="share-area">
                                    <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                    <ul class="share-media">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-link"></i></a></li>
                                    </ul>
                                </div>
                                <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="movies-info">
                                <h3 class="movies-title"><a href="#">Dexter</a></h3>
                                <ul class="movies-meta">
                                    <li>Action</li>
                                    <li>Thriller</li>
                                    <li>Trailer</li>
                                </ul>
                                <p class="movie-content">Dexter (TV series) Dexter is an American In February
                                    2008,Orphaned at age three
                                    when his mother was...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcomming Movies area end here  -->

    <!-- Trending Movies area start here  -->
    <section class="trending-movies-area section-bottom pt-100">
        <div class="container">
            <div class="section-header">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h2 class="section-title">Trending Movies</h2>
                    </div>
                    <div class="col-sm-4 text-sm-end">
                        <a href="#" class="view-all-btn">View all <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="five-items-slide">
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="<?php echo e(asset('assets/front/images/trending-movies-1.png'), false); ?>" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="<?php echo e(asset('assets/front/images/trending-movies-2.png'), false); ?>" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="<?php echo e(asset('assets/front/images/trending-movies-3.png'), false); ?>" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="<?php echo e(asset('assets/front/images/trending-movies-4.png'), false); ?>" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="<?php echo e(asset('assets/front/images/trending-movies-5.png'), false); ?>" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single-movies">
                    <div class="movis-thumbnail">
                        <img src="<?php echo e(asset('assets/front/images/trending-movies-3.png'), false); ?>" alt="movis" />
                    </div>
                    <div class="movi-verlay">
                        <div class="imdb-wrap">
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>"
                                    alt="imdb" /><span>6.5</span></div>
                            <span class="season">16+</span>
                        </div>
                        <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>"
                            alt="premium" />
                        <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                        <div class="share-add-btn">
                            <div class="share-area">
                                <a href="#" class="share-btn"><i class="fas fa-share-alt"></i></a>
                                <ul class="share-media">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-link"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="add-btn"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="movies-info">
                            <h3 class="movies-title"><a href="#">Dexter</a></h3>
                            <ul class="movies-meta">
                                <li>Action</li>
                                <li>Thriller</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Movies area end here  -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/front/movieDetails.blade.php ENDPATH**/ ?>