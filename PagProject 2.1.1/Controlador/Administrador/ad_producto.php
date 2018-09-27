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
		<link rel="stylesheet" href="../../Vista/Administrador/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<style type="text/css">
		body{
			background-image: url(../../Vista/Administrador/img/Fondo.jpg);
		}

		
		#boton{
			background-color: #37BEDC;
			border-style: none;
			border-radius: 5px 5px;
			font-size: 15px;
			width: 20%;
			height: 5%;

		}
	</style>

	<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

    
</script>	
	
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
								<td><input type="text" name="nombre" placeholder="Ej: Papaya" class="form-control name_list" onkeypress="return soloLetras(event)" required></td>
							</tr>
							<tr>
								<td>Precio $</td>
								<td><input type="text" name="precio" placeholder="$$$" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Descripcion</td>
								<td><input type="text" name="desc" placeholder="..." class="form-control name_list" onkeypress="return soloLetras(event)" required></td>
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
                                    $sql = "SELECT * from categoriadelproducto";
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
                                    $sql = "SELECT * from ingrediente";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['cod_ingrediente'] . '">' . $row['Nom_ing'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
                                <td><input type="number" name="cantidad[]" value="1" min="1" max="10" class="form-control name_list"></td>
                                <td>
								<button type="button" name="add" id="add" class="btn btn-success">Agregar</button></td>
							</tr>
						</table>
						<input type="submit" class="btn btn-info" value="Finalizar y Enviar" />
						
						<tr>
<a href="../../Vista/Administrador/ver_productos.php"><input type="button" value="Ver productos" id="boton" style="color:white">
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
                                    $sql = "SELECT * from ingrediente";
                                    foreach (mysqli_query($con, $sql) as $row) {
                                        echo '<option value="' . $row['cod_ingrediente'] . '">' . $row['Nom_ing'] . '</option>';
                                        ;
                                    }
                                    ?></select></td><td><input type="number" name="cantidad[]" value="1" min="1" max="10" class="form-control name_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	
});
</script>
</center>



