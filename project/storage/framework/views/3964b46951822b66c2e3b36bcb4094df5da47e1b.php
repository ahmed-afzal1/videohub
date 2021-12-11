<?php $__env->startSection('content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Update')); ?> <a href="<?php echo e(route('admin-subscription-plan-index')); ?>"
                class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboaard')); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Update')); ?></li>
        </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Update')); ?></h6>
        </div>
        <div class="card-body">

            <form action="<?php echo e(route('admin-subscription-plan-update', $plan->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="row">


                    <div class="form-group col-md-6">
                        <label for="plan_name"><?php echo e(__('Plan Name')); ?></label>
                        <input type="text" class="form-control" name="plan_name" value="<?php echo e($plan->plan_name); ?>" required
                            id="plan_name" placeholder="<?php echo e(__('Plan Name')); ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price"><?php echo e(__('Plan Price')); ?></label>
                        <input type="text" class="form-control" name="price" value="<?php echo e($plan->price); ?>" required
                            id="price" placeholder="<?php echo e(__('Plan Price')); ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price"><?php echo e(__('Plan Duration in Days')); ?></label>
                        <input type="text" class="form-control" name="duration" required
                            placeholder="<?php echo e(__('Plan Duration')); ?>" value="<?php echo e($plan->duration); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price"><?php echo e(__('Plan Status')); ?></label>
                        <select name="status" id="" class="form-control">

                            <option value="1" <?php echo e($plan->status ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
                            <option value="0" <?php echo e(!$plan->status ? 'selected' : ''); ?>><?php echo e(__('Inactive')); ?></option>

                        </select>
                    </div>
                  <div class="form-group col-md-12">
                        <label for="description"><?php echo e(__('Short Description')); ?></label>
                       <input type="text" name="description" id="description"
                            placeholder="<?php echo e(__('Description')); ?>" class="form-control" value="<?php echo e($plan->description); ?>">
                    </div>
                  
                  <div class="more-field text-right col-md-12">
                        <button type="button" class="btn btn-primary" id="add_more_feature"> <i class="fa fa-plus"></i>
                            <?php echo e(__('Add Features')); ?></button>
                    </div>
                  
                    <div id="feature_section" class="col-md-12">


                        <?php $__currentLoopData = $plan->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="feature-area position-relative ">
                                <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="feature[<?php echo e($key); ?>][key]"
                                                placeholder="<?php echo e(__('Enter Feature Name')); ?>" value="<?php echo e($item['key']); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-6">
                                        <div class="form-group">
                                            <select class="form-control  mb-3" name="feature[<?php echo e($key); ?>][value]">
                                                <option value="yes" <?php echo e($item['value'] == 'yes' ? 'selected' : ''); ?>>
                                                    <?php echo e(__('Yes')); ?></option>
                                                <option value="no" <?php echo e($item['value'] == 'no' ? 'selected' : ''); ?>>
                                                    <?php echo e(__('No')); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>

               
                <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('style'); ?>

    <style>
        .remove-btn {
            width: 15px;
            height: 15px;
            background-color: red;
            padding: 10px;
            text-align: center;
            color: #fff;
            border-radius: 50%
        }

    </style>


<?php $__env->stopPush(); ?>

<?php $__env->startPush('plugin'); ?>
    <!-- include summernote css/js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

    <script>
        'use strict'
        $(document).ready(function() {

            let counter = "<?php echo e(count($plan->features)); ?>";

            $('#summernote').summernote();
           


            $('#add_more_feature').on('click', function() {
                $("#feature_section").append(
                    `

                     <div class="feature-area mt-5 position-relative">
                            <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="feature[${counter}][key]"
                                            placeholder="<?php echo e(__('Enter Feature Name')); ?>" id="">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <select class="form-control  mb-3" name="feature[${counter}][value]">
                                            <option value="yes"><?php echo e(__('Yes')); ?></option>
                                            <option value="no"><?php echo e(__('No')); ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                   `
                );
                counter++;
            });

            $(document).on('click', '.remove-btn', function() {

                $(this.parentNode).remove();

            });
        });
    </script>


<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/subscription_plan/edit.blade.php ENDPATH**/ ?>