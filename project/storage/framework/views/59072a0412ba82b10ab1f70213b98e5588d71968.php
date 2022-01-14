<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Create'), false); ?> <a href="<?php echo e(route('admin-page-index'), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a></h1>    
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboaard'), false); ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Create'), false); ?></li>
  </ol>
</div>
<?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card mb-4">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Create'), false); ?></h6>
  </div>
  <div class="card-body">

    <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
    <form action="<?php echo e(route('admin-page-store'), false); ?>" method="POST">
      <?php echo csrf_field(); ?>
      
        <div class="form-group">
          <label for="title"><?php echo e(__('Title'), false); ?></label>
        <input type="text" class="form-control" name="title" required id="title" placeholder="<?php echo e(__('Title'), false); ?>" value="">
        </div>
        <div class="form-group">
          <label for="slug"><?php echo e(__('Slug'), false); ?></label>
        <input type="text" class="form-control" name="slug" required id="slug" placeholder="<?php echo e(__('Slug'), false); ?>" value="">
        </div>
  
        <div class="form-group">
              <label for="area1"><?php echo e(__('details'), false); ?></label>
              <textarea id="area1" class="form-control " name="details"></textarea>
          </div>
  
          <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" name="seocheck"  id="customCheck1" >
              <label class="custom-control-label" for="customCheck1"> <?php echo e(__('Allow Page SEO'), false); ?></label>
            </div>
  
          <div class="meta_description d-none }} mb-3">
              <div class="form-group"> 
                  <label for="meta_tag"><?php echo e(__('Meta Tag'), false); ?></label>
                  <input type="text" class="form-control" name="meta_tag" id="meta_tag" placeholder="<?php echo e(__('Meta Tag'), false); ?>" value="">
                </div>
  
              <div class="form-group">
                  <label for="meta_description"><?php echo e(__('Meta Description'), false); ?></label>
                  <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="<?php echo e(__('Meta Description'), false); ?>" value="">
                </div>
          </div>
  
  
        <button type="submit" class="btn btn-primary"><?php echo e(__('Save'), false); ?></button>
  </form>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
       <script>
          $('#meta_tag').tagify();
        $('#customCheck1').on('click',function(){
            if($('#customCheck1').prop('checked') == true){
                $('.meta_description').removeClass('d-none');
                
            }else{
                $('.meta_description').addClass('d-none');
            }
        })

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/page/create.blade.php ENDPATH**/ ?>