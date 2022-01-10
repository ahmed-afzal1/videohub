<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Sports Videos'), false); ?></h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboard'), false); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Sports Videos'), false); ?></li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          </div>
          <?php echo $__env->make('includes.admin.form-both', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="table-responsive p-3">
            <table id="geniustable" class="table align-items-center table-flush  dt-responsive">
              <thead class="thead-light">
                <tr> 
                  <th><?php echo e(__('Title'), false); ?></th>
                  <th><?php echo e(__('Sports Category'), false); ?></th>
                  <th><?php echo e(__('Image'), false); ?></th>
                  <th><?php echo e(__('Access'), false); ?></th>
                  <th><?php echo e(__('Status'), false); ?></th>
                  <th><?php echo e(__('Action'), false); ?></th>
                </tr>
              </thead>
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

<input type="hidden" id="isValue" value="1">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script type="text/javascript">
		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '<?php echo e(route('admin-sports-video-datatables'), false); ?>',
               columns: [
						            { data: 'title', name: 'title' },
						            { data: 'sports_category_id', name: 'sports_category_id' },
						            { data: 'image', name: 'image' },
						            { data: 'access', name: 'access' },
						            { data: 'status', name: 'status' },
            			      { data: 'action', searchable: false, orderable: false }
                     ],


                language : {
                	processing: '<img class="" src="<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>">'
                },
			
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 col-md-4 text-right mb-2">'+
        '<a class="btn btn-primary " href="<?php echo e(route('admin-sports-video-create'), false); ?>">'+
        '<i class="fas fa-plus"></i> <?php echo e(__('Add New Sports Video'), false); ?>'+
        '</a>'+
        '</div>');
      });


</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/sports_videos/index.blade.php ENDPATH**/ ?>