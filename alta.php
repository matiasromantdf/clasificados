<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos-alta.css">
	<title>Document</title>
</head>
<body>
	<form action="procesarnuevo.php" method="post" enctype="multipart/form-data">
		<div class="datos">
			<p>Ingrese su nombre</p>
			<input type="text" name="nombre" autocomplete="off">
			<p>Ingrese su telefono</p>
			<input type="text" name="telefono" autocomplete="off">
			<p>ingrese la descripcion de la publicación</p>
			<textarea name="descripcion" id="" cols="30" rows="10"></textarea>
			<br>
			<p>adjuntar una foto</p>
			<input type="file" name="archivo">
			<br>
			<br>
			<input type="submit">

		</div>

	</form>
	<a href="pagina.php">volver</a>
</body>
</html>