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
    public function index()
    {
        $order = Order::where('user_id',Auth::user()->id)->orderby('id','desc')->first();
        $user = Auth::user();  
        return view('front.user.dashboard',compact('user','order'));
    }


    public function profileUpdate(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
   
        $user  = auth()->user();
        
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        $notify[] = ['success' ,'Profile Updated Successfully'];
        return back()->withNotify($notify);
      
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
