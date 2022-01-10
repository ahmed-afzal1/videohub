<?php $__env->startSection('content'); ?>



    <div class="row">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">

                    <button class="btn btn-primary add"> <i class="fa fa-plus"></i> <?php echo e(__('Add Sliders'), false); ?></button>
                </div>

                <div class="card-body">

                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__('Slider Poster'), false); ?></th>
                                <th><?php echo e(__('Movie'), false); ?></th>
                                <th><?php echo e(__('Action'), false); ?></th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php $__empty_1 = true; $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                <tr>

                                    <td class="w-25">
                                    <img src="<?php echo e(asset('assets/images/poster/'.$slider->poster), false); ?>" alt="" class="w-100 rounded">
                                    </td>
                                    <td><?php echo e($slider->movie->title, false); ?></td>
                                    <td>

                                        <button class="btn btn-primary edit" data-href="<?php echo e(route('admin.frontend.slider.edit',$slider->id), false); ?>" data-slider="<?php echo e($slider, false); ?>"><?php echo e(__('Edit'), false); ?></button>
                                        <button class="btn btn-danger delete" data-href="<?php echo e(route('admin.frontend.slider.delete',$slider->id), false); ?>" data-slider="<?php echo e($slider, false); ?>"><?php echo e(__('Delete'), false); ?></button>

                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>

                                    <td class="text-center" colspan="100%"><?php echo e(__('No Data Found'), false); ?></td>

                                </tr>

                            <?php endif; ?>
                        </tbody>
                    </table>


                </div>


            </div>


        </div>

    </div>


    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Add Sliders'), false); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">


                                <div class="form-group col-md-12 mb-3">
                                    <label class="col-form-label"><?php echo e(__('Slider Poster'), false); ?></label>

                                    <div id="image-preview" class="image-preview w-100" style="background-image:url()">
                                        <label for="image-upload" id="image-label"><?php echo e(__('Choose File'), false); ?></label>
                                        <input type="file" name="image" id="image-upload" />
                                    </div>

                                </div>


                                <div class="form-group col-md-12">
                                    <label for=""><?php echo e(__('Select Movie'), false); ?></label>

                                    <select name="movie" id="" class="form-control">
                                        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($movie->id, false); ?>"><?php echo e($movie->title, false); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>


            </form>
        </div>
    </div>  
    
    
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Update Sliders'), false); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">


                                <div class="form-group col-md-12 mb-3">
                                    <label class="col-form-label"><?php echo e(__('Slider Poster'), false); ?></label>

                                    <div id="image-preview-update" class="image-preview w-100" style="background-image:url()">
                                        <label for="image-upload-update" id="image-label-update"><?php echo e(__('Choose File'), false); ?></label>
                                        <input type="file" name="image" id="image-upload-update" />
                                    </div>

                                </div>


                                <div class="form-group col-md-12">
                                    <label for=""><?php echo e(__('Select Movie'), false); ?></label>

                                    <select name="movie" id="" class="form-control">
                                        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($movie->id, false); ?>"><?php echo e($movie->title, false); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>


            </form>
        </div>
    </div> 
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('Delete Sliders'), false); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            
                            <p><?php echo e(__('Are You Sure To Delete Sliders'), false); ?></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
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

            $('.add').on('click', function() {
                const modal = $('#add');

                modal.modal('show');
            })  
            
            $('.delete').on('click', function() {
                const modal = $('#delete');
                modal.find('form').attr('action',$(this).data('href'))
                modal.modal('show');
            }) 
            
            $('.edit').on('click', function() {
                const modal = $('#edit');
                let imageUrl = "<?php echo e(asset('assets/images/poster'), false); ?>"+'/' +$(this).data('slider').poster;
                modal.find('.image-preview').css("background-image", "url(" + imageUrl + ")")
                modal.find('select[name=movie]').val($(this).data('slider').movie_id)
                modal.find('form').attr('action',$(this).data('href'))
                modal.modal('show');
            })


            $.uploadPreview({
                input_field: "#image-upload", // Default: .image-upload
                preview_box: "#image-preview", // Default: .image-preview
                label_field: "#image-label", // Default: .image-label
                label_default: "<?php echo e(__('Choose File'), false); ?>", // Default: Choose File
                label_selected: "<?php echo e(__('Update Image'), false); ?>", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });
            
            $.uploadPreview({
                input_field: "#image-upload-update", // Default: .image-upload
                preview_box: "#image-preview-update", // Default: .image-preview
                label_field: "#image-label-update", // Default: .image-label
                label_default: "<?php echo e(__('Choose File'), false); ?>", // Default: Choose File
                label_selected: "<?php echo e(__('Update Image'), false); ?>", // Default: Change File
                no_label: false, // Default: false
                success_callback: null // Default: null
            });

        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/frontend/sliders.blade.php ENDPATH**/ ?>