@extends('admin.app')
@section('content')
@include('shared.msg')




         <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                           <form action="{{route('settings.store')}}"  method="POST" class="portlet light ">
                            @csrf
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> الحقول الإجبارية للطلبات</span>
                                    </div>
                                  
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <button type="submit" id="sample_editable_1_new" class="btn sbold green"> إضافة
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="test">
                                        <thead>
                                            <tr>
                                                <th> name </th>
                                                <th> image </th>
                                                <th> note </th>
                                                <th> quantity </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($settings as $setting) --}}
                                            <tr class="odd gradeX">
                        
                                                <td><input name="name"     type="checkbox"  {{$setting->name?"checked":"" }}/></td>
                                                <td><input name="image"    type="checkbox"  {{$setting->image?"checked":"" }}/></td>
                                                <td><input name="note"     type="checkbox"  {{$setting->note?"checked":"" }}/></td>
                                                <td><input name="quantity"    type="checkbox"  {{$setting->quantity?"checked":"" }}/></td>
                                            </tr>   
                                            {{-- @endforeach --}}
                                    
                                         </tbody>
                                    </table>
                                </div>
                           </form>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
        </div>
@endsection