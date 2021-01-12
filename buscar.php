<?php 
include "conexion-clasificados.php"; //devuelve el objeto $con
$texto = $_GET['busqueda'];
//$rubro = $_GET['tipo'];
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

	//	if($rubro=='servicios'){
		$sentencia="select * from servicios where etiquetas like '%".$texto."%' and visible='si'";
	//	}
	//	if($rubro=='ventas'){
	//	$sentencia="select * from ventas where etiquetas like '%".$texto."%'";	
	//	}

		$resultado=mysqli_query($con,$sentencia);

		if (mysqli_num_rows($resultado)==0) {
			echo 'sin resultados';

		}
		while($fila=mysqli_fetch_array($resultado)){

			echo '<div class="item"><p class="nombre">'. $fila['referencia'] .'</p><br>';
			echo '<p class ="pub"> telefono: '.$fila['telefono'].'</p>';
			echo '<a href="https://elgranero.net/clasificados/archivos/'.$fila['id'].'.jpeg"> <img class="foto" src="archivos/'.$fila['id'].'.jpeg"></img></a>';
			echo '<p class ="pub">Publicación: '.$fila['etiquetas']."</p>";
			echo '<p class ="pub">'.$fila['precio']."</p>";
			

			echo '</div>';
		}

	 ?>
	
</body>
<footer>
	 <a href="pagina.php">volver</a>
</footer>
</html>