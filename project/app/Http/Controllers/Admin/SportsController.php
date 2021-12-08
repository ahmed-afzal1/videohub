<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SportsVideo;
use App\Models\SportsCategory;
use App\helper\Helper;
use Carbon\Carbon;
use App;
use DataTables;
use Validator;
use DB;

class SportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }


    public function Index()
    {
        return view('admin.sports_videos.index');
    }

    // Datatables Method

    public function Datatables()
    {
         //--- Returning Json Data To Client Side
         $datas = SportsVideo::orderBy('id','desc')->get();
         //--- Integrating This Collection Into Datatables
         return DataTables::of($datas)
                        ->addColumn('status', function(SportsVideo $data) {
                            $class = $data->status == 1 ? 'btn-success' : 'btn-danger';
                            $status = $data->status == 1 ? 'Activated' : 'Deactivated';
                            return '<div class="btn-group">
                                        <button class="btn '.$class.' btn-sm dropdown-toggle statuscheck-parent" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            '.$status.'
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item StatusCheck" data-val="1" href="javascript:;" data-href="'.route('admin-sports-video-status',['id1' => $data->id, 'id2' => 1]).'">Active</a>
                                            <a class="dropdown-item StatusCheck" data-val="0" href="javascript:;" data-href="'.route('admin-sports-video-status',['id1' => $data->id, 'id2' => 0]).'">Deactive</a>
                                        </div>
                                    </div>';
                        })
                        ->addColumn('image', function(SportsVideo $data) {
                            $video_image = $data->image->image != null ? url('assets/images/sports-videos-images/'.$data->image->image):url('assets/images/noimage.png');
                            return '<img src="' . $video_image . '" alt="Image" width="100"> ';
                        })

                        ->editColumn('sports_category_id', function(SportsVideo $data) {
                            return  $data->SportsCategory->name;
                        })
                       

                        ->addColumn('action', function(SportsVideo $data) {
                            return '<div class="action-list"><a href="'.route('admin-sports-video-edit',$data->id).'" class="btn btn-info"> <i class="fas fa-edit mr-1"></i>'. __('Edit') .'</a><a href="javascript:;" data-href="'.route('admin-sports-video-delete',$data->id).'" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger ml-2"><i class="fas fa-trash-alt"></i></a></div>';
                        }) 
                        ->rawColumns(['action','image','status','sports_category_id'])
                        ->toJson(); 
                    }

    public function create()
    {
        $categories = SportsCategory::where('status',1)->get();
        return view('admin.sports_videos.create',compact('categories'));
    }




    public function Processing(Request $request)
    {
        $rules = [
        	'video_name' => 'mimes:mp4,mov,ogg,webm,WEBM,MP4,AVI,wmv,avi,flv,FLV,MKV,mkv'
        		 ];
        $customs = [
        	'video_name.mimes' => __('This Video File Not Supported'),
        	];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        if($request->hasFile('video_name')){
            $process = Helper::ProcessingVideo($request->video_name,$request->is_video);
            return response()->json($process);
        }else{
            return response()->json(array('errors' => [__('File Not Found!.')]));
        }

       
    }


    public function store(Request $request)
    {
        if($request->video_type == 'file'){
            if(!$request->hasFile('video_name')){
                return response()->json(array('errors' => [__('File Not Found.!')]));
            }
        }else{
            if(!$request->video){
                return response()->json(array('errors' => [__('Video Link Not Found.!')]));
            }elseif(strlen($request->video) < 15){
                return response()->json(array('errors' => [__('Please enter valid url.!')]));
            }
        }
        // validation
        $rules = [
            'title' => 'required',
            'sports_category_id' => 'required',
            'description' => 'required|min:10',
            'video_image' => 'mimes:jpeg,jpg,png',
            ];

            $customs = [
                'title.required' => __('Title field is required.'),
                'sports_category_id.required' => __('select one sports category.'),
                'description.min' => __('Minimun 10 cherecter description required.'),
                'video_image.mimes' => __('The image format must be a file of type: jpeg,jpg,png'),
            ];


        $validator = Validator::make($request->all(), $rules,$customs);
        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $input               = $request->all();
        $input['tag']        = Helper::TagFormat($request->tag);
        $input['video_type'] = $request->video_type;
        $location            = 'assets/videos/sports-videos';
        $input['video']      = Helper::VideoUpload($request->all(),$location);
        $input['slug'] = Helper::slug($request->title. ' '.$request->release_date);
        if($request->release_date){
            $input['release_date'] = $request->release_date;
        }else{
            $input['release_date'] = Carbon::now();
        }

        // dd($input);
        $id = SportsVideo::create($input)->id;
        $model = SportsVideo::findOrFail($id);

        if($request->hasFile('video_image')){
            $file = $request->video_image;
            $location = base_path('../assets/images/sports-videos-images/');
            Helper::MakeImage($file,$location,$model);
        }else{
            Helper::NullImage($model);
        }

        Helper::tempClear();
        $mgs = __('Data Added Successfully!.');
        return response()->json($mgs);
    }


   



    public function edit($id)
    {
        $categories = SportsCategory::where('status',1)->get();
        $data = SportsVideo::findOrFail($id);
        return view('admin.sports_videos.edit',compact('data','categories'));
    }


    public function update(Request $request , $id)
    {

        $data = SportsVideo::findOrFail($id);
        $input = $request->all();

        if($request->hasFile('video_image')){
            $rules = [
                'video_image' => 'mimes:jpeg,jpg,png,',
            ];
            $customs = [
                'video_image.mimes' => __('Image Format Not Supported!.')
            ];
            
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
              return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
            }
        }


        if($request->video_type == 'file'){
            if($data->video_type == 'url'){
                if(!$request->hasFile('video_name')){
                    return response()->json(array('errors' => [__('Video File Not Found!')]));
                }
            }
            $input['video'] = $data->video;
        }


        if($request->video_type == 'url'){
            if(!$request->video){
                return response()->json(array('errors' => [__('Video Link Not Found.!')]));
            }elseif(strlen($request->video) < 15){
                return response()->json(array('errors' => [__('Please enter valid url.!')]));
            }
        }

        // validation..................
        $rules = [
            'title' => 'required',
            'sports_category_id' => 'required',
            'description' => 'required|min:10',
            ];

            $customs = [
                'title.required' => __('Title field is required.'),
                'sports_category_id.required' => __('select one sports category.'),
                'description.min' => __('Minimun 10 cherecter description required.'),
            ];



        $validator = Validator::make($request->all(), $rules,$customs);
        if ($validator->fails()) {
        return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }


        
        if($request->video_type == 'file'){
            if($request->hasFile('video_name')){
                $files = $request->all();
                $location = 'assets/videos/sports-videos';
                $input['video'] = Helper::VideoUpdate($files,$location,$data);
            } 
        }else{
            $location = 'assets/videos/sports-videos';
        if(file_exists(base_path('../'.$location.'/'.$data->video))){
            unlink(base_path('../'.$location.'/'.$data->video));
            }
        }
      

        if($request->hasFile('video_image')){
            $file = $request->video_image;
            $location = base_path('../assets/images/sports-videos-images/');
            Helper::ImageUpdate($file,$location,$data);
        }

        $input['tag'] = Helper::TagFormat($request->tag);
        $input['slug'] = Helper::slug($request->title. ' '.$request->release_date);
        $data->update($input);
        Helper::tempClear();

     $mgs = __('Data Update Successfully.!');
     return response()->json($mgs);
        
    }


    public function destroy($id)
    {
        $data = SportsVideo::findOrFail($id);

        if($data->video_type == 'file'){
            if(file_exists(base_path('../assets/videos/episode-videos/'.$data->video))){
                unlink(base_path('../assets/videos/episode-videos/'.$data->video));
            }
        }

        if(file_exists(base_path('../assets/images/episode-image/'.$data->image->image))){
           unlink(base_path('../assets/images/episode-image/'.$data->image->image));
        }

        $data->delete();

        $mgs = __('Data Delete Successfully.!');
        return response()->json($mgs);
    }


     //*** GET Request Status
     public function status($id1,$id2)
     {
         $data = SportsVideo::findOrFail($id1);
         $data->status = $id2;
         $data->update();
    //--- Redirect Section
       $msg = __('Status Updated Successfully.');
       return response()->json($msg);
       //--- Redirect Section Ends
     }

}
