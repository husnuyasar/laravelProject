<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>ICC - @yield('pagetitle')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/asset/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="./asset/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/asset/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="/asset/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="/asset/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="/asset/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/asset/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../asset/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="/asset/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="/asset/css/flag-icon.min.css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
@yield('extrastylesheet')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	@yield('content')	
</div>
<!--
<div class="text-center language-bar">
    <a href="{{ url('lang/tr') }}"><span class="flag-icon flag-icon-tr glow"></span></a>
    <a href="{{ url('lang/en') }}"><span class="flag-icon flag-icon-us glow"></span></a>
</div>
-->
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../asset/global/plugins/respond.min.js"></script>
<script src="../../asset/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/asset/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/asset/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/asset/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/asset/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/asset/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/asset/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/asset/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/asset/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../asset/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/asset/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/asset/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/asset/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/asset/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<script src="/asset/js/plugins/icheck.min.js"></script>

@yield('pagejavascript')
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Login.init();
});
</script>
@yield('extrarunnablejavascript')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
