<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\helper\Helper;
use DataTables;
use App\Models\TvShow;
use App\Models\TvSession;
use Validator;
use App;
use DB;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }

    public function Index()
    {
        $datas = TvSession::orderBy('id','desc')->get();
       return view('admin.session.index',compact('datas'));
    }


     public function create()
     {
        $tvshows = TvShow::where('status',1)->get();
         return view('admin.session.create',compact('tvshows'));
     }

     public function store(Request $request)
     {

        $request->validate([
            'session_title' => 'required',
            'show_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,',
        ]);
        
        $model = TvSession::create([
            'session_title' => $request->session_title,
            'show_id' => $request->show_id,
            'slug' => Helper::slug($request->session_title. ' '.$request->created_at)
        ]);

        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::MakeImage($image,$location,$model);
            
        }else{
            Helper::NullImage($model);
        }
        $notify[] = ['success',__('Session Created Successfully')];
        return back()->withNotify($notify);
     }


     public function edit($id)
     {
        $tvshows = TvShow::where('status',1)->get();
        $data = TvSession::findOrFail($id);
        return view('admin.session.edit',compact('tvshows','data'));
     }


     public function update(Request $request , $id)
     {
  
     
        $request->validate([
            'session_title' => 'required',
            'show_id' => 'required',
            'image' => 'mimes:jpeg,jpg,png,',
        ]);
       
        $model = TvSession::findOrFail($id);

        $model->update([
            'session_title' => $request->session_title,
            'show_id' => $request->show_id,
            'slug' => Helper::slug($request->session_title. ' '.$request->created_at)
        ]);

        
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($image,$location,$model);
        }

         $notify[] = ['success',__('Session Updated Successfully')];
        return back()->withNotify($notify);
     }

      
        public function destroy($id)
        {
            $model = TvSession::findOrFail($id);
            $location = base_path('../assets/images/');
            Helper::Deletes($model,$location);

            $notify[] = ['success',__('Session Deleted Successfully')];
            return back()->withNotify($notify);
        }


}
