@extends('layouts.admin')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">{{ __('Update') }} <a href="{{ route('admin-subscription-plan-index') }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ __('Update') }}</li>
   </ol>
</div>
<div class="card mb-4">
   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">{{ __('Update') }}</h6>
   </div>
   <div class="card-body">
      <div class="loader" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
      <form action="{{route('admin-subscription-plan-update',$data->id)}}" method="POST">
         @csrf
         @include('includes.form-success')
         <div class="form-group">
            <label for="plan_name">{{ __('Plan Name') }}</label>
            <input type="text" class="form-control" name="plan_name" value="{{$data->plan_name}}" required id="plan_name" placeholder="{{ __('Plan Name') }}" >
         </div>
         <div class="form-group">
            <label for="price">{{ __('Plan Price') }}</label>
            <input type="text" class="form-control" name="price" value="{{$data->price}}" required id="price" placeholder="{{ __('Plan Price') }}" >
         </div>
         <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <textarea id="area1" class="form-control " name="description" placeholder="{{ __('Description') }}">{{$data->description}}</textarea>
         </div>
         @php
             $feature_value = json_decode($data->feature_value,true)
         @endphp
         <div id="feature_section">
          
         @foreach (json_decode($data->feature_key,true) as $key => $item)

         <div class="feature-area position-relative">
          <span class="remove-btn language-remove"><i class="fas fa-times"></i></span>
          <div class="row">
             <div class="col-sm-6 col-md-6 col-6">
                <div class="form-group">
                   <input type="text" class="form-control" name="feature_key[]" placeholder="{{__('Enter Feature Name')}}" value="{{$item}}">
                </div>
             </div>
             <div class="col-sm-6 col-md-6 col-6">
                <div class="form-group">
                   <select class="form-control  mb-3" name="feature_value[]">
                      <option value="yes" {{$feature_value[$key] == 'yes' ? 'selected' : ''}}>{{__('Yes')}}</option>
                      <option value="no" {{$feature_value[$key] == 'no' ? 'selected' : ''}}>{{__('No')}}</option>
                   </select>
                </div>
             </div>
          </div>
        </div>
          @endforeach
         </div>
         <div class="more-field text-center">
          <button type="button" class="btn btn-info" id="add_more_feature">{{ __('Add More') }}</button>
      </div>
         <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
      </form>
   </div>
</div>
@endsection

