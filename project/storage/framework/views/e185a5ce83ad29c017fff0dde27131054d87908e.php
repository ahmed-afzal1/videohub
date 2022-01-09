<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>


<?php $__env->startSection('contents'); ?>
    <div class="movies-category-page section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="movies-category-page-title"><?php echo e($pageTitle, false); ?></h1>
                </div>
                <div class="col-lg-12">
                    <!-- Tab Nav List -->
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $freeMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $free): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if(in_array($cat->id, $free->category_id)): ?>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link <?php echo e($loop->parent->first ? 'active' : '', false); ?>"
                                            id="pills-<?php echo e($cat->name, false); ?>-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-<?php echo e($cat->name, false); ?>" type="button" role="tab"
                                            aria-controls="pills-<?php echo e($cat->name, false); ?>"
                                            aria-selected="true"><?php echo e($cat->name, false); ?></button>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="pills-tabContent">

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <?php $__currentLoopData = $freeMovies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $free): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if(in_array($cat->id, $free->category_id)): ?>

                                    <div class="tab-pane <?php echo e($loop->parent->first ? 'fade show active' : '', false); ?>"
                                        id="pills-<?php echo e($cat->name, false); ?>" role="tabpanel"
                                        aria-labelledby="pills-<?php echo e($cat->name, false); ?>-tab">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="single-tv-series text-center">
                                                    <div class="tv-series-thumbnail">
                                                        <a href="#"><img class="thumbnail"
                                                                src="<?php echo e(asset('assets/images/' . $free->image->image), false); ?>"
                                                                alt="tv series" /></a>
                                                        <img class="premium" src="assets/images/premium-label.svg"
                                                            alt="premium" />
                                                    </div>
                                                    <div class="tv-series-info">
                                                        <h3 class="series-title"><a href="#"><?php echo e($free->title, false); ?></a>
                                                        </h3>
                                                        <p>2014 | Series, Drama</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="load-more-btn text-center">
                                            <button class="primary-btn">Load more <img src="assets/images/spinner.svg"
                                                    alt="spinner" class="ms-2"></button>
                                        </div>

                                    </div>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/front/free_movies.blade.php ENDPATH**/ ?>