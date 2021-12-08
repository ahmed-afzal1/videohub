<?php $__env->startSection('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Update')); ?> <a href="<?php echo e(url()->previous()); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a></h1>    
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboaard')); ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Update')); ?></li>
  </ol>
</div>

<div class="card mb-4">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary"><?php echo e(__('Update')); ?></h6>
  </div>
  <div class="card-body">

    <div class="loader" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader)); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
    <form id="ModalFormSubmit" action="<?php echo e(route('admin-page-update',$data->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="title"><?php echo e(__('Title')); ?></label>
        <input type="text" class="form-control" name="title" required id="title" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($data->title); ?>">
        </div>
        <div class="form-group">
          <label for="slug"><?php echo e(__('Slug')); ?></label>
        <input type="text" class="form-control" name="slug" required id="slug" placeholder="<?php echo e(__('Slug')); ?>" value="<?php echo e($data->slug); ?>">
        </div>
  
        <div class="form-group">
              <label for="area1"><?php echo e(__('details')); ?></label>
              <textarea id="area1" class="form-control " name="details"><?php echo $data->details; ?></textarea>
          </div>
  
          <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" name="seocheck"  id="customCheck1" <?php echo e($data->meta_tag != null || $data->meta_description != null ? 'checked': ''); ?>>
              <label class="custom-control-label" for="customCheck1"> <?php echo e(__('Allow Page SEO')); ?></label>
            </div>
  
          <div class="meta_description <?php echo e($data->meta_tag != null || $data->meta_description != null ? '': 'd-none'); ?> mb-3">
              <div class="form-group"> 
                  <label for="meta_tag"><?php echo e(__('Meta Tag')); ?></label>
                  <input type="text" class="form-control" name="meta_tag" id="meta_tag" placeholder="<?php echo e(__('Meta Tag')); ?>" value="<?php echo e($data->meta_tag); ?>">
                </div>
  
              <div class="form-group">
                  <label for="meta_description"><?php echo e(__('Meta Description')); ?></label>
                  <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>" value="<?php echo e($data->meta_description); ?>">
                </div>
          </div>
  
  
        <button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/page/edit.blade.php ENDPATH**/ ?>