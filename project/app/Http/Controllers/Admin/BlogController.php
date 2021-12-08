<?php

namespace App\Http\Controllers\Admin;
use App\Models\Slider;
use App\helper\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }
   
    //*** GET Request
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->get();
        return view('admin.blog.index',compact('blogs'));
    }

    //*** GET Request
    public function create()
    {
        
        return view('admin.blog.create');
    }

    //*** POST Request
    public function store(Request $request)
    {
        $request->validate([
            'photo'      => 'required|mimes:jpeg,jpg,png,svg',
            'slug' => 'unique:blogs'
        ]);
        //--- Logic Section
        $data = new Blog();
        $input = $request->all();
      
        if (!empty($request->meta_tag)) 
         {
            $input['meta_tag'] = Helper::TagFormat($request->meta_tag) ;  
         }  
        if (!empty($request->tags)) 
         {
            $input['tags'] =  Helper::TagFormat($request->tags); 
         }

   
        $id = $data->create($input)->id;
        //--- Logic Section Ends

         $model = Blog::findOrFail($id);

         if($request->hasFile('photo')){
             $file = $request->photo;
             $location = base_path('../assets/images/');
             Helper::MakeImage($file,$location,$model);
         }else{
            Helper::NullImage($model);
         }

        //--- Redirect Section        
        $msg = __('New Data Added Successfully.');
        return back()->with('success',$msg);     
        //--- Redirect Section Ends    
    }

    //*** GET Request
    public function edit($id)
    {
        $data = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {

       
        //--- Validation Section
        $rules = [
               'photo'      => 'mimes:jpeg,jpg,png,svg',
               'slug' => 'unique:blogs,slug,'.$id
                ];

        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        //--- Logic Section
        $data = Blog::findOrFail($id);
    
        $input = $request->all();
      
        if (!empty($request->meta_tag)) 
         {
            $input['meta_tag'] = Helper::TagFormat($request->meta_tag) ;  
         }  
        if (!empty($request->tags)) 
         {
            $input['tags'] =  Helper::TagFormat($request->tags); 
         }

        $data->update($input);
        //--- Logic Section Ends

        if($request->hasFile('photo')){
            $image = $request->photo;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($image,$location,$data);
        }
        //--- Redirect Section     
        $msg = __('Data Updated Successfully.');
        return back()->with('success',$msg);      
        //--- Redirect Section Ends            
    }

    //*** GET Request Delete
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        //If Photo Doesn't Exist
        if($data->photo == null){
            $data->delete();
            //--- Redirect Section     
            $msg = __('Data Deleted Successfully.');
            return response()->json($msg);      
            //--- Redirect Section Ends     
        }
        //If Photo Exist
        if (file_exists(base_path('../assets/images/'.$data->photo))) {
            unlink(base_path('../assets/images/'.$data->photo));
        }
        $data->delete();
        //--- Redirect Section     
        $msg = __('Data Deleted Successfully.');
        return response()->json($msg);      
        //--- Redirect Section Ends     
    }
}
