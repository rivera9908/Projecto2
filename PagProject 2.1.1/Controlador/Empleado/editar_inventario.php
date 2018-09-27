<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Editar Producto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style type="text/css">
		body{
			
		}
		
	</style>

</head>
<body background="../../Vista/Empleado/img/cerezas.jpg">
	<?php
		include ("../../Modelo/conexion.php");

		if (isset($_REQUEST['eliminar_ing'])){
			$Ingredientes_cod_ingrediente = $_GET['Ingredientes_cod_ingrediente'];
			$sqle = "DELETE FROM inventario WHERE Ingrediente_cod_ingrediente = $Ingrediente_cod_ingrediente";

			mysqli_query($con, $sqle);
			print "<script>alert(\"Ingrediente eliminado exitosamente.\");</script>";
			print "<script>location.reload();'</script>";
			
		}

		if (isset($_REQUEST['actualizar_Inv'])){
			$n_inventario = $_POST['n_inventario'];
			$fecha_inventario = $_POST['fecha_inventario'];
			$Usuario_id_usu = $_POST['Usuario_id_usu'];
			$Usuario_Tipo_doc_Tipo_doc = $_POST['Usuario_Tipo_doc_Tipo_doc'];
			

			$sqli = "UPDATE inventario SET fecha_inventario = '$fecha_inventario', Usuario_id_usu = '$Usuario_id_usu', Usuario_Tipo_doc_Tipo_doc = '$Usuario_Tipo_doc_Tipo_doc' WHERE n_inventario = $n_inventario";
			mysqli_query($con, $sqli);

			if(isset($_POST['ingred'])){ //En caso de que se agreguen nuevos ingredientes al producto
				$number = count($_POST["ingred"]);
				for($i=0; $i<$number; $i++)
				{
					if(trim($_POST["ingred"][$i] != ''))
		{
			$ing = $_POST["ingred"][$i];
			$sql = "INSERT INTO inventario (fecha_inventario, Usuario_id_usu, Usuario_Tipo_doc_Tipo_doc, Ingredientes_cod_ingrediente) VALUES ('$fecha_inventario','$Usuario_id_usu','$Usuario_Tipo_doc_Tipo_doc' , $ing)";
			//$sql = "INSERT INTO inventario (Ingredientes_cod_ingrediente) VALUES($ing)";
			mysqli_query($con, $sql);
		}
	}
			}

			print "<script>alert('Inventario actualizado exitosamente.');window.location='../../Vista/Empleado/ver_inventario.php';</script>";

		}


		//------------------------FORMULARIO-------------------------------------//

			$n_inventario = $_GET['n_inventario'];
		  	$sqll = "SELECT * FROM inventario WHERE n_inventario = $n_inventario";
		  	foreach (mysqli_query($con, $sqll) as $row) { 

		  		 ?>
		  		
				<h2 align="center">Editar Producto</h2><br />
				<form enctype="multipart/form-data" action="#" method="post" style="margin: auto; max-width: 55%;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Fecha</td>
								<td><input type="date" name="fecha_inventario" value="<?php echo $row['fecha_inventario']; ?>" class="form-control name_list" required>
									<input type="text" name="n_inventario" value="<?php echo $row['n_inventario']; ?>" style="display: none;" ></td>
							</tr>
							<tr>
								<td>N° Identificacion</td>
								<td>
								<select class="form-control" name="Usuario_id_usu" >
                                    <?php
                                    $sqli = "SELECT * from usuario WHERE Rol_nom_rol= 'Empleado'";
                                    foreach (mysqli_query($con, $sqli) as $row1) {
                                        echo '<option value="' . $row1['Id_usu'] . '">' . $row1['Id_usu'] . '</option>';
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
                                    $sqli = "SELECT * from tipo_doc";
                                    foreach (mysqli_query($con, $sqli) as $row1) {
                                        echo '<option value="' . $row1['Tipo_doc'] . '">' . $row1['Tipo_doc'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
							</tr>

							

							<tr class="success">
								<td>Ingredientes</td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Añadir Ingrediente</button></td>
							</tr>	
                                    <?php 
                                    $sql22 = "SELECT t1.cod_ingrediente, t1.Nom_ing  from ingrediente as t1 JOIN producto_has_ingrediente as t2 on (t1.cod_ingrediente = t2.Ingrediente_cod_ingrediente) WHERE t2.Producto_cod_producto = $n_inventario";
                                    foreach (mysqli_query($con, $sql22) as $row2) { ?>
                                    <tr>   
                                    <td>
                                    	<?php echo $row2['cod_ingrediente']; ?>
                                	</td>
                                	<td>
                                		<form action="#" method="get">
								  			<input type="text" name="Ingredientes_cod_ingrediente" value="<?php echo $row2['cod_ingrediente']; ?>" style="display: none;" >
								  			<input type="text" name="n_inventario" value="<?php echo $row['n_inventario']; ?>" style="display: none;" >
								  			<input type="submit" name="eliminar_ing" class="btn btn-warning" value="Eliminar Ingrediente">
								  		</form>
                                	</td>
                                	</tr>
                                    <?php } ?>
               
							
						</table>
						<input type="submit" name="actualizar_Inv" class="btn btn-primary" value="Finalizar y Actualizar">
						
						<a href="../../Vista/Empleado/ver_inventario.php" class="btn btn-danger" style="color: white;">Cancelar</a>
					</div>
				</form>
				
				<?php } ?>

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