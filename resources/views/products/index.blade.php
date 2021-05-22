@extends('admin.app')
@section('content')
@include('shared.msg')
            {{-- <div class="row">
               <div class="col-md-6">
                    <div class="btn-group">
                    <a href="{{route('products.create')}}" class="btn green">
                           إضافة منتج<i class="fa fa-plus"></i>
                        </a>
                    </div>	
            </div>
        </div>
     --}}
  <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">المنتجات</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                     <a href="{{route('products.create')}}" class="btn green">
                                                          إضافة منتج جديد<i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
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
                                                 <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td> {{$product->id}} </td>
                                                    <td> {{$product->name}} </td>
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
                        </div>
        </div>       


@endsection