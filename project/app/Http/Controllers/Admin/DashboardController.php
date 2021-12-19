<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Validator;

class DashboardController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:admin');

    }

    public function index()
    {
        $pageTitle = __('Dashboard');
        return view('admin.dashboard', compact('pageTitle'));
    }

    public function profile()
    {
        $pageTitle = __('Profile Setting');
        $data = Auth::guard('admin')->user();
        return view('admin.profile', compact('data', 'pageTitle'));
    }

    public function profileupdate(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'username' => 'required',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png',
        ]);

        $admin = auth()->guard('admin')->user();

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $name = time() . $file->getClientOriginalName();
            $file->move('assets/images/', $name);
            if ($admin->photo != null) {
                if (file_exists(base_path('../assets/images/' . $admin->photo))) {
                    unlink(base_path('../assets/images/' . $admin->photo));
                }
            }
            $admin->photo = $name;
        }

        $admin->email = $request->email;
        $admin->name = $request->username;
        $admin->save();

        $notify[] = ['success', 'Admin Profile Update Success'];

        return redirect()->back()->withNotify($notify);
    }

    public function passwordreset()
    {
        $data = Auth::guard('admin')->user();
        return view('admin.password', compact('data'));
    }

    public function changepass(Request $request)
    {

        $request->validate([
            'old_pass' => 'required',
            'password' => 'required|confirmed',
        ]);

        $admin = auth()->guard('admin')->user();

        if (Hash::check($request->old_pass, $admin->password)) {

            $admin->password = bcrypt($request->password);
            $admin->save();

        } else {
            $notify[] = ['error', 'Old Password Does not Match'];

            return back()->withNotify($notify);
        }

        $notify[] = ['success', 'Password changed Successfully'];

        return back()->withNotify($notify);

    }


    public function clearCache()
    {
        Artisan::call('cache:clear');

        $notify[] = ['success', 'Cached Clear Successfully'];

        return back()->withNotify($notify);
    }

    public function customCss()
    {
        $pageTitle = 'Custom Css';

        $content = file_get_contents('assets/admin/css/mode.css');

        return view('admin.css.index',compact('pageTitle','content'));
    }

    public function updateCss(Request $request)
    {
       file_put_contents('assets/admin/css/mode.css', $request->css);

       $notify[] = ['success', 'Successfully Changed Css'];

        return back()->withNotify($notify);
    }
}
