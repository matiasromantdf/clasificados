<?php 
include "conexion-clasificados.php"; //devuelve el objeto $con
$texto = $_GET['busqueda'];
$rubro = $_GET['tipo'];
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="estilos-resultados.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultados de búsqueda</title>
</head>
<body>

	<h1>RESULTADOS DE LA BUSQUEDA</h1>
	<?php 

		if($rubro=='servicios'){
		$sentencia="select * from servicios where etiquetas like '%".$texto."%'";
		}
		if($rubro=='ventas'){
		$sentencia="select * from ventas where etiquetas like '%".$texto."%'";	
		}

		$resultado=mysqli_query($con,$sentencia);

		if (mysqli_num_rows($resultado)==0) {
			echo 'sin resultados';

		}
		while($fila=mysqli_fetch_array($resultado)){

			echo '<div><p class="nombre">'. $fila['referencia'] .'</p><br>';
			echo 'telefono: '.$fila['telefono'];	
			echo '</div>';
		}

	 ?>
	
</body>
<footer>
	 <a href="pagina.html">volver</a>
</footer>
</html>