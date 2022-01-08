<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th><?php echo e(__('Sl'), false); ?></th>
                                <th><?php echo e(__('Name'), false); ?></th>
                                <th><?php echo e(__('Subject'), false); ?></th>
                                <th><?php echo e(__('Action'), false); ?></th>
                            </tr>
                           
                            <?php $__empty_1 = true; $__currentLoopData = $emailTemplates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                <tr>
                                
                                    <td><?php echo e($key + $emailTemplates->firstItem(), false); ?></td>
                                    <td><?php echo e(str_replace('_',' ', $email->name), false); ?></td>
                                    <td><?php echo e($email->subject, false); ?></td>
                                    <td>

                                        <a href="<?php echo e(route('admin.email.templates.edit', $email), false); ?>" class="btn btn-primary"><i class="fa fa-pen"></i></a>
                                    
                                    
                                    </td>
                                
                                
                                
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>

                                    <td class="text-center" colspan="100%"><?php echo e(__('No Email Template Found'), false); ?></td>
                                
                                </tr>
                                
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
                <?php if($emailTemplates->hasPages()): ?>

                    <div class="card-footer">

                        <?php echo e($emailTemplates->links(), false); ?>

                    
                    </div>


                <?php endif; ?>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/email/templates.blade.php ENDPATH**/ ?>