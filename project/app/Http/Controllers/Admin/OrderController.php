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
        $orders = Order::whereHas('user')->whereHas('plan')->orderBy('id','desc')->paginate();

        return view('admin.order.index',compact('orders'));
    }

    public function view ($id)
    {
        $data = Order::findOrFail($id);
        return view('admin.order.view',compact('data'));
    }
}
