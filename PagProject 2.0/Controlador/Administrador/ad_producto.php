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
			background-image: url(../../Vista/Administrador/img/Fondo.jpg);
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
				<h2 align="center">Agregar Producto</h2><br />
				<form enctype="multipart/form-data" name="add_prod" id="add_prod" action="controlador.php" method="post">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Nombre</td>
								<td><input type="text" name="nombre" placeholder="Ej: Papaya" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Precio $</td>
								<td><input type="text" name="precio" placeholder="$$$" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Descripcion</td>
								<td><input type="text" name="desc" placeholder="..." class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Foto</td>
								<td><input type="file" name="Foto_prod" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Categoria</td>
								<td>
								<select class="form-control" name="categoria" >
                                    <?php
                                    $sql = "SELECT * from CATEGORIADELPRODUCTO";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['Nom_cat'] . '">' . $row['Nom_cat'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
							</tr>
							
							<tr>
								<td>Ingredientes</td>
								<td>	
								<select class="form-control" name="ingred[]" >
                                    <?php
                                    $sql = "SELECT * from ingredientes";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['cod_ingrediente'] . '">' . $row['Nom_ing'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
                                <td><input type="number" name="cantidad" value="1" min="1" max="10" class="form-control name_list"></td>
                                <td>
								<button type="button" name="add" id="add" class="btn btn-success">Añadir</button></td>
							</tr>
						</table>
						<input type="submit" class="btn btn-info" value="Finalizar y Enviar" />
						
						<tr>
<button class="btn btn-info"><a href="../../Vista/Administrador/ver_productos.php" style="color:white">Ver productos</a></button>
</tr>
					</div>
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
                                        echo '<option value="' . $row['cod_ingrediente'] . '">' . $row['Nom_ing'] . '</option>';
                                        ;
                                    }
                                    ?></select></td><td><input type="number" name="cantidad" value="1" min="1" max="10" class="form-control name_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	
});
</script>
</center>



