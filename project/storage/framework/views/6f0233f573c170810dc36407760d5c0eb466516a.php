<?php $__env->startSection('content'); ?>


    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>

                        <div class="row">

                            <div class="form-group col-md-3 mb-3">
                                <label class="col-form-label"><?php echo e(__('Bank Image'), false); ?></label>

                                <div id="image-preview" class="image-preview"
                                    style="background-image:url(<?php echo e(asset('assets/images/'.@$gateway->image->image ), false); ?>);">
                                    <label for="image-upload" id="image-label"><?php echo e(__('Choose File'), false); ?></label>
                                    <input type="file" name="bank_image" id="image-upload" />
                                </div>

                            </div>

                            <div class="col-md-9">

                                <div class="row">

                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Bank Name'), false); ?></label>
                                        <input type="text" name="name"  class="form-control"
                                            value="<?php echo e(@$gateway->gateway_parameters->name, false); ?>">

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Bank Account Number'), false); ?></label>
                                        <input type="text" name="account_number"
                                            class="form-control"
                                            value="<?php echo e(@$gateway->gateway_parameters->account_number, false); ?>">

                                    </div>



                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Bank Routing Number'), false); ?></label>
                                        <input type="text" name="routing_number" 
                                            class="form-control"
                                            value="<?php echo e(@$gateway->gateway_parameters->routing_number, false); ?>">

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Bank Branch Name'), false); ?></label>
                                        <input type="text" name="branch_name" 
                                            class="form-control" value="<?php echo e(@$gateway->gateway_parameters->branch_name, false); ?>">

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Gateway Currency'), false); ?></label>
                                        <input type="text" name="gateway_currency" class="form-control site-currency"
                                            
                                            value="<?php echo e($gateway->gateway_parameters->gateway_currency ?? '', false); ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label><?php echo e(__('Conversion Rate'), false); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <?php echo e("1 ".$gs->site_currency.' = ', false); ?>

                                                </div>
                                            </div>
                                            <input type="text" class="form-control currency" name="rate"  value="<?php echo e(number_format(@$gateway->rate,4) ?? 0, false); ?>">

                                            <div class="input-group-append">
                                                <div class="input-group-text append_currency">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group col-md-6">
                                        <label><?php echo e(__('Charge'), false); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <?php echo e($gs->site_currency, false); ?>

                                                </div>
                                            </div>
                                            <input type="text" class="form-control currency" name="charge"  value="<?php echo e(number_format(@$gateway->charge,4) ?? 0, false); ?>">

                                            
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for=""><?php echo e(__('Allow as payment method'), false); ?></label>

                                        <select name="status" id="" class="form-control">

                                            <option value="1" <?php echo e(@$gateway->status ? 'selected' : '', false); ?>><?php echo e(__('Yes'), false); ?>

                                            </option>
                                            <option value="0" <?php echo e(@$gateway->status ? '' : 'selected', false); ?>><?php echo e(__('No'), false); ?>

                                            </option>


                                        </select>

                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="card">

                                    <div class="card-header bg-primary">

                                        <h6 class="text-white"><?php echo e(__('User Proof Requirements'), false); ?></h6>

                                        <button type="button" class="btn btn-dark ml-auto payment"> <i
                                                class="fa fa-plus text-white"></i>
                                            <?php echo e(__('Add Payment Requirements'), false); ?></button>

                                    </div>

                                    <div class="card-body">

                                        <div class="row payment-instruction">

                                            <div class="col-md-12 user-data">
                                                <div class="row">


                                                    <?php if(@$gateway->user_proof_param != null): ?>


                                                        <?php $__currentLoopData = $gateway->user_proof_param; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $param): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                                                            <div class="col-md-12 user-data">
                                                                <div class="form-group">
                                                                    <div class="input-group mb-md-0 mb-4">
                                                                        <div class="col-md-4">
                                                                            <label><?php echo e(__('Field Name'), false); ?></label>
                                                                            <input
                                                                                name="user_proof_param[<?php echo e($key, false); ?>][field_name]"
                                                                                class="form-control form_control"
                                                                                type="text"
                                                                                value="<?php echo e($param['field_name'], false); ?>"
                                                                                required >
                                                                        </div>
                                                                        <div class="col-md-3 mt-md-0 mt-2">
                                                                            <label><?php echo e(__('Field Type'), false); ?></label>
                                                                            <select
                                                                                name="user_proof_param[<?php echo e($key, false); ?>][type]"
                                                                                class="form-control">
                                                                                <option value="text"
                                                                                    <?php echo e($param['type'] == 'text' ? 'selected' : '', false); ?>>
                                                                                    <?php echo e(__('Input Text'), false); ?>

                                                                                </option>
                                                                                <option value="textarea"
                                                                                    <?php echo e($param['type'] == 'textarea' ? 'selected' : '', false); ?>>
                                                                                    <?php echo e(__('Textarea'), false); ?>

                                                                                </option>
                                                                                <option value="file"
                                                                                    <?php echo e($param['type'] == 'file' ? 'selected' : '', false); ?>>
                                                                                    <?php echo e(__('File upload'), false); ?>

                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-3 mt-md-0 mt-2">
                                                                            <label><?php echo e(__('Field Validation'), false); ?></label>
                                                                            <select
                                                                                name="user_proof_param[<?php echo e($key, false); ?>][validation]"
                                                                                class="form-control">
                                                                                <option value="required"
                                                                                    <?php echo e($param['validation'] == 'required' ? 'selected' : '', false); ?>>
                                                                                    <?php echo e(__('Required'), false); ?>

                                                                                </option>
                                                                                <option value="nullable"
                                                                                    <?php echo e($param['validation'] == 'nullable' ? 'selected' : '', false); ?>>
                                                                                    <?php echo e(__('Optional'), false); ?>

                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-2 text-right my-auto ">

                                                                            <button
                                                                                class="btn btn-danger btn-lg remove w-100 mt-4"
                                                                                type="button">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                    <?php endif; ?>
                                                </div>

                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100">
                                <?php echo e(__('Update Bank Information'), false); ?></button>
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
        $(function() {
            'use strict'

            var i = <?php echo e(count($gateway->user_proof_param ?? []), false); ?>;

            $('.payment').on('click', function() {

                var html = `
                <div class="col-md-12 user-data">
                    <div class="form-group">
                        <div class="input-group mb-md-0 mb-4">
                            <div class="col-md-4">
                                <label><?php echo e(__('Field Name'), false); ?></label>
                                <input name="user_proof_param[${i}][field_name]" class="form-control form_control" type="text" value="" required >
                            </div>
                            <div class="col-md-3 mt-md-0 mt-2">
                                <label><?php echo e(__('Field Type'), false); ?></label>
                                <select name="user_proof_param[${i}][type]" class="form-control">
                                    <option value="text" > <?php echo e(__('Input Text'), false); ?> </option>
                                    <option value="textarea" > <?php echo e(__('Textarea'), false); ?> </option>
                                    <option value="file"> <?php echo e(__('File upload'), false); ?></option>
                                </select>
                            </div>
                            <div class="col-md-3 mt-md-0 mt-2">
                                <label><?php echo e(__('Field Validation'), false); ?></label>
                                <select name="user_proof_param[${i}][validation]"
                                        class="form-control">
                                    <option value="required"> <?php echo e(__('Required'), false); ?></option>
                                    <option value="nullable">  <?php echo e(__('Optional'), false); ?></option>
                                </select>
                            </div>
                            <div class="col-md-2 text-right my-auto">
                              
                                    <button class="btn btn-danger btn-lg remove w-100 mt-4" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                
                            </div>
                        </div>
                    </div>
                </div>`;
                $('.payment-instruction').append(html);

                i++;

            })

            $(document).on('click', '.remove', function() {
                $(this).closest('.user-data').remove();
            });

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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\videopro\project\resources\views/admin/gateways/bank.blade.php ENDPATH**/ ?>