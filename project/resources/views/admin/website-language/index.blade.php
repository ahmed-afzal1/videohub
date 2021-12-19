@extends('layouts.admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
   
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <a href="{{route('admin-lang-create')}}" class="btn btn-primary add">{{__('Create Language')}}</a>
          </div>
          
          <div class="table-responsive p-3">
         
            <table class="table align-items-center table-flush  dt-responsive" >
              <thead class="thead-light">
                <tr>
                  <th>{{ __('Languages') }}</th>
                  <th>{{ __('Options') }}</th>
                  <th>{{ __('Action') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($languages as $language)
                  <tr>
                    <td>{{$language->language}}</td>
                    <td>{{$language->is_default ? 'default' : 'Changable'}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{route('admin-lang-edit', $language->id)}}">Edit</a>
                      <button class="btn btn-danger">delete</button>
                    </td>
                  
                  </tr>                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- DELETE MODAL --}}





<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block">{{ __('Confirm Delete') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center">{{ __('You are about to delete this Category. Everything under this category will be deleted') }}.</p>
                <p class="text-center">{{ __('Do you want to proceed?') }}</p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger btn-ok">{{ __('Delete') }}</a>
            </div>

        </div>
    </div>
</div>
{{-- DELETE MODAL ENDS --}}

@endsection

@section('script')


@endsection
