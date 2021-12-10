<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\helper\Helper;


class GenreController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth:admin');
        
    }

    public function index()
    {
        $pageTitle = __('All Genre');

        $datas = Genre::latest()->with('image')->paginate();

        
        return view('admin.genre.index',compact('pageTitle', 'datas'));
    }

    //*** GET Request
    public function create()
    {
        $pageTitle = __('Create Genre');
        return view('admin.genre.create',compact('pageTitle'));
    }

    //*** POST Request
    public function store(Request $request)
    {
       
       $request->validate([
        'name' => 'required',
        'slug' => 'unique:genres|regex:/^[a-zA-Z0-9\s-]+$/',
        'image' => 'mimes:jpg,jpeg,png'
       ]);

       
       

        $id = Genre::insertGetId([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => 1
        ]);
        

  
        $model= Genre::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::makeImage($image,$location,$model);
        }else{
            Helper::NullImage($model);
        }

        //--- Redirect Section
        $notify[] =['success', __('New Data Added Successfully.')] ;
        
        return redirect()->route('admin-cat-index')->withNotify($notify);
    }

    //*** GET Request
    public function edit($id)
    {
        $data = Genre::findOrFail($id);
        return view('admin.genre.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'unique:genres,slug,'.$id.'|regex:/^[a-zA-Z0-9\s-]+$/',
            'image' => 'mimes:jpg,jpeg,png'
        ]);
       
        $data = Genre::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        //--- Logic Section Ends


        $model = Genre::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($image,$location,$model); 
        }

        //--- Redirect Section
        $notify[] = ['success',__('Data Updated Successfully.')];
        return redirect()->route('admin-cat-index')->withNotify($notify);
    }

      //*** GET Request Status
      public function status(Request $request, $id)
      {
          $data = Genre::findOrFail($id);
          $data->status = $request->status;
          $data->update();

            $notify = ['success' => __('Status Updated Successfull')];
            return response()->json($notify);
        
      }


    //*** GET Request Delete
    public function destroy($id)
    {
        $data = Genre::findOrFail($id);

        
        @unlink('assets/images/'.$data->image->image);
        
        $data->delete();

        $notify[] = ['success',__('Data Deleted Successfully.')];
        return redirect()->route('admin-cat-index')->withNotify($notify);
    }
}
