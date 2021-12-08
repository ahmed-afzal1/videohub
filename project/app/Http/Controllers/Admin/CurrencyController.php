<?php

namespace App\Http\Controllers\Admin;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Session;
use DB;
use App;


class CurrencyController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
        
    }

 
    //*** GET Request
    public function Index()
    {
        $data = Currency::findOrFail(1);
        return view('admin.generalsetting.currencies',compact('data'));
    }

    //*** POST Request
    public function Update(Request $request, $id)
    {
        $rules = [
            'name' => 'unique:currencies,name,'.$id.'',
            'sign' => 'unique:currencies,sign,'.$id.'',
            'value' => 'required|regex:/^\d+(\.\d{1,2})?$/'
    ];

        $customs = [
            'name.unique' => __('This name has already been taken.'),
            'sign.unique' => __('This sign has already been taken.'),
            'value.regex' => __('This Value is Invalid')
        ];
        
        $validator = Validator::make($request->all(), $rules, $customs);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }                
        //--- Validation Section Ends

        //--- Logic Section
        $data = Currency::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section     
        $msg = __('Data Update Successfully...!');
        return response()->json($msg);      
        //--- Redirect Section Ends            
    }

   
}