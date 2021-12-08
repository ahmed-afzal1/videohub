<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SportsCategory;
use App\helper\Helper;
use DataTables;
use Validator;
use Session;
use DB;
use App;
use Image;

class SportsCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }

    //*** JSON Request
    public function datatables()
    {
          //--- Returning Json Data To Client Side
    $datas = SportsCategory::orderBy('id','desc')->get();
         //--- Integrating This Collection Into Datatables
         return DataTables::of($datas)
                            ->addColumn('status', function(SportsCategory $data) {
                                $class = $data->status == 1 ? 'btn-success' : 'btn-danger';
                                $status = $data->status == 1 ? 'Activated' : 'Deactivated';
                                return '<div class="btn-group">
                                            <button class="btn '.$class.' btn-sm dropdown-toggle statuscheck-parent" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                '.$status.'
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item StatusCheck" data-val="1" href="javascript:;" data-href="'.route('admin-sports-cat-status',['id1' => $data->id, 'id2' => 1]).'">Active</a>
                                                <a class="dropdown-item StatusCheck" data-val="0" href="javascript:;" data-href="'.route('admin-sports-cat-status',['id1' => $data->id, 'id2' => 0]).'">Deactive</a>
                                            </div>
                                         </div>';
                            })
                            ->addColumn('action', function(SportsCategory $data) {
                                return '<div class="action-list"><a href="javascript:;" data-href="' . route('admin-sports-cat-edit',$data->id) . '" class="btn btn-primary btn-sm mr-2 edit" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit mr-1"></i>'. __('Edit') .'</a><a href="javascript:;" data-href="' . route('admin-sports-cat-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>';
                            })

                            ->addColumn('image', function(SportsCategory $data) {
                                $image = $data->image->image != null? url('assets/images/sports_category_images/'.$data->image->image):url('assets/images/noimage.png');
                                return '<img src="' . $image . '" alt="Image" width="100"> ';
                            })

                            ->rawColumns(['status','action','image'])
                            ->toJson();

    //*** GET Request

     }
    public function index()
    {
        return view('admin.sports_category.index');
    }

    //*** GET Request
    public function create()
    {
        return view('admin.sports_category.create');
    }

    //*** POST Request
    public function store(Request $request)
    {
       
        //--- Validation Section
        $rules = [
            'name' => 'required',
            'slug' => 'unique:sports_categories|regex:/^[a-zA-Z0-9\s-]+$/',
            'image' => 'mimes:jpeg,jpg,png,',
            
        ];
        $customs = [
            'slug.unique' => __('This slug has already been taken.'),
            'slug.regex' => __('Slug Must Not Have Any Special Characters.'),
            'name.required' => __('This category name field is required'),
            'image.mimes' => __('The image format must be a file of type: jpeg,jpg,png'),
            ];
                 
            
        $validator = Validator::make($request->all(), $rules, $customs);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends


        //--- Logic Section
        $id = SportsCategory::insertGetId([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => 1
        ]);
        
  
        $model= SportsCategory::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/sports_category_images/');
            Helper::makeImage($image,$location,$model);
        }else{
            Helper::NullImage($model);
        }



        //--- Redirect Section
        $msg = __('New Data Added Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
    }

    //*** GET Request
    public function edit($id)
    {
        $data = SportsCategory::findOrFail($id);
        return view('admin.sports_category.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
       
        //--- Validation Section
        $rules = [
            'slug' => 'unique:sports_categories,slug,'.$id.'|regex:/^[a-zA-Z0-9\s-]+$/',
            'image' => 'mimes:jpeg,jpg,png,',
        		 ];
        $customs = [
        	'slug.unique' => __('This slug has already been taken.'),
            'slug.regex' => __('Slug Must Not Have Any Special Characters.'),
            'image.mimes' => __('The image format must be a file of type: jpeg,jpg,png'),
                ];
                
        $validator = Validator::make($request->all(), $rules, $customs);
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        //--- Validation Section Ends

        //--- Logic Section
        $data = SportsCategory::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        //--- Logic Section Ends


        $model = SportsCategory::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $location = base_path('../assets/images/sports_category_images/');
            Helper::ImageUpdate($image,$location,$model); 
        }

        //--- Redirect Section
        $msg = __('Data Updated Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
    }

      //*** GET Request Status
      public function status($id1,$id2)
      {
          $data = SportsCategory::findOrFail($id1);
          $data->status = $id2;
          $data->update();

                  //--- Redirect Section
        $msg = __('Status Updated Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
      }


    //*** GET Request Delete
    public function destroy($id)
    {
        $data = SportsCategory::findOrFail($id);
        
        $data->delete();
        //--- Redirect Section
        $msg = __('Data Deleted Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
    }
}
