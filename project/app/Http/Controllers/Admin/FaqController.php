<?php

namespace App\Http\Controllers\Admin;
use DataTables;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use App;
use Validator;


class FaqController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
        
    }

    //*** JSON Request
    public function datatables()
    {
         $datas = Faq::orderBy('id','desc')->get();
         //--- Integrating This Collection Into Datatables
         return DataTables::of($datas)
                            ->editColumn('details', function(Faq $data) {
                                $details = strlen(strip_tags($data->details)) > 250 ? substr(strip_tags($data->details),0,250).'...' : strip_tags($data->details);
                                return  $details;
                            })
                            
                            ->addColumn('action', function(Faq $data) {
                                return '<div class="action-list"><a href="javascript:;" data-href="' . route('admin-faq-edit',$data->id) . '" class="btn btn-primary btn-sm mr-2 edit" data-toggle="modal" data-target="#modal1"> <i class="fas fa-edit mr-1"></i>'. __('Edit') .'</a><a href="javascript:;" data-href="' . route('admin-faq-delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>';
                            })
                            ->rawColumns(['action'])
                            ->toJson(); //--- Returning Json Data To Client Side
    }

    //*** GET Request
    public function index()
    {
        return view('admin.faq.index');
    }

    //*** GET Request
    public function create()
    {
        return view('admin.faq.create');
    }

    //*** POST Request
    public function store(Request $request)
    {
        
          $request->validate([
            'title' => 'required',
            'details' => 'required|min:10'
          ]);


        //--- Logic Section
        $data = new Faq();
        $input = $request->all();
        $data->fill($input)->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        $msg = __('New Data Added Successfully.');
        return response()->json($msg);      
        //--- Redirect Section Ends   
    }

    //*** GET Request
    public function edit($id)
    {
        $data = Faq::findOrFail($id);
        return view('admin.faq.edit',compact('data'));
    }

    //*** POST Request
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'details' => 'required|min:10'
        ]);
        //--- Logic Section
        $data = Faq::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        //--- Logic Section Ends

        //--- Redirect Section     
        $msg = __('Data Updated Successfully.');
        return response()->json($msg);    
        //--- Redirect Section Ends              
    }

    //*** GET Request Delete
    public function destroy($id)
    {
        $data = Faq::findOrFail($id);
        $data->delete();
        //--- Redirect Section     
        $msg = __('Data Deleted Successfully.');
        return response()->json($msg);      
        //--- Redirect Section Ends   
    }
}
