<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Classes\GeniusMailer;
use App\Http\Controllers\Controller;
use App\Models\AdminUserConversation;
use App\Models\AdminUserMessage;
use App\Models\Generalsetting;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Review;
use App\Models\User;
use App\Models\UserNotification;
use Auth;
use DataTables;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    //*** GET Request
    public function index()
    {
		$pageTitle = 'Manage Users';
		$users = User::latest()->paginate();
        return view('admin.user.index',compact('pageTitle','users'));
    }

    //*** GET Request
    public function show($id)
    {
		$pageTitle= 'Edit User';
        $data = User::findOrFail($id);
        return view('admin.user.show', compact('data','pageTitle'));
    }

    //*** GET Request
    public function ban(Request $request , $id)
    {
        $user = User::findOrFail($id);
        $user->status = $request->status;
        $user->update();

		return response()->json(['success'=>'User Data Updated Successfully']);

    }

    //*** GET Request
    public function edit($id)
    {
		$pageTitle= 'Edit User';
        $data = User::findOrFail($id);
        return view('admin.user.edit', compact('data','pageTitle'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {

        //--- Validation Section
        $rules = [
            'photo' => 'mimes:jpeg,jpg,png,svg',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends
        $user = User::findOrFail($id);
        $data = $request->all();

        if ($file = $request->file('photo')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('assets/images/users', $name);
            if ($user->photo != null) {
                if (file_exists(public_path() . '/assets/images/users/' . $user->photo)) {
                    unlink(public_path() . '/assets/images/users/' . $user->photo);
                }
            }
            $data['photo'] = $name;
        }

        $user->update($data);
        $notify[] = ['success', 'User Data Updated Successfully'];
		return back()->withNotify($notify);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $notification = UserNotification::where('user_id', $id)->get();
        $AdminUserConversation = AdminUserConversation::where('user_id', $id)->get();

        $message3 = Notification::where('user_id', $id)->get();
        $order = Order::where('user_id', $id)->get();
        $usertonotification = AdminUserMessage::where('user_id', $id)->get();

        if ($AdminUserConversation) {
            foreach ($AdminUserConversation as $conversation) {
                AdminUserMessage::where('conversation_id', $conversation->id)->delete();
                $conversation->delete();
            }
        }

        if ($usertonotification) {
            foreach ($usertonotification as $usf) {
                $usf->delete();
            }
        }

        if ($order) {
            foreach ($order as $o) {
                Notification::where('order_id', $o->id)->delete();
                $o->delete();
            }
        }

        if ($message3) {
            foreach ($message3 as $m1) {
                $m1->delete();
            }
        }

        if ($notification) {
            foreach ($notification as $noty) {
                $noty->delete();
            }
        }

        $user->delete();

        $mgs = __('Data Delete Successfully...!');
        return response()->json($mgs);

    }

    public function Review($id)
    {
        return view('admin.user.review', compact('id'));
    }

    public function ReviewDelete($id)
    {
        Review::find($id)->delete();
        $mgs = __('Data Delete Successfully...!');
        return response()->json($mgs);
    }

    public function ReviewDatatables($id)
    {
        $datas = Review::where('user_id', $id)->get();
        //--- Integrating This Collection Into Datatables
        return DataTables::of($datas)
            ->editColumn('video_id', function (Review $data) {
                $image = $data->video->image->image != null ? url('assets/images/movie-image/' . $data->video->image->image) : url('assets/images/noimage.png');
                return '<a href="' . route('admin.movie.edit', $data->video->id) . '"><img src="' . $image . '" alt="Image" width="100"></a>';
            })

            ->editColumn('review_value', function (Review $data) {

                $a = $data->review_value >= 1 ? 'style=color:blue;' : '';
                $b = $data->review_value >= 2 ? 'style=color:blue;' : '';
                $c = $data->review_value >= 3 ? 'style=color:blue;' : '';
                $d = $data->review_value >= 4 ? 'style=color:blue;' : '';
                $e = $data->review_value >= 5 ? 'style=color:blue;' : '';
                $f = $data->review_value >= 6 ? 'style=color:blue;' : '';
                $g = $data->review_value >= 7 ? 'style=color:blue;' : '';
                $h = $data->review_value >= 8 ? 'style=color:blue;' : '';
                $i = $data->review_value >= 9 ? 'style=color:blue;' : '';
                $j = $data->review_value >= 10 ? 'style=color:blue;' : '';

                return '<a ' . $a . ' title="Give 1 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $b . ' title="Give 2 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $c . ' title="Give 3 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $d . ' title="Give 4 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $e . ' title="Give 5 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $f . ' title="Give 6 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $g . ' title="Give 7 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $h . ' title="Give 8 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $i . ' title="Give 9 stars" class="cursor-pointer" >★</a>' .
                    '<a ' . $j . ' title="Give 10 stars class="cursor-pointer"  >★</a>';

            })

            ->addColumn('action', function (Review $data) {
                return '<div class="action-list"><a href="javascript:;" data-href="' . route('admin-user-review-delete', $data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>';
            })
            ->rawColumns(['action', 'video_id', 'review_value'])
            ->toJson(); //--- Returning Json Data To Client Side
    }

    //*** POST Request
    public function usercontact(Request $request)
    {
        $data = 1;
        $admin = Auth::guard('admin')->user();
        $user = User::where('email', '=', $request->to)->first();
        $to = $request->to;
        $subject = $request->subject;
        $from = $admin->email;
        $msg = "Email: " . $from . "<br>Message: " . $request->message;

        if (empty($user)) {
            $data = 0;
            return response()->json($data);
        }

        $gs = Generalsetting::findOrFail(1);
        if ($gs->is_smtp == 1) {

            $datas = [
                'to' => $to,
                'subject' => $subject,
                'body' => $msg,
            ];
            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($datas);
        } else {
            $headers = "From: " . $gs->from_name . "<" . $gs->from_email . ">";
            mail($to, $subject, $msg, $headers);
        }

        $mgs = __('Message Send Successfully.');
        return response()->json($mgs);

    }



}
