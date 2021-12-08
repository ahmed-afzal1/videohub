<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Order;
use DB;
use App;

class OrderController extends Controller
{

    public function __construct()
    {   
        $this->middleware('auth:admin');
        
    }


    public function index()
    {
        return view('admin.order.index');
    }

    public function datatables()
    {
        $datas = Order::orderBy('id','desc')->get();
         //--- Integrating This Collection Into Datatables
         return DataTables::of($datas)
                            
        ->addColumn('action', function(Order $data) {
            return '<div class="action-list"><a href="' . route('admin.order.view',$data->id) . '" class="btn btn-primary btn-sm mr-2 edit"> <i class="fas fa-eye mr-1"></i>'. __('View') .'</a><a href="javascript:;" data-href="' . route('admin.order.delete',$data->id) . '" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></div>';
        })

        ->editColumn('user_id', function(Order $data) {
            return $data->user->name ;
        })
        ->editColumn('plan_id', function(Order $data) {
            return $data->plan->plan_name ;
        })
        ->editColumn('order_amount', function(Order $data) {
            return '$ '.$data->order_amount;
        })
        ->editColumn('payment_status', function(Order $data) {
            return "<span class='badge badge-success'> {$data->payment_status} </span>" ;
        })


        ->rawColumns(['action','payment_status'])
        ->toJson();
    }

    public function view ($id)
    {
        $data = Order::findOrFail($id);
        return view('admin.order.view',compact('data'));
    }
}
