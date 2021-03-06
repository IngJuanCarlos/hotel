<!DOCTYPE html>
<html>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header">
  <a href="index.html" class="logo">
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    Hotel San Carlos
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-right">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                    </div>
                    <h4>
                      Support Team
                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li><!-- end message -->
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                    </div>
                    <h4>
                      AdminLTE Design Team
                      <small><i class="fa fa-clock-o"></i> 2 hours</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="img/avatar.png" class="img-circle" alt="user image"/>
                    </div>
                    <h4>
                      Developers
                      <small><i class="fa fa-clock-o"></i> Today</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                    </div>
                    <h4>
                      Sales Department
                      <small><i class="fa fa-clock-o"></i> Yesterday</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="{{ asset('assets/sistema/img/avatar.png') }}" class="img-circle"
                           alt="user image"/>
                    </div>
                    <h4>
                      Reviewers
                      <small><i class="fa fa-clock-o"></i> 2 days</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span>{{ Auth::user()->nombre }} <i class="caret"></i></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header bg-light-blue">
              <img src="{{ asset('assets/sistema/img/avatar5.png') }}" class="img-circle"
                   alt="User Image"/>

              <p>
                {{ Auth::user()->nombre }} - Administrador
                <small>Hotel San Carlos</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Perfil</a>
              </div>
              <div class="pull-right">
                <a href="{{ url('/salir') }}" class="btn btn-default btn-flat">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/sistema/img/avatar5.png') }}" class="img-circle" alt="User Image"/>
        </div>
        <div class="pull-left info">
          <p>Hola, {{ Auth::user()->nombre }}</p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      @yield('menu')
    </section>
    <!-- /.sidebar -->
  </aside>
  @yield('contenido')
</div><!-- ./wrapper -->

<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="{{ asset('assets/sistema/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/sistema/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('assets/sistema/js/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/sistema/js/plugins/sparkline/jquery.sparkline.min.js') }}"
        type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{ asset('assets/sistema/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('assets/sistema/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"
        type="text/javascript"></script>
<!-- fullCalendar -->
<script src="{{ asset('assets/sistema/js/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/sistema/js/plugins/jqueryKnob/jquery.knob.js') }}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/sistema/js/plugins/daterangepicker/daterangepicker.js') }}"
        type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
{{--<script src="{{ asset('assets/sistema/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>--}}
<!-- iCheck -->
<script src="{{ asset('assets/sistema/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/sistema/js/AdminLTE/app.js') }}" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/sistema/js/AdminLTE/dashboard.js') }}" type="text/javascript"></script>

</body>
<head>
  <meta charset="UTF-8">
  <title>Hotel San Carlos</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- bootstrap 3.0.2 -->
  <link href="{{ asset('assets/sistema/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
  <!-- font Awesome -->
  <link href="{{ asset('assets/sistema/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Ionicons -->
  <link href="{{ asset('assets/sistema/css/ionicons.min.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Morris chart -->
  <link href="{{ asset('assets/sistema/css/morris/morris.css') }}" rel="stylesheet" type="text/css"/>
  <!-- jvectormap -->
  <link href="{{ asset('assets/sistema/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
        type="text/css"/>
  <!-- fullCalendar -->
  <link href="{{ asset('assets/sistema/css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Daterange picker -->
  <link href="{{ asset('assets/sistema/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet"
        type="text/css"/>
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="{{ asset('assets/sistema/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet"
        type="text/css"/>
  <!-- Theme style -->
  <link href="{{ asset('assets/sistema/css/AdminLTE.css') }}" rel="stylesheet" type="text/css"/>
  <!-- My styles -->
  <link href="{{ asset('assets/sistema/css/styles.css') }}" rel="stylesheet" type="text/css"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
</html>