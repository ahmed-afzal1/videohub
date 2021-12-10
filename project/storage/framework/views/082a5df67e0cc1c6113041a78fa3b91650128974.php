<script src="<?php echo e(asset('assets/admin/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<script src="<?php echo e(asset('assets/admin/js/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/vendor/datatables/dataTables.bootstrap4.js')); ?>"></script>

<script src="<?php echo e(asset('assets/admin/js/select-2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/nicEdit.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/ruang-admin.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/bootstrap-colorpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/notify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/tagify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/tagify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/load.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/myscript.js')); ?>"></script>
<script src="<?php echo e(asset('assets/admin/js/jquery-form.js')); ?>"></script>


<!-- AJAX Js-->
<script type="text/javascript">
				
    var mainurl = "<?php echo e(url('/')); ?>";
     var admin_loader = <?php echo e($gs->is_admin_loader); ?>;
     var lang  = {
          'new': '<?php echo e(__('ADD NEW')); ?>',
          'edit': '<?php echo e(__('EDIT')); ?>',
          'details': '<?php echo e(__('DETAILS')); ?>',
          'update': '<?php echo e(__('Status Updated Successfully.')); ?>',
          'sss': '<?php echo e(__('Success !')); ?>',
          'active': '<?php echo e(__('Activated')); ?>',
          'deactive': '<?php echo e(__('Deactivated')); ?>',
      };
      
      </script>

<?php /**PATH D:\xampp\htdocs\video\videohub\project\resources\views/admin/partials/scripts.blade.php ENDPATH**/ ?>