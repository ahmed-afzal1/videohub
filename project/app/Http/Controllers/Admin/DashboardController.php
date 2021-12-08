<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use App\Models\Blog;
use App\Models\User;
use App\Models\Product;
use App\Models\Counter;
use Session;
use DB;
use App;


class DashboardController extends Controller
{

    public function __construct()
    {
        
        $this->middleware('auth:admin');
        
    }

    public function index()
    {
       
        return view('admin.dashboard');
    }

    public function profile()
    {
        $data = Auth::guard('admin')->user();  
        return view('admin.profile',compact('data'));
    }

    public function profileupdate(Request $request)
    {
        //--- Validation Section

        $rules =
        [
            'photo' => 'mimes:jpeg,jpg,png,svg',
            'email' => 'unique:admins,email,'.Auth::guard('admin')->user()->id
        ];


        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends
        $input = $request->all();  
        $data = Auth::guard('admin')->user();        
            if ( $request->hasFile('photo')) 
            {      
                $file = $request->photo;
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/',$name);
                if($data->photo != null)
                {
                    if (file_exists(base_path('../assets/images/'.$data->photo))) {
                        unlink(base_path('../assets/images/'.$data->photo));
                    }
                }            
            $input['photo'] = $name;
            } 
        $data->update($input);
        $msg = __('Successfully updated your profile');
        return response()->json($msg); 
    }

    public function passwordreset()
    {
        $data = Auth::guard('admin')->user();  
        return view('admin.password',compact('data'));
    }

    public function changepass(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if ($request->cpass){
            if (Hash::check($request->cpass, $admin->password)){
                if ($request->newpass == $request->renewpass){
                    $input['password'] = Hash::make($request->newpass);
                }else{
                    return response()->json(array('errors' => [ 0 => __('Confirm password does not match.') ]));     
                }
            }else{
                return response()->json(array('errors' => [ 0 => __('Current password Does not match.') ]));   
            }
        }
        $admin->update($input);
        $msg = __('Successfully change your password');
        return response()->json($msg);
    }
}