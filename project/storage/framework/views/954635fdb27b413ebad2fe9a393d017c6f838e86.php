<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Success Messages'), false); ?> <a href="<?php echo e(url()->previous(), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Genarel Setting'), false); ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Success Messages'), false); ?></li>
      </ol>
  </div>


  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Success Messages'), false); ?></h6>
    </div>
    <div class="card-body">
      <form>
        <div class="form-group row">
          <label for="title" class="col-sm-3 col-form-label"><?php echo e(__('Subscribe Success'), false); ?> *</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="website_title" id="title" placeholder="<?php echo e(__('Subscribe Success'), false); ?>">
          </div>
        </div>
       
        <div class="form-group row mb-5">
          <label for="tawk_id" class="col-sm-3 col-form-label"><?php echo e(__('Subscribe Error'), false); ?> *</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="tawk_id" name="tawk_id" placeholder="<?php echo e(__('Subscribe Error'), false); ?>">
          </div>
        </div>

        <div class="form-group row mb-5">
          <label for="success_title" class="col-sm-3 col-form-label"><?php echo e(__('Order Success Title '), false); ?> *</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="success_title" rows="5" placeholder="<?php echo e(__('Order Success Title '), false); ?>"></textarea>
          </div>
        </div>

        <div class="form-group row mb-5">
          <label for="success_text" class="col-sm-3 col-form-label"><?php echo e(__('Order Success Text'), false); ?> *</label>
          <div class="col-sm-9">
            <textarea class="form-control" id="success_text" rows="5" placeholder="<?php echo e(__('Order Success Text'), false); ?>"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
          <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/generalsetting/success.blade.php ENDPATH**/ ?>