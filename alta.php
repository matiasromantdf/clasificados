<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos-alta.css">
	<title>Document</title>
</head>
<body>
	<div class="datos">
	<form action="procesarnuevo.php" method="post" enctype="multipart/form-data">
		
			<label for="nombre"> su nombre:</label>
			<input type="text" name="nombre" autocomplete="off">

			<label for="telefono"> telefono de contacto:</label>
			<input type="text" name="telefono" autocomplete="off"><br>

			<label for="descripcion"> Describa la publicacion:</label> <br>
			<textarea name="descripcion" id="" cols="30" rows="10"></textarea>

			<label for="precio"> Precio:</label>
			<input type="number" name="precio" autocomplete="off">
			<br>

			<label for="file">Adjuntar imagen</label>
			<input type="file" name="archivo">
			<br>
			<br>
			<input type="submit" id="boton" onfocus="FbotonOn(this)">

			</form>
			<a href="pagina.php">volver</a>
	</div>

<script>

function FbotonOn(objboton) {
	objboton.value="PROCESANDO...";
	objboton.disabled=true;
  
}

</script>
	
</body>
</html>