@extends('admin.app')
@section("title", "Status Orders")
@section('content')
@include('shared.msg')
      
<form class='row'>
        <div class="col-sm-2">
            <select name="product_id"  class="form-control">
                <option value=''>Any Product</option>
                @foreach($products as $product)
                    <option {{ $product->id==request()->get('product_id')?"selected":""}} value='{{ $product->id}}'>{{ $product->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-2">
            <select name="user_id"  class="form-control">
                <option value=''>Any Customer</option>
                @foreach($users as $user)
                    <option {{ $user->id==request()->get('user_id')?"selected":""}} value='{{ $user->id}}'>{{ $user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <select name="order_status_id" class="form-control">
                <option value="">Any status</option>
                @foreach($status as $status)
                    <option {{ $status->id==request()->get('order_status_id')?"selected":""}} value='{{ $status->id}}'>{{ $status->title}}</option>
                @endforeach
            </select>
        </div>
        <div class='col-sm-2'>
            <input type='text' value='{{ request()->get("price") }}' class="form-control" placeholder="enter price to search"
                   name="price"/>
        </div>

        <div class="col-sm-4">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>search</button>
        </div>
    </form>

    @if($orders->count()>0)
        <table align="center" class="table mt-3 table-striped table-bordered">
            <thead>
            <tr>
              <th> Order ID</th>
                <th>name</th>
                <th>Image</th>
                <th>user</th>
                <th> Quantity</th>
                <th> Status</th>
               
                {{--                <th width="20%"></th>--}}
            </tr>
            </thead>
            <tbody>

       @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->name}}</td>
                    <td> <img src='{{ asset("storage/".$order->image) }}' width='100' /></td>
                    <td>{{ $order->user->name??'' }}</td>
                    <td>{{ $order->quantity }}</td>
                    {{--                    <td>{{ $order->order_status_id}}</td>--}}
                    <td>
                        @if($order->order_status_id==1)
                            <span class="btn btn-warning btn-sm">Pending</span>
                        @elseif($order->order_status_id==2)
                            <span class="btn btn-success btn-sm">Done</span>
                        @else($order->order_status_id==3)
                            <span class="btn btn-danger btn-sm">Cancel</span>
                        @endif
                    </td>
                    
                </tr>
               
            @endforeach
         
            </tbody>
        </table>
        
          {{ $orders->links() }}
    @else
        <div class="alert alert-warning">Sorry, there is no results to your search</div>
    @endif
@endsection





