<?php
	
	include("../login/login_success.php");
	include("../conexi.php");
	$link = Conectarse();
	$menu_activo = "catalogos";
	$consulta = "SELECT * FROM departamentos ";
	$result = mysqli_query($link, $consulta);
	
	if($result){
		while($fila = mysqli_fetch_assoc($result)){
			$departamentos[] = $fila;
		}
	}
	else{ 
		die("Error en la consulta $consulta". mysqli_error($link));
	}
	
	
?>

<!DOCTYPE html>
<html lang="es">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Categorías</title>
		
		<?php include("../styles.php"); ?>
		
	</head>
	
	<body>
		
		<?php include("../menu.php"); ?>
		
		<section class="container">
			<strong>
				<h2>Categorías</h2>
			</strong>
			
		</section>
		<br>
		
		<section class="container">
			<table class="table table-striped">
				<tr class="success">
					<td><strong>Clave</strong></td>
					<td><strong>Linea</strong></td>
					<td><strong>Descripción</strong></td>
					<td><strong>Descargar</strong></td>
				</tr>
				<?php foreach($departamentos AS $i=>$fila){	?>
					<tr class="">
						<td><?php echo $fila["id_departamentos"] ?></td> 
						<td><?php echo $fila["clave"] ?></td> 
						<td><?php echo $fila["nombre_departamentos"] ?></td> 
						<td>
							<a href="files/<?php echo $fila["clave"] ?>.pdf">
								<i class="fas fa-download"></i>
							</a>
						</td> 
						
					</tr>
					<?php
					}
				?>
			</table>
		</section>
		
		
	</html>	