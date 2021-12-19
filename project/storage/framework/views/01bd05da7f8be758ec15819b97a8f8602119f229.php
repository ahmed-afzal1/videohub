 

 <?php $__env->startSection('content'); ?>

     <div class="row">

         <div class="col-md-12">

             <div class="card">

                 <div class="card-header">
                     <h4></h4>

                     <div class="card-header-form">
                         <form method="GET" action="<?php echo e(route('admin.user.search')); ?>">
                             <div class="input-group">
                                 <input type="text" class="form-control" name="search">
                                 <div class="input-group-btn">
                                     <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                 </div>
                             </div>
                         </form>
                     </div>


                 </div>


                 <div class="card-body p-0">
                     <div class="table-responsive">
                         <table class="table table-striped">
                             <thead>
                                 <tr>

                                     
                                     <th><?php echo e(__('Full Name')); ?></th>
                                     <th><?php echo e(__('Username')); ?></th>
                                     <th><?php echo e(__('Phone')); ?></th>
                                     <th><?php echo e(__('Email')); ?></th>
                                     <th><?php echo e(__('Address')); ?></th>
                                     <th><?php echo e(__('Status')); ?></th>
                                     <th><?php echo e(__('Action')); ?></th>

                                 </tr>

                             </thead>

                             <tbody>

                                 <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                     <tr>
                                       
                                         <td><?php echo e(__($user->name)); ?></td>
                                         <td><?php echo e(__($user->username)); ?></td>
                                         <td><?php echo e(__($user->phone)); ?></td>
                                         <td><?php echo e(__($user->email)); ?></td>
                                         <td><?php echo e(__(@$user->address)); ?></td>
                                         <td>

                                             <select name="status" class="form-control status"
                                                 data-url="<?php echo e(route('admin-user-ban', $user->id)); ?>">

                                                 <option value="1" <?php echo e($user->status ? 'selected' : ''); ?>>
                                                     <?php echo e(__('Active')); ?></option>
                                                 <option value="0" <?php echo e($user->status ? '' : 'selected'); ?>>
                                                     <?php echo e(__('Deactive')); ?></option>

                                             </select>
                                         </td>

                                         <td>

                                             <a href="<?php echo e(route('admin-user-edit', $user)); ?>" class="btn btn-primary"><i
                                                     class="fa fa-pen"></i></a>


                                         </td>


                                     </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


                                     <tr>

                                         <td class="text-center" colspan="100%"><?php echo e(__('No users Found')); ?></td>

                                     </tr>



                                 <?php endif; ?>



                             </tbody>
                         </table>
                     </div>
                 </div>

                 <?php if($users->hasPages()): ?>
                     <div class="card-footer">

                         <?php echo e($users->links('admin.partials.paginate')); ?>


                     </div>
                 <?php endif; ?>

             </div>



         </div>


     </div>


 <?php $__env->stopSection(); ?>

 <?php $__env->startPush('script'); ?>

     <script>
         $('.status').on('change', function() {

             let status = $(this).val();
             let url = $(this).data('url');
             $.ajax({
                 headers: {
                     "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>",
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
     </script>


 <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/user/index.blade.php ENDPATH**/ ?>