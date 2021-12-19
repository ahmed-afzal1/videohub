<?php

namespace App\Http\Controllers\Admin;
use App\Models\Generalsetting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App;


class GeneralSettingController extends Controller
{

 
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }



    private function setEnv($key, $value,$prev)
    {
        file_put_contents(app()->environmentFilePath(), str_replace(
            $key . '=' . $prev,
            $key . '=' . $value,
            file_get_contents(app()->environmentFilePath())
        ));
    }

    // Genereal Settings All post requests will be done in this method
    public function generalupdate(Request $request)
    {
        //--- Validation Section
       $request->validate([
        'header_logo'       => 'mimes:jpeg,jpg,png,svg',
        'footer_logo'       => 'mimes:jpeg,jpg,png,svg',
        'favicon'    => 'mimes:jpeg,jpg,png,svg',
        'loader'     => 'mimes:gif',
        'admin_loader'     => 'mimes:gif',
        'service_image'    => 'mimes:jpeg,jpg,png,svg',
        'error_photo'    => 'mimes:jpeg,jpg,png,svg',
        'breadcumb_banner'    => 'mimes:jpeg,jpg,png,svg',
        'admin_loader'    => 'mimes:gif'
       ]);
      

        $input = $request->all(); 
        $data = Generalsetting::findOrFail(1);  
        $prev = $data->molly_key;      
            if ($file = $request->file('header_logo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->header_logo);
                $input['header_logo'] = $name;
            } 
            if ($file = $request->file('footer_logo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->footer_logo);
                $input['footer_logo'] = $name;
            } 
              
            if ($file = $request->file('favicon')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->favicon);
                $input['favicon'] = $name;
            }   
            if ($file = $request->file('admin_loader')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->admin_loader);
                $input['admin_loader'] = $name;
            }  

            if ($file = $request->file('website_loader')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->website_loader);
                $input['website_loader'] = $name;
            } 

            if ($file = $request->file('breadcumb_banner')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->breadcumb_banner);
                $input['breadcumb_banner'] = $name;
            } 

            if ($file = $request->file('error_photo')) 
            {              
                $name = time().$file->getClientOriginalName();
                $data->upload($name,$file,$data->error_photo);
                $input['error_photo'] = $name;
            }   
            
        $data->update($input);
       
        $notify[] = ['success', "Settings Updated Successfully"];

            return redirect()->back()->withNotify($notify);
        
    }

    public function paymentsinfo()
    { 
       return view('admin.generalsetting.p_information');
    }


    public function menuupdate(Request $request)
    {
        $data = Generalsetting::findOrFail(1);
        $input = $request->all();
        
        if ($request->is_contact == ""){
            $input['is_contact'] = 0;
        }
        if ($request->is_faq == ""){
            $input['is_faq'] = 0;
        }
        if ($request->is_home == ""){
            $input['is_home'] = 0;
        }
        if ($request->is_services == ""){
            $input['is_services'] = 0;
        }
        
        if ($request->is_projects == ""){
            $input['is_projects'] = 0;
        }
        if ($request->is_teams == ""){
            $input['is_teams'] = 0;
        }
        if ($request->is_blog == ""){
            $input['is_blog'] = 0;
        }
        if ($request->is_pages == ""){
            $input['is_pages'] = 0;
        }
        
        $data->update($input);
        $msg = __('Data Updated Successfully.');
        return response()->json($msg);      
    }


    public function logo()
    {
        $pageTitle = 'Logo Settings';
        return view('admin.generalsetting.logo',compact('pageTitle'));
    }

    public function fav()
    {
        $pageTitle = 'Fav Settings';
        return view('admin.generalsetting.favicon',compact('pageTitle'));
    }

    public function error()
    {
        $pageTitle = 'Erors Settings';
        return view('admin.generalsetting.error',compact('pageTitle'));
    }
     public function breadcumb()
    {
        $pageTitle = 'Breadcrumb Settings';
        return view('admin.generalsetting.breadcumb',compact('pageTitle'));
    }

     public function load()
    {
        $pageTitle = 'Load Settings';
        return view('admin.generalsetting.loader',compact('pageTitle'));
    }

     public function contents()
    {
        $pageTitle = 'Website Content Settings';
        return view('admin.generalsetting.websitecontent',compact('pageTitle'));
    }

     public function success()
    {
        $pageTitle = 'Success Settings';
        return view('admin.generalsetting.success',compact('pageTitle'));
    }

     public function footer()
    {
        $pageTitle = 'Footer Settings';
        return view('admin.generalsetting.footer',compact('pageTitle'));
    }


    public function customize()
    {
        $pageTitle = 'Customize Settings';
        return view('admin.pagesetting.menu_customize',compact('pageTitle'));
    }
    
    public function StatusUpdate($value)
    {
        $value = explode(',',$value);
        $status = $value[0];
        $field = $value[1];
        $data = Generalsetting::findOrFail(1);
        $data->$field = $status;
        $data->update();

        if($status == 1){
            return response()->json(['status'=>1,'success' => __('Data Updated Successfully.')]);
        }else{
            return response()->json(['status'=>0,'success' => __('Data Updated Successfully.')]);
        }
       
    }

    public function cookieConsent()
    {
        $pageTitle = 'Cookie Consent';

        $cookie = CookieConsent::first();

        return view('admin.setting.cookie',compact('pageTitle','cookie'));
    }

    public function cookieConsentUpdate(Request $request)
    {
        $data = $request->validate([
            'allow_modal' => 'required|integer',
            'button_text' => 'required|max:100',
            'cookie_text' => 'required'
        ]);

        $cookie = CookieConsent::first();

        if(!$cookie){
            CookieConsent::create($data);

            $notify[] = ['success', "Cookie Consent Created Successfully"];

            return redirect()->back()->withNotify($notify);

        }


        $cookie->update($data);

        $notify[] = ['success', "Cookie Consent Updated Successfully"];

        return redirect()->back()->withNotify($notify);

    }
   
}
