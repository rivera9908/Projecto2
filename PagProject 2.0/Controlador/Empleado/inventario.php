<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}

?>
<html>
	<head>
		<title>Agregar Inventario</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<style type="text/css">
		body{
			background: "img/frambuesas.jpg";
		}
		
	</style>
	</head>
	<body background="../../Vista/Empleado/img/cerezas.jpg">
		<center>
		<?php
		include ("../../Modelo/conexion.php");
		?>
		<div class="container">
			<br />
			<br />
			
			<div class="form-group" style="max-width: 50%;">
				<h2 align="center">Agregar Inventario</h2><br />
				<form enctype="multipart/form-data" name="add_prod" id="add_prod" action="controlador.php" method="post">
					



					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Fecha</td>
								<td><input type="date" name="fecha_inventario" placeholder="Ej: Papaya" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>N° Identificacion</td>
								<td>
								<select class="form-control" name="Usuario_id_usu" >
                                    <?php
                                    $sql = "SELECT * from usuario WHERE Rol_nom_rol= 'Empleado'";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['Id_usu'] . '">' . $row['Id_usu'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
							</tr>
							<tr>
								<td>Tipo de Documento</td>
								<td>
								<select class="form-control" name="Usuario_Tipo_doc_Tipo_doc" >
                                    <?php
                                    $sql = "SELECT * from tipo_doc";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['Tipo_doc'] . '">' . $row['Tipo_doc'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
							</tr>
							<tr>
								
							
							<tr>
								<td>Ingredientes</td>
								<td>	
								<select class="form-control" name="ingred[]" >
                                    <?php
                                    $sql = "SELECT cod_ingrediente, Nom_ing from ingredientes";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['cod_ingrediente'] . '">' . $row['cod_ingrediente'] . '</option>';
                                        ;
                                    }
                                    ?>
                                
                                <td>
								<button type="button" name="add" id="add" class="btn btn-success">Añadir</button></td>
							</tr>
						</table>
						<center>
						<input type="submit" class="btn btn-info" value="Finalizar y Enviar" />
                        
						<tr>
<button><a href="../../Vista/Empleado/ver_inventario.php">Ver Inventario</a></button></button><td><?php
echo "//"; ?><br><button><a href="../../Vista/Empleado/veringredientes.php">Ver Codigo Ingredientes</a></button><button><a href="../../Vista/Empleado/inicio_empleado.php">Volver</a></button></center>
</tr>
					</div><br>
					
				</form>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td></td><td><select class="form-control" name="ingred[]" ><?php
                                    $sql = "SELECT * from ingredientes";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['cod_ingrediente'] . '">' . $row['cod_ingrediente'] . '</option>';
                                        ;
                                    }
                                    ?></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	
});
</script>
</center>



