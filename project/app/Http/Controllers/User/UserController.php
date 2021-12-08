<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Hash;
use DB;
use App;
use App\Models\Review;
use App\Models\Favarite;
use App\Models\Order;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $order = Order::where('user_id',Auth::user()->id)->orderby('id','desc')->first();
        $user = Auth::user();  
        return view('user.dashboard',compact('user','order'));
    }



    public function profile()
    {
        $user = Auth::user();  
        return view('user.profile',compact('user'));
    }

    public function profileupdate(Request $request)
    {
   
        $rules = [
            'photo' => 'mimes:jpeg,jpg,png,svg',
            'email' => 'unique:users,email,'.Auth::user()->id
            ];

            $custom = [
                'email.unique' => __('This email has already been taken.')
            ];
    $validator = Validator::make($request->all(), $rules,$custom);
    
    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }

        //--- Validation Section Ends
        $input = $request->all();  
        $data = Auth::user();        
            if ($file = $request->file('photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/user-image/',$name);
                if($data->photo != null)
                {
                    if (file_exists(base_path('../assets/images/user-image/'.$data->photo))) {
                        unlink(base_path('../assets/images/user-image/'.$data->photo));
                    }
                }            
            $input['photo'] = $name;
            } 
        $data->update($input);
        $msg = __('Successfully updated your profile');
        return response()->json($msg);
    }

    public function resetform()
    {
        return view('user.reset');
    }

    public function reset(Request $request)
    {
      
        $user = Auth::user();
        if ($request->cpass){
            if (Hash::check($request->cpass, $user->password)){
                if ($request->newpass == $request->renewpass){
                    $input['password'] = Hash::make($request->newpass);
                }else{
                    return response()->json(array('errors' => [ 0 => __('Confirm password does not match.') ]));     
                }
            }else{
                return response()->json(array('errors' => [ 0 => __('Current password Does not match.') ]));   
            }
        }
        $user->update($input);
        $msg = __('Successfully change your password');
        return response()->json($msg);
    }


    public function Favarite()
    {
        $data = Favarite::where('user_id',Auth::user()->id)->simplePaginate(10);
        return view('user.favarite',compact('data'));
    }


    public function Reviews()
    {
        $data = Review::where('user_id',Auth::user()->id)->simplePaginate(10);
        return view('user.reviews',compact('data'));
    }


    public function ReviewDelete($id)
    {
        Review::findOrFail($id)->delete();
        $mgs = __('Data Delete Successfully!.');
        return back()->with('success',$mgs);
    }

}
