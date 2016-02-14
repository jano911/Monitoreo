<?php
header("Acces-Control-Allow-Origin: *");
?><!DOCTYPE html>
<html>
	
<!-- Mirrored from responsivewebinc.com/premium/barnie11/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:40:33 GMT -->
<head>
		<!-- Title here -->
		<title>Monitoreo SOFTV</title>
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
					<div class="side-nav">
						<div class="side-nav-block">				
							<!-- Sidebar links -->
							<ul class="list-unstyled">
								<li><a href="<?php echo base_url();?>index.php/PruebaControlador/suscriptores"><i class="fa fa-desktop"></i> Inicio</a></li>
								<li><a href="<?php echo base_url();?>index.php/PruebaControlador/suscriptores"><i class="fa fa-bullseye"></i> Suscriptores</a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i> Tarjetas y Puertos</a></li>
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
						
						<div class="page-content page-invoice" id="content-page">
							<!-- Heading -->
							<div class="single-head">
								<!-- Heading -->
								<h3 class="pull-left"><i class="fa fa-credit-card lblue"></i> Niveles de señal y total de cablemodem por Upstream</h3>
								<!-- Bread crumbs -->
								<div class="clearfix"></div>
							</div>
							<!-- Modal -->
														
							<!-- Address -->
							
							<!-- Data -->
									
								<div class="table-responsive" >
									<table class="table table-hover table-bordered ">
										<thead>
											<tr>
												<th>Status</th>
												<th>Etiqueta</th>
												<th>Puerto</th>
												<th>Snr</th>
												<th>CM</th>
												<th>CM Activos</th>
												<th>CM Registrados</th>
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
		<!-- Javascript for this page -->
		
		<!-- Javascript for this page -->

        <script type="text/javascript">
			$(document).ready(function(){

				$.getJSON( '<?php echo base_url();?>/index.php/TarjetaControlador/getTarjetas').done(function(data) {
							$.each(data, function (i, result) {
					 			$('<tr>').append(
					            $('<td class="nuevo"><span class="badge" style="background:'+result.colorT+'">'+result.colorDescT+'</span>'),
					            $('<td>').text(result.etiqueta),
					            $('<td>').text(result.referencias),
					            $('<td>').text(result.Snr),
					            $('<td>').text(result.Cm),
					            $('<td>').text(result.Cm_activos),
					            $('<td>').text(result.Cm_registrados),
					            $('</tr>')).appendTo('#bodySearch');
					 		});
				});

	        });

			
		</script>
		
		<style>
			.nuevo {
				width: 10px; /*Aquí va el ancho de la Celda*/
				text-align: center;
			}

			.lbData{
				border: solid #e5e5e5 1px;
				padding-bottom: 0;
				padding-top: 0;
				font-weight: normal;
			}
			#chart_container {
	            width: 960px;
	        }
	        #graficar{
	        	margin-top: 10px;
	        }
	        .swatch {
	            display: inline-block;
	            width: 10px;
	            height: 10px;
	            margin: 0 8px 0 0;
	        }
	        .labell {
	            display: inline-block;
	        }
	        .line {
	            display: inline-block;
	            margin: 0 0 0 30px;
	        }
	        #legend {
		        width: 300px;
		        top: -550px;
		        position: relative;
		        margin-left: 800px;
	        }
	        .rickshaw_graph .detail {
	            background: none;
	        }
	        #chart_container {
		        display: inline-block;
		        font-family: Arial, Helvetica, sans-serif;
		        border: 100px;
			}

			#offset_form {
			        float: left;
			        margin: 2em 0 0 15px;
			        font-size: 13px;
			}

			#chart {
			    
			    position: relative;
			    left: 40px;
			}
			#y_axis {
				left: -920px;
				position: relative;
			}										
			#sectionGraficar2{
				margin-top: 25px;
			}
		</style>
		<script>
		
    	
			
			</script>
	</body>	
		
<!-- Mirrored from responsivewebinc.com/premium/barnie11/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:40:33 GMT -->
</html>