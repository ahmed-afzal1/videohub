<?php $__env->startSection('content'); ?>
    <div class="container-fluid" id="container-wrapper">

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Header Logo'), false); ?></h6>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data" method="POST">
                            <?php echo csrf_field(); ?>
                           
                            <div class="form-group col-md-3 mb-3">
                                <label class="col-form-label"><?php echo e(__('Header logo'), false); ?></label>

                                <div id="image-preview" class="image-preview" style="background-image:url(<?php echo e($gs->header_logo ? asset('assets/images/'. $gs->header_logo) : asset('assets/images/noimage.png'), false); ?>)">
                                    <label for="image-upload" id="image-label"><?php echo e(__('Choose File'), false); ?></label>
                                    <input type="file" name="header_logo" id="image-upload" />
                                </div>

                            </div>

                            
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Footer Logo'), false); ?></h6>
                    </div>
                    <div class="card-body">
                       
                        
                        <form action="<?php echo e(route('admin-gs-update'), false); ?>" enctype="multipart/form-data"
                            method="POST"><?php echo csrf_field(); ?>
                            <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                           <div class="form-group col-md-3 mb-3">
                                <label class="col-form-label"><?php echo e(__('Footer logo'), false); ?></label>

                                <div id="image-preview_footer" class="image-preview" style="background-image:url(<?php echo e($gs->footer_logo ? asset('assets/images/' . $gs->footer_logo) : asset('assets/images/noimage.png'), false); ?>)">
                                    <label for="image-upload_footer" id="image-label_footer"><?php echo e(__('Choose File'), false); ?></label>
                                    <input type="file" name="footer_logo" id="image-upload_footer" />
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script>
        $('#header-logo').on('change', function() {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-view-header img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        })

        $('#footer-logo').on('change', function() {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-view-footer img').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        })
    </script>
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
        
        $.uploadPreview({
            input_field: "#image-upload_footer", // Default: .image-upload
            preview_box: "#image-preview_footer", // Default: .image-preview
            label_field: "#image-label_footer", // Default: .image-label
            label_default: "<?php echo e(__('Choose File'), false); ?>", // Default: Choose File
            label_selected: "<?php echo e(__('Update Image'), false); ?>", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/generalsetting/logo.blade.php ENDPATH**/ ?>