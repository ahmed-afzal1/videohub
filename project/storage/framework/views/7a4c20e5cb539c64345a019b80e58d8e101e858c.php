<?php $__env->startSection('content'); ?>


    <div class="col-lg-12">
        <div class="card">

            <div class="card-body">

                <form id="ModalFormSubmit" action="<?php echo e(route('admin-user-update', $data->id)); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    

                    <div class="form-group col-md-3 mb-3">
                        <label class="col-form-label"><?php echo e(__('User Image')); ?></label>

                        <div id="image-preview" class="image-preview" style="background-image:url(<?php echo e($data->photo != null ? asset('assets/images/users/' . $data->photo) : ''); ?>)">
                            <label for="image-upload" id="image-label"><?php echo e(__('Choose File')); ?></label>
                            <input type="file" name="photo" id="image-upload" />
                        </div>

                    </div>


                    <div class="form-group mt-2">
                        <label for="name"><?php echo e(__('Name')); ?></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo e(__('Name')); ?>"
                            value="<?php echo e($data->name); ?>">
                    </div>

                    <div class="form-group mt-2">
                        <label for="email"><?php echo e(__('Email')); ?></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo e(__('Email')); ?>"
                            value="<?php echo e($data->email); ?>">
                    </div>

                    <div class="form-group mt-2">
                        <label for="phone"><?php echo e(__('Email')); ?></label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="<?php echo e(__('Phone')); ?>"
                            value="<?php echo e($data->phone); ?>">
                    </div> 
					
					<div class="form-group mt-2">
                        <label for="phone"><?php echo e(__('Address')); ?></label>
                        <input type="text" class="form-control" name="address" id="phone" placeholder="<?php echo e(__('Address')); ?>"
                            value="<?php echo e($data->address); ?>">
                    </div>

                    


                    <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
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
            label_default: "<?php echo e(__('Choose File')); ?>", // Default: Choose File
            label_selected: "<?php echo e(__('Update Image')); ?>", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

		$('.date').datepicker({});
    </script>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>