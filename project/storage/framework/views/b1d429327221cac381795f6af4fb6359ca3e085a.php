<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form action="" method="post" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="form-group col-md-6">

                                <label for=""><?php echo e(__('Email Method'), false); ?></label>
                                <select name="email_method" id="" class="form-control">

                                    <option value="php" <?php echo e($gs->email_method == 'php' ? 'selected' : '', false); ?>><?php echo e(__('PHPMail'), false); ?></option>
                                    <option value="smtp" <?php echo e($gs->email_method == 'smtp' ? 'selected' : '', false); ?>>
                                        <?php echo e(__('SMTP Mail'), false); ?></option>

                                </select>

                            </div>

                            <div class="form-group col-md-6">

                                <label for=""><?php echo e(__('Email Sent From'), false); ?></label>

                                <input type="email" name="from_email" class="form-control form_control"  value="<?php echo e($gs->email_from, false); ?>">

                            </div>

                            <div class="form-group col-md-12 smtp-config">

                                <?php if($gs->email_method == 'smtp'): ?>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <label for=""><?php echo e(__('SMTP HOST'), false); ?></label>
                                            <input type="text" name="smtp_config[smtp_host]"
                                                 class="form-control"
                                                value="<?php echo e(@$gs->smtp_config->smtp_host, false); ?>">

                                        </div>

                                        <div class="col-md-3">

                                            <label for=""><?php echo e(__('SMTP Username'), false); ?></label>
                                            <input type="text" name="smtp_config[smtp_username]"
                                                 class="form-control"
                                                value="<?php echo e(@$gs->smtp_config->smtp_username, false); ?>">

                                        </div>

                                        <div class="col-md-3">

                                            <label for=""><?php echo e(__('SMTP Password'), false); ?></label>
                                            <input type="text" name="smtp_config[smtp_password]"
                                                 class="form-control"
                                                value="<?php echo e(@$gs->smtp_config->smtp_password, false); ?>">

                                        </div>
                                        <div class="col-md-3">

                                            <label for=""><?php echo e(__('SMTP port'), false); ?></label>
                                            <input type="text" name="smtp_config[smtp_port]"
                                                 class="form-control"
                                                value="<?php echo e(@$gs->smtp_config->smtp_port, false); ?>">

                                        </div>

                                        <div class="col-md-6 mt-3">

                                            <label for=""><?php echo e(__('SMTP Encryption'), false); ?></label>
                                            <select name="smtp_config[smtp_encryption]" id="encryption" class="form-control">
                                                <option value="ssl"
                                                    <?php echo e(@$gs->smtp_config->smtp_encryption == 'ssl' ? 'selected' : '', false); ?>>
                                                    <?php echo e(__('SSL'), false); ?></option>
                                                <option value="tls"
                                                    <?php echo e(@$gs->smtp_config->smtp_encryption == 'tls' ? 'selected' : '', false); ?>>
                                                    <?php echo e(__('TLS'), false); ?></option>
                                            </select>

                                            <code class="hint"></code>

                                        </div>

                                    </div>


                                <?php endif; ?>

                            </div>

                            <div class="form-group col-md-12">

                                <button type="submit" class="btn btn-primary"><?php echo e(__('Update Email Configuration'), false); ?></button>

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

            $('select[name=email_method]').on('change', function() {
                if ($(this).val() == 'smtp') {
                    var html = `
                
                     <div class="row">

                                    <div class="col-md-3">

                                        <label for=""><?php echo e(__('SMTP HOST'), false); ?></label>
                                        <input type="text" name="smtp_config[smtp_host]"  class="form-control" value="<?php echo e(@$gs->smtp_config->smtp_host, false); ?>">

                                    </div> 
                                    
                                    <div class="col-md-3">

                                        <label for=""><?php echo e(__('SMTP Username'), false); ?></label>
                                        <input type="text" name="smtp_config[smtp_username]"  class="form-control" value="<?php echo e(@$gs->smtp_config->smtp_username, false); ?>">

                                    </div>
                                    
                                    <div class="col-md-3">

                                        <label for=""><?php echo e(__('SMTP Password'), false); ?></label>
                                        <input type="text" name="smtp_config[smtp_password]"  class="form-control" value="<?php echo e(@$gs->smtp_config->smtp_password, false); ?>">

                                    </div>
                                    <div class="col-md-3">

                                        <label for=""><?php echo e(__('SMTP port'), false); ?></label>
                                        <input type="text" name="smtp_config[smtp_port]"  class="form-control" value="<?php echo e(@$gs->smtp_config->smtp_port, false); ?>">

                                    </div> 
                                    
                                    <div class="col-md-6 mt-3">

                                        <label for=""><?php echo e(__('SMTP Encryption'), false); ?></label>
                                       <select name="smtp_config[smtp_encryption]" id="encryption" class="form-control">
                                        <option value="ssl" <?php echo e(@$gs->smtp_config->smtp_encription == 'ssl' ? 'selected' : '', false); ?>><?php echo e(__('SSL'), false); ?></option>
                                        <option value="tls" <?php echo e(@$gs->smtp_config->smtp_encription == 'tls' ? 'selected' : '', false); ?>><?php echo e(__('TLS'), false); ?></option>
                                       </select>

                                    </div>
                                
                                </div>
                
                `;

                    $('.smtp-config').html(html)

                } else {
                    $('.smtp-config').html('')
                }
            })

            $(document).on('change','#encryption',function(){
                if($(this).val() == 'ssl'){
                    $('.hint').text("For SSL please add ssl:// before host otherwise it won't work")
                }else{
                    $('.hint').text('')
                }
            })
        })
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Zaiflix Project\videohub\project\resources\views/admin/email/config.blade.php ENDPATH**/ ?>