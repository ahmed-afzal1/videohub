<?php $__env->startSection('content'); ?>


    <div class="col-lg-12">
        <!-- Form Basic -->
        <div class="card-body">
            <form action="<?php echo e(route('admin-cat-update', $data->id)); ?>" method="POST" enctype='multipart/form-data'>
                <?php echo csrf_field(); ?>


                <div class="form-group col-md-3 mb-3">
                    <label class="col-form-label"><?php echo e(__('Genre Image')); ?></label>

                    <div id="image-preview" class="image-preview"
                        style="background-image:url(<?php echo e($data->image->image ? asset('assets/images/' . $data->image->image) : ''); ?>)">
                        <label for="image-upload" id="image-label"><?php echo e(__('Choose File')); ?></label>
                        <input type="file" name="image" id="image-upload" />
                    </div>

                </div>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="Genre"><?php echo e(__('Genre Name')); ?></label>
                        <input type="text" class="form-control" name="name" value="<?php echo e($data->name); ?>" id="Genre"
                            placeholder="<?php echo e(__('Genre Name')); ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="slug"><?php echo e(__('Slug')); ?></label>
                        <input type="text" class="form-control" name="slug" id="slug" value="<?php echo e($data->slug); ?>"
                            placeholder="<?php echo e(__('Slug')); ?>">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/genre/edit.blade.php ENDPATH**/ ?>