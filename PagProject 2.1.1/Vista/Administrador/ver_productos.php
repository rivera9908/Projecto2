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
	<meta charset="utf-8">
	<title>Lista de Productos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style type="text/css">
		body{
			background-image: url(img/fondo.jpg);
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
	  		<th colspan="8"><h1 align="center">Lista de Productos</h1></th>
	  	<tr>
        <th colspan="12"><a href="../../Controlador/Administrador/ad_producto.php" style="color:white"><button class="btn btn-info">Nuevo Producto</button></a>
        	<a href="inicio_administrador.php" style="color:white"><button class="btn btn-info">Volver al inicio</button></a></th>
		
		</tr>


	  </thead>
	  <tbody>
	  	<tr>
	  	<th>Nombre</th>
	  	<th>Precio</th>
	  	<th>Decripcion</th>
	  	<th>Imagen</th>
	  	<th>Estado</th>
	  	<th>Fecha de ingreso</th>
	  	<th>Categoria</th>
	  	<th colspan="2">Opciones</th>
	  </tr>
	  </tbody>
	  <?php  
	  $sqll = "SELECT * FROM PRODUCTO";
	  foreach (mysqli_query($con, $sqll) as $row) { ?>
	  	<tfoot>
	  	<tr>
	  	<td><?php echo $row['Nom_pro']; ?></td>
	  	<td>$ <?php echo $row['Prec_pro']; ?></td>
	  	<td><?php echo $row['Desc_pro']; ?></td>
	  	<td><img src="img/<?php echo $row['img_pro']; ?>" width="150px" height="150px" style="border: 3px solid gray;"></td>
	  	<td>
	  		<?php if($row['estado_pro'] == 1){
	  			echo "Activo";
	  		}else{
	  			echo "Inactivo";
	  		} ?>
	  	</td>
	  	<td><?php echo $row['fecha_ingreso']; ?></td>
	  	<td><?php echo $row['Categoriadelproducto_Nom_cat']; ?></td>
	  	<td>
	  		<form action="../../Controlador/Administrador/editar_producto.php" method="get">
	  			<input type="text" name="id_prod" value="<?php echo $row['cod_producto']; ?>" style="display: none;" >
	  			<input type="submit" name="editar" class="btn btn-success" value="Editar">
	  		</form>
	  		</td>
	  		<td><form action="../../Controlador/Administrador/eliminar_producto.php" method="get">
	  			<input type="text" name="id_prod" value="<?php echo $row['cod_producto']; ?>" style="display: none;" >
	  			
	  			<input type="submit" name="eliminar" class="btn btn-success" value="Eliminar">
	  		
	  		</form>
	  	</td>

	  </tr>


	  </tfoot>

	  <?php } ?>

	</table>


</body>
</html>

