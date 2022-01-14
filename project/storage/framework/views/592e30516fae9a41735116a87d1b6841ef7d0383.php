<?php $__env->startSection('content'); ?>

   

    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Update'), false); ?></h6>
        </div>
        <div class="card-body">

            <form action="<?php echo e(route('admin-show-update', $data->id), false); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="showname"><?php echo e(__('Show Name'), false); ?></label>
                        <input type="text" class="form-control" name="show_name" id="showname"
                            placeholder="<?php echo e(__('Show Name'), false); ?>" value="<?php echo e($data->show_name, false); ?>">
                    </div>


                    

                    <div class="form-group col-md-6">
                        <label for="date"><?php echo e(__('Realse Date'), false); ?></label>
                        <input type="text" class="form-control date" name="relase_date" id="datepicker"
                            placeholder="<?php echo e(__('Realse Date'), false); ?>" value="<?php echo e($data->relase_date, false); ?>" autocomplete="off">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="date"><?php echo e(__('Genre'), false); ?></label>
                        <select name="genre_id[]" multiple class="form-control select-2">

                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id, false); ?>" <?php echo e(in_array($category->id, $data->genre_id) ? 'selected' : '', false); ?> ><?php echo e($category->name, false); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="title"><?php echo e(__('Show Access'), false); ?></label>
                        <select class="form-control  mb-3" name="access" id="title">
                            <option value="free" <?php echo e($data->access == 'free' ? 'selected' : '', false); ?>><?php echo e(__('Free'), false); ?>

                            </option>
                            <option value="premium" <?php echo e($data->access == 'premium' ? 'selected' : '', false); ?>>
                                <?php echo e(__('Premium'), false); ?>

                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="languageimage"><?php echo e(__('Image Thumbnail'), false); ?></label>
                        <span class="ml-2 mb-2 d-block d-sm-inline-block"><?php echo e(__('(support (jpeg,jpg,png))'), false); ?></span>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image" value="" accept="image/*">
                            <input type="hidden" value="" id="image_file">
                            <label class="custom-file-label" for="languageimage"><?php echo e(__('Choose file'), false); ?></label>
                        </div>
                    </div>

                    <div class="form-group ShowLanguageImage  <?php echo e($data->image->image != null ? '' : 'd-none', false); ?>">
                        <img src="<?php echo e($data->image->image != null ? asset('assets/images/' . $data->image->image) : '', false); ?>"
                            alt="image" width="150">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="area1"><?php echo e(__('Description'), false); ?></label>
                        <textarea id="area1" class="form-control " name="description"><?php echo $data->description; ?></textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary"><?php echo e(__('Update'), false); ?></button>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('plugin'); ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css" integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

    <script>
    $(function(){

        $('.select-2').select2();
        $( "#datepicker" ).datepicker();
    })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/show/edit.blade.php ENDPATH**/ ?>