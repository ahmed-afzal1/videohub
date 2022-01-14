<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Blog'), false); ?></h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboard'), false); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Blog'), false); ?></li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12 p-0">
        <div class="card mb-4">
          <div class="card-header">
            <a class="btn btn-primary" href="<?php echo e(route('admin-blog-create'), false); ?>">
              <i class="fas fa-plus"></i> <?php echo e(__('Add New Blog'), false); ?>

            </a>
          </div>
          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="table-responsive p-3">
            
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th><?php echo e(__('Title'), false); ?></th>
                  <th><?php echo e(__('Image'), false); ?></th>
                  <th><?php echo e(__('Action'), false); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($blog->title, false); ?></td>
                      <td><img src="<?php echo e($blog->image->image ? asset('assets/images/'.$blog->image->image) : asset('assets/images/noimage.png'), false); ?>" alt="" class="img-fluid"></td>
                      <td>
                        <div class="action-list"><a  href="<?php echo e(route('admin-blog-edit',$blog->id), false); ?>" class="btn btn-primary edit mr-2"> <i class="fa fa-pen"></i></a><a href="javascript:;" data-href=" <?php echo e(route('admin-blog-delete',$blog->id), false); ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a></div>
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
                <p class="text-center"><?php echo e(__('You are about to delete this Category. Everything under this category will be deleted'), false); ?>.</p>
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


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>