<?php $__env->startSection('content'); ?>


    <div class="card mb-4">
       
        <div class="card-body">

            <form action="<?php echo e(route('admin-cast-crew-update', $castAndCrew->id), false); ?>" enctype="multipart/form-data"
                method="POST">
                <?php echo csrf_field(); ?>

                 <div class="form-group col-md-3 mb-3">
                    <label class="col-form-label"><?php echo e(__('Image'), false); ?></label>

                    <div id="image-preview" class="image-preview" style="background-image:url(<?php echo e($castAndCrew->image->image ? asset('assets/images/' . $castAndCrew->image->image) : '', false); ?>);">
                        <label for="image-upload" id="image-label"><?php echo e(__('Choose File'), false); ?></label>
                        <input type="file" name="image" id="image-upload" />
                    </div>

                </div>

                <div class="form-group">
                    <label for="name"><?php echo e(__('Name'), false); ?></label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($castAndCrew->name, false); ?>" id="name"
                        placeholder="<?php echo e(__('Name'), false); ?>">
                </div>

               


                <div class="form-group">
                    <label for="bio"><?php echo e(__('Bio'), false); ?></label>
                    <textarea name="bio" id="bio" class="form-control" rows="5"
                        placeholder="<?php echo e(__('Enter Bio'), false); ?>"><?php echo e($castAndCrew->bio, false); ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
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
                label_default: "<?php echo e(__('Choose File'), false); ?>", // Default: Choose File
                label_selected: "<?php echo e(__('Update Image'), false); ?>", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });
        })
    </script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/cast_crew/edit.blade.php ENDPATH**/ ?>