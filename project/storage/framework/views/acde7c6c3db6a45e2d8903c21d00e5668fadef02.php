<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>

        <div class="card-body ml-5 ">
        <?php echo $__env->make('includes.admin.form-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  
        <form id="ModalFormSubmit" action="<?php echo e(route('admin.heighlight.update',$data->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="trending" id="trending" <?php echo e(in_array('trending',$data->heighlight ) ? 'checked': ''); ?>>
                <label class="custom-control-label" for="trending"><?php echo e(__('Trending Now')); ?></label>
            </div>

            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="new" id="new" <?php echo e(in_array('new', $data->heighlight ) ? 'checked': ''); ?>>
                <label class="custom-control-label" for="new"><?php echo e(__('New Movie')); ?></label>
            </div>

            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="recent" id="recent" <?php echo e(in_array('recent',$data->heighlight ) ? 'checked': ''); ?>>
                <label class="custom-control-label" for="recent"><?php echo e(__('Recent view')); ?></label>
            </div>

            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input" name="top" id="top" <?php echo e(in_array('top',$data->heighlight ) ? 'checked': ''); ?>>
                <label class="custom-control-label" for="top"><?php echo e(__('Top Movie')); ?></label>
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input" name="old" id="old" <?php echo e(in_array('old',$data->heighlight ) ? 'checked': ''); ?>>
                <label class="custom-control-label" for="old"><?php echo e(__('Old Movie')); ?></label>
            </div>


            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/movie/heighlight.blade.php ENDPATH**/ ?>