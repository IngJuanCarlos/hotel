<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href="{{ asset('assets/pagina/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pagina/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pagina/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pagina/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pagina/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pagina/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pagina/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pagina/css/responsive.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700italic' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/pagina/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('assets/pagina/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body  id="home" class="homepage">
    @yield('contenido')
</body>
</html>