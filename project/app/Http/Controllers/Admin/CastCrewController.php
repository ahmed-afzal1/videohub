<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CastCrew;
use App\helper\Helper;
use Validator;

class CastCrewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }


    public function index()
    {
        $datas = CastCrew::orderBy('id','desc')->get();
        return view('admin.cast_crew.index',compact('datas'));
    }

    //*** GET Request
    public function create()
    {
        return view('admin.cast_crew.create');
    }

    //*** POST Request
    public function store(Request $request)
    {
       
        //--- Validation Section
       $request->validate([
        'name' => 'required',
        'bio' => 'required|min:10',
        'image' => 'mimes:jpeg,jpg,png,', 
       ]);
      
        
        $input = $request->all();

        $data = new CastCrew;
        $id = $data->create($input)->id;
  
        $model= CastCrew::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::makeImage($image,$location,$model);
        }else{
            Helper::NullImage($model);
        }

        //--- Redirect Section
        return back()->withSuccess(__('New Data Added Successfully.'));
        //--- Redirect Section Ends
    }

    //*** GET Request
    public function edit($id)
    {
        $data = CastCrew::findOrFail($id);
        return view('admin.cast_crew.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
     
        $request->validate([
            'name' => 'required',
            'bio' => 'required|min:10',
            'image' => 'mimes:jpeg,jpg,png,', 
        ]);

        //--- Logic Section
        $data = CastCrew::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        //--- Logic Section Ends
        
        $model = CastCrew::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($image,$location,$model); 
        }

        return back()->with('success',__('Data Updated Successfully.'));
    }

    //*** GET Request Delete
    public function destroy($id)
    {
        $data = CastCrew::findOrFail($id);
        if (file_exists(base_path('../assets/images/'.$data->image->image))) {
            unlink(base_path('../assets/images/'.$data->image->image));
        }
        $data->delete();
        //--- Redirect Section
        return back()->with('success',__('Data Deleted Successfully.'));
        //--- Redirect Section Ends
    }
}
