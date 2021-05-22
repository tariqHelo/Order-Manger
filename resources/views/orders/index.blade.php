@extends('admin.app')
@section('content')
@include('shared.msg')
      
<form class='row'>
        <div class="col-sm-2">
            <select name="product_id"  class="form-control">
                <option value=''>Any Product</option>
                {{-- @foreach($products as $product)
                    <option {{ $product->id==request()->get('product_id')?"selected":""}} value='{{ $product->id}}'>{{ $product->title}}</option>
                @endforeach --}}
            </select>
        </div>

        <div class="col-sm-2">
            <select name="user_id"  class="form-control">
                <option value=''>Any Customer</option>
                {{-- @foreach($users as $user)
                    <option {{ $user->id==request()->get('user_id')?"selected":""}} value='{{ $user->id}}'>{{ $user->name}}</option>
                @endforeach --}}
            </select>
        </div>

        <div class="col-sm-2">
            <select name="order_status_id" class="form-control">
                <option value="">Any status</option>
                {{-- @foreach($status as $status)
                    <option {{ $status->id==request()->get('order_status_id')?"selected":""}} value='{{ $status->id}}'>{{ $status->title}}</option>
                @endforeach --}}
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


        <table align="center" class="table mt-3 table-striped table-bordered">
            <thead>
            <tr>
              <th> Order ID</th>
                <th>name</th>
                <th>Image</th>
                <th>user</th>
                <th> Quantity</th>
                <th> Status</th>
                <th> Status Action</th>
                <th> Action</th>
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
                    <td>
                        @if($order->order_status_id==1)
                            <a href="" style="width: 80px" class="btn btn-success btn-sm" >Done</a>
                            <a href="" style="width: 80px" class="btn btn-danger btn-sm" >Cancel</a>
                        @elseif($order->order_status_id==2)
                            <a href="" style="width: 80px" class="btn btn-warning btn-sm" >Pending</a>
                            <a href="" style="width: 80px" class="btn btn-danger btn-sm" >Cancel</a>
                        @elseif($order->order_status_id==3)
                            <a href="" style="width: 80px" class="btn btn-success btn-sm" >Done</a>
                            <a href="" style="width: 80px" class="btn btn-warning btn-sm" >Pending</a>
                        @endif
                    </td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm"><i
                                class='fa fa-eye'></i></a>
                        <a href="">
                            <button onclick='return confirm("Are you sure??")' type="submit" class="btn btn-danger btn-sm">
                                <i class='fa fa-trash'></i></button>
                        </a>
                </td>
                </tr>
               
            @endforeach
         
            </tbody>
        </table>
@endsection





