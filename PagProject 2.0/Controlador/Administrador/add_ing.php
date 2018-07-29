<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar Producto</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<style type="text/css">
		body{
			background-image: url(../../Vista/Administrador/img/fondo.jpg);
		}
		
	</style>
	</head>
	<body background="Img/.jpg">
		<?php
		require("../../Modelo/conexion.php");
		?>
		<center>
		<div class="container">
			<br />
			<br />
			
			<div class="form-group" style="max-width: 50%;">
				<h2 align="center">Agregar Ingrediente</h2><br />
				<form enctype="multipart/form-data" name="add_prod" id="add_prod" action="controlador_ing.php" method="post">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Nombre</td>
								<td><input type="text" name="Nom_ing" placeholder="Ej: Papaya" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Precio $</td>
								<td><input type="text" name="Valor_ing" placeholder="$$$" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Cantidad Existente</td>
								<td><input type="text" name="cant_existente" placeholder="..." class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Stock Maximo</td>
								<td><input type="text" name="Stock_max" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Stock Minimo</td>
								<td><input type="text" name="Stock_min" placeholder="$$$" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td> Estado del ingrediente </td><td>
ACTIVO<input type="radio" name="Estado_ing" value="1" >
INACTIVO<input type="radio" name="Estado_ing" value="0" >
</td></tr>
							<tr>
								<td>Peso del Ingrediente</td>
								<td><input type="text" name="Peso_ing" class="form-control name_list" required></td>
							</tr>

							<tr>
								<td>Proveedor</td>
								<td>
								<select class="form-control" name="PROVEEDOR_idPROVEEDOR" >
                                    <?php
                                    $sql = "SELECT * from proveedor";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['IdPROVEEDOR'] . '">' . $row['Nom_provee'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
							</tr>
							
							
						</table>
						<input type="submit" class="btn btn-info" value="Finalizar y Enviar" />
						
						<tr>
<button class="btn btn-info"><a href="ver_ing.php" style="color:white">Ver productos</a></button>
</tr>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
</center>



