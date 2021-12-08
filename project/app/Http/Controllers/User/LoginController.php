<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;
use DB;
use App;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'userLogout']]);
    }

    public function showLoginForm()
    {
      // $this->code_image();

      // $url = url()->previous();
      // $url = (explode('/',$url));
      // if(in_array('movie', $url)){
      //    session(['link' => url()->previous()]);
      // }elseif(in_array('pricing',$url) == true){
        
      //   session(['link' => url()->previous()]);
      // }

     
      
      return view('user.login');
    }

    public function login(Request $request)
    {

      if(Session::has('link')){
        $redirectUrl = Session::get('link');
        Session::forget('link');
      } else{
        $redirectUrl = route('user-dashboard');
      }
        
        //--- Validation Section
        $rules = [
                  'email'   => 'required|email',
                  'password' => 'required'
                ];

        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

      // Attempt to log the user in
      if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location

        // Check If Email is verified or not
          if(Auth::guard('web')->user()->email_verified == 'No')
          {
            Auth::guard('web')->logout();
            return response()->json(array('errors' => [ 0 => __('Your Email is not Verified!') ]));   
          }
          return response()->json($redirectUrl);
      }

      // if unsuccessful, then redirect back to the login with the form data
          return response()->json(array('errors' => [ 0 => __("Credentials Doesn\'t Match !") ]));     
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    // Capcha Code Image
    private function  code_image()
    {
        $actual_path = str_replace('project','',base_path());
        $image = imagecreatetruecolor(200, 50);
        $background_color = imagecolorallocate($image, 255, 255, 255);
        imagefilledrectangle($image,0,0,200,50,$background_color);

        $pixel = imagecolorallocate($image, 0,0,255);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixel);
        }

        $font = base_path('../assets/front/fonts/NotoSans-Bold.ttf');
        // dd($font);
        $allowed_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $length = strlen($allowed_letters);
        $letter = $allowed_letters[rand(0, $length-1)];
        // dd($letter);
        $word='';
        //$text_color = imagecolorallocate($image, 8, 186, 239);
        $text_color = imagecolorallocate($image, 0, 0, 0);
        $cap_length=6;// No. of character in image
        for ($i = 0; $i< $cap_length;$i++)
        {
          // dd($font);
            $letter = $allowed_letters[rand(0, $length-1)];
            imagettftext($image, 25, 1, 35+($i*25), 35, $text_color, $font, $letter);
            $word.=$letter;
        }
        $pixels = imagecolorallocate($image, 8, 186, 239);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixels);
        }
        session(['captcha_string' => $word]);
        imagepng($image, base_path('../assets/images/capcha_code.png'));
    }

}
