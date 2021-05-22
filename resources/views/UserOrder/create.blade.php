@extends('admin.app')
@section('content')
@include('shared.msg')

<div class="tab-pane" id="tab_4">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>إضافة طلب جديد  </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
            <form action="{{route('orders.store')}}" method="POST" class="form-horizontal form-row-seperated" enctype="multipart/form-data">
                @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">الإسم  </label>
                            <div class="col-md-9">
                                <input type="text" name="name" placeholder="الإسم" class="form-control" />
                            </div>
                        </div>
                    </div>

                     <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">الكمية  </label>
                            <div class="col-md-9">
                                <input type="number" name="quantity" placeholder="الكمية" class="form-control" />
                            </div>
                        </div>
                    </div>
                     <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">إختيار صور</label>
                            <div class="col-md-9">
                                <input type="file" name="image" placeholder="image" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ملاحظات  </label>
                            <div class="col-md-9">
                               <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">
                                    <i class="fa fa-pencil"></i> حفظ</button>
                                  <a  href="{{route('user-order.index')}}" type="button" class="btn default">إلغاء</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
@endsection