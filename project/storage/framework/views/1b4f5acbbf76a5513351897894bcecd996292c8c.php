<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
   
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          </div>
         
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" >
              <thead class="thead-light">
                <tr>
                  <th><?php echo e(__('Customer Name'), false); ?></th>
                  <th><?php echo e(__('Subscription Plan Name'), false); ?></th>
                  <th><?php echo e(__('Order Amount'), false); ?></th>
                  <th><?php echo e(__('Payment Status'), false); ?></th>
                  <th><?php echo e(__('Order Date'), false); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                  <tr>
                    <td><?php echo e($order->user->name, false); ?></td>
                    <td><?php echo e($order->plan->plan_name, false); ?></td>
                    <td><?php echo e($order->order_amount, false); ?></td>
                    <td><?php echo e($order->payment_status, false); ?></td>
                    <td>
                    <?php echo e($order->created_at->format('Y-m-d'), false); ?>

                    </td>
                  </tr>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                <?php endif; ?>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="submit-loader">
               <img src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>" alt="">
            </div>
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close'), false); ?></button>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/order/index.blade.php ENDPATH**/ ?>