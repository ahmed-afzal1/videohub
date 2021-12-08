<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;


class SubscriptionPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }


    public function index()
    {
        $datas = SubscriptionPlan::orderBy('id','desc')->get();
        return view('admin.subscription_plan.index',compact('datas'));
    }


     public function create()
     {
        return view('admin.subscription_plan.create');
     }


     public function store(Request $request)
     {
        $request->validate([
            'plan_name' => 'required',
            'price' => 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'description' => 'required|min:5',
        ]);
        $input = $request->all();
        $data = new SubscriptionPlan;
        $input['feature_key'] = json_encode($request->feature_key);
        $input['feature_value'] = json_encode($request->feature_value);
        $data->create($input)->id;
        $mgs = __('Data Added Successfully!.');
        return back()->with('success',$mgs);
         
     }


     public function edit($id)
     {
         $data = SubscriptionPlan::findOrFail($id);
         return view('admin.subscription_plan.edit',compact('data'));
     }


     public function update(Request $request , $id)
     {
        
       $request->validate([
        'plan_name' => 'required',
        'price' => 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
        'description' => 'required|min:5',
       ]);

        $data = SubscriptionPlan::findOrFail($id);
        $input = $request->all();
        $input['feature_key'] = json_encode($request->feature_key);
        $input['feature_value'] = json_encode($request->feature_value);
        $data->update($input);

        $msg = __('Data Update Successfully!.');
        return back()->with('success',$msg);
         
     }


     public function destroy($id)
     {
        $data = SubscriptionPlan::findOrFail($id);

        $data->delete();
        $msg = __('Data Delete Successfully!.');
        return back()->with('success',$msg);
     }


     
     public function status($id1,$id2)
      {
          $data = SubscriptionPlan::findOrFail($id1);
          $data->status = $id2;
          $data->update();
        //--- Redirect Section
        $msg = __('Status Updated Successfully.');
        return back()->with('success',$msg);
        //--- Redirect Section Ends
      }

}
