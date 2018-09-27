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
	<title>Lista de Ingredientes</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style type="text/css">
		body{
			background-image: url(../../Vista/Administrador/img/fondo.jpg);
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
	  		<th colspan="10"><h1 align="center">Lista de Ingredientes</h1></th>
	  	<tr>
        <th colspan="12"><a href="../../Controlador/Administrador/add_ing.php" style="color:white"><button class="btn btn-info">Nuevo Ingrediente</button></a>
        	<a href="../../Vista/Administrador/inicio_administrador.php" style="color:white"><button class="btn btn-info">Volver al inicio</button></a></th>
		
		</tr>


	  </thead>
	  <tbody>
	  	<tr>
	  	<th>Nombre</th>
	  	<th>Precio</th>
	  	<th>Cantidad Existente</th>
	  	<th>Stock Maximo</th>
	  	<th>Stock Minimo</th>
	  	<th>Estado del Ingrediente</th>
	  	<th>Peso del Ingrediente</th>
	  	<th>Proveedor</th>
	  	<th colspan="2">Opciones</th>
	  </tr>
	  </tbody>
	  <?php  
	  $sqll = "SELECT * FROM ingrediente";
	  foreach (mysqli_query($con, $sqll) as $row) { ?>
	  	<tfoot>
	  	<tr>
	  	<td><?php echo $row['Nom_ing']; ?></td>
	  	<td>$ <?php echo $row['Valor_ing']; ?></td>
	  	<td><?php echo $row['cant_existente']; ?></td>
	  	<td><?php echo $row['Stock_max']; ?></td>
	  	<td><?php echo $row['Stock_min']; ?></td>
	  	<td>
	  		<?php if($row['Estado_ing'] == 1){
	  			echo "Activo";
	  		}else{
	  			echo "Inactivo";
	  		} ?>
	  	</td>
	  	<td><?php echo $row['Peso_ing']; echo 'kg' ?></td>
	  	<td><?php echo $row['Proveedor_IdPROVEEDOR']; ?></td>
	  	<td>
	  		<form action="../../Controlador/Administrador/editar_ing.php" method="get">
	  			<input type="text" name="cod_ingrediente" value="<?php echo $row['cod_ingrediente']; ?>" style="display: none;" >
	  			<input type="submit" name="editar" class="btn btn-success" value="Editar">
	  		</form>
	  		</td>
	  		<td><form action="../../Controlador/Administrador/eliminar_ing.php" method="get">
	  			<input type="text" name="cod_ingrediente" value="<?php echo $row['cod_ingrediente']; ?>" style="display: none;" >
	  			
	  			<input type="submit" name="eliminar" class="btn btn-success" value="Eliminar">
	  		
	  		</form>
	  	</td>

	  </tr>


	  </tfoot>

	  <?php } ?>

	</table>


</body>
</html>

