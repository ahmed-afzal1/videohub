<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>

                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group mb-5">
                                    <label class="col-form-label"><?php echo e(__('Paypal Image'), false); ?></label>
    
                                    <div id="image-preview" class="image-preview"
                                        style="background-image:url(<?php echo e(asset('assets/images/'.@$gateway->image->image ), false); ?>);">
                                        <label for="image-upload" id="image-label"><?php echo e(__('Choose File'), false); ?></label>
                                        <input type="file" name="paypal_image" id="image-upload" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="row">


                                    <div class="form-group col-md-4">

                                        <label for=""><?php echo e(__('Gateway Currency'), false); ?></label>
                                        <input type="text" name="gateway_currency" class="form-control form_control site-currency"
                                            
                                            value="<?php echo e(@$gateway->gateway_parameters->gateway_currency ?? old('gateway_currency'), false); ?>">
                                    </div>

                                    <div class="form-group col-md-4">

                                        <label for=""><?php echo e(__('Paypal Account Mode'), false); ?></label>
                                       <select name="mode" id="" class="form-control">
                                        <option value="sandbox" <?php echo e(@$gateway->gateway_parameters->mode == 'sandbox' ? 'selected' : '', false); ?>><?php echo e(__('Sandbox'), false); ?></option>
                                        <option value="live" <?php echo e(@$gateway->gateway_parameters->mode == 'live' ? 'selected' : '', false); ?>><?php echo e(__('Live'), false); ?></option>
                                       </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label><?php echo e(__('Conversion Rate'), false); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <?php echo e("1 ".$gs->site_currency.' = ', false); ?>

                                                </div>
                                            </div>
                                            <input type="text" class="form-control currency" name="rate" value="<?php echo e(number_format($gateway->rate,4) ?? 0, false); ?>">

                                            <div class="input-group-append">
                                                <div class="input-group-text append_currency">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    

                                    <div class="form-group col-md-12">

                                        <label for=""><?php echo e(__('Paypal Client id'), false); ?></label>
                                        <input type="text" name="paypal_client_id" class="form-control"
                                            
                                            value="<?php echo e($gateway->gateway_parameters->paypal_client_id ?? old('paypal_client_id'), false); ?>">
                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for=""><?php echo e(__('Paypal Client Secret'), false); ?></label>
                                        <input type="text" name="paypal_client_secret" class="form-control"
                                            
                                            value="<?php echo e($gateway->gateway_parameters->paypal_client_secret ?? old('paypal_client_secret'), false); ?>">
                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for=""><?php echo e(__('Allow as payment method'), false); ?></label>

                                        <select name="status" id="" class="form-control">

                                            <option value="1" <?php echo e(@$gateway->status ? 'selected' : '', false); ?>><?php echo e(__('Yes'), false); ?>

                                            </option>
                                            <option value="0" <?php echo e(@$gateway->status ? '' : 'selected', false); ?>><?php echo e(__('No'), false); ?></option>


                                        </select>

                                    </div>



                                </div>



                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100"><?php echo e(__('Update Paypal Information'), false); ?></button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

    <script>
     $(function(){
         'use strict'
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "<?php echo e(__('Choose File'), false); ?>", // Default: Choose File
            label_selected: "<?php echo e(__('Update Image'), false); ?>", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

          $('.site-currency').on('keyup',function(){
            $('.append_currency').text($(this).val())
        })

        $('.append_currency').text($('.site-currency').val())
     })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/gateways/paypal.blade.php ENDPATH**/ ?>