<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\helper\Helper;
use Validator;
use Session;
use DB;
use App;
use Image;
use Auth;

class GenreController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth:admin');
        
    }

    //*** JSON Request
    public function datatables()
    {
          //--- Returning Json Data To Client Side
    $datas = Genre::orderBy('id','desc')->get();
         //--- Integrating This Collection Into Datatables
         return DataTables::of($datas)
                            ->addColumn('status', function(Genre $data) {
                                $class = $data->status == 1 ? 'btn-success' : 'btn-danger';
                                $status = $data->status == 1 ? __('Activated') : __('Deactivated');
                                return '<div class="btn-group">
                                            <button class="btn '.$class.' btn-sm dropdown-toggle statuscheck-parent" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                '.$status.'
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item StatusCheck" data-val="1" href="javascript:;" data-href="'.route('admin-cat-status',['id1' => $data->id, 'id2' => 1]).'">'.__('Active').'</a>
                                                <a class="dropdown-item StatusCheck" data-val="0" href="javascript:;" data-href="'.route('admin-cat-status',['id1' => $data->id, 'id2' => 0]).'">'.__('Deactive').'</a>
                                            </div>
                                         </div>';
                            })
                            ->addColumn('action', function(Genre $data) {
                                return '<div class="action-list"><a href="javascript:;" data-href="' . route('admin-cat-edit',$data->id) . '" class="btn btn-primary btn-sm mr-2 edit" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit mr-1"></i>'. __('Edit') .'</a><a href="javascript:;" data-href="' . route('admin-cat-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>';
                            })

                            ->addColumn('image', function(Genre $data) { 
                                $image = $data->image->image != null? url('assets/images/genre_image/'.$data->image->image):url('assets/images/noimage.png');
                                return '<img src="' . $image . '" alt="Image" width="100"> ';
                            })

                            ->rawColumns(['status','action','image'])
                            ->toJson();

    //*** GET Request

     }

     
    public function index()
    {
        return view('admin.genre.index');
    }

    //*** GET Request
    public function create()
    {
        return view('admin.genre.create');
    }

    //*** POST Request
    public function store(Request $request)
    {
       
       $request->validate([
        'name' => 'required',
        'slug' => 'unique:genres|regex:/^[a-zA-Z0-9\s-]+$/',
        'image' => 'mimes:jpeg,jpg,png,',
       ]);
        //--- Validation Section Ends


        //--- Logic Section
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
        $msg = __('New Data Added Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
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
            'image' => 'mimes:jpeg,jpg,png,',
        ]);
        //--- Logic Section
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
        $msg = __('Data Updated Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
    }

      //*** GET Request Status
      public function status($id1,$id2)
      {
          $data = Genre::findOrFail($id1);
          $data->status = $id2;
          $data->update();

                  //--- Redirect Section
        $msg = __('Data Updated Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
      }


    //*** GET Request Delete
    public function destroy($id)
    {
        $data = Genre::findOrFail($id);
        
        $data->delete();
        //--- Redirect Section
        $msg = __('Data Deleted Successfully.');
        return response()->json($msg);
        //--- Redirect Section Ends
    }
}
