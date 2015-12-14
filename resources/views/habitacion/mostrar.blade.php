@extends('templates.sistema')

@section('menu')
  <ul class="sidebar-menu">
    <li class="treeview active">
      <a href="#">
        <i class="fa fa-bookmark-o"></i>
        <span>Habitaciones</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{ url('/habitacion/mostrar') }}"><i class="fa fa-angle-double-right"></i> Rentar Habitación</a></li>
        <li><a href="{{ url('/habitacion/agregar') }}"><i class="fa fa-angle-double-right"></i> Agregar Habitación</a></li>
        <li><a href="{{ url('/habitacion/listar') }}"><i class="fa fa-angle-double-right"></i> Listar Habitación</a></li>
      </ul>
    </li>
    <li>
      <a href="index.html">
        <i class="fa fa-bookmark-o"></i> <span>Reservaciones</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bookmark-o"></i>
        <span>Usuarios</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Agregar Usuario</a></li>
        <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Listar Usuarios</a></li>
      </ul>
    </li>
  </ul>
@stop

@section('contenido')
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Habitaciones
      {{--<small>Hotel San Carlos</small>--}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-bookmark-o"></i> Hotel San Carlos</a></li>
      <li class="active">Habitaciones</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <!-- quick email widget -->
        <div class="box box-info">
          <div class="box-header">
            <i class="fa fa-bookmark-o"></i>

            <h3 class="box-title">Rentar Habitación</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                        class="fa fa-times"></i></button>
            </div><!-- /. tools -->
          </div>
          <div class="box-body">
            <div class="row text-center">
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">1</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">2</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">3</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">4</a></div>
            </div>
            <div class="row text-center">
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">5</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">6</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">7</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">8</a></div>
            </div>
            <div class="row text-center">
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">9</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">10</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">11</a></div>
              <div class="col-md-3"><a href="{{ url('/habitacion/rentar') }}" class="btn btn-lg btn-success botones">12</a></div>
            </div>
            {{--<form action="#" method="post">--}}
            {{--<div class="form-group">--}}
            {{--<input type="email" class="form-control" name="emailto" placeholder="No. Habitación:"/>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<input type="text" class="form-control" name="subject" placeholder="Subject"/>--}}
            {{--</div>--}}
            {{--<div>--}}
            {{--<textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>--}}
            {{--</div>--}}
            {{--</form>--}}
          </div>
          {{--<div class="box-footer clearfix">--}}
          {{--<button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>--}}
          {{--</div>--}}
        </div>
      </section>
    </div><!-- /.row (main row) -->
  </section><!-- /.content -->
</aside><!-- /.right-side -->
@stop