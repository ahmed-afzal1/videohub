<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\TvShow;
use App\Models\Genre;
use App\Models\VideoLanguage;
use App\helper\Helper;
use Validator;
use App;
use DB;

class ShowController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }



    public function Index()
    {
        $shows = TvShow::orderBy('id','desc')->paginate();
       return view('admin.show.index',compact('shows'));
    }

     public function create()
     {
         $categories = Genre::where('status',1)->get();

         return view('admin.show.create',compact('categories'));
     }

     public function store(Request $request)
     {

        $request->validate([
            'show_name' => 'required',
            'description' => 'required|min:10',
            'relase_date' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        ]);



        $model = TvShow::create([
            'show_name' => $request->show_name,
            'relase_date' =>  $request->relase_date,
            'genre_id' => $request->genre_id,
            'access' => $request->access,
            'description' => $request->description,
            'slug' => Helper::slug($request->show_name. ' '.$request->release_date)
        ]);
       
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::MakeImage($image,$location,$model);
            
        }else{
            Helper::NullImage($model);
        }
        
        $notify[] = ['success',__('Show Created Successfully')];

        return back()->withNotify($notify);
     }



     public function edit($id)
     {
        $categories = Genre::where('status',1)->get();
        
        $data = TvShow::findOrFail($id);
        return view('admin.show.edit',compact('categories','data'));
     }



     public function update(Request $request , $id)
     {
       $request->validate([
        'show_name' => 'required',
        'description' => 'required|min:10',
        'relase_date' => 'required',
        'image' => 'mimes:jpeg,jpg,png',
       ]);
       
        $model = TvShow::findOrFail($id);

        $model->update([
            'show_name' => $request->show_name,
            'relase_date' =>  $request->relase_date,
            'genre_id' => $request->genre_id,
            'access' => $request->access,
            'description' => $request->description,
            'slug' => Helper::slug($request->show_name. ' '.$request->release_date)
        ]);

        
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($image,$location,$model);
        }
        
        $notify[] = ['success',__('Show Created Successfully')];

        return back()->withNotify($notify);
     }



        public function destroy($id)
        {
           
            $model = TvShow::findOrFail($id);
            $location = base_path('../assets/images/');
            Helper::Deletes($model,$location);
            $model->delete();
            $notify[] = ['success',__('Show Deleted Successfully')];

        return back()->withNotify($notify);
           
        }


        public function status(Request $request, $id)
        {
            $show = TvShow::findOrFail($id);

            $show->status = $request->status;

            $show->save();


           return response()->json(['success' => 'Status Updated Success']);
        }






}
