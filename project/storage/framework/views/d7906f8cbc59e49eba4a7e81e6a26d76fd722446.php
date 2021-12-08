<?php $__env->startSection('style'); ?>
    <style>
      .nicEdit-panelContain {width: 99% !important;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Edit Post')); ?>

    <a href="<?php echo e(route('admin-blog-index')); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back')); ?></a>
    </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin-blog-index')); ?>"><?php echo e(__('Blog')); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Edit Post')); ?></li>
        </ol>
    </div>
    <?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="row py-3">
                    <div class="col-md-6 image-area <?php echo e($data->image->image != null ? '' : 'd-none'); ?> text-center offset-3">
                        <img src="<?php echo e($data->image->image != null ? asset('assets/images/'.$data->image->image) : ''); ?>" class="img-fluid" width="300" height="300" alt="image">
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin-blog-update',$data->id)); ?>" enctype="multipart/form-data" method="POST" >
                        <?php echo csrf_field(); ?>
                        
                        <div class="row">
                         
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="video_image"><?php echo e(__('Post Thumbnail')); ?></label>
                                    <span class="ml-3"><?php echo e(__('(support (jpeg,jpg,png))')); ?></span>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="video_image" accept="image/*">
                                        <label class="custom-file-label" for="photo"><?php echo e(__('Choose file')); ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title"><?php echo e(__('Blog Title')); ?></label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo e(__('Blog Title')); ?>" value="<?php echo e($data->title); ?>">
                        </div>

                        <div class="form-group">
                            <label for="slug"><?php echo e(__('Blog Slug')); ?></label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="<?php echo e(__('Blog Slug')); ?>" value="<?php echo e($data->slug); ?>">
                        </div>

                        <div class="form-group">
                            <label for="tag"><?php echo e(__('Tag')); ?></label>
                            <input type="text" class="form-control" id="tag" name="tags" placeholder="<?php echo e(__('Tags')); ?>" value="<?php echo e($data->tags); ?>">
                        </div>

                        <div class="form-group">
                            <label for="description"><?php echo e(__('Description')); ?></label>
                            <textarea id="area1" class="form-control nic-edit" name="description" placeholder="<?php echo e(__('Description')); ?>"><?php echo $data->description; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="source"><?php echo e(__('Source')); ?></label>
                            <input type="text" class="form-control" name="source" id="source" placeholder="<?php echo e(__('Source')); ?>" value="<?php echo e($data->source); ?>">
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="seo" <?php echo e($data->meta_tag != null || $data->meta_description != null ? 'checked' : ''); ?>>
                              <label class="custom-control-label" for="seo"> <?php echo e(__('Allow Blog SEO')); ?></label>
                            </div>
                          </div>

                        <div class="showbox d-none">
                            <div class="form-group">
                                <label for="meta_tag"><?php echo e(__('Meta Tag')); ?></label>
                                <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="<?php echo e(__('Meta Tag')); ?>" value="<?php echo e($data->meta_tag); ?>">
                            </div>

                            <div class="form-group">
                                <label for="meta_description"><?php echo e(__('Description')); ?></label>
                                <textarea  class="form-control" rows="4" id="meta_description" name="meta_description" placeholder="<?php echo e(__('Meta Description')); ?>"><?php echo e($data->meta_description); ?></textarea>
                            </div>
                          </div>
                          
                        <button type="submit" id="insertButton" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" value="1" id="isValue">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    $('#tag').tagify();
    $('#meta_tag').tagify();

    $(document).on('click','#seo',function(){
        if($(this).is(':checked')){
           $('.showbox').removeClass('d-none');
            }else{
                $('.showbox').addClass('d-none');
            }
    });

    $(document).ready(function(){
        if($('#seo').is(':checked')){
           $('.showbox').removeClass('d-none');
            }else{
                $('.showbox').addClass('d-none');
            }
    });
 </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/project/videohub/project/resources/views/admin/blog/edit.blade.php ENDPATH**/ ?>