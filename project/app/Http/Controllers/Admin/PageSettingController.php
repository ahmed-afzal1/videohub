<?php

namespace App\Http\Controllers\Admin;
use App\Models\Pagesetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use DB;
use App;


class PageSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }

    protected $rules =
    [
        'video_image' => 'mimes:jpeg,jpg,png,svg',
    ];

    public function homepage()
    {
       return view('admin.pagesetting.homepage');
    }

    public function pageCustomize()
    {
       return view('admin.pagesetting.home_page_customize');
    }


    // Page Settings All post requests will be done in this method
    public function Update(Request $request)
    {
        $data = Pagesetting::where('id',1)->first();
        $input = $request->all();
        
            if ($file = $request->file('home_page_photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->home_page_photo);
                $input['home_page_photo'] = $name;
            }  
          
          
        if ($request->trending_section == ''){
            $input['trending_section'] = 0;
        }
        if ($request->new_section == ''){
            $input['new_section'] = 0;
        }
        if ($request->recent_section == ''){
            $input['recent_section'] = 0;
        }
        if ($request->old_section ==''){
            $input['old_section'] = 0;
        }

        

        $data->update($input);
        $msg = __('Data Update Successfully.!');
        return response()->json($msg);      
    }




    public function homeupdate(Request $request)
    {
        // dd($request->all());
        $data = Pagesetting::findOrFail(1);
        $input = $request->all();
        

        $data->update($input);
        $msg = __('Data Updated Successfully.');
        return response()->json($msg);      
    }


    public function contact()
    {
        $data = Pagesetting::find(1);   
        return view('admin.pagesetting.contact',compact('data'));
    }

    public function video()
    {
        $data = Pagesetting::find(1);   
        return view('admin.pagesetting.video',compact('data'));
    }

    

    public function homecontact()
    {
        $data = Pagesetting::find(1);   
        return view('admin.pagesetting.homecontact',compact('data'));
    }

    public function donate()
    {
        $data = Pagesetting::find(1);   
        return view('admin.pagesetting.donate',compact('data'));
    }

    public function blog()
    {
        $data = Pagesetting::find(1);   
        return view('admin.pagesetting.blog',compact('data'));
    }

    public function customize()
    {
        $data = Pagesetting::find(1);   
        return view('admin.pagesetting.customize',compact('data'));
    }

    //Upadte About Page Section Settings


    //Upadte FAQ Page Section Settings
    public function faqupdate($status)
    {
        $page = Pagesetting::findOrFail(1);
        $page->f_status = $status;
        $page->update();
        Session::flash('success', __('FAQ Status Upated Successfully.'));
        return redirect()->back();
    }

    public function contactup($status)
    {
        $page = Pagesetting::findOrFail(1);
        $page->c_status = $status;
        $page->update();
        Session::flash('success', __('Contact Status Upated Successfully.'));
        return redirect()->back();
    }

    //Upadte Contact Page Section Settings
    public function contactupdate(Request $request)
    {
        $page = Pagesetting::findOrFail(1);
        $input = $request->all();
        $page->update($input);
        Session::flash('success', __('Contact page content updated successfully.'));
        return redirect()->route('admin-ps-contact');;
    }

}
