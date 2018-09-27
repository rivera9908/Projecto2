<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../index.php?Noseccion");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Proveedores</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style type="text/css">
		body{
			background-image: url(Img/Fondo.jpg);
		}
		
	</style>
</head>
<body>
	<?php
		require("../../Modelo/conexion.php");
	?>
	<table class="table table-bordered" style="max-width: 70%; margin: auto;">
	  <thead>
	  	<tr>
	  		<th colspan="10"><h1 align="center">Lista de Proveedores</h1></th>
	  	<tr>
        <th colspan="12">
        	<a href="../../Controlador/Administrador/registrar_provee.php" style="color:white"><button class="btn btn-info">Nuevo Proveedor</button></a><a href="inicio_administrador.php" style="color:white"><button class="btn btn-info">Volver al inicio</button></a></th>
		
		</tr>


	  </thead>
	  <tbody>
	  	<tr>
	  	<th>Nombre</th>
	  	<th>Estado</th>
	  	<th>Telefono</th>
	  	<th>Direccion</th>
	  	<th colspan="2">Opciones</th>
	  </tr>
	  </tbody>
	  <?php  
	  $sqll = "SELECT * FROM proveedor";
	  foreach (mysqli_query($con, $sqll) as $row) { ?>
	  	<tfoot>
	  	<tr>
	  	<td><?php echo $row['Nom_provee']; ?></td>
	  	<td>
	  		<?php if($row['Estado_provee'] == 1){
	  			echo "Activo";
	  		}else{
	  			echo "Inactivo";
	  		} ?>
	  	</td>
		<td><?php echo $row['Telefono_provee']; ?></td>
	  	<td> <?php echo $row['Direccion_provee']; ?></td>
	  	<td>
	  		<form action="../../Controlador/Administrador/editar_provee.php" method="get">
	  			<input type="text" name="IdPROVEEDOR" value="<?php echo $row['IdPROVEEDOR']; ?>" style="display: none;" >
	  			<input type="submit" name="editar" class="btn btn-success" value="Editar">
	  		</form>
	  		</td>
	  		<td><form action="../../Controlador/Administrador/eliminar_provee.php" method="get">
	  			<input type="text" name="IdPROVEEDOR" value="<?php echo $row['IdPROVEEDOR']; ?>" style="display: none;" >
	  			
	  			<input type="submit" name="eliminar" class="btn btn-success" value="Eliminar">
	  		
	  		</form>
	  	</td>

	  </tr>


	  </tfoot>

	  <?php } ?>

	</table>


</body>
</html>

