<?php
	
	include ("conexion.php");

	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$query = "UPDATE tabla_imagen SET nombre='$nombre', imagen='$imagen' WHERE id = '$id'";
	$resultado = $conexion->query($query);

	if ($resultado) {
		//echo "modificado";
		header("location: mostrar.php");
	}
	else{
		echo "no se logro  ";
	}
?>