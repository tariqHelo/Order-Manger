<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\OrderStatus;

use App\Models\Order;
use Illuminate\Http\Request;
class OrderController extends Controller

{
    public function index()
    { 
        // $user_id = \request()->get('user_id') ;
        // $price = \request()->get('price') ;
        // $product_id = \request()->get('product_id') ;
        // $order_status_id = \request()->get('order_status_id');

         $orders=Order::get();  
        $status=OrderStatus::all();
       
        return view('orders.index',compact('orders','status'));
    }

       public function store(Request $request){

       // if(!$request->order_status_id){
       // $request['order_status_id'] = 1;
       // }
       //get logged user from access_token
    //    $request['user_id'] = $request->user()->id;
    //    $imageName = basename($request->imageFile->store("public"));
    //    $request['image'] = $imageName;
    //    $order = Order::create($request->all());
    //    session()->flash('msg', "s: Order product create successfully ");
    //    sleep(4);
      $request['user_id'] = $request->user()->id;
       $imageName = basename($request->image->store("public"));
       $request['image '] = $imageName;
       $order = Order::create($request->all());
       session()->flash('msg', "s: Order create successfully ");
       return redirect(route("user-order.index"));
       return view('frontend.home.index');

       //dd($request->all());

       
       }

    public function done($id){
        $order_done=Order::find($id);
        $order_done->update(['order_status_id'=>2]);
        session()->flash('msg','s: Order has been Done');
        return redirect()->back();
    }

    public function cancel($id){
        $order_cancel=Order::find($id);
        $order_cancel->update(['order_status_id'=> 3]);
        session()->flash('msg','e: Order has been Cancel');
        return redirect()->back();
    }

    public function pending($id){
        $order_pending=Order::find($id);
        $order_pending->update(['order_status_id'=>1]);
        session()->flash('msg','s: Order has been pending');
        return redirect()->back();
    }

    public function show($id)
    {
        
        $orders=Order::all();
        $order = Order::find($id);
        return view('dashboard.orders.show')->with('order' , $order)->with('orders',$orders);
    }
    public function destroy($id)
    {
        $order = Order::find($id);
        if(!$order){
            Session()->flash('msg','Order not found');
            return redirect()->back();
        }
        Order::destroy($id);
        session()->flash("msg", " Order Deleted Successfully");
        return redirect()->back();
    }

    public function orderProduct($id){
        $product = Product::find($id);
        Order::create([
            'user_id' => auth()->id(),
            'product_id'=>  $id
        ]);
        return redirect()->back();
    }

    public function cancelOrderProduct($id){
        Order::where('product_id' , $id)->delete();
        return redirect()->back();
    }
}
