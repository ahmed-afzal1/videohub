<?php $__env->startSection('content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Update'), false); ?> <a href="<?php echo e(route('admin-subscription-plan-index'), false); ?>"
                class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Update'), false); ?></li>
        </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Update'), false); ?></h6>
        </div>
        <div class="card-body">

            <form action="<?php echo e(route('admin-subscription-plan-update', $plan->id), false); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="row">


                    <div class="form-group col-md-6">
                        <label for="plan_name"><?php echo e(__('Plan Name'), false); ?></label>
                        <input type="text" class="form-control" name="plan_name" value="<?php echo e($plan->plan_name, false); ?>" required
                            id="plan_name" placeholder="<?php echo e(__('Plan Name'), false); ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price"><?php echo e(__('Plan Price'), false); ?></label>
                        <input type="text" class="form-control" name="price" value="<?php echo e($plan->price, false); ?>" required
                            id="price" placeholder="<?php echo e(__('Plan Price'), false); ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price"><?php echo e(__('Plan Duration in Days'), false); ?></label>
                        <input type="text" class="form-control" name="duration" required
                            placeholder="<?php echo e(__('Plan Duration'), false); ?>" value="<?php echo e($plan->duration, false); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="price"><?php echo e(__('Plan Status'), false); ?></label>
                        <select name="status" id="" class="form-control">

                            <option value="1" <?php echo e($plan->status ? 'selected' : '', false); ?>><?php echo e(__('Active'), false); ?></option>
                            <option value="0" <?php echo e(!$plan->status ? 'selected' : '', false); ?>><?php echo e(__('Inactive'), false); ?></option>

                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="price"><?php echo e(__('Plan Features'), false); ?></label>
                        <select name="plan_features[]" multiple class="form-control select-2">

                            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($feat->id, false); ?>" <?php echo e(in_array($feat->id, $plan->plan_features) ? 'selected' : '', false); ?>><?php echo e(__($feat->features), false); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description"><?php echo e(__('Short Description'), false); ?></label>
                        <input type="text" name="description" id="description" placeholder="<?php echo e(__('Description'), false); ?>"
                            class="form-control" value="<?php echo e($plan->description, false); ?>">
                    </div>





                </div>


                <button type="submit" class="btn btn-primary"><?php echo e(__('Update'), false); ?></button>
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
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css" integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        'use strict'
        $(document).ready(function() {
            $('.select-2').select2();

        });
    </script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/subscription_plan/edit.blade.php ENDPATH**/ ?>