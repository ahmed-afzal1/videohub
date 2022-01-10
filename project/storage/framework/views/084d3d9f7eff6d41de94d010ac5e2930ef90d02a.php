<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
 

        <div class="row">

            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">

                        <a class="btn btn-primary" href="<?php echo e(route('admin-subscription-plan-create'), false); ?>">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add New Plan'), false); ?>

                        </a>

                    </div>
                    <div class="table-responsive p-3">

                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th><?php echo e(__('Plan Name'), false); ?></th>
                                    <th><?php echo e(__('Plan Duration'), false); ?></th>
                                    <th><?php echo e(__('Plan Status'), false); ?></th>
                                    <th><?php echo e(__('Price'), false); ?></th>
                                    <th><?php echo e(__('Action'), false); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($subscription->plan_name, false); ?></td>
                                        <td><?php echo e($subscription->duration, false); ?></td>
                                        <td>

                                            <?php if($subscription->status): ?>
                                                <span class="badge badge-success"><?php echo e(__('Active'), false); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-danger"><?php echo e(__('Inactive'), false); ?></span>

                                            <?php endif; ?>

                                        </td>

                                        <td><?php echo e($subscription->price, false); ?></td>

                                        <td>
                                            <div class="action-list"><a
                                                    href="<?php echo e(route('admin-subscription-plan-edit', $subscription->id), false); ?>"
                                                    class="btn btn-primary btn-sm mr-2"> <i
                                                        class="fas fa-pen mr-1"></i><?php echo e(__('Edit'), false); ?></a>

                                              
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <tr>

                                        <td class="text-center" colspan="100%"><?php echo e(__('No subscription Found'), false); ?></td>

                                    </tr>

                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog">

            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">

                    <div class="modal-header d-block text-center">
                        <h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Delete'), false); ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p class="text-center"><?php echo e(__('You are about to delete this Subscription Plan.'), false); ?></p>
                        <p class="text-center"><?php echo e(__('Do you want to proceed?'), false); ?></p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel'), false); ?></button>
                        <button class="btn btn-danger" type="submit"><?php echo e(__('Delete'), false); ?></button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    

<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        $(function() {
            $('.delete').on('click', function() {
                const modal = $('#confirm-delete');
                modal.find('form').attr('action', $(this).data('href'))
                modal.modal('show');
            })
        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/subscription_plan/index.blade.php ENDPATH**/ ?>