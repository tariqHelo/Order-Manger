
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
      <meta charset="utf-8" />
        <title>لوحة التحكم الطلبات</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin RTL Theme #2 for colreorder extension demos" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('metroinc/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metroinc/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metroinc/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metroinc/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('metroinc/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metroinc/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('metroinc/assets/global/css/components-md-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('metroinc/assets/global/css/plugins-md-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('metroinc/assets/layouts/layout2/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('metroinc/assets/layouts/layout2/css/themes/blue-rtl.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('metroinc/assets/layouts/layout2/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
        <!-- BEGIN HEADER -->
        @include('admin.header')
        <!-- END HEADER -->
    	<!-- BEGIN CONTAINER -->
    	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		@include('admin.menu')
		<!-- END SIDEBAR -->
	  <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    @if(View::hasSection('content'))
                        @yield('content')
                    @else
                         <!-- BEGIN : LISTS -->
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-4">
                                <div class="portlet light portlet-fit ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">تسجيل طلب جديد</span>
                                            <div class="caption-desc font-grey-cascade"><h4>الصفحة الخاصة لطلب  من المنتجات المتوفرة لدينا</h4>  </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-list">
                                            <div class="mt-list-head list-todo red">
                                                <div class="list-head-title-container">
                                                    <h3 class="list-title">تسجيل طلب جديد</h3>
                                                    <div class="list-head-count">
                                                        <div class="list-head-count-item">
                                                        </div>
                                                        <div class="list-head-count-item">
                                                            </div>
                                                    </div>
                                                </div>
                                            <a href="{{route('user-order.index')}}">
                                                    <div class="list-count pull-right red-mint">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-4">
                                <div class="portlet light portlet-fit ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">حالة جديد</span>
                                            <div class="caption-desc font-grey-cascade"><h4>الصفحة الخاصة في حالة الطلبات الحالية </h4>  </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-list">
                                            <div class="mt-list-head list-todo red">
                                                <div class="list-head-title-container">
                                                    <h3 class="list-title">حالة الطلب</h3>
                                                <div class="list-head-count">
                                                        <div class="list-head-count-item">
                                                        </div>
                                                        <div class="list-head-count-item">
                                                            </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:;">
                                                    <div class="list-count pull-right red-mint">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-4">
                                <div class="portlet light portlet-fit ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">صفحة المعلومات</span>
                                            <div class="caption-desc font-grey-cascade"><h4>الصفحة الخاصة في المعلومات الخاصة بك </h4>  </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-list">
                                            <div class="mt-list-head list-todo red">
                                                <div class="list-head-title-container">
                                                    <h3 class="list-title">صفحة المعلومات</h3>
                                                    <div class="list-head-count">
                                                        <div class="list-head-count-item">
                                                        </div>
                                                        <div class="list-head-count-item">
                                                            </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:;">
                                                    <div class="list-count pull-right red-mint">
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <!-- END : LISTS -->
                    @endif
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        <!-- BEGIN FOOTER -->
       

      <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('metroinc/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('metroinc/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('metroinc/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('metroinc/assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('metroinc/assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('metroinc/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
			
    </body>
</html>