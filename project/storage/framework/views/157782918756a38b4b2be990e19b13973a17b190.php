<?php $__env->startSection('content'); ?>

<div class="container-fluid" id="container-wrapper">
   
    <div class="row">
      <div class="col-lg-12 p-0">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="<?php echo e(route('admin-lang-create'), false); ?>" class="btn btn-primary add"><?php echo e(__('Create Language'), false); ?></a>
          </div>
          
          <div class="table-responsive p-3">
         
            <table class="table align-items-center table-flush dt-responsive" >
              <thead class="thead-light">
                <tr>
                  <th><?php echo e(__('Languages'), false); ?></th>
                  <th><?php echo e(__('Options'), false); ?></th>
                  <th><?php echo e(__('Action'), false); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($language->language, false); ?></td>
                    <td><?php echo e($language->is_default ? 'default' : 'Changable', false); ?></td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo e(route('admin-lang-edit', $language->id), false); ?>">Edit</a>
                      <button class="btn btn-danger">delete</button>
                    </td>
                  
                  </tr>                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>







<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Delete'), false); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center"><?php echo e(__('You are about to delete this Category. Everything under this category will be deleted'), false); ?>.</p>
                <p class="text-center"><?php echo e(__('Do you want to proceed?'), false); ?></p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel'), false); ?></button>
                <a class="btn btn-danger btn-ok"><?php echo e(__('Delete'), false); ?></a>
            </div>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/website-language/index.blade.php ENDPATH**/ ?>