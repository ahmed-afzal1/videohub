<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\helper\Helper;
use App\Models\Movie;
use App\Models\CastCrew;
use App\Models\Category;
use Carbon\Carbon;

use Validator;


class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Index()
    {
        $movies = Movie::latest()->with('image')->paginate();

        return view('admin.movie.index', compact('movies'));
    }


    public function create()
    {
        $cast_crews = CastCrew::where('status', 1)->get();
        $genres = Genre::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        return view('admin.movie.create', compact('genres', 'cast_crews','categories'));
    }

    // move store method 

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
            'producer' => 'required',
            'directors' => 'required',
            'cast' => 'required',
            'description' => 'required|min:10',
            'video_image' => 'mimes:jpeg,jpg,png',
        ]);

        $input = $request->all();
        $input['tag'] = Helper::TagFormat($request->tag);
        $input['video_type'] = $request->video_type;
        $input['category_id'] = $request->category;

        $input['producer'] = Helper::implode($request->producer);
        $input['directors'] = Helper::implode($request->directors);
        $input['cast'] = Helper::implode($request->cast);
        $location = 'assets/videos';
        $input['video'] = Helper::VideoUpload($request->all(), $location);
        $input['heighlight'] = 'new';
        $input['slug'] = Helper::slug($request->title . ' ' . $request->release_date);

        if ($request->release_date) {
            $input['release_date'] = $request->release_date;
        } else {
            $input['release_date'] = Carbon::now();
        }
        $model = Movie::create($input);


       

        if ($request->hasFile('video_image')) {
            $file = $request->video_image;
            $location = base_path('../assets/images/');
            $size = [352, 428];
            Helper::MakeImage($file, $location, $model, $size);
        } else {
            Helper::NullImage($model);
        }

        Helper::tempClear();



        $notify[] = ['success','Movie Successfully Saved'];

        return redirect()->back()->withNotify($notify);
    }


    public function Heighlight($id)
    {
        $data = Movie::findOrFail($id);
        return view('admin.movie.heighlight', compact('data'));
    }


    public function heighlightUpdate(Request $request, $id)
    {
        $input = $request->all();


        array_shift($input);
        $data = '';
        foreach ($input as $key => $v) {
            $data .= $key . ' ';
        }
        $data = array_filter(explode(' ', $data));

        Movie::findOrFail($id)->update([
            'heighlight' => implode(',', $data)
        ]);

        $notify[] = ['success','Movie  Highligted Updated Successfully'];

        return redirect()->back()->withNotify($notify);
    }



    public function edit($id)
    {
        $cast_crews = CastCrew::where('status', 1)->get();
        $genres = Genre::where('status', 1)->get();
        $data = Movie::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        return view('admin.movie.edit', compact('data', 'genres', 'cast_crews','categories'));
    }


    public function Processing(Request $request)
    {

        $rules = [
            'video_name' => 'mimes:mp4,mov,webm,WEBM,MP4,AVI,avi,flv,FLV,MKV,mkv,wmv|max:300000'
        ];
        $customs = [
            'video_name.mimes' => __('This Video File Not Supported'),
        ];

        $validator = Validator::make($request->all(), $rules, $customs);
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



    public function update(Request $request, $id)
    {
        $data = Movie::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('video_image')) {
            $rules = [
                'video_image' => 'mimes:jpeg,jpg,png,',
            ];
            $customs = [
                'video_image.mimes' => __('image file format not supported.')
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

        $request->validate([
            'title' => 'required',
            'description' => 'required|min:10',
            'cast' => 'required',
            'description' => 'required|min:10',
        ]);

        if ($request->video_type == 'file') {
            if ($request->hasFile('video_name')) {
                $files = $request->all();
                $location = 'assets/videos';
                $input['video'] = Helper::VideoUpdate($files, $location, $data);
            }
        } else {
            $location = 'assets/videos';
            if (file_exists(base_path('../' . $location . '/' . $data->video))) {
                unlink(base_path('../' . $location . '/' . $data->video));
            }
        }


        if ($request->hasFile('video_image')) {
            $size = [352, 428];
            $file = $request->video_image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($file, $location, $data, $size);
        }

        $input['tag'] = Helper::TagFormat($request->tag);
        $input['producer'] = Helper::implode($request->producer);
        $input['directors'] = Helper::implode($request->directors);
        $input['cast'] = Helper::implode($request->cast);
        $input['slug'] = Helper::slug($request->title . ' ' . $request->release_date);
        $input['category_id'] = $request->category;
        $data->update($input);
        Helper::tempClear();

        return back()->with('success', __('Data Updated Successfully.'));
    }


    public function delete($id)
    {
        $data = Movie::findOrFail($id);

        if (file_exists(base_path('../assets/videos/' . $data->video))) {
            @unlink(base_path('../assets/videos/' . $data->video));
        }

        if (file_exists(base_path('../assets/videos/' . $data->video_image))) {
            @unlink(base_path('../assets/videos/' . $data->video_image));
        }

        $data->delete();

        return back()->with('success', 'Data Deleted Successfully.');
    }
}
