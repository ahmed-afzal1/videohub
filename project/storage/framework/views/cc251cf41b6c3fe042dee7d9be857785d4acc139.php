    
 
    <?php $__env->startSection('content'); ?>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo e(__('Create Post'), false); ?>

        <a href="<?php echo e(route('admin-blog-index'), false); ?>" class="btn back-btn btn-sm"><?php echo e(__('Back'), false); ?></a>
        </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard'), false); ?>"><?php echo e(__('Dashboard'), false); ?></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin-blog-index'), false); ?>"><?php echo e(__('Blog'), false); ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Create Post'), false); ?></li>
            </ol>
        </div>
        <?php echo $__env->make('includes.form-success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="row py-3">
                        <div class="col-md-12 image-area d-none text-center">
                            <img src="" class="img-fluid" alt="image">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="gocover" style="background: url(<?php echo e(asset('assets/images/genarel-settings/'.$gs->admin_loader), false); ?>) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                        <form action="<?php echo e(route('admin-blog-store'), false); ?>" enctype="multipart/form-data" method="POST" id="">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                             
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="video_image"><?php echo e(__('Post Thumbnail'), false); ?></label>
                                        <span class="ml-2 mb-2 d-block d-md-inline-block"><?php echo e(__('(support (jpeg,jpg,png))'), false); ?></span>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="video_image" accept="image/*">
                                            <label class="custom-file-label" for="photo"><?php echo e(__('Choose file'), false); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title"><?php echo e(__('Blog Title'), false); ?></label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo e(__('Blog Title'), false); ?>">
                            </div>

                            <div class="form-group">
                                <label for="slug"><?php echo e(__('Blog Slug'), false); ?></label>
                                <input type="text" class="form-control" name="slug" id="slug" placeholder="<?php echo e(__('Blog Slug'), false); ?>">
                            </div>

                            

                            <div class="form-group">
                                <label for="tag"><?php echo e(__('Tag'), false); ?></label>
                                <input type="text" class="form-control" id="tag" name="tags" placeholder="<?php echo e(__('Tags'), false); ?>">
                            </div>

                            
                            <div class="form-group">
                                <label for="description"><?php echo e(__('Description'), false); ?></label>
                                <textarea id="area1" class="form-control " name="description" placeholder="<?php echo e(__('Description'), false); ?>"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="source"><?php echo e(__('Source'), false); ?></label>
                                <input type="text" class="form-control" name="source" id="source" placeholder="<?php echo e(__('Source'), false); ?>">
                            </div>

                            
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="seo" >
                                  <label class="custom-control-label" for="seo"> <?php echo e(__('Allow Blog SEO'), false); ?></label>
                                </div>
                              </div>

                            <div class="showbox d-none">
                                <div class="form-group">
                                    <label for="meta_tag"><?php echo e(__('Meta Tag'), false); ?></label>
                                    <input type="text" class="form-control" id="meta_tag" name="meta_tag" placeholder="<?php echo e(__('Meta Tag'), false); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="meta_description"><?php echo e(__('Description'), false); ?></label>
                                    <textarea  class="form-control" rows="4" id="meta_description" name="meta_description" placeholder="<?php echo e(__('Meta Description'), false); ?>"></textarea>
                                </div>
                              </div>
                              
                            <button type="submit" id="insertButton" class="btn btn-primary"><?php echo e(__('Submit'), false); ?></button>
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
     </script>

   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/blog/create.blade.php ENDPATH**/ ?>