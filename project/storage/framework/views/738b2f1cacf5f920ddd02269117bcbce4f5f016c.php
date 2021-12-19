<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-9 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h5><?php echo e(__('Variables Meaning'), false); ?></h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th><?php echo e(__('Variable'), false); ?></th>
                                <th><?php echo e(__('Meaning'), false); ?></th>
                            </tr>

                            <?php $__currentLoopData = $template->meaning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td><?php echo e('{' . $key . '}', false); ?></td>
                                    <td><?php echo e($temp, false); ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-9 col-md-9 col-lg-9">
            <div class="card">
                <div class="card-body">

                    <form action="" method="post">

                        <?php echo csrf_field(); ?>

                        <div class="row">


                            <div class="form-group col-md-12">

                                <label for=""><?php echo e(__('Subject'), false); ?></label>
                                <input type="text" name="subject"  class="form-control" value="<?php echo e($template->subject, false); ?>">


                            </div>

                            <div class="form-group col-md-12">

                                <label for=""><?php echo e(__('Template'), false); ?></label>
                                <textarea name="template" 
                                    class="form-control summernote"><?php echo e(($template->template), false); ?></textarea>

                            </div>


                            <button type="submit" class="btn btn-primary"><?php echo e(__('Update Email Template'), false); ?></button>


                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        $(function() {
            'use strict'
            $('.summernote').summernote();
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/email/edit.blade.php ENDPATH**/ ?>