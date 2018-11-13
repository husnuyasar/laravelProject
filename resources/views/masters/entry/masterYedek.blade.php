<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="DOS System">
  <meta name="author" content="ALC IT Department">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DOS System</title>

  <!-- font -->
  <link rel="stylesheet" type="text/css" href="/asset/css/sourcesans.css"/>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="/asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="/asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="/asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="/asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link rel="stylesheet" type="text/css" href="/asset/css/dodger.css"/>
  <link rel="stylesheet" type="text/css" href="/asset/css/flag-icon.min.css"/>
  <link rel="stylesheet" type="text/css" href="/asset/css/style.css"/>
  <link href="/asset/css/style-red.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="apple-touch-icon" sizes="57x57" href="/asset/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/asset/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/asset/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/asset/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/asset/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/asset/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/asset/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/asset/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/asset/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/asset/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/asset/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/asset/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/asset/icon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/asset/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  
  <link id="dynamic-favicon" rel="shortcut icon" href="/asset/img/favicon.png"/>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body id="mimin" class="dashboard form-signin-wrapper">

  <!-- start: Content -->
  @yield('content')
  <div class="text-center language-bar">
    <a href="{{ url('lang/tr') }}"><span class="flag-icon flag-icon-tr glow"></span></a>
    <a href="{{ url('lang/en') }}"><span class="flag-icon flag-icon-us glow"></span></a>
    <a href="{{ url('lang/gr') }}"><span class="flag-icon flag-icon-gr glow"></span></a>
  </div>
  <!-- end: Content -->

  <!-- start: Javascript -->
  <script src="/asset/js/jquery.min.js"></script>
  <script src="/asset/js/jquery.ui.min.js"></script>
  <script src="/asset/js/bootstrap.min.js"></script>

  <script src="/asset/js/plugins/moment.min.js"></script>
  <script src="/asset/js/plugins/icheck.min.js"></script>
  <script src="/asset/js/plugins/jquery.nicescroll.js"></script>

  <!-- custom -->
  <script src="/asset/js/main.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('input').iCheck({
      checkboxClass: 'icheckbox_flat-aero',
      radioClass: 'iradio_flat-aero'
    });
  });
  </script>
  <!-- end: Javascript -->
</body>
</html>
