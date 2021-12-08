<?php $__env->startSection('content'); ?>
<input type="hidden" id="headerdata" value="<?php echo e(__('HEIGHLIGHT MOVIE')); ?>">
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Movies')); ?></h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Movie')); ?></li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
              <?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
          <div class="table-responsive p-3">
            <a class="btn btn-primary" href="<?php echo e(route('admin.movie.create')); ?>">
              <i class="fas fa-plus"></i> <?php echo e(__('Add New Movie')); ?>

          </a>
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th><?php echo e(__('Title')); ?></th>
                  <th><?php echo e(__('Image')); ?></th>
                  <th><?php echo e(__('Release Date')); ?></th>
                  <th><?php echo e(__('Access')); ?></th>
                  <th><?php echo e(__('Action')); ?></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>
                    <?php echo e($data->title); ?>

                  </td>
                  <td>
                    <img src="<?php echo e($data->image->image ? asset('assets/images/'.$data->image->image) : asset('assets/images/noimages.png')); ?>" alt="">
                  </td>
                  <td>
                    <?php echo e($data->relase_date); ?>

                  </td>
                  <td>
                    <?php echo e($data->access); ?>

                  </td>
                  <td>
                    <div class="action-list"><a  href="<?php echo e(route('admin.movie.edit',$data->id)); ?>" class="btn btn-primary btn-sm mr-2"> <i class="fas fa-edit mr-1"></i><?php echo e(__('Edit')); ?></a><a href="javascript:;" data-href=" <?php echo e(route('admin.movie.delete',$data->id)); ?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a><a href="javascript:;" data-href="<?php echo e(route('admin.move.heighlight',$data->id)); ?>" class="btn btn-primary btn-sm mr-2 heighight ml-2" data-toggle="modal" data-target="#modal1"> <i class="fas fa-star mr-1"></i><?php echo e(__('Highlight')); ?></a></div>
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



  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="submit-loader">
               <img src="<?php echo e(asset('assets/images/'.$gs->admin_loader)); ?>" alt="">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
            </div>
        </div>
    </div>
  </div>



<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Delete')); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center"><?php echo e(__('You are about to delete this Category. Everything under this category will be deleted')); ?>.</p>
                <p class="text-center"><?php echo e(__('Do you want to proceed?')); ?></p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
                <a class="btn btn-danger btn-ok"><?php echo e(__('Delete')); ?></a>
            </div>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/movie/index.blade.php ENDPATH**/ ?>