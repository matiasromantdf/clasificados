<?php 
include "conexion.php"; //devuelve el objeto $con
$texto = $_GET['busqueda'];
$rubro = $_GET['tipo'];
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultados de búsqueda</title>
</head>
<body>
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

			echo '<div>'. $fila['referencia'] .'<br>';
			echo 'telefono: '.$fila['telefono'];	
			echo '</div>';
		}

	 ?>
</body>
</html>