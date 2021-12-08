<script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<script src="{{asset('assets/admin/js/datepicker.js')}}"></script>
<script src="{{asset('assets/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<script src="{{asset('assets/admin/js/select-2.js')}}"></script>
<script src="{{asset('assets/admin/js/nicEdit.js')}}"></script>
<script src="{{asset('assets/admin/js/ruang-admin.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{asset('assets/admin/js/notify.js')}}"></script>
<script src="{{asset('assets/admin/js/tagify.min.js')}}"></script>
<script src="{{asset('assets/admin/js/tagify.js')}}"></script>
<script src="{{asset('assets/admin/js/load.js')}}"></script>
<script src="{{asset('assets/admin/js/custom.js')}}"></script>
<script src="{{asset('assets/admin/js/myscript.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery-form.js')}}"></script>


<!-- AJAX Js-->
<script type="text/javascript">
				
    var mainurl = "{{url('/')}}";
     var admin_loader = {{ $gs->is_admin_loader }};
     var lang  = {
          'new': '{{ __('ADD NEW') }}',
          'edit': '{{ __('EDIT') }}',
          'details': '{{ __('DETAILS') }}',
          'update': '{{ __('Status Updated Successfully.') }}',
          'sss': '{{ __('Success !') }}',
          'active': '{{ __('Activated') }}',
          'deactive': '{{ __('Deactivated') }}',
      };
      
      </script>

