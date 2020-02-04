<?php
	if(isset($_GET["redirect_url"])){
		
		$redirect_url =$_GET["redirect_url"]; 
	} 
	else{
		$redirect_url = "";
		
	}
	
	
	include("../conexi.php");
	$link = Conectarse();
	
?>
<!DOCTYPE html>
<html lang="es">
	
	<head>
    <title>Iniciar Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		
   
		
		<link href="../css/bootstrap.min.css" rel="stylesheet" media="all">
		<link href="../css/alertify.min.css" rel="stylesheet" media="all"/>
		<link href="../css/common.css" rel="stylesheet" media="all"  >
		<link href="../css/imprimir_venta.css" rel="stylesheet" media="all">
		<link href="../css/all.min.css" rel="stylesheet" >
		<link href="login.css" rel="stylesheet" >
		
		<?php include("../scripts_carpetas.php")?>
    <script type="text/javascript" src="login.js"></script>
		
	</head>
	
	<body>
    <div class="container">
			<div class="row" id="pwd-container">
				<div class="col-md-4"></div>
				
				<div class="col-md-4">
					<section class="login-form">
						<form name="form_login" id="form_login" action="" role="login" method="post">
							
							<div id="login_logo">
								
								
								<img class=" img-responsive" src="../img/logo.png">
							</div>
							
							
							<hr>
							<div class="form-group">
								
								<input id="id_usuarios" name="id_usuarios" required class="form-control" placeholder="Num Cliente">
								
							</div>
							<input type="password" name="password" class="form-control " id="password"
							placeholder="Contraseña" required="" />
							
							
							<div class="pwstrength_viewport_progress"></div>
							
							
							<button type="submit" id="btn_login" name="iniciar" class="btn btn-lg btn-primary btn-block">
								<i class="fas fa-sign-in"></i> Iniciar Sesión <i id="spinner"
								class="fa fa-spin fa-spinner hide"></i>
							</button>
						</form>
						
					</section>
					
				</div>
			</div>
		</div>
	</body>
	
</html>