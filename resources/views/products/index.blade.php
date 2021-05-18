@extends('admin.app')
@section('content')
@include('shared.msg')
            <div class="row">
               <div class="col-md-6">
                    <div class="btn-group">
                    <a href="{{route('products.create')}}" class="btn green">
                           إضافة منتج<i class="fa fa-plus"></i>
                        </a>
                    </div>	
            </div>
        </div>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>المنتجات</div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> # </th>
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
                            <td> <img src='{{ asset("storage/".$product->image) }}' width='100' /></td>
                            <td> {{$product->quantity}} </td>
                            <td> {{$product->note}} </td>
                           <td> 
                                <a href="{{ route("products.edit", $product->id) }}"  class="btn btn-primary btn-sm"><i class='fa fa-edit'></i></a>
                                <a href="{{ route("product-delete", $product->id) }}" onclick='return confirm("Are you sure dude?")' class="btn btn-warning btn-sm"><i class='fa fa-trash'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    
                  
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
                    

@endsection