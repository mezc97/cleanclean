<!DOCTYPE html>
<html>
<head>
	<title>modificar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/carrusel.css">
</head>
<body>
        <?php
				include("conexion.php");
				$id = $_REQUEST['id'];

				$query = "SELECT * FROM tabla_imagen WHERE id= '$id' ";
				$resultado = $conexion->query($query);
				$row = $resultado->fetch_assoc();

		?>
	<div class="container modificar">
		
		<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
			<div  class="form-group">
			<label >Nombre:</label>
			<input type="text" REQUIRED name="nombre"  placeholder="Nombre" value="<?php  echo($row['nombre']); ?>">
			</div>
			<img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>">
			<input class="seleccionarImg" type="file" name="imagen"REQUIRED value="">
			<input class="btn btn-primary" type="submit" name=""  value="aceptar">
		</form>
	</div>
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>