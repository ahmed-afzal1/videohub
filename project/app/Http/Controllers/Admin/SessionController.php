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
        //--- Validation Section Ends

        $input = $request->all();
        $input['slug'] = Helper::slug($request->session_title. ' '.$request->created_at);
        $data = new TvSession;
        $id = $data->create($input)->id;
        $model = TvSession::find($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::MakeImage($image,$location,$model);
            
        }else{
            Helper::NullImage($model);
        }

        return back()->with('success',__('New Data Added Successfully.'));
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
        $input = $request->all();
        $model = TvSession::findOrFail($id);
        $input['slug'] = Helper::slug($request->session_title. ' '.$request->created_at);
        $model->update($input);

        
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($image,$location,$model);
        }

        return back()->with('success',__('Data Updated Successfully.'));
     }

      
        public function destroy($id)
        {
            $model = TvSession::findOrFail($id);
            $location = base_path('../assets/images/');
            Helper::Deletes($model,$location);

            return back()->with('success',__('Data Deleted Successfully.'));
        }


}
