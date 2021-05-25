<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Setting;

use Image;
use App\Models\OrderStatus;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
class OrderController extends Controller

{
    public function index()
    { 
        $user_id = \request()->get('user_id') ;
        $product_id = \request()->get('product_id') ;
        $order_status_id = \request()->get('order_status_id');
        $orders=Order::orderBy('id','desc');
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
            $orders = $orders->paginate(10)->appends([
            "user_id"=>$user_id,
            "product_id"=>$product_id,
            "order_status_id"=>$order_status_id
            ]);



        return view('orders.index',compact('orders','status','users','products'));
    }

    public function store(Request $request){
        $setting = Setting::find(1);
        $rules = [];
        // dd($setting->note , $setting->name , $setting->quantity , $setting->image);
        if($setting->note == 1):
            $rules['note'] = 'required';
        endif;
        if($setting->name == 1):
            $rules['title'] = 'required';
        endif;
        if($setting->quantity == 1):
            $rules['quantity'] = 'required';
        endif;
        if($setting->image == 1):
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        else:
            $rules['image'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        endif;
        $request->validate($rules);

        $image = basename($request->image->store("public"));
         Order::create([
        'image' => $image,
        'note' => $request->note,
        'quantity' => $request->quantity,
        'title' => $request->title,
        'user_id'=> $request->user()->id,
        ]);
       session()->flash('msg', "s: Order create successfully ");
       return redirect(route("user-order.index"));

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
        return view('orders.show')->with('order' , $order)->with('orders',$orders);
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
