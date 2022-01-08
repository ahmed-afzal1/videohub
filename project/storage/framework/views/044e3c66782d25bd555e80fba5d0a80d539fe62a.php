<?php $__env->startSection('content'); ?>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Episode'), false); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboard'), false); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Episode'), false); ?></li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary" href="<?php echo e(route('admin-episode-create'), false); ?>">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add New Episode'), false); ?>

                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-3">

                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">

                                    <tr>
                                        <th><?php echo e(__('Show'), false); ?></th>
                                        <th><?php echo e(__('Season'), false); ?></th>
                                        <th><?php echo e(__('Title'), false); ?></th>
                                        <th><?php echo e(__('Image'), false); ?></th>
                                        <th><?php echo e(__('Access'), false); ?></th>
                                        <th><?php echo e(__('Status'), false); ?></th>
                                        <th><?php echo e(__('Action'), false); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($data->tvShow->show_name, false); ?></td>
                                            <td><?php echo e($data->tvSeason->session_title, false); ?></td>
                                            <td><?php echo e($data->title, false); ?></td>
                                            <td class="w-25">
                                                <img src="<?php echo e($data->image->image ? asset('assets/images/' . $data->image->image) : asset('assets/images/noimages.png'), false); ?>"
                                                    alt="" class="w-25 rounded">
                                            </td>
                                            <td><?php echo e($data->access, false); ?></td>
                                            <td>

                                                <select name="status" class="form-control status"
                                                    data-url="<?php echo e(route('admin-episode-status', $data->id), false); ?>">

                                                    <option value="1" <?php echo e($data->status ? 'selected' : '', false); ?>>
                                                        <?php echo e(__('Active'), false); ?></option>
                                                    <option value="0" <?php echo e($data->status ? '' : 'selected', false); ?>>
                                                        <?php echo e(__('Deactive'), false); ?></option>

                                                </select>

                                            </td>
                                            <td>
                                                <div class="action-list"><a
                                                        href="<?php echo e(route('admin-episode-edit', $data->id), false); ?>"
                                                        class="btn btn-primary btn-sm mr-2"> <i
                                                            class="fas fa-edit mr-1"></i><?php echo e(__('Edit'), false); ?></a><a
                                                        href="javascript:;"
                                                        data-href=" <?php echo e(route('admin-episode-delete', $data->id), false); ?>"
                                                        data-toggle="modal" data-target="#confirm-delete"
                                                        class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                                </div>
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
                    <p class="text-center">
                        <?php echo e(__('You are about to delete this Category. Everything under this category will be deleted'), false); ?>.
                    </p>
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


<?php $__env->startPush('script'); ?>

    <script>
        $(function() {
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/episode/index.blade.php ENDPATH**/ ?>