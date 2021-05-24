<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Pagination\paginate;
class OrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    { 
        
        $orders = Order::orderBy('id','DESC')->where('user_id' , auth()->id())->get();

       // dd($orders);

      $user_id = \request()->get('user_id') ;
      $product_id = \request()->get('product_id') ;
      $order_status_id = \request()->get('order_status_id');

        if ($user_id!="")
        {
            $orders->where('user_id' , $user_id);
        }
        if ($product_id!=""){

            $orders->where('product_id' , $product_id);
        }
        if ($order_status_id !=""){

           $orders->where('order_status_id' , $order_status_id);
        }
           $status=OrderStatus::all();
            $users=User::all();
            $products=Product::orderby('name')->get();
            // $orders = $orders->paginate(2)->appends([
            // "user_id"=>$user_id,
            // "product_id"=>$product_id,
            // "order_status_id"=>$order_status_id
            // ]);



        return view('statusOrder.index',compact('orders','status','users','products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function show(OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderStatus $orderStatus)
    {
        //
    }
}
