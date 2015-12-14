@extends('templates/pagina')

@section('contenido')
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/pagina/images/logo.png') }}" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Inicio</a></li>
                        <li class="scroll"><a href="#features">Servicios</a></li>
                        <li class="scroll"><a href="#services">Reservaciones</a></li>
{{--                    <li class="scroll"><a href="#about">About</a></li>
                        <li class="scroll"><a href="#meet-team">Team</a></li> --}}
                        <li class="scroll"><a href="#pricing">Precios</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contactanos</a></li>
                        <li class="scroll"><a href="#portfolio">Sistema</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ asset('assets/pagina/images/slider/bg1.jpg')  }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Disfruta</span> de nuestras confortables habitaciones</h2>
                                    <p style="font-weight: bold;font-size:25px; font-family: 'Josefin Sans', sans-serif">Nuestras instalaciones son las mejores de este hermoso Municipio de la region de los Volcanes </p>
                                    <a class="btn btn-primary btn-lg" href="#">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ asset('assets/pagina/images/slider/bg2.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Siempre desearas regresar <span>ven</span> y vivelo</h2>
                                    <p style="font-weight: bold; font-size:25px; font-family: 'Josefin Sans', sans-serif">Más que un hotel somos un lugar donde su satisfaccion y descanso son nuestro mayor objetivo </p>
{{--                                     <a class="btn btn-primary btn-lg" href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Excelente descanso, Al mejor precio</h2>
                    <p>El Cliente es lo mas importante.
                    <br> La calidad es nuetro objetivo
                    <br> El servicio nos diferencia
                    <br> Somos una gran familia al servicio de nuestros clientes
                    </p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#">Leer mas</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestros Servicios</h2>
                <p class="text-center wow fadeInDown">Ademas de poder descansar te ofrecemos una amplia selección de servicios a habitación <br> para que su estadia sea de lo mas placentera</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="{{ asset('assets/pagina/images/servicios-hotel.jpg') }}" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i> 
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Servicio a Habitación</h4>
                            <p>Te ofrecemos servicio a cuarto de alimentos y bebidas. solo consulta la carta en nuestra recepcion y ordena desde la cmmodidad de tu habitación</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Bar y Restaurante</h4>
                            <p>Contamos con un espacio destinado a disfrutar de alimentos y bebidas dentro de nuestras instalaciones. </p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Guias Turisticos</h4>
                            <p>Si usted es un visitante no experimentado le ofrecemos la posibilidad de alquilar un paseo guiado con una persona que lo llevara a recorridos locales </p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Internet Gratuito</h4>
                            <p>Conexion gratis a Internet dentro de las instalaciones</p>
                        </div>
                    </div>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Estacionamiento</h4>
                            <p>Para todos nuestros clientes contamos con servicio de estacionamiento </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms"> <br /></p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"></p>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>

     <section id="services">
        <div class="container-wrapper">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Reservaciones</h2>
            <p class="text-center wow fadeInDown">Genera la reservacion desde la comodidad de tu hogar  </p>
        </div>
            <div class="container">
                <div class="row">
                <div class="col-sm-8 ">
                    <img class="img-responsive" src="{{ asset('assets/pagina/images/reservar.jpg') }}" alt="">
                </div>
                    <div class="col-sm-4">
                        <div class="contact-form">
                            <h3>Aparta tu habitación</h3>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="tipo" class="form-control" placeholder="Tipo de habitacion" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fechaentrada" class="form-control" placeholder="Fecha de Ingreso" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fechasalida" class="form-control" placeholder="Fecha de Salida" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Reservar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"></h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="2305" data-duration="1000"></div>
                        <strong>CUPS OF COFFEE CONSUMED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="1231" data-duration="1000"></div>
                        <strong>CLIENT WORKED WITH</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="3025" data-duration="1000"></div>
                        <strong>PROJECT COMPLETED</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="1199" data-duration="1000"></div>
                        <strong>QUESTIONS ANSWERED</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Precios</h2>
                <p class="text-center wow fadeInDown">Consulta las tarifas de cada una de nuestras habitaciones  <br> decide cual es tu habitacion ideal </p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $200
                                    </span>
                                    <span class="duration">
                                        por Dia
                                    </span>
                                </div>

                                <div class="plan-name">
                                    1 Cama
                                </div>
                            </li>
                            <li>Televisor con Sistema de Cable</li>
                            <li><strong>1</strong> Cama Matrimonial</li>
                            <li><strong>1</strong> Baño y Regadera</li>
                            <li><strong>1</strong> Guardaropa</li>
                            <li>Tocador</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $300
                                    </span>
                                    <span class="duration">
                                        Por dia
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Dos Camas
                                </div>
                            </li>
                            <li><strong>Televisor con Sistema de Cable</strong></li>
                            <li><strong> 1 Cama Matrimonial</strong></li>
                            <li><strong>1 Cama Individual</strong></li>
                            <li><strong>Baño y Regadera</strong></li>
                            <li><strong>2 Guardaropa </strong></li>
                            <li><strong>Tocador</strong> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $350
                                    </span>
                                    <span class="duration">
                                        Por Dia
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Suite
                                </div>
                            </li>
                            <li><strong>Televisor con Sistema de Cable</strong></li>
                            <li><strong>Baño y Regadera</strong></li>
                            <li><strong>1 Cama King Size </strong></li>
                            <li><strong>Guardaropa</strong></li>
                            <li><strong>Tocador</strong></li>
                            <li><strong>Cocina</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="{{ asset('assets/pagina/images/testimonial/01.jpg') }}" alt=""></p>
                                <h4>Nuestros Clientes</h4>
                                <small>En Hotel San Carlos nuestros clientes siempre quedan satisfechos</small>
                                <p>Nuestra politia es que tu y tu familia solo tengan lo mejor. Lo Garantizamos</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contáctanos</h2>
                <p class="text-center wow fadeInDown"><br> Nosotros nos pondremos en contacto contigo para cualquier duda o aclaración </p>
            </div>
        </div>
    </section><!--/#get-in-touch-->


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="19.129018" data-longitude="-98.7688893"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contactos</h3>

                            <address>
                                <strong>Hotel San Carlos</strong><br>
                                Plaza de la Constitucion # 10 <br>
                                Amecameca de Juarez Colonia Centro, C.P. 56900<br>
                                <abbr title="Phone">Telefono:</abbr> (597) 000-0000
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Asunto" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Amecameca de Juarez, Colonia Centro C.P. 56900 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Estado de México</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{ asset('assets/pagina/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/bootstrap.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('assets/pagina/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/mousescroll.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/pagina/js/main.js') }}"></script>
@stop