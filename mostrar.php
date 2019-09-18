<!DOCTYPE html>
<html>
<head>
	<title>listar y agregar</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/carrusel.css">

</head>
<body>
	<div class="container">
		<table class="table">
			<thead >
				<tr>
					<th>
					  <!-- Button to Open the Modal para agregar imagen -->
					  <button type="button" class="btn btn-outline-success agregarImg" data-toggle="modal" data-target="#myModal">
					    +
					  </button>

					  <!-- The Modal -->
					  <div class="modal fade" id="myModal">
					    <div class="modal-dialog">
					      <div class="modal-content">
					      
					        <!-- Modal Header -->
					        <div class="modal-header">
					          <h4 class="modal-title">Agregar Imagen</h4>
					          <button type="button" class="close" data-dismiss="modal">×</button>
					        </div>
					        
					        <!-- Modal body -->
					        <div class="modal-body">
					          <form action="proceso_guardar.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="email">Nombre:</label>
									<input class="form-control" type="text" name="nombre" placeholder="Nombre" REQUIRED value="">
					    		</div>
								<input type="file" name="imagen"REQUIRED value=""><br><br><br>
								<button type="submit" class="btn btn-primary" value="aceptar">Aceptar</button>
					            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
							</form>
					        </div>
					      </div>
					    </div>
					  </div>
					  <!-- final del modal-->
				</tr>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Imagen</th>
					<th >Operaciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include("conexion.php");

				$query = "SELECT * FROM tabla_imagen";
				$resultado = $conexion->query($query);
				while ($row = $resultado->fetch_assoc()) {
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><img class=" rounded mx-auto d-block" height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"></td>
						<th><a class="btn btn-primary" href="modificar.php?id=<?php echo $row['id']; ?> ">Modificar</a></th>
						<th><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
					</tr>
				<?php
					}
				?>
			</tbody>

		</table>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>