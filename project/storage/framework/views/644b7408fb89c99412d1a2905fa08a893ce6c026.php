<?php $__env->startSection('content'); ?>
    <input type="hidden" id="headerdata" value="<?php echo e(__('HEIGHLIGHT MOVIE'), false); ?>">
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Movies'), false); ?></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboard'), false); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Movie'), false); ?></li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <a class="btn btn-primary" href="<?php echo e(route('admin.movie.create'), false); ?>">
                            <i class="fas fa-plus"></i> <?php echo e(__('Add New Movie'), false); ?>

                        </a>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive p-3">

                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th><?php echo e(__('Title'), false); ?></th>
                                        <th><?php echo e(__('Image'), false); ?></th>
                                        <th><?php echo e(__('Release Date'), false); ?></th>
                                        <th><?php echo e(__('Access'), false); ?></th>
                                        <th><?php echo e(__('Action'), false); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <?php echo e($movie->title, false); ?>

                                            </td>
                                            <td class="w-25">
                                                <img src="<?php echo e($movie->image->image ? asset('assets/images/' . $movie->image->image) : asset('assets/images/noimages.png'), false); ?>"
                                                    alt="" class="w-50 rounded">
                                            </td>
                                            <td>
                                                <?php echo e($movie->relase_date, false); ?>

                                            </td>
                                            <td>
                                                <?php echo e($movie->access, false); ?>

                                            </td>
                                            <td>
                                                <div class="action-list"><a
                                                        href="<?php echo e(route('admin.movie.edit', $movie->id), false); ?>"
                                                        class="btn btn-primary btn-sm mr-2"> <i
                                                            class="fas fa-edit mr-1"></i><?php echo e(__('Edit'), false); ?></a><a
                                                        href="javascript:void(0)"
                                                        data-href=" <?php echo e(route('admin.movie.delete', $movie->id), false); ?>"
                                                        
                                                        class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a><a
                                                        href="javascript:void(0)"
                                                        data-href="<?php echo e(route('admin.move.heighlight', $movie->id), false); ?>"
                                                        class="btn btn-primary btn-sm mr-2 heighight ml-2"
                                                        data-toggle="modal" data-target="#modal1"> <i
                                                            class="fas fa-star mr-1"></i><?php echo e(__('Highlight'), false); ?></a></div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <tr>

                                            <td class="text-center" colspan="100%"><?php echo e(__('No Movie Has been Created Yet'), false); ?></td>

                                        </tr>

                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>


                    </div>

                    <?php if($movies->hasPages()): ?>
                        <div class="card-footer">
                            <?php echo e($movies->links(), false); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="submit-loader">
                    <img src="<?php echo e(asset('assets/images/' . $gs->admin_loader), false); ?>" alt="">
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
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel'), false); ?></button>
                        <button class="btn btn-danger"><?php echo e(__('Delete'), false); ?></button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    

<?php $__env->stopSection(); ?>


<?php $__env->startPush('plugin'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>

    <script>
        $(document).ready(function() {

            $('.delete').on('click',function(){
                const modal = $('#confirm-delete')

                modal.find('form').attr('action', $(this).data('href'))
                modal.modal('show')
            })


            $('.select-multiple').select2();
        });
    </script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/movie/index.blade.php ENDPATH**/ ?>