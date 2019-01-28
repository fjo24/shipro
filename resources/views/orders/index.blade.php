@extends('layouts.admin')

@section('title', 'Shipro Internacional')

@section('content')
{{-- <link rel="stylesheet" href="{{asset('web/assets/css/home.css')}}"> --}}
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Envios</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de envios</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Shipro Internacional
                    </p>
                    
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th></th>
                          <th>Fecha</th>
                          <th>Nombre y Apellido</th>
                          <th>Tracking</th>
                          <th>Empresa</th>
                          <th>Servicio</th>
                          <th>Precio</th>
                          <th>Peso</th>
                          <th>Acciones</th>
                          <th>E-mail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                             <td><input type="checkbox" id="check-all" class="flat"></td>
                          <td>2011/04/25</td>
                          <td>Francisco Milano</td>
                          <td>9595954</td>
                          <td>DHL</td>
                          <td>4-6 dias habiles</td>
                          <td>$122.00</td>
                          <td>2.500</td>
                          <td>Descargar</td>
                          <td>t.nixon@datatables.net</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="check-all" class="flat"></td>
                          <td>2011/07/25</td>
                          <td>Garrett Gutierrez</td>
                          <td>46546546</td>
                          <td>DHL</td>
                          <td>3-4 dias habiles</td>
                          <td>$58.00</td>
                          <td>6.000</td>
                          <td>Descargar</td>
                          <td>g.winters@datatables.net</td>
                        </tr>
                        <tr>
                            <td>
                             <input type="checkbox" id="check-all" class="flat">
                          </td>
                          <td>2009/01/12</td>
                          <td>Carlos Contreras</td>
                          <td>98327447</td>
                          <td>Fedex</td>
                          <td>4-6 dias habiles</td>
                          <td>$12.00</td>
                          <td>1.000</td>
                          <td>Descargar</td>
                          <td>a.cox@datatables.net</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
@section('js')
    <script type="text/javascript">

    </script>
@endsection        
