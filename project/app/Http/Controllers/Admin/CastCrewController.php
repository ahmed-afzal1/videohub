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
        $pageTitle = __('Cast And Crew');

        $castAndCrews = CastCrew::latest()->with('image')->paginate();

        return view('admin.cast_crew.index', compact('castAndCrews','pageTitle'));
    }

    //*** GET Request
    public function create()
    {
        $pageTitle = __('Cast And Crew');

        return view('admin.cast_crew.create',compact('pageTitle'));
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


        $model = CastCrew::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'status' => 1
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::makeImage($image, $location, $model);
        } else {
            Helper::NullImage($model);
        }


        $notify[] = ['success', __('Cast Crew Added Successfully')];
        return redirect()->route('admin-cast-crew-index')->withNotify($notify);
        //--- Redirect Section Ends
    }

    //*** GET Request
    public function edit($id)
    {
        $pageTitle = __('Cast And Crew Edit ');
        $castAndCrew = CastCrew::findOrFail($id);
        return view('admin.cast_crew.edit', compact('castAndCrew','pageTitle'));
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
        $castAndCrew = CastCrew::findOrFail($id);
      
        $castAndCrew->update([
            'name' => $request->name,
            'bio' => $request->bio,
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $location = base_path('../assets/images/');
            Helper::ImageUpdate($image, $location, $castAndCrew);
        }

        $notify[] = ['success', __('Cast Crew Updated Successfully')];
        return redirect()->route('admin-cast-crew-index')->withNotify($notify);
    }

    
    public function destroy($id)
    {
        $data = CastCrew::findOrFail($id);
        if (file_exists(base_path('../assets/images/' . $data->image->image))) {
            @unlink('assets/images/' . $data->image->image);
        }
        $data->delete();
        //--- Redirect Section
        $notify[] = ['success', 'Cast and Crew Successfully Deleted'];
        return back()->withNotify($notify);
        //--- Redirect Section Ends
    }

    public function status(Request $request, $id)
    {
        $data = CastCrew::findOrFail($id);
        $data->status = $request->status;
        $data->update();

        $notify = ['success' => __('Status Updated Successfull')];
        return response()->json($notify);
    }
}
