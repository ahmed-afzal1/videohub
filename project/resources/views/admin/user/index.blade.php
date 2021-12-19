 @extends('layouts.admin')

 @section('content')

     <div class="row">

         <div class="col-md-12">

             <div class="card">

                 <div class="card-header">
                     <h4></h4>

                     <div class="card-header-form">
                         <form method="GET" action="{{ route('admin.user.search') }}">
                             <div class="input-group">
                                 <input type="text" class="form-control" name="search">
                                 <div class="input-group-btn">
                                     <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                 </div>
                             </div>
                         </form>
                     </div>


                 </div>


                 <div class="card-body p-0">
                     <div class="table-responsive">
                         <table class="table table-striped">
                             <thead>
                                 <tr>

                                     
                                     <th>{{ __('Full Name') }}</th>
                                     <th>{{ __('Username') }}</th>
                                     <th>{{ __('Phone') }}</th>
                                     <th>{{ __('Email') }}</th>
                                     <th>{{ __('Address') }}</th>
                                     <th>{{ __('Status') }}</th>
                                     <th>{{ __('Action') }}</th>

                                 </tr>

                             </thead>

                             <tbody>

                                 @forelse($users as $key => $user)

                                     <tr>
                                       
                                         <td>{{ __($user->name) }}</td>
                                         <td>{{ __($user->username) }}</td>
                                         <td>{{ __($user->phone) }}</td>
                                         <td>{{ __($user->email) }}</td>
                                         <td>{{ __(@$user->address) }}</td>
                                         <td>

                                             <select name="status" class="form-control status"
                                                 data-url="{{ route('admin-user-ban', $user->id) }}">

                                                 <option value="1" {{ $user->status ? 'selected' : '' }}>
                                                     {{ __('Active') }}</option>
                                                 <option value="0" {{ $user->status ? '' : 'selected' }}>
                                                     {{ __('Deactive') }}</option>

                                             </select>
                                         </td>

                                         <td>

                                             <a href="{{ route('admin-user-edit', $user) }}" class="btn btn-primary"><i
                                                     class="fa fa-pen"></i></a>


                                         </td>


                                     </tr>
                                 @empty


                                     <tr>

                                         <td class="text-center" colspan="100%">{{ __('No users Found') }}</td>

                                     </tr>



                                 @endforelse



                             </tbody>
                         </table>
                     </div>
                 </div>

                 @if ($users->hasPages())
                     <div class="card-footer">

                         {{ $users->links('admin.partials.paginate') }}

                     </div>
                 @endif

             </div>



         </div>


     </div>


 @endsection

 @push('script')

     <script>
         $('.status').on('change', function() {

             let status = $(this).val();
             let url = $(this).data('url');
             $.ajax({
                 headers: {
                     "X-CSRF-TOKEN": "{{ csrf_token() }}",
                 },
                 url: url,
                 data: {
                     status: status
                 },
                 method: "POST",
                 success: function(response) {
                     iziToast.success({
                         message: response.success,
                         position: 'topRight'
                     });
                 }
             })
         })
     </script>


 @endpush
