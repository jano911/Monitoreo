<!DOCTYPE html>
<html>
	
<!-- Mirrored from responsivewebinc.com/premium/barnie11/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:40:37 GMT -->
<head>
		<!-- Title here -->
		<title>Login - Monitoreo</title>
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
		<!-- Custom Color CSS -->
		<link href="<?php echo base_url();?>/css/less-style.css" rel="stylesheet">	
		<!-- Custom CSS -->
		<link href="<?php echo base_url();?>/css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>

		<div class="outer-page">
			
			 <!-- Login page -->
			 <div class="login-page">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified">
					  <li class="active"><a href="#login" data-toggle="tab" class="br-lblue"><i class="fa fa-sign-in"></i> Acceso </a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  <div class="tab-pane fade active in" id="login">
						<!-- Login form -->
						
						<form role="form" action="<?php echo base_url();?>/index.php/LoginControlador/login" method="POST" id="form">
						  <div class="form-group">
							<label for="email">Usuario</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
						  </div>
						  <div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						  </div>
						  <center><h4 id="fail" class="formatFail noticed">Datos incorrectos, ¡vuelve a intentarlo!</h4></center>
						  <center><h4 id="incomplete" class="formatFail noticed">Es necesario llenar todos los campos.</h4></center>
						  <center> <button type="submit" class="btn btn-info btn-sm">Entrar</button></center>						 
						</form>
						
					  </div>
					  
					</div>
					
			 </div>	
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="<?php echo base_url();?>/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="<?php echo base_url();?>/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="<?php echo base_url();?>/js/html5shiv.js"></script>
		
		<!-- Javascript for this page -->
		
		<!-- Javascript for this page -->
      
        <script type="text/javascript">
        	$(document).ready(function(){
			   var $form = $('#form');
			   $form.submit(function(){
			   	  $("#fail").addClass("noticed");
			   	  $("#incomplete").addClass("noticed");
			   	  if($("#username").val() == "" || $("#password").val() == ""){
			   	  	$("#incomplete").removeClass("noticed");
			   	  }else{
				      $.post($(this).attr('action'), $(this).serialize(), function(response){
				            if(response.username=="incorrecto"){
				            	$("#fail").removeClass("noticed");
				            }
				            else{
				            	window.location.replace("<?php echo base_url();?>/index.php/PruebaControlador/suscriptores");
				            }
				      },'json');
			  	  }
			  	  return false;
			   });
			});
		</script>
		<style>
			.noticed{
				display: none;
			}
			.formatFail{
				color: #333;
			}
		</style>
	</body>	

<!-- Mirrored from responsivewebinc.com/premium/barnie11/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 16:40:37 GMT -->
</html>