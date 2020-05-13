<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Admin : Andevgh</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('ampleadmin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ url('ampleadmin/css/sidebar-nav.min.css') }}" rel="stylesheet">
    
    <!--link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet"-->
    
    <!-- Vector CSS -->
    <link href="{{ url('ampleadmin/css/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ url('ampleadmin/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('ampleadmin/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ url('ampleadmin/css/megna-dark.css') }}" id="theme" rel="stylesheet">

    <link href="{{ url('ampleadmin/css/daterangepicker.css') }}" id="theme" rel="stylesheet">

    <link href="{{ url('ampleadmin/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ url('ampleadmin/css/switchery.min.css') }}" rel="stylesheet">

    <link href="{{ url('ampleadmin/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ url('ampleadmin/css/summernote.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>


    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
    	@include('admin.layouts.partials.top-nav')
        @include('admin.layouts.partials.sidebar-nav')
        

        
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper" style="min-height: 208px;">
            @yield('content')
            <!-- /.container-fluid -->
            @include('admin.layouts.partials.footer')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ url('ampleadmin/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('ampleadmin/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ url('ampleadmin/js/sidebar-nav.min.js') }}"></script>
    
    <!--Counter js -->
    <script src="{{ url('ampleadmin/js/jquery.waypoints.js') }}"></script>
    <script src="{{ url('ampleadmin/js/jquery.counterup.min.js') }}"></script>
    
    <!--slimscroll JavaScript -->
    <script src="{{ url('ampleadmin/js/jquery.slimscroll.js') }}"></script>
    <!-- End Left Sidebar -->
        
    <!--Wave Effects -->
    <script src="{{ url('ampleadmin/js/waves.js') }}"></script>
    
    <!-- <!-- Vector map JavaScript -->
    <script src="{{ url('ampleadmin/js/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <!--script src="../plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-us-aea-en.js"></script> -->
    <!-- <!-- chartist chart -->
    <!-- <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script> -->
    <!-- <!-- sparkline chart JavaScript -->
    <!-- <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script> -->
    <!-- Custom Theme JavaScript -->
    <script src="{{ url('ampleadmin/js/custom.min.js') }}"></script>
    
    <!-- <div class="jvectormap-tip" style="display: none; left: 391px; top: 475px;">South Dakota</div> -->
    <!--Style Switcher -->
    
    <script>
    	$(".slimScrollDiv").slimScroll({
    		height: '100%',
    		position: 'left'
    	});
    </script>
    <script src="{{ url('ampleadmin/js/moment.js') }}"></script>
    <script src="{{ url('ampleadmin/js/daterangepicker.js') }}"></script>
    <script src="{{ url('ampleadmin/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('ampleadmin/js/charts.min.js') }}" charset="utf-8"></script>
    <script src="{{ url('ampleadmin/js/select2.min.js') }}"></script>
    <script src="{{ url('ampleadmin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('ampleadmin/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ url('ampleadmin/js/mindmup-editabletable.js') }}"></script>
    <script src="{{ url('ampleadmin/js/summernote.min.js') }}"> </script>
    <script src="{{ url('ampleadmin/js/numeric-input-example.js') }}"></script>
    <script src="{{ url('ampleadmin/js/bootstable.js') }}"></script>
    <!--script src="{{ url('ampleadmin/js/jquery.style.switcher.js') }}"></script-->
    <script src="{{ url('ampleadmin/js/switchery.min.js') }}"></script>
    <script src="{{ url('ampleadmin/js/dropify.min.js') }}"></script>


    @yield('scripts');

</body>
</html>