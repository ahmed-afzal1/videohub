@if (Session::has('success'))
                  <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{ Session::get('success') }}
            </div>


@endif

@if (Session::has('unsuccess'))

            <div class="alert alert-danger alert-dismissible m-2 p-1">
                  {{ Session::get('unsuccess') }}
            </div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible validation">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<ul class="text-left">
	@foreach($errors->all() as $error)
		<li>{{$error}}</li>
	@endforeach
	</ul>
</div>
@endif