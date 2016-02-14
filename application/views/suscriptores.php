<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	
<!-- Mirrored from responsivewebinc.com/premium/barnie11/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:40:33 GMT -->
<head>
		<!-- Title here -->
		<title>Monitoreo - SOFTV</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php echo base_url();?>/css/font-awesome.min.css" rel="stylesheet">		
		<!-- jQuery gritter -->
		<link href="<?php echo base_url();?>/css/jquery.gritter.css" rel="stylesheet">
		<!-- Custom Color CSS -->
		<link href="<?php echo base_url();?>/css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="<?php echo base_url();?>/css/style.css" rel="stylesheet">
		<!-- Grafica CSS -->
		<link href="<?php echo base_url();?>/css/rickshaw.min.css" rel="stylesheet">
		<!-- JQuery On Off CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>/css/jquery.onoff.css" media="screen" />
		<!-- Bootstrap Date-Time Picker CSS -->
		<link href="<?php echo base_url();?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<!-- DateTime Nuevo -->
		<!-- Link datetime v2 -->
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
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
								<li><a href="#"><i class="fa fa-bullseye"></i> Suscriptores</a></li>
								<li><a href="<?php echo base_url();?>/index.php/TarjetaControlador/tarjetas"><i class="fa fa-mobile"></i> Tarjetas y Puertos </a></li>
								<li><a href="<?php echo base_url();?>/index.php/ConfControlador/configuracion"><i class="fa fa-signal"></i> Configuración</a></li>
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
						<div class="page-content page-invoice" id="content-page-section2" style="display:none">
							
							<!-- Heading -->
							<div class="single-head">
								<!-- Heading -->
								<h3 class="pull-left" id="titleMac"><i class="fa fa-desktop lblue"></i> Gráfica de CableModem / MAC: </h3>
								<div class="clearfix">
									<div class="breads pull-right">
										<button id="goBack" class="btn btn-black">Regresar a la búsqueda</button>
									</div>
								</div>
							</div>
							<!-- Parte de la grafica -->
							<div class="row show-grid addPadding">
								<div class="row">
									<div class= "col-md-4 rightSide">
										<h3 align="center" class="titulo">Graficar</h3>
										<BR>
										<table>
											<tr>
												<td>
													<div class="sw-lblue">
														<input class="checkboxes" type="checkbox"  id="uppower2" />
													</div>
												</td>
												<td>
													<label class="col-md-12" >Potencia UpStream</label>
												</td>
											</tr>
											<tr>	
												<td>
													<div class="sw-red">
														<input class="checkboxes" type="checkbox"  id="dwpower2" />
													</div>
												</td>
												<td>
													<label class="col-md-12" >Potencia DownStream</label>
												</td>
											</tr>
											<tr>
												<td>
													<div class="sw-green">
														<input class="checkboxes" type="checkbox"  id="upsnr2" />
													</div>
												</td>
												<td>
													<label class="col-md-12" >UpStream (SNR)</label>
												</td>
											</tr>
											<tr>
												<td>
													<div class="sw-blue">
														<input class="checkboxes" type="checkbox"  id="dwsnr2" />
													</div>
												</td>
												<td>
													<label class="col-md-12" >DownStream (SNR)</label>
												</td>
											</tr>
										</table>
										
										<BR>
											<h4>Fecha Inicial</h4>
											<!-- Date Picker -->
											 <div id="datetimepicker11" class="input-append input-group dtpicker date">
											      <input type="text" class="form-control" id="dtp3"></input>
											      <span class="input-group-addon add-on">
											        <i data-time-icon="fa fa-times" data-date-icon="fa fa-calendar"></i>
											      </span>
											  </div>
											<br>
											<h4>Fecha Final</h4>
											<!-- Date Picker -->
											<div id="datetimepicker111" class="input-append input-group dtpicker date">
											      <input type="text" class="form-control" id="dtp4"></input>
											      <span class="input-group-addon add-on">
											        <i data-time-icon="fa fa-times" data-date-icon="fa fa-calendar"></i>
											      </span>
											  </div>
											<br>
											<button id="graficar2" class="btn btn-danger btnGraficar">Graficar</button>			
									</div>
									<div id="chart_container" class="col-md-8 leftSide">
							    		
									</div>
								</div>
							</div>
						</div>
						<div class="page-content page-invoice" id="content-page">
							<!-- Heading -->
							<div class="single-head">
								<!-- Heading -->
								<h3 class="pull-left"><i class="fa fa-desktop lblue"></i> Suscriptores</h3>
								<!-- Bread crumbs -->
								<div class="clearfix"></div>
							</div>
							<!-- Modal -->
							<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" width="800px">
									<div class="modal-content" width="800px">
										<div class="modal-header col-md-12">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x	</button>
											<h4 class="modal-title">Datos del Suscriptor</h4>
										</div>
										<div class="modal-body col-md-12">
											<h4 class="col-md-4 titulo" align="center">Información General del Suscriptor</h4>

											<h4 class="col-md-8 titulo" align="center">Niveles de Operación del Cable Modem</h4>
											<div class="show-grid">
												<div class="col-md-4">
													<label class="col-md-12" >Contrato</label>
													<label class="col-md-12 lbData" id="contrato"></label>
													<label class="col-md-12" >Nombre</label>
													<label class="col-md-12 lbData" id="nombre"></label>
													<label class="col-md-12" >Dirección</label>
													<label class="col-md-12 lbData" id="direccion"></label>
													<label class="col-md-12" >Dirección MAC</label>
													<label class="col-md-12 lbData" id="dirmac" ></label>
													<label class="col-md-12" >Último mes pagado</label>
													<label class="col-md-12 lbData" id="umpag"></label>
													<label class="col-md-12" >Servicio</label>
													<label class="col-md-12 lbData" id="servicio"></label>
													<label class="col-md-12" >Estatus de contrato</label>
													<label class="col-md-12 lbData" id="estatuscontra"></label>
													<label class="col-md-12" >Estatus de CM</label>
													<label class="col-md-12 lbData" id="estatuscm"></label>
													<label class="col-md-12" >Marca y Modelo de CM</label>
													<label class="col-md-12 lbData" id="marmodcm"></label>
													<label class="col-md-12" >IP CM</label>
													<label class="col-md-12 lbData" id="ip"></label>
												</div>
												<div class="col-md-8">
													<div class = "row show-grid addPadding">
														<div class="col-md-6">
															<label class="col-md-12" >Potencia UpStream</label>
															<div id='myChart' class="gauge col-md-12"></div>
															<label class="col-md-12" >Potencia DownStream</label>
															<div id='myChart2'class="gauge col-md-12"></div></td> 
														</div>
														<div class="col-md-6">
															<label class="col-md-12" >UpStream (SNR)</label>
															<div id='myChart3'class="gauge col-md-12"></div>
															<label class="col-md-12" >DownStream (SNR)</label>
															<div id='myChart4'class="gauge col-md-12"></div>
														</div>
													</div>
													<br>
													<div class="row show-grid addPadding">
														<h4 class="col-md-12 titulo" align="center">Ubicación del Cable Modem</h4>
														<div class="col-md-6">
															<label class="col-md-12" id="lbContrato">UpStream</label>
															<label class="col-md-12 lbData" id="upsp"></label>
														</div>
														<div class="col-md-6">
															<label class="col-md-12" id="lbContrato">DownStream</label>
															<label class="col-md-12 lbData" id="dwsp"></label>
														</div>
													</div>
													<div class="row show-grid addPadding">
														<br>
														<h4 align="center" class="titulo">Graficar</h4>
														<BR>
														<div class= "col-md-6">
															<h4>Fecha Inicial</h4>
															<!-- Date Picker -->
															<div id="datetimepicker1111" class="input-append input-group dtpicker date">
														      <input type="text" class="form-control" id="dtp1"></input>
														      <span class="input-group-addon add-on">
														        <i data-time-icon="fa fa-times" data-date-icon="fa fa-calendar"></i>
														      </span>
														    </div>
														    <br>
															<table>
																<tr>
																	<td>
																		<div class="sw-lblue">
																			<input class="checkboxes" type="checkbox"  id="uppower" />
																		</div>
																	</td>
																	<td>
																		<label class="col-md-12" >Potencia UpStream</label>
																	</td>
																</tr>
																<tr>	
																	<td>
																		<div class="sw-red">
																			<input class="checkboxes" type="checkbox"  id="dwpower" />
																		</div>
																	</td>
																	<td>
																		<label class="col-md-12" >Potencia DownStream</label>
																	</td>
																</tr>
															</table>
														</div>
														<div class= "col-md-6">
															<h4>Fecha Final</h4>
															<!-- Date Picker -->
															<div id="datetimepicker11111" class="input-append input-group dtpicker date">
														      <input type="text" class="form-control" id="dtp2"></input>
														      <span class="input-group-addon add-on">
														        <i data-time-icon="fa fa-times" data-date-icon="fa fa-calendar"></i>
														      </span>
										    				</div>
										    				<br>
															<table>
																	<tr>
																		<td>
																			<div class="sw-green">
																				<input class="checkboxes" type="checkbox"  id="upsnr" />
																			</div>
																		</td>
																		<td>
																			<label class="col-md-12" >UpStream (SNR)</label>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="sw-blue">
																				<input class="checkboxes" type="checkbox"  id="dwsnr" />
																			</div>
																		</td>
																		<td>
																			<label class="col-md-12" >DownStream (SNR)</label>
																		</td>
																	</tr>
																</table>
														</div>

														
													</div>
													<button id="graficar" class="btn btn-danger btnGraficar2" data-dismiss="modal">Graficar</button>
												</div>
											</div>
										</div>
										<div class="modal-footer"> 
											<button type="button" class="btn btn-info btn-sm" data-dismiss="modal" aria-hidden="true">Cerrar</button>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Address -->
							<div class="row">
							
							  <div class="col-md-2 col-sm-4">
								<h5>MAC Address</h5>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="XXXX00AABBCC" id="textMac">
								</div>
							  </div>
							  <div class="col-md-3 col-sm-4">
								<h5>Nombre del Cliente</h5>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombre" id="textName" value="jose">
								</div>
							  </div>
							  <div class="col-md-2 col-sm-4">
								<h5>Contrato</h5>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="0000" id="textContract">
								</div>
							  </div>
							  
							  <div class="col-md-2 col-sm-4">
							  	<input type="button" class="btn btn-success" id="buttonSearch" value="Buscar" />
							  </div>
							
							</div>

							<!-- Data -->
								<div class="table-responsive" >
									<table class="table table-hover table-bordered ">
										<thead>
											<tr>
												<th>Contrato</th>
												<th>Status</th>
												<th>Nonbre</th>
												<th>Domicilio</th>
												<th>MAC Address</th>
												<th>Control</th>
											</tr>
										</thead>
										<tbody id="bodySearch">
										
										</tbody>
									</table>
								</div>	
								
								<div class="clearfix"></div>
								<hr />
							


							<div class="clearfix"></div>
							
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
		<!-- jQuery gritter notification -->
		<!--<script src="<?php echo base_url();?>/js/custom.notification.js"></script>-->
		<!-- Respond JS for IE8 -->
		<script src="<?php echo base_url();?>/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="<?php echo base_url();?>/js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="<?php echo base_url();?>/js/custom.js"></script>
		<!-- Grafica JS -->
		<script src="<?php echo base_url();?>/js/d3.min.js"></script>
		<script src="<?php echo base_url();?>/js/d3.layout.min.js"></script>
		<script src="<?php echo base_url();?>/js/rickshaw.min.js"></script>
		<!-- On Off Switch JS -->
		<script src="<?php echo base_url();?>/js/jquery.onoff.min.js"></script>
		<!-- Date Time Picker JS -->
		<script src="<?php echo base_url();?>/js/bootstrap-datetimepicker.min.js"></script>	
		<!-- Zingchart -->
		<script src="<?php echo base_url();?>/js/zingchart.min.js"></script>
		<!-- Validate JS -->
		<script src="<?php echo base_url();?>/js/jquery.validate.js"></script>
		<!-- Javascript for this page -->
		
		<!-- Javascript for this page -->

        <script type="text/javascript">
			//alert(color2);
			$(document).ready(function(){
		        var liDS1,liDS2,liDS3,lsDS1,lsDS2,lsDS3;
	        	var liUS1,liUS2,liUS3,lsUS1,lsUS2,lsUS3;
	        	var liUP1,liUP2,liUP3,lsUP1,lsUP2,lsUP3;
	        	var liDP1,liDP2,liDP3,lsDP1,lsDP2,lsDP3;
	        	var color1,color2,color3;
	        	$.getJSON('<?php echo base_url();?>/index.php/PruebaControlador/getConfig').done(function(data1) {
		        	$.each(data1.rangos, function (i, result) {
		        		
		        			if(i==0){
		        				liDS1=result.limiteInferior;
		        				lsDS1=result.limiteSuperior;
		        				color1=result.colors;
		        			}
		        			if(i==1){
		        				liDS2=result.limiteInferior;
		        				lsDS2=result.limiteSuperior;
		        				color2=result.colors;
		        			}
		        			if(i==2){
		        				liDS3=result.limiteInferior;
		        				lsDS3=result.limiteSuperior;
		        				color3=result.colors;
		        			}
		        			if(i==3){
		        				liDP1=result.limiteInferior;
		        				lsDP1=result.limiteSuperior;
		        				color1=result.colors;
		        			}
		        			if(i==4){
		        				liDP2=result.limiteInferior;
		        				lsDP2=result.limiteSuperior;
		        				color2=result.colors;
		        			}
		        			if(i==5){
		        				liDP3=result.limiteInferior;
		        				lsDP3=result.limiteSuperior;
		        				color3=result.colors;
		        			}
		        			if(i==6){
		        				liUS1=result.limiteInferior;
		        				lsUS1=result.limiteSuperior;
		        				color1=result.colors;
		        			}
		        			if(i==7){
		        				liUS2=result.limiteInferior;
		        				lsUS2=result.limiteSuperior;
		        				color2=result.colors;
		        			}
		        			if(i==8){
		        				liUS3=result.limiteInferior;
		        				lsUS3=result.limiteSuperior;
		        				color3=result.colors;
		        			}
		        			if(i==9){
		        				liUP1=result.limiteInferior;
		        				lsUP1=result.limiteSuperior;
		        				color1=result.colors;
		        			}
		        			if(i==10){
		        				liUP2=result.limiteInferior;
		        				lsUP2=result.limiteSuperior;
		        				color2=result.colors;
		        			}
		        			if(i==11){
		        				liUP3=result.limiteInferior;
		        				lsUP3=result.limiteSuperior;
		        				color3=result.colors;
		        			}
		        		//alert(liUP3);
		        	});
		        });
				//alert(lsUP1);
	        	$("#buttonSearch").click(function(){
	        		$.getJSON('<?php echo base_url();?>/index.php/PruebaControlador/getAllContracts', { nombre : $("#textName").val(), contrato : $("#textContract").val(), mac : $("#textMac").val() }).done(function(data) {
	        			$("#bodySearch tr").remove();
	        			$.each(data, function (i, result) {
	        				btn = $('<button />', {
					              class : 'btn btn-xs btn-warning',
					              href : "#myModal",
					              'data-toggle' : 'modal',
					              value : result.mac,
					              id    : 'btn_'+i,
					              text : 'buscar',
					              on    : {
					                 click: function() {
					                     $.getJSON('<?php echo base_url();?>/index.php/PruebaControlador/getDataMac1', { mac : result.mac }).done(function(data1) {
						        			$.each(data1, function(i, result1) {
						        			   $("#contrato").text("");
						        			   $("#nombre").text("");
						        			   $("#direccion").text("");
						        			   $("#dirmac").text("");
						        			   $("#umpag").text("");
						        			   $("#servicio").text("");
						        			   $("#estatuscontra").text("");
										       $("#contrato").append(result1.contrato);
										       $("#nombre").append(result1.nombre);
										       $("#direccion").append(result1.domicilio);
										       $("#dirmac").append(result1.mac);
										       $("#umpag").append(result1.ultimomes);
										       $("#servicio").append(result1.servicio);
										       $("#estatuscontra").append(result1.status);
										     });
						        		});
						        		$.getJSON('<?php echo base_url();?>/index.php/PruebaControlador/getDataMac2', { mac : result.mac }).done(function(data2) {
						        			$.each(data2, function(i, result2) {
										       $("#upsp").text("");
										       $("#upsp").append(result2.upstream);
										       $("#dwsp").text("");
										       $("#dwsp").append(result2.downstream);
										       $("#ip").text("");
										       $("#ip").append(result2.ip);
										       zingchart.THEME="classic";
											    var myConfig = {
											    "graphset":[
											        {
											            "type":"gauge",
											            "background-color":"#fff",
											            "plot":{
											                "background-color":"#666"
											            },
											            "plotarea":{
											                "margin":"0 0 0 0"
											            },
											            "scale":{
											                "size-factor":0.71,
											                "offset-y":10
											            },
											            "tooltip":{
											              "background-color":"black"
											            },
											            "scale-r":{
											                "values":liUP1 + ":" + lsUP3 + ":1",
											                //"values":"0:100:10",
											                "border-color":"#b3b3b3",
											                "border-width":"2",
											                "background-color":"#eeeeee,#b3b3b3",
											                "ring":{
											                    "size":10,
											                    "offset-r":"130px",
											                    "rules":[
											                        {
											                            "rule":"%v >=" + liUP1 + " && %v < " + lsUP1,
											                            "background-color":color1
											                        },
											                        {
											                            "rule":"%v >= " + liUP2 + " && %v < " + lsUP2,
											                            "background-color":color2
											                        },
											                        {
											                            "rule":"%v >= " + liUP3 + " && %v < " + lsUP3,
											                            "background-color":color3
											                        }
											                    ]
											                }
											            },
											            "labels":[
											                {
											                    "id":"lbl1",
											                    "x":"50%",
											                    "y":"90%",
											                    "width":130,
											                    "offsetX":0,
											                    "offsetY":-15,
											                    "textAlign":"center",
											                    "anchor":"c",
											                    "text":result2.uppotencia,
											                    "backgroundColor":"#FFF"
											                }
											            ],
											            "series":[
											                {
											                    "values":[result2.uppotencia],
											                    "animation":{
											                        "method":5,
											                        "effect":2,
											                        "speed":4000
											                    }
											                }
											            ],
											            "alpha":1
											        }
											    ]};
											    var myConfig2 = {
											    "graphset":[
											        {
											            "type":"gauge",
											            "background-color":"#fff",
											            "plot":{
											                "background-color":"#666"
											            },
											            "plotarea":{
											                "margin":"0 0 0 0"
											            },
											            "scale":{
											                "size-factor":0.71,
											                "offset-y":10
											            },
											            "tooltip":{
											              "background-color":"black"
											            },
											            "scale-r":{
											                "values": liDP1 + ":"+ lsDP3 + ":.1",
											                //"values": "0:100:10",
											                "border-color":"#b3b3b3",
											                "border-width":"2",
											                "background-color":"#eeeeee,#b3b3b3",
											                "ring":{
											                    "size":10,
											                    "offset-r":"130px",
											                    "rules":[
											                        {
											                            "rule":"%v >=" + liDP1 + " && %v < " + lsDP1,
											                            "background-color":color1
											                        },
											                        {
											                            "rule":"%v >= " + liDP2 + " && %v < " + lsDP2,
											                            "background-color":color2
											                        },
											                        {
											                            "rule":"%v >= " + liDP3 + " && %v < " + lsDP3,
											                            "background-color":color3
											                        }
											                    ]
											                }
											            },
											            "labels":[
											                {
											                    "id":"lbl1",
											                    "x":"50%",
											                    "y":"90%",
											                    "width":130,
											                    "offsetX":0,
											                    "offsetY":-15,
											                    "textAlign":"center",
											                    "anchor":"c",
											                    "text":result2.dpotencia,
											                    "backgroundColor":"#FFF"
											                }
											            ],
											            "series":[
											                {
											                    "values":[result2.dpotencia],
											                    "animation":{
											                        "method":5,
											                        "effect":2,
											                        "speed":4000
											                    }
											                }
											            ],
											            "alpha":1
											        }
											    ]};
											    var myConfig3 = {
											    "graphset":[
											        {
											            "type":"gauge",
											            "background-color":"#fff",
											            "plot":{
											                "background-color":"#666"
											            },
											            "plotarea":{
											                "margin":"0 0 0 0"
											            },
											            "scale":{
											                "size-factor":0.71,
											                "offset-y":10
											            },
											            "tooltip":{
											              "background-color":"black"
											            },
											            "scale-r":{
											                "values":liUS1 + ":" + lsUS3 + ":1",
											                "border-color":"#b3b3b3",
											                "border-width":"2",
											                "background-color":"#eeeeee,#b3b3b3",
											                "ring":{
											                    "size":10,
											                    "offset-r":"130px",
											                    "rules":[
											                        {
											                            "rule":"%v >=" + liUS1 + " && %v < " + lsUS1,
											                            "background-color":color1
											                        },
											                        {
											                            "rule":"%v >= " + liUS2 + " && %v < " + lsUS2,
											                            "background-color":color2
											                        },
											                        {
											                            "rule":"%v >= " + liUS3 + " && %v < " + lsUS3,
											                            "background-color":color3
											                        }
											                    ]
											                }
											            },
											            "labels":[
											                {
											                    "id":"lbl1",
											                    "x":"50%",
											                    "y":"90%",
											                    "width":130,
											                    "offsetX":0,
											                    "offsetY":-15,
											                    "textAlign":"center",
											                    "anchor":"c",
											                    "text":result2.upsnr,
											                    "backgroundColor":"#FFF"
											                }
											            ],
											            "series":[
											                {
											                    "values":[result2.upsnr],
											                    "animation":{
											                        "method":5,
											                        "effect":2,
											                        "speed":4000
											                    }
											                }
											            ],
											            "alpha":1
											        }
											    ]};
											    var myConfig4 = {
											    "graphset":[
											        {
											            "type":"gauge",
											            "background-color":"#fff",
											            "plot":{
											                "background-color":"#666"
											            },
											            "plotarea":{
											                "margin":"0 0 0 0"
											            },
											            "scale":{
											                "size-factor":0.71,
											                "offset-y":10
											            },
											            "tooltip":{
											              "background-color":"black"
											            },
											            "scale-r":{
											                "values": liDS1 + ":" + lsDS3 + ":1",
											                "border-color":"#b3b3b3",
											                "border-width":"2",
											                "background-color":"#eeeeee,#b3b3b3",
											                "ring":{
											                    "size":10,
											                    "offset-r":"130px",
											                    "rules":[
											                        {
											                            "rule":"%v >=" + liDS1 + " && %v < " + lsDS1,
											                            "background-color":color1
											                        },
											                        {
											                            "rule":"%v >= " + liDS2 + " && %v < " + lsDS2,
											                            "background-color":color2
											                        },
											                        {
											                            "rule":"%v >= " + liDS3 + " && %v < " + lsDS3,
											                            "background-color":color3
											                        }
											                    ]
											                }
											            },
											            "labels":[
											                {
											                    "id":"lbl1",
											                    "x":"50%",
											                    "y":"90%",
											                    "width":130,
											                    "offsetX":0,
											                    "offsetY":-15,
											                    "textAlign":"center",
											                    "anchor":"c",
											                    "text":result2.dsnr,
											                    "backgroundColor":"#FFF"
											                }
											            ],
											            "series":[
											                {
											                    "values":[result2.dsnr],
											                    "animation":{
											                        "method":5,
											                        "effect":2,
											                        "speed":4000
											                    }
											                }
											            ],
											            "alpha":1
											        }
											    ]};
 
												zingchart.render({ 
												  id : 'myChart', 
												  data : myConfig, 
												  height: 120, 
												  width: 160
												});

												zingchart.render({ 
												  id : 'myChart2', 
												  data : myConfig2, 
												  height: 120, 
												  width: 160
												});
												zingchart.render({ 
												  id : 'myChart3', 
												  data : myConfig3, 
												  height: 120, 
												  width: 160
												});

												zingchart.render({ 
												  id : 'myChart4', 
												  data : myConfig4, 
												  height: 120, 
												  width: 160
												});
										     });
						        		});
					                }
					        	}
					        });
					        $('<tr>').append(
					            $('<td>').text(result.contrato),
					            $('<td>').text(result.status),
					            $('<td>').text(result.nombre),
					            $('<td>').text(result.domicilio),
					            $('<td>').text(result.mac),
					            $('<td>').append(btn).append('</tr>')).appendTo('#bodySearch');
					    });
	        		});
				});
				
				$('#myModal2').on('show', function() {
				  	$('#myModal').css('opacity', .5);
				  	$('#myModal').unbind();
				});
				$('#myModal2').on('hidden', function() {
				  	$('#myModal').css('opacity', 1);
				  	$('#myModal').removeData("modal").modal({});
				});	
				$("#goBack").click(function(){
					$("#content-page").show();
					$("#content-page-section2").hide();
				});
				$('.checkboxes').onoff();
				$('#datetimepicker').datetimepicker({
			        format: 'dd/MM/yyyy hh:mm:ss',
			        language: 'pt-BR'
			    });
			    $('#datetimepicker2').datetimepicker({
			        format: 'dd/MM/yyyy hh:mm:ss',
			        language: 'pt-BR'
			    });
			    $('#uppower').click(function(){
			    	if($("#uppower").is(':checked')){
			    		//$("#uppower2").attr('checked', true);
			    		$("#upsnr").attr('checked', false);
			    		$("#dwpower").attr('checked', false);
			    		$("#dwsnr").attr('checked', false);
			    	}
			    });
			    $('#upsnr').click(function(){
			    	if($("#upsnr").is(':checked')){
			    		//$("#upsnr2").attr('checked', true);
			    		$("#uppower").attr('checked', false);
			    		$("#dwpower").attr('checked', false);
			    		$("#dwsnr").attr('checked', false);
			    	}
			    });
			    $('#dwpower').click(function(){
			    	if($("#dwpower").is(':checked')){
			    		//$("#dwpower2").attr('checked', true);
			    		$("#upsnr").attr('checked', false);
			    		$("#uppower").attr('checked', false);
			    		$("#dwsnr").attr('checked', false);
			    	}
			    });
			    
			    $('#dwsnr').click(function(){
			    	if($("#dwsnr").is(':checked')){
			    		//$("#dwsnr2").attr('checked', true);
			    		$("#upsnr").attr('checked', false);
			    		$("#dwpower").attr('checked', false);
			    		$("#uppower").attr('checked', false);
			    	}
			    });
			    $('#uppower2').click(function(){
			    	if($("#uppower2").is(':checked')){
			    		$("#upsnr2").attr('checked', false);
			    		$("#dwpower2").attr('checked', false);
			    		$("#dwsnr2").attr('checked', false);
			    	}
			    });
			    $('#upsnr2').click(function(){
			    	if($("#upsnr2").is(':checked')){
			    		$("#uppower2").attr('checked', false);
			    		$("#dwpower2").attr('checked', false);
			    		$("#dwsnr2").attr('checked', false);
			    	}
			    });
			    $('#dwpower2').click(function(){
			    	if($("#dwpower2").is(':checked')){
			    		$("#upsnr2").attr('checked', false);
			    		$("#uppower2").attr('checked', false);
			    		$("#dwsnr2").attr('checked', false);
			    	}
			    });
			    
			    $('#dwsnr2').click(function(){
			    	if($("#dwsnr2").is(':checked')){
			    		$("#upsnr2").attr('checked', false);
			    		$("#dwpower2").attr('checked', false);
			    		$("#uppower2").attr('checked', false);
			    	}
			    });
			    $('#datetimepicker11').datetimepicker({
			        format: 'yyyy-MM-dd hh:mm:ss',
			        language: 'pt-BR'
			      });
			      $('#datetimepicker111').datetimepicker({
			        format: 'yyyy-MM-dd hh:mm:ss',
			        language: 'pt-BR'
			      });
			      $('#datetimepicker1111').datetimepicker({
			        format: 'yyyy-MM-dd hh:mm:ss',
			        language: 'pt-BR'
			      });
			      $('#datetimepicker11111').datetimepicker({
			        format: 'yyyy-MM-dd hh:mm:ss',
			        language: 'pt-BR'
			      });
				$("#graficar").click(function(){
					$("#content-page").hide();
					$("#content-page-section2").show();
					$('#titleMac').text("Gráfica de CableModem / MAC " + $("#dirmac").text());
					$('<div id="myChart">').appendTo('#chart_container');
					var feci = $("#dtp1").val();
					var fecf = $("#dtp2").val();
					feci = feci.replace(" ","%20");
					fecf = fecf.replace(" ","%20");
					$.getJSON('<?php echo base_url();?>/index.php/PruebaControlador/getDataGraph?mac=' + $("#dirmac").text() + '&fechaini=' + feci + '&fechafin=' + fecf + '&uppower=' + $("#uppower").is(':checked') + '&upsnr=' + $("#upsnr").is(':checked') + '&dwpower=' + $("#dwpower").is(':checked') + '&dwsnr=' + $("#dwsnr").is(':checked')).done(function(data2) {
						zingchart.THEME = "classic";
					    var _hsl2rgb_ = function(iH, iS, iL) {
					      var iR, iG, iB;
					      if (iS == 0) {
					        iR = iG = iB = iL;
					      } else {
					        function hue2rgb(p, q, t) {
					          if (t < 0) t += 1;
					          if (t > 1) t -= 1;
					          if (t < 1 / 6) return p + (q - p) * 6 * t;
					          if (t < 1 / 2) return q;
					          if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
					          return p;
					        }
					        var q = iL < 0.5 ? iL * (1 + iS) : iL + iS - iL * iS;
					        var p = 2 * iL - q;
					        iR = hue2rgb(p, q, iH + 1 / 3);
					        iG = hue2rgb(p, q, iH);
					        iB = hue2rgb(p, q, iH - 1 / 3);
					      }
					      return [ZC._i_(iR * 255), ZC._i_(iG * 255), ZC._i_(iB * 255)];
					    };

					    var componentToHex = function(c) {
					      var hex = c.toString(16);
					      return hex.length == 1 ? "0" + hex : hex;
					    }

					    var rgbToHex = function(r, g, b) {
					      return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
					    }

					    var _luminance_ = function(sHexColor, sLight, sDark) {
					      var r = parseInt(sHexColor.substr(1, 2), 16);
					      var g = parseInt(sHexColor.substr(3, 2), 16);
					      var b = parseInt(sHexColor.substr(5, 2), 16);
					      var yiq = ((r * 299) + (g * 587) + (b * 114)) / 1000;
					      return (yiq >= 128) ? sDark : sLight;
					    };

					    window.myfuncDSP = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liDP1 && p.value<lsDP1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liDP2 && p.value<=lsDP2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liDP3 && p.value<lsDP3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }

					    window.myfuncDSS = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liDS1 && p.value<lsDS1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liDS2 && p.value<=lsDS2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liDS3 && p.value<lsDS3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }

					    window.myfuncUSS = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liUS1 && p.value<lsUS1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liUS2 && p.value<=lsUS2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liUS3 && p.value<lsUS3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }

					    window.myfuncUSP = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liUP1 && p.value<lsUP1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liUP2 && p.value<=lsUP2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liUP3 && p.value<lsUP3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }



					    var myConfig = data2;

					    zingchart.render({
					      id: 'myChart',
					      data: myConfig,
					      height: 500,
					      width: 725
					    });
						
					});
				});
				$("#graficar2").click(function(){
					$('<div id="myChart">').appendTo('#chart_container');
					var feci = $("#dtp3").val();
					var fecf = $("#dtp4").val();
					feci = feci.replace(" ","%20");
					fecf = fecf.replace(" ","%20");
					$.getJSON('<?php echo base_url();?>/index.php/PruebaControlador/getDataGraph?mac=' + $("#dirmac").text() + '&fechaini=' + feci + '&fechafin=' + fecf + '&uppower=' + $("#uppower2").is(':checked') + '&upsnr=' + $("#upsnr2").is(':checked') + '&dwpower=' + $("#dwpower2").is(':checked') + '&dwsnr=' + $("#dwsnr2").is(':checked')).done(function(data2) {
						zingchart.THEME = "classic";
					    var _hsl2rgb_ = function(iH, iS, iL) {
					      var iR, iG, iB;
					      if (iS == 0) {
					        iR = iG = iB = iL;
					      } else {
					        function hue2rgb(p, q, t) {
					          if (t < 0) t += 1;
					          if (t > 1) t -= 1;
					          if (t < 1 / 6) return p + (q - p) * 6 * t;
					          if (t < 1 / 2) return q;
					          if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
					          return p;
					        }
					        var q = iL < 0.5 ? iL * (1 + iS) : iL + iS - iL * iS;
					        var p = 2 * iL - q;
					        iR = hue2rgb(p, q, iH + 1 / 3);
					        iG = hue2rgb(p, q, iH);
					        iB = hue2rgb(p, q, iH - 1 / 3);
					      }
					      return [ZC._i_(iR * 255), ZC._i_(iG * 255), ZC._i_(iB * 255)];
					    };

					    var componentToHex = function(c) {
					      var hex = c.toString(16);
					      return hex.length == 1 ? "0" + hex : hex;
					    }

					    var rgbToHex = function(r, g, b) {
					      return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
					    }

					    var _luminance_ = function(sHexColor, sLight, sDark) {
					      var r = parseInt(sHexColor.substr(1, 2), 16);
					      var g = parseInt(sHexColor.substr(3, 2), 16);
					      var b = parseInt(sHexColor.substr(5, 2), 16);
					      var yiq = ((r * 299) + (g * 587) + (b * 114)) / 1000;
					      return (yiq >= 128) ? sDark : sLight;
					    };

					    window.myfuncDSP = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liDP1 && p.value<lsDP1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liDP2 && p.value<=lsDP2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liDP3 && p.value<lsDP3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }

					    window.myfuncDSS = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liDS1 && p.value<lsDS1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liDS2 && p.value<=lsDS2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liDS3 && p.value<lsDS3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }

					    window.myfuncUSS = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liUS1 && p.value<lsUS1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liUS2 && p.value<=lsUS2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liUS3 && p.value<lsUS3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }

					    window.myfuncUSP = function(p) {
					      var h = (p.value - 100) / 200,
					        s = 0.75,
					        l = 0.5;
					      if (h > 0.5) {
					        l = 1 - h;
					      }
					      var rgb = _hsl2rgb_(h, s, l);
					      var rgbh = _hsl2rgb_(h / 2, s, l);


					      if(p.value>liUP1 && p.value<lsUP1)
					      {
					        rgb=color1;
					      }
					      if(p.value>=liUP2 && p.value<=lsUP2)
					      {
					        rgb=color2;
					      }
					      if(p.value>liUP3 && p.value<lsUP3)
					      {
					        rgb=color3;
					      }


					      return {
					        backgroundColor: rgb,
					        fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					        //lineWidth : 1+Math.pow(2, p.value/50),
					        hoverState: {
					          backgroundColor: 'rgb(' + 0 + ',' + 0 + ',' + 0 + ')',
					          fontColor: _luminance_(rgbToHex(rgb[0], rgb[1], rgb[2]), "#fff", "#000"),
					          //lineWidth : 1+Math.pow(2, p.value/50)
					        }
					      };
					    }



					    var myConfig = data2;

					    zingchart.render({
					      id: 'myChart',
					      data: myConfig,
					      height: 500,
					      width: 725
					    });
						
					});
				});
				
			});

			
		</script>

	<script type="text/javascript">
      
    </script>
		
		<style>
			.lbData{
				border: solid #e5e5e5 1px;
				padding-bottom: 0;
				padding-top: 0;
				font-weight: normal;
			}3
			#chart_container {
	            width: 960px;
	        }
	        #graficar{
	        	margin-top: 10px;

	        }
	        .titulo{
	        	border: solid #515151 1px;
	        	background-color: #515151;
	        	color: #fff;
	        }
	        .addPadding{
	        	margin-left: 15px;
	        	margin-right: 15px;
	        }
	        #tabs{ 
	        	margin: 20px -20px; 
	        	border: none; 
	        }
      		#tabs, #ui-datepicker-div, .ui-datepicker{ 
      			font-size: 85%; 
      		}
      		.rightSide{
      			width: 25%;
      			position: relative;
      		}
      		.leftSide{
      			width: 70%;
      			position: relative;
      		}
      		.btnGraficar{
      			margin-left:auto;
      			display: block;
      			margin-right:auto;
      			margin-top: inherit;
      			width: 60%;
      		}
      		.btnGraficar2{
      			margin-left:auto;
      			display: block;
      			margin-right:auto;
      			margin-top: inherit;
      			width: 60%;
      		}
      		.userSet{
      			margin-top: 0px;
      		}
		</style>
		
	</body>	
		
<!-- Mirrored from responsivewebinc.com/premium/barnie11/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:40:33 GMT -->
</html>