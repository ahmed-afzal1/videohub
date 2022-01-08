<?php $__env->startSection('content'); ?>
    <input type="hidden" id="headerdata" value="<?php echo e(__('GENRE'), false); ?>">
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e($pageTitle, false); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($pageTitle, false); ?></li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a class="btn btn-primary" href="<?php echo e(route('admin-cat-create'), false); ?>"> <i class="fa fa-plus"></i>
                            <?php echo e(__('Add Genre'), false); ?></a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive p-3">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th><?php echo e(__('Name'), false); ?></th>
                                        <th><?php echo e(__('Image'), false); ?></th>
                                        <th><?php echo e(__('Slug'), false); ?></th>
                                        <th><?php echo e(__('Status'), false); ?></th>
                                        <th><?php echo e(__('Action'), false); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <tr>
                                            <td><?php echo e($data->name, false); ?></td>
                                            <td class="w-25">
                                                <img src="<?php echo e(asset('assets/images/' . $data->image->image), false); ?>"
                                                    class="rounded w-25">
                                            </td>
                                            <td><?php echo e($data->slug, false); ?></td>
                                            <td>

                                                <select name="status" id="status" data-url="<?php echo e(route('admin-cat-status', $data->id), false); ?>" class="form-control">
                                                    <option value="1" <?php echo e($data->status ? 'selected' : '', false); ?>><?php echo e(__('Active'), false); ?></option>
                                                    <option value="0" <?php echo e($data->status ? '' : 'selected', false); ?>><?php echo e(__('Inactive'), false); ?></option>
                                                </select>
                                               

                                            </td>
                                            <td>

                                               

                                                <a href="<?php echo e(route('admin-cat-edit', $data->id), false); ?>"
                                                    class="btn btn-primary"><i class="fa fa-pen"></i></a>

                                                <button data-url="<?php echo e(route('admin-cat-delete', $data->id), false); ?>"
                                                    class="btn btn-danger delete"><i class="fa fa-trash"></i></button>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <tr>

                                            <td class="text-center" colspan="100%"><?php echo e(__('No Genre Found'), false); ?></td>

                                        </tr>

                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>

                        <div class="card-footer">

                            <?php echo e($datas->links(), false); ?>


                        </div>

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
                        <p class="text-center">
                            <?php echo e(__('You are about to delete this Category. Everything under this category will be deleted'), false); ?>.
                        </p>
                        <p class="text-center"><?php echo e(__('Do you want to proceed?'), false); ?></p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Cancel'), false); ?></button>
                        <button class="btn btn-danger" type="submit"><?php echo e(__('Delete'), false); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>


<style>
input[type=checkbox]{
  height: 0;
  width: 0;
  visibility: hidden;
}

label {
  cursor: pointer;
  text-indent: -9999px;
  width: 200px;
  height: 100px;
  background: grey;
  display: block;
  border-radius: 100px;
  position: relative;
}

label:after {
  content: '';
  position: absolute;
  top: 5px;
  left: 5px;
  width: 90px;
  height: 90px;
  background: #fff;
  border-radius: 90px;
  transition: 0.3s;
}

input:checked + label {
  background: #bada55;
}

input:checked + label:after {
  left: calc(100% - 5px);
  transform: translateX(-100%);
}

label:active:after {
  width: 130px;
}


</style>


<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        'use strict'

        $(function() {
            $('.delete').on('click', function() {
                const modal = $('#confirm-delete');
                modal.find('form').attr('action', $(this).data('url'))
                modal.modal('show');
            })

            $('#status').on('change', function() {
              
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/genre/index.blade.php ENDPATH**/ ?>