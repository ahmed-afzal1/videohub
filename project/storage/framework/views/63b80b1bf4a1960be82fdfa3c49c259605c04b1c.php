<?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">


        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary mb-" href="<?php echo e(route('admin-cast-crew-create'), false); ?>">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add New Cast & Crew'), false); ?>

                        </a>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive p-3">

                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="20%"><?php echo e(__('Name'), false); ?></th>
                                        <th width="15%"><?php echo e(__('Image'), false); ?></th>
                                        <th width="30%"><?php echo e(__('Bio'), false); ?></th>
                                        <th width="20%"><?php echo e(__('Status'), false); ?></th>
                                        <th width="15%"><?php echo e(__('Action'), false); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $castAndCrews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $castAndCrew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <?php echo e($castAndCrew->name, false); ?>

                                            </td>
                                            <td>
                                                <img src="<?php echo e($castAndCrew->image->image != null ? url('assets/images/' . $castAndCrew->image->image) : url('assets/images/noimage.png'), false); ?>"
                                                    class="w-75 rounded">
                                            </td>
                                            <td>
                                                <?php echo e(Str::limit($castAndCrew->bio, 50), false); ?>

                                            </td>
                                            <td>

                                                <select name="status" class="form-control status"
                                                    data-url="<?php echo e(route('admin-cast-crew-status', $castAndCrew->id), false); ?>">

                                                    <option value="1" <?php echo e($castAndCrew->status ? 'selected' : '', false); ?>>
                                                        <?php echo e(__('Active'), false); ?></option>
                                                    <option value="0" <?php echo e($castAndCrew->status ? '' : 'selected', false); ?>>
                                                        <?php echo e(__('Deactive'), false); ?></option>

                                                </select>

                                            </td>
                                            <td>
                                                <div class="action-list"><a
                                                        href="<?php echo e(route('admin-cast-crew-edit', $castAndCrew->id), false); ?>"
                                                        class="btn btn-primary btn-sm mr-2"> <i
                                                            class="fas fa-pen mr-1"></i></a>
                                                    <a href="javascript:void(0);"
                                                        data-href=" <?php echo e(route('admin-cast-crew-delete', $castAndCrew->id), false); ?>"
                                                        class="btn btn-danger btn-sm delete"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <tr>

                                            <td class="text-center" colspan="100%"><?php echo e(__('No Cast and Crew Found'), false); ?>

                                            </td>

                                        </tr>

                                    <?php endif; ?>

                                </tbody>

                            </table>
                        </div>


                        <?php if($castAndCrews->hasPages()): ?>
                            <div class="card-footer">

                                <?php echo e($castAndCrews->links(), false); ?>


                            </div>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="submit-loader">
                    <img src="<?php echo e(asset('assets/images/genarel-settings/' . $gs->admin_loader), false); ?>" alt="">
                </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
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
                        <p class="text-center">
                            <?php echo e(__('You are about to delete this Category. Everything under this category will be deleted'), false); ?>.
                        </p>
                        <p class="text-center"><?php echo e(__('Do you want to proceed?'), false); ?></p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel'), false); ?></button>
                        <button type="submit" class="btn btn-danger"><?php echo e(__('Delete'), false); ?></button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    
    <input type="hidden" value="1" id="isValue">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>


    <style>
        .dropdown-style {
            position: absolute;
            will-change: transform;
            top: 0px;
            left: 0px;
            transform: translate3d(0px, 38px, 0px);
        }

    </style>


<?php $__env->stopPush(); ?>



<?php $__env->startPush('script'); ?>

    <script>
        'use strict'

        $(function() {

            $('.delete').on('click', function() {
                const modal = $('#confirm-delete');
                modal.find('form').attr('action', $(this).data('href'))
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/cast_crew/index.blade.php ENDPATH**/ ?>