<?php
session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../index.php?Noseccion");
	}

?>
<html>
	<head>
		<title>Agregar Producto</title>
		<link rel="stylesheet" href="../../Vista/Administrador/css/bootstrap.min.css" />
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
				<h2 align="center">Agregar Proveedor</h2><br />
				<form enctype="multipart/form-data" name="add_prod" id="add_prod" action="controlador_provee.php" method="post">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Nombre</td>
								<td><input type="text" name="Nom_provee" placeholder="Ej: carlos" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td> Estado del ingrediente </td><td>
                                ACTIVO<input type="radio" name="Estado_provee" value="1" >
                                INACTIVO<input type="radio" name="Estado_provee" value="0" >
                            </td>
                            </tr>
							<tr>
								<td>Telefono</td>
								<td><input type="text" name="Telefono_provee" placeholder="Ej: 3124027689" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Direccion</td>
								<td><input type="text" name="Direccion_provee" placeholder="Ej: cra 17 #b 112-07" class="form-control name_list" required></td>
							</tr>
							
                               
						</table>
						<input type="submit" class="btn btn-info" value="Finalizar y Enviar" />
						
						<tr>
                      <a href="../../Vista/Administrador/ver_provee.php" style="color:white"><button class="btn btn-info">Ver Proveedores</button> </a>
                     </tr>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>


</center>



