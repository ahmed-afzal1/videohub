
@foreach($datas as $data)
<a class="dropdown-item d-flex align-items-center" href="{{ route('admin-message-show',$data->conversation_id) }}">
    <div class="dropdown-list-image mr-3">
        <img class="rounded-circle" src="{{$data->user->photo ?  asset('assets/images/user-image/'.$data->user->photo) : asset('assets/images/noimage.png') }}" style="max-width: 60px" alt="">
    </div>
    <div class="font-weight-bold">
        <div class="text-truncate">
            {{ $data->user->name }}
        </div>
        <div class="small text-gray-500">{{ \Carbon\Carbon::parse($data['created_at'])->diffForHumans() }}</div>
    </div>
</a>
@endforeach