<?php $__env->startSection('content'); ?>
    <input type="hidden" id="headerdata" value="<?php echo e(__('Season'), false); ?>">
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Season'), false); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Season'), false); ?></li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">

            <div class="col-lg-12">
                <div class="card mb-4">

                    <div class="card-header">
                        <a class="btn btn-primary" href="<?php echo e(route('admin-session-create'), false); ?>">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add New Season'), false); ?>

                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive p-3">

                            <table class="table align-items-center table-flush ">
                                <thead class="thead-light">
                                    <tr>
                                        <th><?php echo e(__('Season Name'), false); ?></th>
                                        <th><?php echo e(__('Show'), false); ?></th>
                                        <th><?php echo e(__('Image'), false); ?></th>
                                        <th><?php echo e(__('Action'), false); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($data->session_title, false); ?></td>
                                            <td><?php echo e($data->show->show_name, false); ?></td>
                                            <td class="w-25">
                                                <img src="<?php echo e($data->image->image ? asset('assets/images/' . $data->image->image) : asset('assets/images/noimages.png'), false); ?>"
                                                    alt="" class="w-50 rounded">
                                            </td>
                                            <td>
                                                <div class="action-list"><a
                                                        href="<?php echo e(route('admin-session-edit', $data->id), false); ?>"
                                                        class="btn btn-primary btn-sm mr-2"> <i
                                                            class="fas fa-edit mr-1"></i><?php echo e(__('Edit'), false); ?></a><a
                                                        href="javascript:;"
                                                        data-href=" <?php echo e(route('admin-session-delete', $data->id), false); ?>"
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/session/index.blade.php ENDPATH**/ ?>