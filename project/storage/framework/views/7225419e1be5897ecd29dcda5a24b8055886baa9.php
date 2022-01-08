<?php $__env->startSection('content'); ?>



    <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card">

            <div class="card-body">

                <form id="ModalFormSubmit" action="<?php echo e(route('admin-cat-store'), false); ?>" method="POST"
                    enctype='multipart/form-data'>
                    <?php echo csrf_field(); ?>



                    <div class="form-group col-md-3 mb-3">
                        <label class="col-form-label"><?php echo e(__('Genre Image'), false); ?></label>

                        <div id="image-preview" class="image-preview" style="background-image:url()">
                            <label for="image-upload" id="image-label"><?php echo e(__('Choose File'), false); ?></label>
                            <input type="file" name="image" id="image-upload" />
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="Genre"><?php echo e(__('Genre Name'), false); ?></label>
                            <input type="text" class="form-control" name="name" value="" id="Genre"
                                placeholder="<?php echo e(__('Genre Name'), false); ?>">
                        </div>


                        <div class="form-group col-lg-6">
                            <label for="slug"><?php echo e(__('Slug'), false); ?></label>
                            <input type="text" class="form-control" name="slug" id="slug" value=""
                                placeholder="<?php echo e(__('Slug'), false); ?>">
                        </div>


                    </div>


                    <button type="submit" class="btn btn-primary"><?php echo e(__('Create Genre'), false); ?></button>
                </form>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <script>
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "<?php echo e(__('Choose File'), false); ?>", // Default: Choose File
            label_selected: "<?php echo e(__('Update Image'), false); ?>", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/genre/create.blade.php ENDPATH**/ ?>