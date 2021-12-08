<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use DB;
use App;


class PageController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
        
    }


    //*** GET Request
    public function index()
    {
        $datas = Page::orderBy('id','desc')->get();
        return view('admin.page.index',compact('datas'));
    }

    //*** GET Request
    public function create()
    {
        return view('admin.page.create');
    }

    //*** POST Request
    public function store(Request $request)
    {

        //--- Validation Section
        $slug = $request->slug;
        $main = array('home','faq','contact','blog','cart','checkout');
        if (in_array($slug, $main)) {
            return back('unsuccess',__('This slug has already been taken.'));       
        }

        $request->validate([
            'slug' => 'unique:pages','details' => 'required|min:10'
        ]);

        $data = new Page();
        $input = $request->all();
 
        $data->fill($input)->save();       
        $msg = __('New Data Added Successfully.');
        return back()->with('success',$msg);    
    }

    //*** GET Request
    public function edit($id)
    {
        $data = Page::findOrFail($id);
        return view('admin.page.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {

        //--- Validation Section
        $slug = $request->slug;
        $main = array('home','faq','contact','blog','cart','checkout');
        if (in_array($slug, $main)) {
        return back('unsuccess',__('This slug has already been taken.'));              
        }
       
        $request->validate(['slug' => 'unique:pages,slug,'.$id,'details' => 'required|min:10']);
        //--- Logic Section
        $data = Page::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section     
        $msg = __('Data Updated Successfully.');
        return back()->with('success',$msg);       
        //--- Redirect Section Ends           
    }
      

    //*** GET Request Delete
    public function destroy($id)
    {
        $data = Page::findOrFail($id);
        $data->delete();
        //--- Redirect Section     
        $msg = __('Data Deleted Successfully.');
        return back()->with('success',$msg);       
        //--- Redirect Section Ends   
    }
}