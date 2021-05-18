@extends('admin.app')
@section('content')
@include('shared.msg')

{{-- <div class="tab-pane" id="tab_4">
        <div class="portlet box red">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>إضافة منتج جديد  </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
            <form action="{{route('products.update',$products->id)}}" method="POST" class="form-horizontal form-row-seperated" enctype="multipart/form-data">
                 @method('PATCH')
                 @csrf
                     <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">الكمية  </label>
                            <div class="col-md-9">
                            <input type="number" value="{{$products->quantity}}" name="quantity" placeholder="الكمية" class="form-control" />
                            </div>
                        </div>
                    </div>
                     <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">إختيار صور</label>
                            <div class="col-md-9">
                                <input type="file" name="image" placeholder="img" class="form-control" />
                            </div>
                        @if($products->image)
                          <img src="{{ asset("storage/".$products->image) }}" width='80' class='img-thumbnail mt-3' />
                        @endif
                        </div>
                       
                    </div>

                     <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ملاحظات  </label>
                            <div class="col-md-9">
                               <textarea class="form-control"  name="note" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">
                                    <i class="fa fa-pencil"></i> حفظ</button>
                                <a  href="{{route('products.index')}}" type="button" class="btn default">إلغاء</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div> --}}

    <div class="portlet light ">
        <div class="portlet-body form">
            <form action="{{route('products.update',$products->id)}}" method="POST" class="form-horizontal form-row-seperated" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <input type="number" value="{{$products->quantity}}" name="quantity" placeholder="الكمية" class="form-control" />
                        <label for="form_control_1">الكمية</label>
                        <span class="help-block">Typing...</span>
                    </div>
                </div>
                
                <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <input type="file" name="imageFile" class="form-control custom-file-input" id="form_control_1">
                        <label for="form_control_1">الصورة</label>
                    </div>
                      @if($products->image)
                          <img src="{{ asset("storage/".$products->image) }}" width='80' class='img-thumbnail mt-3' />
                        @endif
                </div>
                <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                    <input type="text" class="form-control" id="form_control_1" value="{{$products->note}}" name="note" value="{{old('note')}}" placeholder="Enter your Title">
                        <label for="form_control_1">ملاحظات</label>
                        <span class="help-block">Typing...</span>
                    </div>
                </div>
                <div class="form-actions noborder">
                    <button type="submit" class="btn btn-success">OK</button>
                <a type="reset" href="{{route('products.index')}}" class="btn default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection