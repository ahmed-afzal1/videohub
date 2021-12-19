<?php $__env->startSection('content'); ?>


    <div class="card mb-4">

        <div class="card-body">
            
            <form enctype="multipart/form-data" action="<?php echo e(route('admin-cast-crew-store')); ?>" method="POST">
                <?php echo csrf_field(); ?>



                <div class="form-group col-md-3 mb-3">
                    <label class="col-form-label"><?php echo e(__('Image')); ?></label>

                    <div id="image-preview" class="image-preview" style="background-image:url();">
                        <label for="image-upload" id="image-label"><?php echo e(__('Choose File')); ?></label>
                        <input type="file" name="image" id="image-upload" />
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-12">
                        <label for="name"><?php echo e(__('Name')); ?></label>
                        <input type="text" class="form-control" name="name" value="" id="name"
                            placeholder="<?php echo e(__('Name')); ?>">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="bio"><?php echo e(__('Bio')); ?></label>
                        <textarea name="bio" id="bio" class="form-control" rows="5"
                            placeholder="<?php echo e(__('Enter Bio')); ?>"></textarea>
                    </div>


                </div>


                <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        $(function() {
            'use strict'

            $.uploadPreview({
                input_field: "#image-upload", // Default: .image-upload
                preview_box: "#image-preview", // Default: .image-preview
                label_field: "#image-label", // Default: .image-label
                label_default: "<?php echo e(__('Choose File')); ?>", // Default: Choose File
                label_selected: "<?php echo e(__('Update Image')); ?>", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });
        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/cast_crew/create.blade.php ENDPATH**/ ?>