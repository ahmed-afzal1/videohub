<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">

                    <?php if(request()->routeIs('category.search')): ?>
                        <h4>

                            <a href="<?php echo e(route('category.index'), false); ?>" class="btn btn-primary"><i
                                    class="fa fa-arrow-left"></i>
                                <?php echo app('translator')->get('Back'); ?></a>
                        </h4>

                         <div class="card-header-form">

                            <p class="text-muted"><?php echo app('translator')->get('Search Result for '. request()->search); ?></p>

                         </div>

                    <?php else: ?>


                        <h4>

                            <button class="btn btn-primary add"><i
                                    class="fa fa-plus"></i>
                                <?php echo app('translator')->get('Add Category'); ?></button>
                        </h4>
                        <div class="card-header-form">
                            <form method="GET" action="<?php echo e(route('category.search'), false); ?>">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('Search'); ?>" name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th><?php echo app('translator')->get('Sl'); ?>.</th>
                                <th><?php echo app('translator')->get('Name'); ?></th>
                               
                                <th><?php echo app('translator')->get('Status'); ?></th>
                                <th><?php echo app('translator')->get('Action'); ?></th>
                            </tr>
                            <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>

                                    <td><?php echo e($loop->iteration, false); ?></td>
                                    <td><?php echo e($category->name, false); ?></td>
                                   

                                    <td class="w-25">
                                        <select name="status" class="form-control status"
                                                    data-url="<?php echo e(route('category.status', $category->id), false); ?>">

                                                    <option value="1" <?php echo e($category->status ? 'selected' : '', false); ?>>
                                                        <?php echo e(__('Active'), false); ?></option>
                                                    <option value="0" <?php echo e($category->status ? '' : 'selected', false); ?>>
                                                        <?php echo e(__('Deactive'), false); ?></option>

                                                </select>
                                    </td>
                                    <td>

                                        <button data-href="<?php echo e(route('category.update', $category), false); ?>" data-name="<?php echo e($category->name, false); ?>" class="btn btn-primary edit"><i
                                                class="fa fa-pen"></i></button>
                                        <a href="" data-url="<?php echo e(route('category.destroy', $category), false); ?>"
                                            class="btn btn-danger delete"><i class="fa fa-trash"></i></a>

                                    </td>


                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>

                                    <td class="text-center" colspan="100%"><?php echo app('translator')->get('No Data Found'); ?></td>

                                </tr>

                            <?php endif; ?>
                        </table>
                    </div>
                </div>
                <?php if($categories->hasPages()): ?>
                    <?php echo e($categories->links('partials.paginate'), false); ?>

                <?php endif; ?>
            </div>
        </div>
    </div>

   

    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document">
            <form action="<?php echo e(route('category.store'), false); ?>" method="POST">
                <?php echo csrf_field(); ?>
               
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo app('translator')->get('Add Category'); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">

                        <div class="form-group col-md-12">

                            <label for=""><?php echo app('translator')->get('Category Name'); ?></label>
                            <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('Category Name'), false); ?>">
                        </div>
                       
                       
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Save Category'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    
    
    <div class="modal fade" tabindex="-1" role="dialog" id="edit">
        <div class="modal-dialog" role="document">
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo app('translator')->get('Update Category'); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">

                        <div class="form-group col-md-12">

                            <label for=""><?php echo app('translator')->get('Category Name'); ?></label>
                            <input type="text" name="name" class="form-control" placeholder="<?php echo e(__('Category Name'), false); ?>">
                        </div>
                       
                       
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Update Category'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
    <div class="modal fade" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field("DELETE"); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo app('translator')->get('Delete Category'); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-danger"><?php echo app('translator')->get('Are You Sure to Delete this Category ?'); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                        <button type="submit" class="btn btn-danger"><?php echo app('translator')->get('Delete'); ?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>


    <script>
        $(function() {
            'use strict'
            $('.add').on('click', function(e) {
                e.preventDefault();
                const modal = $('#add');
               
                modal.modal('show');
            })  
            
            
            $('.edit').on('click', function(e) {
                e.preventDefault();
                const modal = $('#edit');
                modal.find('form').attr('action', $(this).data('href'));
                modal.find('input[name=name]').val($(this).data('name'));
                modal.modal('show');
            }) 
            
            $('.delete').on('click', function(e) {
                e.preventDefault();
                const modal = $('#delete');
                modal.find('form').attr('action', $(this).data('url'));
                modal.modal('show');
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/category/index.blade.php ENDPATH**/ ?>