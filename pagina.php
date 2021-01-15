<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba Pagina</title>
</head>
<body>
	<div class= "div1">
	<h1>
		Joaqui!!!
	</h1>
	</div>
	<div class="buscador">
		
		<h1>
			Ingrese texto a buscar:
		</h1>
		<form action="buscar.php" method="get">
		<input type="text" name="busqueda" placeholder="Ej: jueguetes, plomero, limpieza" autocomplete="off">
		<!-- <label for="select">seleccione ventas o servicios:</label>
		<select name = "tipo" class="combo">
			
			<option value = "ventas">compra-venta</option>
			<option value = "servicios">servicios</option>

		</select>-->
		<input type="submit" name="enviar" value="Buscar!">
		</form>
		
	</div>
	
<button onclick="location.href='alta.php'"> Publicar un aviso</button>
<br>
<h2>avisos recientes:</h2>
<?php 
		
		include "conexion-clasificados.php";
		$sentencia="select * from servicios where visible='si' order by id desc";	
		
		
		$con->set_charset('utf8');
		
		$resultado=mysqli_query($con,$sentencia);
		
		while($fila=mysqli_fetch_array($resultado)){

			echo '<div class="item"><p class="nombre">'. $fila['referencia'] .'</p>';
			echo '<p class ="tel">'.$fila['telefono'].'</p>';
			echo '<a href="https://elgranero.net/clasificados/archivos/'.$fila['id'].'.jpeg"> <img class="foto" src="archivos/'.$fila['id'].'.jpeg"></img></a>';
			echo '<p class ="pub">Publicación: '.$fila['etiquetas']."</p>";
			echo '<p class ="precio">'.$fila['precio']."</p>";
			

			echo '</div>';

		}

	 ?>

</body>
<footer>
	<br>
	
</footer>
</html>