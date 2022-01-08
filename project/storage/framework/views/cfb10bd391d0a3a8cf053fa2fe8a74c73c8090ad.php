<?php $__env->startSection('content'); ?>
    <div class="container-fluid" id="container-wrapper">



        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Favicon'), false); ?></h6>
                    </div>
                    <div class="card-body">
                       
                        <form action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST">
                            <?php echo csrf_field(); ?>


                            <div class="form-group mb-3">
                                <label class="col-form-label"><?php echo e(__('Favicon Image'), false); ?></label>

                                <div id="image-preview" class="image-preview" style="background-image:url(<?php echo e($gs->favicon ? asset('assets/images/' . $gs->favicon) : asset('assets/images/noimage.png'), false); ?>)">
                                    <label for="image-upload" id="image-label"><?php echo e(__('Choose File'), false); ?></label>
                                    <input type="file" name="favicon" id="image-upload" />
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
                            </div>
                        </form>
                    </div>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/generalsetting/favicon.blade.php ENDPATH**/ ?>