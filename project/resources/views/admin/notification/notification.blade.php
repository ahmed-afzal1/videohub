@foreach($datas as $data)
@php
	$id = App\Models\Order::where('plan_id',$data->order_id)->first();

@endphp
<a class="dropdown-item d-flex align-items-center" href="{{ route('admin.order.view',$id->id) }}">
    <div class="dropdown-list-image mr-3">
        <img class="rounded-circle" src="{{$data->user->photo ?  asset('assets/images/user-image/'.$data->user->photo) : asset('assets/images/noimage.png') }}" style="max-width: 60px" alt="">
    </div>
    <div class="font-weight-bold">
        <div class="text-truncate">
			{{ $data->user->name }}
			<div class="small text-gray-500">{{__('New Order')}}</div>
		</div>
	
        <div class="small text-gray-500">{{ \Carbon\Carbon::parse($data['created_at'])->diffForHumans() }}</div>
    </div>
</a>
@endforeach