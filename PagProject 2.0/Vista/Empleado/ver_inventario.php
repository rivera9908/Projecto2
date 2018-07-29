<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../index.php?Noseccion");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style type="text/css">
		body{
			
		}
		
	</style>
</head>
<body background="img/frambuesas.jpg">
	<?php
		require("../../Modelo/conexion.php");
	?>
	
    <div class="table-responsive">
	<table class="table table-bordered" style="max-width: 70%; margin: auto; color: black; background: #EFF6FA">
	  <thead>
	  	<tr>
	  		<th colspan="8" style="color: green"><h1 align="center">Lista de Inventario</h1></th>
	  	<tr>
        <th colspan="12"><a href="../../Controlador/Empleado/inventario.php">Nuevo Inventario</a><?php 
        echo "//"?><a href="inicio_empleado.php">Volver al inicio</a></th>
		
		</tr>


	  </thead>
	  <tbody>
	  	<tr>
	  	<th>fecha inventario</th>
	  	<th>N° Identificacion del Usuario</th>
	  	<th>Tipo de Documento</th>
	  	<th>Codigo Ingrediente</th>
	  	<th>Nombre Ingrediente</th>

	  	
	  	
	  	<th colspan="2">Opciones</th>
	  </tr>
	  </tbody>
	  <?php  
	  $sqll =  "SELECT t1.n_inventario,t1.fecha_inventario, t1.Ingredientes_cod_ingrediente, t1.Usuario_id_usu, t1.Usuario_Tipo_doc_Tipo_doc, t2.Nom_ing  FROM inventario as t1 join ingredientes as t2 on (t2.cod_ingrediente = t1.Ingredientes_cod_ingrediente) ORDER BY fecha_inventario";
	  foreach (mysqli_query($con, $sqll) as $row) { ?>
	  	<tfoot>
	  	<tr>
	  	<td><?php echo $row['fecha_inventario']; ?></td>
	  	<td><?php echo $row['Usuario_id_usu']; ?></td>
	  	<td><?php echo $row['Usuario_Tipo_doc_Tipo_doc']; ?></td>
	  	<td><?php echo $row['Ingredientes_cod_ingrediente']; ?></td>
	  	<td><?php echo $row['Nom_ing']; ?></td>
	  	

	  	<td>
	  		<form action="../../Controlador/Empleado/editar_inventario.php" method="get">
	  			<input type="text" name="n_inventario" value="<?php echo $row['n_inventario']; ?>" style="display: none;" >
	  			<input type="submit" name="editar" class="btn btn-success" value="Editar">
	  		</form>

	  		
</td>
	  		
	  		<td>
	  		<form action="../../Controlador/Empleado/eliminar.php" method="get">
	  			<input type="text" name="n_inventario" value="<?php echo $row['n_inventario']; ?>" style="display: none;" >
	  			<input type="submit" name="eliminar" class="btn btn-success" value="Eliminar">
	  		</form>
	  	</td>

	  </tr>



	  </tfoot>

	  <?php } ?>

	</table>
                    </div>


</body>
</html>

