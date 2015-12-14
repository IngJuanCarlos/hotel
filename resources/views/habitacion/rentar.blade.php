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

            <h3 class="box-title">Generar Renta</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form action="#" method="post">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-home"></i></span>
                  <input type="text" class="form-control" name="clasificacion" value="1" disabled="disabled" />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-bookmark-o">&nbsp;</i></span>
                  <select name="" id="" class="form-control">
                    <option value="">-- Selecciona el tipo de habitación --</option>
                    <option value="sencilla">Sencilla</option>
                    <option value="doble">Doble</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="number" class="form-control" name="clasificacion" min="1" max="30" placeholder="Días a ocupar">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">&nbsp;<i class="fa fa-dollar"></i></span>
                  <input type="text" disabled="disabled" class="form-control" name="" value="150.00"/>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  <input type="text" disabled="disabled" class="form-control" name="" value="09/12/2015 15:01:00"/>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="" placeholder="Nombre" />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="" placeholder="Apellido Paterno" />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="" placeholder="Apellido Materno" />
                </div>
              </div>
              <div>
                <textarea class="textarea" placeholder="Comentario"
                          style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            </form>
          </div>
          <div class="box-footer clearfix">
          <button class="pull-right btn btn-info" id="sendEmail">Registrar <i class="fa fa-arrow-circle-right"></i></button>
          </div>
        </div>
      </section>
    </div><!-- /.row (main row) -->
  </section><!-- /.content -->
</aside><!-- /.right-side -->
@stop