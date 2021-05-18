<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $products = Product::get();
    return view('products.index')->with('products' , $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //   $this->validate($request, array(
        //    'note' => 'required',
        //   'quantity' => 'required|integer',
        //   'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //   ));
        //dd($request->all());
        // $file = $request->file('img');
        // $extension = $request->image->extension();
        // $path = $request->image->store('public');

         $imageName = basename($request->image->store("public"));
         $request['image '] = $imageName;
         $order = Product::create($request->all());
         session()->flash('msg', "s: Product create successfully ");
         return view('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  $products = Product::find($id);
        return view('products.edit')->with('products',$products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         $imageName = basename($request->image->store("public"));
         $request['image '] = $imageName;
         $order = Product::update($request->all());
         session()->flash('msg', "s: Product Updatedd successfully ");
         return view('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Product::destroy($id);
           session()->flash("msg", " Product Deleted Successfully");
           return redirect(route("products.index"));
    }
}
