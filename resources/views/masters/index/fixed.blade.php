<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Mobilsem  @yield('pagetitle')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="/asset/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="/asset/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<link href="/asset/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/asset/admin/pages/css/inbox.css" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="/asset/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="/asset/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/asset/admin/layout4/css/layout.css?p=2" rel="stylesheet" type="text/css"/>
<link href="/asset/admin/layout4/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/asset/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="/asset/global/plugins/select2/select2.min.css" type="text/css">
<link rel="stylesheet" href="/asset/global/plugins/select2/select2-bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="/asset/global/plugins/sweetalert/sweetalert.css" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="/favicon.ico"/>
@yield('extrastylesheet')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-closed-hide-logo ppage-sidebar-closed-hide-logo">
	<!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner">
				
		</div>
		<!-- END HEADER INNER -->
	</div>
	<!-- END HEADER -->
	<div class="clearfix"></div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content" >
				@if (Session::has('managementerrors'))
					@foreach (Session::pull('managementerrors') as $msg)
						<div class="custom-alerts alert alert-{{$msg['type']}} fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>{{$msg['message']}}</div>				
					@endforeach
				@endif
				@yield('content')
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
	@yield('modals');
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="/asset/global/plugins/respond.min.js"></script>
	<script src="/asset/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="/asset/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/asset/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/kete/kete.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="/asset/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/datatables/all.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/select2/select2.full.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
	<script src="/asset/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/asset/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="/asset/admin/layout4/scripts/layout.js" type="text/javascript"></script>
	@yield('pagejavascript')
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {    
		   	Metronic.init(); // init metronic core componets
		   	Layout.init(); // init layout
		});
	</script>
	@yield('extrarunnablejavascript')
	@stack('componentscripts')
	<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>
