<!DOCTYPE html>
<html class="bg-black">
<head>
  <meta charset="UTF-8">
  <title>Hotel San Carlos</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- bootstrap 3.0.2 -->
  <link href="{{ asset('/assets/sistema/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- font Awesome -->
  <link href="{{ asset('/assets/sistema/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{ asset('/assets/sistema/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body class="bg-black">

<div class="form-box" id="login-box">
  <div class="header">Iniciar Sesión</div>
  <form action="{{ url('/login') }}" method="post">
    <div class="body bg-gray">
      <div class="form-group">
        <input type="text" name="userid" class="form-control" placeholder="Usuario"/>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password"/>
      </div>
      <div class="form-group">
        <input type="checkbox" name="remember_me"/> Recordarme</div>
    </div>
    <div class="footer">
      <button type="submit" class="btn bg-light-blue btn-block">Iniciar Sesión</button>
    </div>
    {{ csrf_field() }}
  </form>

  <div class="margin text-center">
    <span>Nuestras redes sociales</span>
    <br/>
    <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
    <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
    <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

  </div>
</div>


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/assets/sistema/js/bootstrap.min.js') }}" type="text/javascript"></script>

</body>
</html>