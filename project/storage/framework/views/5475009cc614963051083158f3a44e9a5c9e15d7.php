 <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                      <div class="single-movies">
                        <div class="movis-thumbnail">
                          <img src="<?php echo e(asset('assets/images/'.@$movie->image->image), false); ?>" alt="movis" />
                        </div>
                        <div class="movi-verlay">
                          <div class="imdb-wrap">
                            <div class="imdb"><img src="<?php echo e(asset('assets/front/images/imdb.png'), false); ?>" alt="imdb" /><span><?php echo e(\App\helper\Helper::GetIMDBRating($movie->title), false); ?></span></div>
                            <span class="season">16+</span>
                          </div>
                          <img class="premium" src="<?php echo e(asset('assets/front/images/premium-label.svg'), false); ?>" alt="premium" />
                          <a href="<?php echo e(route('movie.details', $movie->slug), false); ?>" class="play-btn"><i class="fas fa-play"></i></a>
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
                            <h3 class="movies-title"><a href="<?php echo e(route('movie.details', $movie->slug), false); ?>"><?php echo e($movie->title, false); ?></a></h3>
                            <ul class="movies-meta">
                              <?php $__currentLoopData = $movie->category_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $category = \App\Models\Category::find($cat);
                                    ?>
                                    <li><?php echo e($category->name, false); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <p class="movie-content"><?php echo e(Str::limit($movie->description,50), false); ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/front/movie_filter.blade.php ENDPATH**/ ?>