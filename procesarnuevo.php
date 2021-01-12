<?php 
include "conexion-clasificados.php";

$archivo = $_FILES['archivo']['tmp_name'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$tipo=$_FILES['archivo']['type'];

	if (!empty($archivo)) {
		
	
		if($tipo !='image/jpeg'){

			echo("Solo imagenes en formato JPEG");
		}
		else{
			
			insertar();			
			move_uploaded_file($archivo, 'archivos/'.$ultimo.".jpeg");
		}
		

	}
	else{
		//echo("sin imagen");
		insertar();
	}

	function insertar(){

		$sentencia="INSERT INTO servicios (referencia,etiquetas,telefono,precio) values('".$GLOBALS['nombre']."','".$GLOBALS['descripcion']."','".$GLOBALS['telefono']."','".$GLOBALS['precio']."')";
		mysqli_query($GLOBALS['con'],$sentencia);
		global $ultimo;
		$ultimo=mysqli_insert_id($GLOBALS['con']);
		//echo($GLOBALS['nombre']);

		echo 'se han enviado correctamente los datos, se procesaran y sera publicado <br>';
		echo '<a href="pagina.php">volver</a>';


	} 

 ?>