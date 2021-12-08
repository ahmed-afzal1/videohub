@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{ __('Create') }} <a href="{{ route('admin-page-index') }}" class="btn back-btn btn-sm">{{__('Back')}}</a></h1>    
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Dashboaard') }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ __('Create') }}</li>
  </ol>
</div>
@include('includes.form-success')
<div class="card mb-4">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">{{ __('Create') }}</h6>
  </div>
  <div class="card-body">

    <div class="loader" style="background: url({{asset('assets/images/genarel-settings/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
    <form action="{{route('admin-page-store')}}" method="POST">
      @csrf
      
        <div class="form-group">
          <label for="title">{{ __('Title') }}</label>
        <input type="text" class="form-control" name="title" required id="title" placeholder="{{ __('Title') }}" value="">
        </div>
        <div class="form-group">
          <label for="slug">{{ __('Slug') }}</label>
        <input type="text" class="form-control" name="slug" required id="slug" placeholder="{{ __('Slug') }}" value="">
        </div>
  
        <div class="form-group">
              <label for="area1">{{ __('details') }}</label>
              <textarea id="area1" class="form-control " name="details"></textarea>
          </div>
  
          <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" name="seocheck"  id="customCheck1" >
              <label class="custom-control-label" for="customCheck1"> {{ __('Allow Page SEO') }}</label>
            </div>
  
          <div class="meta_description d-none }} mb-3">
              <div class="form-group"> 
                  <label for="meta_tag">{{ __('Meta Tag') }}</label>
                  <input type="text" class="form-control" name="meta_tag" id="meta_tag" placeholder="{{ __('Meta Tag') }}" value="">
                </div>
  
              <div class="form-group">
                  <label for="meta_description">{{ __('Meta Description') }}</label>
                  <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="{{ __('Meta Description') }}" value="">
                </div>
          </div>
  
  
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
  </form>
  </div>
</div>
@endsection


@section('script')
       <script>
          $('#meta_tag').tagify();
        $('#customCheck1').on('click',function(){
            if($('#customCheck1').prop('checked') == true){
                $('.meta_description').removeClass('d-none');
                
            }else{
                $('.meta_description').addClass('d-none');
            }
        })

    </script>
@endsection