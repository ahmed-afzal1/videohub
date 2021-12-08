<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminUserConversation;
use App\Models\Notification;
use App\Models\AdminUserMessage;
use App\Models\Generalsetting;
use App\Classes\GeniusMailer;
use Auth;
use DataTables;
use Session;
use DB;
use App;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
         // Set Global PageSettings
         $this->middleware(function ($request, $next) {
            // Set Global Language
            if (Session::has('language')) 
            {
                $this->language = DB::table('languages')->find(Session::get('language'));
            }
            else
            {
                $this->language = DB::table('languages')->where('is_default','=',1)->first();
            }  
            App::setlocale($this->language->name);
    
            // Set Popup
            return $next($request);
        });
    }



    public function index(){
        $id    = Auth::user()->id;
        $convs = AdminUserConversation::where('user_id',$id)->paginate(8);
        return view('user.message.index',compact('convs'));
    }

    //***User Admin conversation page
    public function message($id)
    {
      
        $conv = AdminUserConversation::findOrfail($id);
        return view('user.message.create',compact('conv'));                 
    }


    public function messageload($id)
    {
            $conv = AdminUserConversation::findOrfail($id);
            return view('user.load.message',compact('conv'));                 
    }   
    
      //*** create Admin user conversation page
      public function postmessage(Request $request)
      {
          $msg               = new AdminUserMessage(); 
          $input             = $request->all();
          $input['user_id']  = Auth::user()->id;
          $msg->fill($input)->save();


          //--- Redirect Section    
        $notification = new Notification;
        $notification->conversation_id = $request->conversation_id;
        $notification->user_id = Auth::user()->id;
        $notification->save();


          $sms = __('Message Send');
          return response()->json($sms);
      }

      public function adminmessagedelete($id)
    {
            $conv = AdminUserConversation::findOrfail($id);
            if($conv->messages->count() > 0)
            {
                foreach ($conv->messages as $key) {
                    $key->delete();
                }
            }

            
            if($conv->notifications->count() > 0)
            {
                foreach ($conv->notifications as $key) {
                    $key->delete();
                }
            }

            if($conv->adminnotifications->count() > 0)
            {
                foreach ($conv->adminnotifications as $key) {
                    $key->delete();
                }
            }
            
            $conv->delete();
            return redirect()->back()->with('success',__('Message Deleted Successfully'));                 
    }



    public function adminusercontact(Request $request)
    {
        $data = 1;
        $user = Auth::guard('web')->user();        
        $gs = Generalsetting::findOrFail(1);
        $ps =  DB::table('pagesettings')->find(1);
        $subject = $request->subject;
        $to = $ps->contact_email;
        $from = $user->email;
        $msg = "Email: ".$from."\nMessage: ".$request->message;
        if($gs->is_smtp == 1)
        {
            $data = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];

        $mailer = new GeniusMailer();
        $mailer->sendCustomMail($data);
        }
        else
        {
            $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
            mail($to,$subject,$msg,$headers);
        }

    $conv = AdminUserConversation::where('user_id','=',$user->id)->where('subject','=',$subject)->first();
        if(isset($conv)){
            $msg = new AdminUserMessage();
            $msg->conversation_id = $conv->id;
            $msg->message = $request->message;
            $msg->user_id = $user->id;
            $msg->save();
            return response()->json(__('Message Send!'));   
        }
        else{
            $message = new AdminUserConversation();
            $message->subject = $subject;
            $message->user_id= $user->id;
            $message->message = $request->message;
            $message->save();

            $notification = new Notification;
            $notification->conversation_id = $message->id;
            $notification->user_id = Auth::user()->id;
            $notification->save();

            $msg = new AdminUserMessage();

            $msg->conversation_id = $message->id;
            $msg->message = $request->message;
            $msg->user_id = $user->id;
            $msg->save();
            return response()->json(__('Message Send'));   
        }
    }


}
