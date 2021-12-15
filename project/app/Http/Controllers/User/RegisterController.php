<?php

namespace App\Http\Controllers\User;

use App;
use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\Notification;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Session;
use Validator;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->gs = Generalsetting::first();
    }

    public function registerForm()
    {
       
        return view('front.user.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $token = md5(time() . $request->name . $request->email);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'verification_link' => $token,
            'password' => bcrypt($request->password)
        ]);


        Auth::login($user);

        Notification::create([
            'user_id' => $user->id
        ]);

      

        if ($this->gs->is_verification_email == 1) {
            $to = $request->email;

            if ($this->gs->is_smtp == 1) {
                // send Smtp Mail


            } else {
                // Send Php Mail


            }

            // return redirect()->route('')
            
        } 

        $user->status = 1;
        $user->save();

        return redirect()->intended(route('user.dashboard'));
           
        
        
        // $value = session('captcha_string');

        // if ($request->codes != $value) {
        //     return response()->json(array('errors' => [0 => __('Please enter Correct Capcha Code.')]));
        // }

        // $rules = [
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|confirmed',
        // ];

        // $custom = [
        //     'email.unique' => __('This email has already been taken.'),
        // ];
        // $validator = Validator::make($request->all(), $rules, $custom);

        // if ($validator->fails()) {
        //     return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        // }



        if ($this->gs->is_verification_email == 1) {
            $to = $request->email;
            $subject = 'Verify your email address.';
            $msg = "Dear Customer,<br> We noticed that you need to verify your email address. <a href=" . url('user/register/verify/' . $token) . ">Simply click here to verify. </a>";
            //Sending Email To Customer
            if ($this->gs->is_smtp == 1) {
                $data = [
                    'to' => $to,
                    'subject' => $subject,
                    'body' => $msg,
                ];

                $mailer = new GeniusMailer();
                $mailer->sendCustomMail($data);
            } else {
                $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
                mail($to, $subject, $msg, $headers);

            }
            return response()->json(__('We need to verify your email address. We have sent an email to') . ' ' . $to . ' ' . __('to verify your email address. Please click link in that email to continue.'));
        } else {
            $user->email_verified = 'Yes';
            $user->update();

            $notification = new Notification;
            $notification->user_id = $user->id;
            $notification->save();
            Auth::login($user);
            $data[0] = 1;
            $data[1] = redirect()->intended(route('user.dashboard'))->getTargetUrl();
            return response()->json($data);
        }

    }

    public function token($token)
    {

        $gs = Generalsetting::findOrFail(1);

        if ($gs->is_verification_email == 1) {
            $user = User::where('verification_link', $token)->first();
            if (isset($user)) {
                $user->email_verified = 'Yes';
                $user->update();

                $notification = new Notification;
                $notification->user_id = $user->id;
                $notification->save();
                Auth::guard('web')->login($user);
                return redirect()->route('user-dashboard')->with('success', __('Email Verified Successfully'));
            }
        } else {
            return redirect()->back();
        }
    }
}
