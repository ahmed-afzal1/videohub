<?php $__env->startSection('content'); ?>
<input type="hidden" id="headerdata" value="<?php echo e(__('FAQ'), false); ?>">
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Faq Page'), false); ?></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('FAQ'), false); ?></li>
      </ol>
  </div>

  <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('INFORMATION'), false); ?></h6>
              </div>
              <?php echo $__env->make('includes.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <form class="p-3">
                <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo e(__('Meta Tag'), false); ?></label>
                    <input type="email" class="form-control" name="meta_tag" placeholder="<?php echo e(__('Meta Tag'), false); ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo e(__('Meta Description'), false); ?></label>
                    <input type="password" class="form-control" id="description" name="description" placeholder="<?php echo e(__('Meta Description'), false); ?>">
                </div>
                
                <button type="submit" class="btn btn-primary"><?php echo e(__('Submit'), false); ?></button>
            </form>
          </div>
      </div>
  </div>
  <div class="row">
      <!-- Datatables -->
      <div class="col-lg-12">
          <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              </div>
              <?php echo $__env->make('includes.admin.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <div class="table-responsive p-3">
                  <table id="geniustable" class="table align-items-center table-flush  dt-responsive" id="dataTable">
                      <thead class="thead-light">
                          <tr>
                              <th width="30%"><?php echo e(__('Faq Title'), false); ?></th>
                              <th width="60%"><?php echo e(__('Faq Details'), false); ?></th>
                              <th width="30%"><?php echo e(__('Action'), false); ?></th>
                          </tr>
                      </thead>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">>
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <div class="submit-loader">
              <img src="<?php echo e(asset('assets/images/'.$gs->admin_loader), false); ?>" alt="">
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

 
<div class="modal fade" id="attribute" tabindex="-1" role="dialog" aria-labelledby="attribute" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="submit-loader">
              <img src="<?php echo e(asset('assets/images/'.$gs->admin_loader), false); ?>" alt="">
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
      <div class="modal-content">

          <div class="modal-header d-block text-center">
              <h4 class="modal-title d-inline-block"><?php echo e(__('Confirm Delete'), false); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
              <p class="text-center"><?php echo e(__('You are about to delete this Content.'), false); ?></p>
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

<?php $__env->startSection('script'); ?>

    <script type="text/javascript">
		var table = $('#geniustable').DataTable({
			   ordering: false,
               processing: true,
               serverSide: true,
               ajax: '<?php echo e(route('admin-faq-datatables'), false); ?>',
               columns: [
                        { data: 'title', name: 'title' },
                        { data: 'details', name: 'details' },
            			{ data: 'action', searchable: false, orderable: false }

                     ],
               language : {
                	processing: '<img src="<?php echo e(asset('assets/images/'.$gs->admin_loader), false); ?>">'
                }
			
            });

      	$(function() {
        $(".btn-area").append('<div class="col-sm-4 col-md-4 text-right mb-2 ">'+
        '<a class="btn btn-primary " href="javascript:;" data-href="<?php echo e(route('admin-faq-create'), false); ?>" id="add-data" data-toggle="modal" data-target="#modal1">'+
        '<i class="fas fa-plus"></i> <?php echo e(__('Add New Faq'), false); ?>'+
        '</a>'+
        '</div>');
      });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/faq/index.blade.php ENDPATH**/ ?>