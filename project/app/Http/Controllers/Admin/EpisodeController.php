<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\TvShow;
use App\Models\TvSession;
use App\helper\Helper;
use Carbon\Carbon;
use App;
use DataTables;
use Validator;
use DB;

class EpisodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function Index()
    {
        $datas = Episode::orderBy('id', 'desc')->get();
        return view('admin.episode.index', compact('datas'));
    }

    public function create()
    {
        $tvshows = TvShow::where('status', 1)->get();
        return view('admin.episode.create', compact('tvshows'));
    }




    public function Processing(Request $request)
    {

        $rules = [
            'video_name' => 'mimes:mp4,mov,ogg,webm,WEBM,MP4,AVI,avi,flv,FLV,MKV,mkv, | max:300000'
        ];
        $customs = [
            'video_name.mimes' => __('This Video File Not Supported'),
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        if ($request->hasFile('video_name')) {
            $process = Helper::ProcessingVideo($request->video_name, $request->is_video);
            return response()->json($process);
        } else {
            return response()->json(array('errors' => [__('File Not Found!.')]));
        }
    }


    public function store(Request $request)
    {
        if ($request->video_type == 'file') {
            if (!$request->hasFile('video_name')) {
                return response()->json(array('errors' => [__('File Not Found.!')]));
            }
        } else {
            if (!$request->video) {
                return response()->json(array('errors' => [__('Video Link Not Found.!')]));
            } elseif (strlen($request->video) < 15) {
                return response()->json(array('errors' => [__('Please enter valid url.!')]));
            }
        }

        $request->validate([
            'title' => 'required',
            'tv_show_id' => 'required',
            'tv_session_id' => 'required',
            'description' => 'required|min:10',
            'video_image' => 'mimes:jpeg,jpg,png',
        ]);

        $location = 'assets/videos';

        $model = Episode::create([
            'title' => $request->title,
            'tv_show_id' => $request->tv_show_id,
            'tv_session_id' => $request->tv_session_id,
            'description' => $request->description,
            'video_image' => $request->video_image,
            'tag' => Helper::TagFormat($request->tag),
            'video_type' => $request->video_type,
            'video' => Helper::VideoUpload($request->all(), $location),
            'slug' => Helper::slug($request->title . ' ' . $request->release_date),
            'release_date' => $request->release_date ?? now(),
            'access' => $request->access,
            'duration' => $request->duration
        ]);

        if ($request->hasFile('video_image')) {
            $file = $request->video_image;
            $location = base_path('../assets/images/');
            Helper::MakeImage($file, $location, $model);
        } else {
            Helper::NullImage($model);
        }

        Helper::tempClear();

        $notify[] = ['success', __('Episode Created Successfull')];

        return back()->withNotify($notify);
    }


    public function GetSessionData($id)
    {
        $data =  TvSession::where('status', 1)->where('show_id', $id)->get();
        return response()->json(['data' => $data]);
    }



    public function edit($id)
    {
        $tvshows = TvShow::where('status', 1)->get();
        $tvsession =  TvSession::where('status', 1)->get();
        $data = Episode::findOrFail($id);
        return view('admin.episode.edit', compact('data', 'tvshows', 'tvsession'));
    }


    public function update(Request $request, $id)
    {

        $data = Episode::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('video_image')) {
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


        if ($request->video_type == 'file') {
            if ($data->video_type == 'url') {
                if (!$request->hasFile('video_name')) {
                    return response()->json(array('errors' => [__('Video File Not Found!')]));
                }
            }
            $input['video'] = $data->video;
        }


        if ($request->video_type == 'url') {
            if (!$request->video) {
                return response()->json(array('errors' => [__('Video Link Not Found.!')]));
            } elseif (strlen($request->video) < 15) {
                return response()->json(array('errors' => [__('Please enter valid url.!')]));
            }
        }

        // validation..................
        $request->validate([
            'title' => 'required',
            'tv_show_id' => 'required',
            'tv_session_id' => 'required',
            'description' => 'required|min:10',
        ]);


        if ($request->video_type == 'file') {
            if ($request->hasFile('video_name')) {
                $files = $request->all();
                $location = 'assets/videos';
                $input['video'] = Helper::VideoUpdate($files, $location, $data);
            }
        } else {
            $location = 'assets/videos/';
            if (file_exists(base_path('../' . $location . '/' . $data->video))) {
                @unlink(base_path('../' . $location . '/' . $data->video));
            }
        }


        if ($request->hasFile('video_image')) {
            $file = $request->video_image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($file, $location, $data);
        }

        $input['tag'] = Helper::TagFormat($request->tag);
        $input['slug'] = Helper::slug($request->title . ' ' . $request->release_date);

        $data->update($input);
        Helper::tempClear();

        $notify[] = ['success', __('Episode Updated Successfull')];

        return back()->withNotify($notify);
    }


    public function destroy($id)
    {
        $data = Episode::findOrFail($id);

        if ($data->video_type == 'file') {
            if (file_exists(base_path('../assets/videos/' . $data->video))) {
                @unlink(base_path('../assets/videos/' . $data->video));
            }
        }

        if (file_exists(base_path('../assets/images/' . $data->image->image))) {
            @unlink(base_path('../assets/images/' . $data->image->image));
        }

        $data->delete();

        $notify[] = ['success', __('Episode Deleted Successfull')];

        return back()->withNotify($notify);
    }


    //*** GET Request Status
    public function status(Request $request, $id)
    {
        $data = Episode::findOrFail($id);
        $data->status = $request->status;
        $data->update();
      
        $msg =['success' =>  __('Status Updated Successfully.')];
        return response()->json($msg);
        
    }
}
