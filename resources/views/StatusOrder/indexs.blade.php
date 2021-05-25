@extends('admin.app')
@section("title", "Status Orders")
@section('content')
@include('shared.msg')
      
          <div class="col-md-12">
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box Purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-comments"></i>الطلبات الحالية  </div>
                               
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
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
                                                            <td> <img src='{{ asset("/storage/public/".$order->image) }}' width='100' /></td>
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

                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
             
@endsection





