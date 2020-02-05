<?php
	// $directorio = 'files';
	// $ficheros1  = scandir($directorio);
	// $ficheros2  = scandir($directorio, 1);
	
	// print_r($ficheros1);
	// print_r($ficheros2);
?>
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
		
		<title>Catálogo de Productos</title>
		
		<?php include("../styles_carpetas.php"); ?>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	</head>
	
	<body>
		
		
		
		<section class="container">
			<strong>
				<h2>Catálogo de Productos</h2>
			</strong>
			
		</section>
		<br>
		
		<section class="container">
			<table class="table table-striped">
				<tr class="success">
					<td><strong>Linea</strong></td>
					<td><strong>Descripción</strong></td>
					<td><strong>Descargar</strong></td>
				</tr>
				<?php foreach($departamentos AS $i=>$fila){	?>
					<tr class="">
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
		
	</body>	
</html>	