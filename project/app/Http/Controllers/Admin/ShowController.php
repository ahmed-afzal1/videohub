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
        $datas = TvShow::orderBy('id','desc')->get();
       return view('admin.show.index',compact('datas'));
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



        $input = $request->all();
        $data = new TvShow;
        $input['genre_id'] = Helper::implode($request->genre_id);
        $input['slug'] = Helper::slug($request->show_name. ' '.$request->release_date);
        $id = $data->create($input)->id;

        $model = TvShow::find($id);
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



        $input = $request->all();
        $model = TvShow::findOrFail($id);
        $input['genre_id'] = Helper::implode($request->genre_id);
        $input['slug'] = Helper::slug($request->show_name. ' '.$request->release_date);
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
           
            $model = TvShow::findOrFail($id);
            $location = base_path('../assets/images/');
            Helper::Deletes($model,$location);
            $model->delete();
            return back()->with('success',__('Data Deleted Successfully.'));
           
        }






}
