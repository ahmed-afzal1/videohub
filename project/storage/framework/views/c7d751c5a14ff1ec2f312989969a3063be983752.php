<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-page">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Pricing</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <div class="pricing-page section-bottom">
        <div class="container">
            <div class="section-title-area text-center">
                <h2>Choose Your Best Plan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit</p>
            </div>
            <div class="price-table">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->first): ?>

                                        <th scope="col">
                                            <div class="table-header">
                                                <p><?php echo e(__('Plan Catagories')); ?></p>
                                            </div>
                                        </th>

                                    <?php endif; ?>
                                    <th scope="col">
                                        <div class="table-header">
                                            <span><?php echo e(__($plan->plan_name)); ?></span>
                                            <p><?php echo e(__($plan->description)); ?></p>
                                        </div>
                                    </th>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->first): ?>
                                        <td>
                                            <div class="plan-time">
                                                <p>Price</p>
                                            </div>
                                        </td>
                                    <?php endif; ?>

                                    <td>
                                        <div class="plan-time">
                                            <h2 class="price">$<?php echo e($plan->price); ?></h2>
                                            <a href="#" class="plan-btn"><?php echo e(__('Choose Plan')); ?></a>
                                        </div>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>

                            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($loop->first): ?>
                                    <tr>
                                        <td class="features" colspan="4"><?php echo e(__('Features')); ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    <td><?php echo e($feature->features); ?></td>

                                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if(in_array($feature->id, $plan->plan_features)): ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php else: ?>
                                         <td><i class="fa fa-times"></i></td>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/front/plan.blade.php ENDPATH**/ ?>