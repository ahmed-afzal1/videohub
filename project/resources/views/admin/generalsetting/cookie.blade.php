@extends('layouts.admin')

@section('content')

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                    
                    @csrf

                    <div class="row">
                    
                    
                        <div class="form-group col-md-6">
                        
                            <label for="">{{__('Allow Cookie Modal')}}</label>

                            <select name="allow_modal" id="" class="form-control" >

                                <option value="1" {{@$cookie->allow_modal ? 'selected' : ''}}>{{__('Yes')}}</option>
                                <option value="0" {{@$cookie->allow_modal ? '' : 'selected'}}>{{__('No')}}</option>
                            
                            </select>
                        
                        </div> 
                        
                        <div class="form-group col-md-6">
                        
                            <label for="">{{__('Cookie Button Text')}}</label>

                            <input type="text" name="button_text" class="form-control"  value="{{@$cookie->button_text}}">
                        
                        </div> 
                        
                        <div class="form-group col-md-12">
                        
                            <label for="">{{__('Cookie Button Text')}}</label>

                            <textarea name="cookie_text" id="" cols="30" rows="10" class="form-control">{{__(clean(@$cookie->cookie_text))}}</textarea>
                        
                        </div> 
                        
                        <div class="form-group col-md-12">
                    

                            <button type="submit" class="btn btn-primary">{{__('Update Cookie Consent')}}</button>
                        
                        </div>
                    
                    
                    </div>
                    
                    
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
