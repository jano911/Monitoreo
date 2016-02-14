<!DOCTYPE html>
<html>
  
<!-- Mirrored from responsivewebinc.com/premium/barnie11/ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:39:49 GMT -->
<head>
    <!-- Title here -->
    <title>Monitoreo - Configuración</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Date-Time Picker CSS -->
    <link href="<?php echo base_url();?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- jQuery gritter -->
    <link href="<?php echo base_url();?>/css/jquery.gritter.css" rel="stylesheet">
    <!-- JQuery On Off CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/css/jquery.onoff.css" media="screen" />
    <!-- JQuery UI CSS -->
    <link href="<?php echo base_url();?>/css/jquery-ui.css" rel="stylesheet">
    <!-- JQuery Rateit CSS -->
    <link href="<?php echo base_url();?>/css/rateit.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Color CSS -->
    <link href="<?php echo base_url();?>/css/less-style.css" rel="stylesheet"> 
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/css/style.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
    <!--Color -->
  <link href="<?php echo base_url();?>/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  </head>
  
  <body>
    <div class="outer">
          
      <!-- Sidebar starts -->
      <div class="sidebar">
      
        <div class="sidey">
      
          <!-- Logo -->
          <div class="logo">
            <h1><a href="<?php echo base_url();?>/index-2.html"><i class="fa fa-desktop br-red"></i> SOFTV <span>Monitoreo</span></a></h1>
          </div>
          <div class="side-nav userSet">
            <div class="side-nav-block">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fa fa-user"></i><?php echo $username?></a></li>
                <li><a href="<?php echo base_url();?>/index.php/LoginControlador/logout"><i class="fa fa-reply"></i> Cerrar sesión</a></li>
              </ul>
            </div>
          </div>
          <!-- Sidebar navigation starts -->
          <div class="side-nav">
            <div class="side-nav-block">        
              <!-- Sidebar links -->
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url();?>/index-2.html"><i class="fa fa-desktop"></i> Inicio</a></li>
                <li><a href="<?php echo base_url();?>/index.php/PruebaControlador/suscriptores"><i class="fa fa-bullseye"></i> Suscriptores</a></li>
                <li><a href="<?php echo base_url();?>/index.php/TarjetaControlador/tarjetas"><i class="fa fa-mobile"></i> Tarjetas y Puertos </a></li>
                <li><a href="#"><i class="fa fa-signal"></i> Configuración</a></li>
              </ul>
            </div>
          </div>
          
          <!-- Sidebar navigation ends -->
          
        </div>
      </div>
      <!-- Sidebar ends -->
      
      <!-- Mainbar starts -->
      <div class="mainbar">
        
        <div class="main-content">
          <div class="container">
               
                <!--Rangos Potencia Upstream-->
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-head br-red">
                      <h3 class="pull-left"><i class="fa fa-desktop"></i> Rangos Potencia Upstream</h3>
                        <div class="pull-right">
                          <!-- Nav tabs -->
                          <ul>
                            <li><a class="btn btn-default btn-xs notify-without-image" id="btnSaveUP">Guardar</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">

                      <table style="width:100%">
                        <tr>
                          <td> 
                            <input type="text" id="amountUP1" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeUP1"></div>

                          </td>
                          <td>
                            <div style="padding: 10px;" >
                              <select id="SelColorUP1" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                          
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountUP2" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeUP2"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorUP2" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountUP3" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeUP3"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorUP3" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!--Rangos Potencia Downstream-->
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-head br-green">
                      <h3 class="pull-left"><i class="fa fa-desktop"></i> Rangos Potencia Downstream</h3>
                        <div class="pull-right">
                          <!-- Nav tabs -->
                          <ul>
                            <li><a class="btn btn-default btn-xs notify-without-image" id="btnSaveDP">Guardar</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>                    
                    </div>
                    <div class="widget-body">

                      <table style="width:100%">
                        <tr>
                          <td> 
                            <input type="text" id="amountDP1" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeDP1"></div>

                          </td>
                          <td>
                            <div style="padding: 10px;" >
                              <select id="SelColorDP1" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                          
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountDP2" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeDP2"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorDP2" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountDP3" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeDP3"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorDP3" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <!--Rangos Upstream SNR-->
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-head br-lblue">
                      <h3 class="pull-left"><i class="fa fa-desktop"></i> Rangos Upstream SNR</h3>
                        <div class="pull-right">
                          <!-- Nav tabs -->
                          <ul>
                            <li><a class="btn btn-default btn-xs notify-without-image" id="btnSaveUS">Guardar</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>                      
                    </div>
                    <div class="widget-body">

                      <table style="width:100%">
                        <tr>
                          <td> 
                            <input type="text" id="amountUS1" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeUS1"></div>

                          </td>
                          <td>
                            <div style="padding: 10px;" >
                              <select id="SelColorUS1" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                          
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountUS2" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeUS2"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorUS2" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountUS3" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeUS3"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorUS3" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>      
                <!--Rangos Downstream SNR-->
                <div class="col-md-6">
                  <div class="widget">
                    <div class="widget-head br-blue">
                      <h3 class="pull-left"><i class="fa fa-desktop"></i> Rangos Downstream SNR</h3>
                        <div class="pull-right">
                          <!-- Nav tabs -->
                          <ul>
                            <li><a class="btn btn-default btn-xs notify-without-image" id="btnSaveDS">Guardar</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>                        
                    </div>
                    <div class="widget-body">

                      <table style="width:100%">
                        <tr>
                          <td> 
                            <input type="text" id="amountDS1" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeDS1"></div>

                          </td>
                          <td>
                            <div style="padding: 10px;" >
                              <select id="SelColorDS1" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                          
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountDS2" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeDS2"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorDS2" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                        <tr>
                          <td>
                            <input type="text" id="amountDS3" name="range" style="border: 0; color: #f6931f; font-weight: bold;" />
                            <div id="slider-rangeDS3"></div>
                          </td>
                          <td>
                            <div style="padding: 10px;">
                              <select id="SelColorDS3" name="location" class="form-control">
                                <option value="4">--------</option>
                                <option value="2">Optimo</option>
                                <option value="3">Advertencia</option>
                                <option value="1">Fallo</option>
                              </select>
                            </div>
                          </td> 
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>          
                 
                <!--Colores-->
                <div class="col-md-3">
                  <div class="widget">
                    <div class="widget-head br-blue">
                      <h3 class="pull-left"><i class="fa fa-desktop"></i> Colores</h3>
                        <div class="pull-right">
                          <!-- Nav tabs -->
                          <ul>
                            <li><a class="btn btn-default btn-xs notify-without-image" id="btnSaveColor">Guardar</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-body">
                      Optimo
                      <div class="input-group colorpicker-component demo-auto">
                        <input type="text" value="<?php echo $color2?>" class="form-control" id="txtOptimo"/>
                        <span class="input-group-addon"><i></i></span>
                      </div>
                      Advertencia
                      <div class="input-group colorpicker-component demo-auto">
                        <input type="text" value="<?php echo $color3?>" class="form-control" id="txtAdvertencia"/>
                        <span class="input-group-addon"><i></i></span>
                      </div>
                      Fallo
                      <div class="input-group colorpicker-component demo-auto">
                        <input type="text" value="<?php echo $color1?>" class="form-control" id="txtFallo"/>
                        <span class="input-group-addon"><i></i></span>
                      </div>                      
                      Fuera de intervalo
                      <div class="input-group colorpicker-component demo-auto">
                        <input type="text" value="<?php echo $color4?>" class="form-control" id="txtFuera"/>
                        <span class="input-group-addon"><i></i></span>
                      </div></br>
                    </div>
                  </div>
                </div>

                <!--Usuarios-->
                <div class="col-md-9">
                  <div class="widget">
                    <div class="widget-head br-black">
                      <h3><i class="fa fa-user"></i> Usuarios</h3>
                    </div>
                    <div class="widget-body">


                      <div class="page-users">
                        <!-- Nav tab -->
                        <div class="page-tabs">
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#ausers" class="br-lblue" data-toggle="tab"><i class="fa fa-user lblue"></i> Usuarios</a></li>
                            <li><a href="#addnew" class="br-red" data-toggle="tab"><i class="fa fa-plus red"></i> Nuevo</a></li>
                            <!--<li><a href="#edit" class="br-green" data-toggle="tab"><i class="fa fa-edit green"></i> Editar</a></li>-->
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div class="tab-pane fade active in" id="ausers">
                              <!-- Users table -->
                              <div class="table-responsive">
                                <table class="table table-bordered" id="usersTable">
                                  
                                  <tr class="active">
                                    <th> </th>
                                    <th>Username</th>
                                    <th>Tipo de Usuario</th>
                                    <th>Action</th>
                                  </tr>
                                  
                                </table>
                              </div>
                            
                              <div class="clearfix"></div>
                            </div>
                            <!-- Add new user -->
                            <div class="tab-pane fade" id="addnew">
                              <h4>Nuevo usuario</h4>
                              <div class="well">
                                <form class="form-horizontal" id="newUser" role="form" action="<?php echo base_url();?>/index.php/ConfControlador/newUser" method="POST">
            
                                  <div class="form-group">
                                    <label for="username" class="col-md-2 control-label">Usuario</label>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="password" class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="password" class="col-md-2 control-label">Confirmar password</label>
                                    <div class="col-md-10">
                                      <input type="password" class="form-control" id="passwordAgain" placeholder="Password">
                                    </div>
                                  </div>                                
                                 
                                  <div class="form-group">
                                    <label for="radio" class="col-md-2 control-label">Tipo de usuario</label>
                                    <div class="col-md-10">
                                      <label class="radio-inline">
                                        <input type="radio" id="radioAdmin" name="tipo_usuario" value="admin" checked> Administrador
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" id="radioConsulta" name="tipo_usuario" value="consulta"> Consulta
                                      </label>
                                    </div>
                                  </div>                                  
                                  <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                      <button type="submit" class="btn btn-info" id="saveNewUser">Guardar</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            
                            <!--<div class="tab-pane fade" id="edit">
                        
                              <h4>Editar Perfil</h4>-->
                              <!-- Search users -->
                              <!--<div class="well">

                                <form class="form-horizontal" role="form">
                                 
                                  <div class="form-group">
                                    <label for="radio" class="col-md-2 control-label">Tipo de usuario</label>
                                    <div class="col-md-10">
                                      <label class="radio-inline">
                                        <input type="radio" id="radio" name="radio" value="male"> Administrador
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" id="radio" name="radio" value="female"> Consulta
                                      </label>
                                    </div>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                      <button type="submit" class="btn btn-info">Guardar</button>
                                    </div>
                                  </div>
                                </form>

                              </div>-->
                            </div>
                          </div> <!-- Tab panes End -->
                        </div>
                      </div> <!-- Users page End -->


                    </div>
                  </div>
                </div>                   

            </div>

          </div>
        </div>


        
      </div>
      <!-- Mainbar ends -->
      
      <div class="clearfix"></div>
    </div>
    
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="<?php echo base_url();?>/js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url();?>/js/jquery-ui.min.js"></script>
    <!-- Date Time Picker JS -->
    <script src="<?php echo base_url();?>/js/bootstrap-datetimepicker.min.js"></script>  
    <!-- Bootstrap wysihtml5 JS -->   
    <script src="<?php echo base_url();?>/js/wysihtml5-0.3.0.js"></script>
    <script src="<?php echo base_url();?>/js/prettify.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-wysihtml5.min.js"></script>
    <!-- Validate JS -->
    <script src="<?php echo base_url();?>/js/jquery.validate.js"></script>
    <!-- Form wizard steps  JS -->
    <script src="<?php echo base_url();?>/js/jquery.steps.min.js"></script>
    <!-- jQuery Knob -->
    <script src="<?php echo base_url();?>/js/jquery.knob.js"></script>
    <!-- jQuery slim scroll -->
    <script src="<?php echo base_url();?>/js/jquery.slimscroll.min.js"></script>
    <!-- Data Tables JS -->
    <script src="<?php echo base_url();?>/js/jquery.dataTables.min.js"></script> 
    <!-- Pretty Photo JS -->
    <script src="<?php echo base_url();?>/js/jquery.prettyPhoto.js"></script>  
    <!-- Rate It JS -->
    <script src="<?php echo base_url();?>/js/jquery.rateit.min.js"></script> 
    <!-- jQuery full calendar -->
    <script src="<?php echo base_url();?>/js/fullcalendar.min.js"></script>
    <!-- jQuery gritter -->
    <script src="<?php echo base_url();?>/js/jquery.gritter.min.js"></script>
    <!-- On Off Switch JS -->
    <script src="<?php echo base_url();?>/js/jquery.onoff.min.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="<?php echo base_url();?>/js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="<?php echo base_url();?>/js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url();?>/js/custom.js"></script>
    <!--Color  -->
    <script src="<?php echo base_url();?>/js/bootstrap-colorpicker.js"></script>
    <script src="<?php echo base_url();?>/js/docs.js"></script>
    <!-- Mensajes -->
    <script src="<?php echo base_url();?>/js/custom.notification.js"></script>

    <script>
      $(document).ready(function(){
        $('#radioAdmin').click(function(){
          if($("#radioAdmin").is(':checked')){
            $("#radioConsulta").attr('checked', false);
          }
        });
        $('#radioConsulta').click(function(){
          if($("#radioConsulta").is(':checked')){
            $("#radioAdmin").attr('checked', false);
          }
        });
        $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/loadUsers').done(function(data2) {
            $.each(data2, function(i, result) {
              btn = $('<button />', {
                        class : 'btn btn-danger btn-xs',
                        //href : "#myModal",
                        //'data-toggle' : 'modal',
                        value : result.idUsuario,
                        id    : 'btn_'+i,
                        text : 'Eliminar',
                        on    : {
                          click: function() {
                            $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/deleteUser', { idUsuario : result.idUsuario }).done(function(data1) {
                              window.location.reload();
                            });
                          }
                        }
                      });
                $('<tr>').append(
                      $('<td><input type="checkbox">'),$('</td>'),
                      $('<td>').text(result.usuario),$('</td>'),
                      $('<td>').text(result.tipo_usuario),$('</td>'),
                      $('<td>').append(btn),$('</td>'),
                      $('</tr>')).appendTo('#usersTable');
            });
        });
        var $form = $('#newUser');
        $form.submit(function(){
          if($("#password").val == "" || $("#passwordAgain").val() == "" || $("#username").val() == ""){

          }else{
            if($("#password").val() == $("#passwordAgain").val()){
              $.post($(this).attr('action'), $(this).serialize(), function(response){
                window.location.reload();
              },'json');
            }else{
              
            }
          }
          return false;
        });
        $("#btnSaveUP").click(function() {
          //var limiteInferior1,limiteSuperior1,valor1,limiteInferior2,limiteSuperior2,valor2,limiteInferior3,limiteSuperior3,valor3;
          limiteInferior1 = $("#slider-rangeUP1").slider("values", 0);
          limiteSuperior1 = $("#slider-rangeUP1").slider("values", 1);
          valor1 = $("#SelColorUP1" ).val();
          limiteInferior2 = $("#slider-rangeUP2").slider("values", 0);
          limiteSuperior2 = $("#slider-rangeUP2").slider("values", 1);
          valor2 = $("#SelColorUP2" ).val();        
          limiteInferior3 = $("#slider-rangeUP3").slider("values", 0);
          limiteSuperior3 = $("#slider-rangeUP3").slider("values", 1);
          valor3 = $("#SelColorUP3" ).val();
          $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/saveUP', { limiteInferior1 : limiteInferior1, limiteSuperior1 : limiteSuperior1 , valor1 : valor1 , limiteInferior2 : limiteInferior2 , limiteSuperior2 : limiteSuperior2 , valor2 : valor2 , limiteInferior3 : limiteInferior3 , limiteSuperior3 : limiteSuperior3 , valor3 : valor3} ).done(function(data2) {
              if(data2.mensaje == "ok"){
                //alert("Datos guardados exitosamente.");
              }
          });
        });

        $("#btnSaveDP").click(function() {
          limiteInferior1 = $("#slider-rangeDP1").slider( "values", 0);
          limiteSuperior1 = $("#slider-rangeDP1").slider( "values", 1);
          valor1 = $( "#SelColorDP1" ).val();
          limiteInferior2 = $("#slider-rangeDP2").slider( "values", 0);
          limiteSuperior2 = $("#slider-rangeDP2").slider( "values", 1);
          valor2 = $( "#SelColorDP2" ).val();        
          limiteInferior3 = $("#slider-rangeDP3").slider( "values", 0);
          limiteSuperior3 = $("#slider-rangeDP3").slider( "values", 1);
          valor3 = $( "#SelColorDP3" ).val();
          $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/saveDP', { limiteInferior1 : limiteInferior1, limiteSuperior1 : limiteSuperior1 , valor1 : valor1 , limiteInferior2 : limiteInferior2 , limiteSuperior2 : limiteSuperior2 , valor2 : valor2 , limiteInferior3 : limiteInferior3 , limiteSuperior3 : limiteSuperior3 , valor3 : valor3} ).done(function(data2) {
              if(data2.mensaje == "ok"){
                //alert("Datos guardados exitosamente.");
              }
          });
        });

        $("#btnSaveUS").click(function() {
          limiteInferior1 = $("#slider-rangeUS1").slider( "values", 0);
          limiteSuperior1 = $("#slider-rangeUS1").slider( "values", 1);
          valor1 = $( "#SelColorUS1" ).val();
          limiteInferior2 = $("#slider-rangeUS2").slider( "values", 0);
          limiteSuperior2 = $("#slider-rangeUS2").slider( "values", 1);
          valor2 = $( "#SelColorUS2" ).val();        
          limiteInferior3 = $("#slider-rangeUS3").slider( "values", 0);
          limiteSuperior3 = $("#slider-rangeUS3").slider( "values", 1);
          valor3 = $( "#SelColorUS3" ).val();
          $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/saveUS', { limiteInferior1 : limiteInferior1, limiteSuperior1 : limiteSuperior1 , valor1 : valor1 , limiteInferior2 : limiteInferior2 , limiteSuperior2 : limiteSuperior2 , valor2 : valor2 , limiteInferior3 : limiteInferior3 , limiteSuperior3 : limiteSuperior3 , valor3 : valor3} ).done(function(data2) {
              if(data2.mensaje == "ok"){
                //alert("Datos guardados exitosamente.");
              }
          });
        });      

        $("#btnSaveDS").click(function() {
          limiteInferior1 = $("#slider-rangeDS1").slider( "values", 0);
          limiteSuperior1 = $("#slider-rangeDS1").slider( "values", 1);
          valor1 = $( "#SelColorDS1" ).val();
          limiteInferior2 = $("#slider-rangeDS2").slider( "values", 0);
          limiteSuperior2 = $("#slider-rangeDS2").slider( "values", 1);
          valor2 = $( "#SelColorDS2" ).val();        
          limiteInferior3 = $("#slider-rangeDS3").slider( "values", 0);
          limiteSuperior3 = $("#slider-rangeDS3").slider( "values", 1);
          valor3 = $( "#SelColorDS3" ).val();
          $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/saveDS', { limiteInferior1 : limiteInferior1, limiteSuperior1 : limiteSuperior1 , valor1 : valor1 , limiteInferior2 : limiteInferior2 , limiteSuperior2 : limiteSuperior2 , valor2 : valor2 , limiteInferior3 : limiteInferior3 , limiteSuperior3 : limiteSuperior3 , valor3 : valor3} ).done(function(data2) {
              if(data2.mensaje == "ok"){
               // alert("Datos guardados exitosamente.");
              }
          });
        });  


        $("#btnSaveColor").click(function() {
          optimo = $("#txtOptimo").val();
          advertencia = $("#txtAdvertencia").val();
          fallo = $("#txtFallo").val();
          fuera = $("#txtFuera").val();
          optimo = optimo.replace("#","");
          advertencia = advertencia.replace("#","");
          fallo = fallo.replace("#","");
          fuera = fuera.replace("#","");
          $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/saveColor', { optimo : optimo, fallo : fallo , advertencia : advertencia , fuera : fuera } ).done(function(data2) {
              if(data2.mensaje == "ok"){
                //alert("Datos guardados exitosamente.");
              }
          });
        }); 
      });
      function addUserTable(){
        $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/getRangeLoad').done(function(data2) {
          var json=data2;
          
          var unoMin=json.rangos[3].limiteInferior, unoMax=json.rangos[3].limiteSuperior, dosMin=json.rangos[4].limiteInferior, dosMax=json.rangos[4].limiteSuperior, tresMin=json.rangos[5].limiteInferior, tresMax=json.rangos[5].limiteSuperior;

          $( "#SelColorUP1" ).val(json.rangos[3].idValor);
          $( "#SelColorUP2" ).val(json.rangos[4].idValor);
          $( "#SelColorUP3" ).val(json.rangos[5].idValor);

          $("#slider-rangeUP1").slider({
              range: true,
              min: 0,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUP1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUP2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountUP1" ).val($("#slider-rangeUP1").slider("values", 0) + " a " + $("#slider-rangeUP1").slider( "values", 1));
          
          $("#slider-rangeUP2").slider({
              range: true,
              min: $("#slider-rangeUP1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUP2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeUP1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeUP3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountUP2" ).val($("#slider-rangeUP2").slider("values", 0) + " a " + $("#slider-rangeUP2").slider( "values", 1));
          
          $("#slider-rangeUP3").slider({
              range: true,
              min: $("#slider-rangeUP2").slider( "values", 1),
              max: 60,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUP3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUP2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });

          $( "#amountUP3" ).val($("#slider-rangeUP3").slider("values", 0) + " a " + $("#slider-rangeUP3").slider( "values", 1));
          

    //potencia downstream
        //var unoMin=0, unoMax=1, dosMin=2, dosMax=3, tresMin=4, tresMax=5;
          var unoMin=json.rangos[0].limiteInferior, unoMax=json.rangos[0].limiteSuperior, dosMin=json.rangos[1].limiteInferior, dosMax=json.rangos[1].limiteSuperior, tresMin=json.rangos[2].limiteInferior, tresMax=json.rangos[2].limiteSuperior;

          $( "#SelColorDP1" ).val(json.rangos[0].idValor);
          $( "#SelColorDP2" ).val(json.rangos[1].idValor);
          $( "#SelColorDP3" ).val(json.rangos[2].idValor);

          $("#slider-rangeDP1").slider({
              range: true,
              min: -40,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDP1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDP2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountDP1" ).val($("#slider-rangeDP1").slider("values", 0) + " a " + $("#slider-rangeDP1").slider( "values", 1));
          
          $("#slider-rangeDP2").slider({
              range: true,
              min: $("#slider-rangeDP1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDP2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeDP1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeDP3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountDP2" ).val($("#slider-rangeDP2").slider("values", 0) + " a " + $("#slider-rangeDP2").slider( "values", 1));
          
          $("#slider-rangeDP3").slider({
              range: true,
              min: $("#slider-rangeDP2").slider( "values", 1),
              max: 25,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDP3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDP2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });

          $( "#amountDP3" ).val($("#slider-rangeDP3").slider("values", 0) + " a " + $("#slider-rangeDP3").slider( "values", 1));
          

    //snr upstream
        var unoMin=json.rangos[9].limiteInferior, unoMax=json.rangos[9].limiteSuperior, dosMin=json.rangos[10].limiteInferior, dosMax=json.rangos[10].limiteSuperior, tresMin=json.rangos[11].limiteInferior, tresMax=json.rangos[11].limiteSuperior;
        //var unoMin=0, unoMax=1, dosMin=2, dosMax=3, tresMin=4, tresMax=5;
          $( "#SelColorUS1" ).val(json.rangos[9].idValor);
          $( "#SelColorUS2" ).val(json.rangos[10].idValor);
          $( "#SelColorUS3" ).val(json.rangos[11].idValor);

          $("#slider-rangeUS1").slider({
              range: true,
              min: 0,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUS1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUS2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountUS1" ).val($("#slider-rangeUS1").slider("values", 0) + " a " + $("#slider-rangeUS1").slider( "values", 1));
          
          $("#slider-rangeUS2").slider({
              range: true,
              min: $("#slider-rangeUS1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUS2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeUS1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeUS3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountUS2" ).val($("#slider-rangeUS2").slider("values", 0) + " a " + $("#slider-rangeUS2").slider( "values", 1));
          
          $("#slider-rangeUS3").slider({
              range: true,
              min: $("#slider-rangeUS2").slider( "values", 1),
              max: 35,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUS3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUS2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });

          $( "#amountUS3" ).val($("#slider-rangeUS3").slider("values", 0) + " a " + $("#slider-rangeUS3").slider( "values", 1));
          

    //snr DOWNstream
        //var unoMin=0, unoMax=1, dosMin=2, dosMax=3, tresMin=4, tresMax=5;
          var unoMin=json.rangos[6].limiteInferior, unoMax=json.rangos[6].limiteSuperior, dosMin=json.rangos[7].limiteInferior, dosMax=json.rangos[7].limiteSuperior, tresMin=json.rangos[8].limiteInferior, tresMax=json.rangos[8].limiteSuperior;
          
          $( "#SelColorDS1" ).val(json.rangos[6].idValor);
          $( "#SelColorDS2" ).val(json.rangos[7].idValor);
          $( "#SelColorDS3" ).val(json.rangos[8].idValor);

          $("#slider-rangeDS1").slider({
              range: true,
              min: 0,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDS1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDS2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountDS1" ).val($("#slider-rangeDS1").slider("values", 0) + " a " + $("#slider-rangeDS1").slider( "values", 1));
          
          $("#slider-rangeDS2").slider({
              range: true,
              min: $("#slider-rangeDS1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDS2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeDS1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeDS3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountDS2" ).val($("#slider-rangeDS2").slider("values", 0) + " a " + $("#slider-rangeDS2").slider( "values", 1));
          
          $("#slider-rangeDS3").slider({
              range: true,
              min: $("#slider-rangeDS2").slider( "values", 1),
              max: 40,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDS3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDS2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });
        });  
        $( "#amountDS3" ).val($("#slider-rangeDS3").slider("values", 0) + " a " + $("#slider-rangeDS3").slider( "values", 1));
      }
      $(function() {
        $.getJSON('<?php echo base_url();?>/index.php/ConfControlador/getRangeLoad').done(function(data2) {
          var json=data2;
          
          var unoMin=json.rangos[3].limiteInferior, unoMax=json.rangos[3].limiteSuperior, dosMin=json.rangos[4].limiteInferior, dosMax=json.rangos[4].limiteSuperior, tresMin=json.rangos[5].limiteInferior, tresMax=json.rangos[5].limiteSuperior;

          $( "#SelColorUP1" ).val(json.rangos[3].idValor);
          $( "#SelColorUP2" ).val(json.rangos[4].idValor);
          $( "#SelColorUP3" ).val(json.rangos[5].idValor);

          $("#slider-rangeUP1").slider({
              range: true,
              min: 0,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUP1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUP2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountUP1" ).val($("#slider-rangeUP1").slider("values", 0) + " a " + $("#slider-rangeUP1").slider( "values", 1));
          
          $("#slider-rangeUP2").slider({
              range: true,
              min: $("#slider-rangeUP1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUP2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeUP1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeUP3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountUP2" ).val($("#slider-rangeUP2").slider("values", 0) + " a " + $("#slider-rangeUP2").slider( "values", 1));
          
          $("#slider-rangeUP3").slider({
              range: true,
              min: $("#slider-rangeUP2").slider( "values", 1),
              max: 60,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUP3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUP2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });

          $( "#amountUP3" ).val($("#slider-rangeUP3").slider("values", 0) + " a " + $("#slider-rangeUP3").slider( "values", 1));
          

    //potencia downstream
        //var unoMin=0, unoMax=1, dosMin=2, dosMax=3, tresMin=4, tresMax=5;
          var unoMin=json.rangos[0].limiteInferior, unoMax=json.rangos[0].limiteSuperior, dosMin=json.rangos[1].limiteInferior, dosMax=json.rangos[1].limiteSuperior, tresMin=json.rangos[2].limiteInferior, tresMax=json.rangos[2].limiteSuperior;

          $( "#SelColorDP1" ).val(json.rangos[0].idValor);
          $( "#SelColorDP2" ).val(json.rangos[1].idValor);
          $( "#SelColorDP3" ).val(json.rangos[2].idValor);

          $("#slider-rangeDP1").slider({
              range: true,
              min: -40,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDP1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDP2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountDP1" ).val($("#slider-rangeDP1").slider("values", 0) + " a " + $("#slider-rangeDP1").slider( "values", 1));
          
          $("#slider-rangeDP2").slider({
              range: true,
              min: $("#slider-rangeDP1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDP2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeDP1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeDP3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountDP2" ).val($("#slider-rangeDP2").slider("values", 0) + " a " + $("#slider-rangeDP2").slider( "values", 1));
          
          $("#slider-rangeDP3").slider({
              range: true,
              min: $("#slider-rangeDP2").slider( "values", 1),
              max: 25,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDP3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDP2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });

          $( "#amountDP3" ).val($("#slider-rangeDP3").slider("values", 0) + " a " + $("#slider-rangeDP3").slider( "values", 1));
          

    //snr upstream
        var unoMin=json.rangos[9].limiteInferior, unoMax=json.rangos[9].limiteSuperior, dosMin=json.rangos[10].limiteInferior, dosMax=json.rangos[10].limiteSuperior, tresMin=json.rangos[11].limiteInferior, tresMax=json.rangos[11].limiteSuperior;
        //var unoMin=0, unoMax=1, dosMin=2, dosMax=3, tresMin=4, tresMax=5;
          $( "#SelColorUS1" ).val(json.rangos[9].idValor);
          $( "#SelColorUS2" ).val(json.rangos[10].idValor);
          $( "#SelColorUS3" ).val(json.rangos[11].idValor);

          $("#slider-rangeUS1").slider({
              range: true,
              min: 0,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUS1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUS2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountUS1" ).val($("#slider-rangeUS1").slider("values", 0) + " a " + $("#slider-rangeUS1").slider( "values", 1));
          
          $("#slider-rangeUS2").slider({
              range: true,
              min: $("#slider-rangeUS1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUS2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeUS1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeUS3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountUS2" ).val($("#slider-rangeUS2").slider("values", 0) + " a " + $("#slider-rangeUS2").slider( "values", 1));
          
          $("#slider-rangeUS3").slider({
              range: true,
              min: $("#slider-rangeUS2").slider( "values", 1),
              max: 35,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountUS3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeUS2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });

          $( "#amountUS3" ).val($("#slider-rangeUS3").slider("values", 0) + " a " + $("#slider-rangeUS3").slider( "values", 1));
          

    //snr DOWNstream
        //var unoMin=0, unoMax=1, dosMin=2, dosMax=3, tresMin=4, tresMax=5;
          var unoMin=json.rangos[6].limiteInferior, unoMax=json.rangos[6].limiteSuperior, dosMin=json.rangos[7].limiteInferior, dosMax=json.rangos[7].limiteSuperior, tresMin=json.rangos[8].limiteInferior, tresMax=json.rangos[8].limiteSuperior;
          
          $( "#SelColorDS1" ).val(json.rangos[6].idValor);
          $( "#SelColorDS2" ).val(json.rangos[7].idValor);
          $( "#SelColorDS3" ).val(json.rangos[8].idValor);

          $("#slider-rangeDS1").slider({
              range: true,
              min: 0,
              max: unoMax,
              values: [unoMin, unoMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDS1").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDS2" ).slider({
                  min: ui.values[ 1 ]
                });
              }

          });

          $( "#amountDS1" ).val($("#slider-rangeDS1").slider("values", 0) + " a " + $("#slider-rangeDS1").slider( "values", 1));
          
          $("#slider-rangeDS2").slider({
              range: true,
              min: $("#slider-rangeDS1").slider( "values", 1),
              max: dosMax,
              values: [dosMin, dosMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDS2").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);              
              },
              change: function( event, ui ) {
                $( "#slider-rangeDS1" ).slider({
                  max: ui.values[ 0 ]       
                });
                $( "#slider-rangeDS3" ).slider({
                  min: ui.values[ 1 ]       
                });
              }          
          });

          $( "#amountDS2" ).val($("#slider-rangeDS2").slider("values", 0) + " a " + $("#slider-rangeDS2").slider( "values", 1));
          
          $("#slider-rangeDS3").slider({
              range: true,
              min: $("#slider-rangeDS2").slider( "values", 1),
              max: 40,
              values: [tresMin, tresMax],
              step:0.1,
              slide: function(event, ui) {
                  $("#amountDS3").val(ui.values[ 0 ] + " a " + ui.values[ 1 ]);
              },
              change: function( event, ui ) {
                $( "#slider-rangeDS2" ).slider({
                  max: ui.values[ 0 ]       
                });
              }          
          });
          $( "#amountDS3" ).val($("#slider-rangeDS3").slider("values", 0) + " a " + $("#slider-rangeDS3").slider( "values", 1));
        });  
        
      });
    </script>


    
  </body> 

<!-- Mirrored from responsivewebinc.com/premium/barnie11/ui.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:39:51 GMT -->
</html>