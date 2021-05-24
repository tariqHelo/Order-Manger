@extends('admin.app')
@section('content')
@include('shared.msg')
            <div class="row">
               <div class="col-md-6">
                    <div class="btn-group">
                    <a href="{{route('user-order.create')}}" class="btn green">
                           إضافة طلب منتج<i class="fa fa-plus"></i>
                        </a>
                    </div>	
            </div>
        </div>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>المنتجات المتوفرة لدينا</div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> # </th>
                             <th> إسم المنتج  </th>
                            <th> الصورة  </th>
                            <th>الكمية</th>
                            <th> الملاحظات </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td> {{$product->id}} </td>
                            <td> {{$product->name}} </td>
                            <td> <img src='{{ asset("/storage/public/".$product->image) }}' width='100' /></td>
                            <td> {{$product->quantity}} </td>
                            <td> {{$product->note}} </td>
                           <td> 
                               @if(in_array($product->id , $ordered))
                                <a href="{{route('cancel-product-order',['id' => $product->id])}}" style="width: 80px" class="btn btn-danger btn-sm" >إلغاء الطلب</a>
                               @else
                                <a href="{{route('order-product',['id' => $product->id])}}" style="width: 80px" class="btn btn-success btn-sm" >طلب المنتج</a>
                               @endif

                            </td>
                        </tr>
                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
                    

@endsection