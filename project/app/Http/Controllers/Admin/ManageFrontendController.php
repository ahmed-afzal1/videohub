<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Slider;
use Illuminate\Http\Request;

class ManageFrontendController extends Controller
{
    public function slider()
    {
        $pageTitle = 'Manage Sliders';

        $sliders = Slider::latest()->with('movie')->paginate();

        $movies = Movie::latest()->get(['id','title']);

        return view('admin.frontend.sliders',compact('pageTitle','sliders','movies'));
    }

    public function sliderCreate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'movie' => 'required|integer'
        ]); 


        if ($file = $request->file('image')) 
            {              
                $name = time().$file->getClientOriginalName();
                Slider::upload($name,$file,'');
                $image = $name;
            } 

        Slider::create([
            'poster' => $image,
            'movie_id' =>  $request->movie
        ]);


        $notify[] = ['success', "Slider Created Successfully"];

        return redirect()->back()->withNotify($notify);

    }

    public function sliderUpdate(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png',
            'movie' => 'required|integer'
        ]); 


        if ($file = $request->file('image')) 
            {              
                $name = time().$file->getClientOriginalName();
                Slider::upload($name,$file,$slider->poster);
                $image = $name;
            } 


        $slider->update([
            'poster' => $image ?? $slider->poster,
            'movie_id' =>  $request->movie
        ]);


        $notify[] = ['success', "Slider Updated Successfully"];

        return redirect()->back()->withNotify($notify);
    }

    public function sliderDelete($id)
    {
        $slider = Slider::findOrFail($id);

        $path = 'assets/images/poster/'.$slider->poster;

        if(file_exists($path)) @unlink($path);

        $slider->delete();


        $notify[] = ['success', "Slider Deleted Successfully"];

        return redirect()->back()->withNotify($notify);

    }
}
