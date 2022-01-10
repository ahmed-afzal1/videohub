<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">

                    <button class="btn btn-primary add">
                        <i class="fas fa-plus"></i> <?php echo e(__('Add Subscription Features'), false); ?>

                    </button>

                </div>
                <div class="table-responsive p-3">

                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__('Sl'), false); ?></th>
                                <th><?php echo e(__('Feature'), false); ?></th>
                                <th><?php echo e(__('status'), false); ?></th>
                                <th><?php echo e(__('Action'), false); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration, false); ?></td>
                                    <td><?php echo e($feature->features, false); ?></td>
                                    <td>

                                        <select name="status" class="form-control status"
                                            data-url="<?php echo e(route('admin.plan.features.status', $feature->id), false); ?>">

                                            <option value="1" <?php echo e($feature->status ? 'selected' : '', false); ?>>
                                                <?php echo e(__('Active'), false); ?></option>
                                            <option value="0" <?php echo e($feature->status ? '' : 'selected', false); ?>>
                                                <?php echo e(__('Deactive'), false); ?></option>

                                        </select>
                                    </td>



                                    <td>
                                        <div class="action-list"><button
                                                data-href="<?php echo e(route('admin.plan.features.update', $feature->id), false); ?>"
                                                data-feature="<?php echo e($feature->features, false); ?>"
                                                class="btn btn-primary btn-sm mr-2 edit"> <i
                                                    class="fas fa-pen mr-1"></i><?php echo e(__('Edit'), false); ?></button>

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

    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?php echo e(route('admin.plan.features.store'), false); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Add Feature'), false); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="form-group col-md-12">

                                <label for="features"><?php echo e(__('Feature'), false); ?></label>
                                <input type="text" name="features" class="form-control"
                                    placeholder="<?php echo e(__('Subscription Plan Featured'), false); ?>" id="features">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close'), false); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Create Feature'), false); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?php echo e(route('admin.plan.features.store'), false); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Update Feature'), false); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="form-group col-md-12">

                                <label for="features"><?php echo e(__('Feature'), false); ?></label>
                                <input type="text" name="features" class="form-control"
                                    placeholder="<?php echo e(__('Subscription Plan Featured'), false); ?>" id="features">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close'), false); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Update Feature'), false); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>



<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        'use strict'
        $(function() {
            $('.add').on('click', function() {
                const modal = $('#add');

                modal.modal('show')
            })

            $('.edit').on('click', function() {
                const modal = $('#edit');
                modal.find('form').attr('action', $(this).data('href'))
                modal.find('#features').val($(this).data('feature'))
                modal.modal('show')
            })

            $('.status').on('change', function() {

                let status = $(this).val();
                let url = $(this).data('url');
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo e(csrf_token(), false); ?>",
                    },
                    url: url,
                    data: {
                        status: status
                    },
                    method: "POST",
                    success: function(response) {
                        iziToast.success({
                            message: response.success,
                            position: 'topRight'
                        });
                    }
                })
            })
        })
    </script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/subscription_plan/features.blade.php ENDPATH**/ ?>