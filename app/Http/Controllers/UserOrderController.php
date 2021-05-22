<?php

namespace App\Http\Controllers;

use App\Models\UserOrder;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $products = Product::get();
         $productsOrdered = Order::where('user_id' , auth()->id())->where('product_id' , '!=' , null)->get()->pluck('product_id')->all();
         return view('UserOrder.index')->with('products' , $products)->with('ordered' , $productsOrdered);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserOrder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request){

        // if(!$request->order_status_id){
        // $request['order_status_id'] = 1;
        // }
        // //get logged user from access_token
        // $request['user_id'] = $request->user()->id;
        // $request['total_price'] = $request['quantity'] * $request['price'];
        // $imageName = basename($request->imageFile->store("public"));
        // $request['image'] = $imageName;
        // $order = Order::create($request->all());
        // session()->flash('msg', "s: Order product create successfully ");
        // sleep(4);
        // return view('frontend.home.index');

           $imageName = basename($request->image->store("public"));
           $request['image '] = $imageName;
           $order = Order::create($request->all());
           session()->flash('msg', "s: Order create successfully ");
           return redirect(route("orders.index"));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function show(UserOrder $userOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(UserOrder $userOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserOrder $userOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserOrder  $userOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserOrder $userOrder)
    {
        //
    }
}
