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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
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

		if (isset($_REQUEST['actualizar_prod'])){
			$cod_ingrediente = $_POST['cod_ingrediente'];
			$Nom_ing = $_POST['Nom_ing'];
			$Valor_ing = $_POST['Valor_ing'];
			$cant_existente = $_POST['cant_existente'];
			$Stock_max = $_POST['Stock_max'];
			$Stock_min = $_POST['Stock_min'];
			$Estado_ing = $_POST['Estado_ing'];
			$Peso_ing = $_POST['Peso_ing'];
			$PROVEEDOR_idPROVEEDOR = $_POST['PROVEEDOR_idPROVEEDOR'];
			

			$sqli = "UPDATE ingredientes SET Nom_ing = '$Nom_ing', Valor_ing = '$Valor_ing', cant_existente = '$cant_existente', Stock_max = '$Stock_max', Stock_min = $Stock_min, Estado_ing = '$Estado_ing', Peso_ing='$Peso_ing', PROVEEDOR_idPROVEEDOR='$PROVEEDOR_idPROVEEDOR' WHERE cod_ingrediente = $cod_ingrediente";
			mysqli_query($con, $sqli);

			print "<script>alert('Ingrediente actualizado exitosamente.');window.location='ver_ing.php';</script>";

		}

			

		//------------------------FORMULARIO-------------------------------------//

			$cod_ingrediente = $_GET['cod_ingrediente'];
		  	$sqll = "SELECT * FROM ingredientes WHERE cod_ingrediente = $cod_ingrediente";
		  	foreach (mysqli_query($con, $sqll) as $row) { 

		  		 ?>
		  		
				<h2 align="center">Editar Ingrediente</h2><br />
				<form enctype="multipart/form-data" action="#" method="post" style="margin: auto; max-width: 55%;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Nombre</td>
								<td><input type="text" name="Nom_ing" value="<?php echo $row['Nom_ing']; ?>" class="form-control name_list" required>
									<input type="text" name="cod_ingrediente" value="<?php echo $row['cod_ingrediente']; ?>" style="display: none;" ></td>
							</tr>
							<tr>
								<td>Precio $</td>
								<td><input type="text" name="Valor_ing" value="<?php echo $row['Valor_ing']; ?>" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Cantidad Existente</td>
								<td><input type="text" name="cant_existente" value="<?php echo $row['cant_existente']; ?>" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Stock Maximo</td>
								<td><input type="text" name="Stock_max" value="<?php echo $row['Stock_max']; ?>" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Stock Minimo</td>
								<td><input type="text" name="Stock_min" value="<?php echo $row['Stock_min']; ?>" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Estado</td>
								<td>
									<select class="form-control" name="Estado_ing">
									  <option value="1" <?php if($row['Estado_ing'] == 1){ echo "selected"; }?> >Activo</option>
									  <option value="0">Inactivo</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Peso del Ingrediente</td>
								<td><input type="text" name="Peso_ing" value="<?php echo $row['Peso_ing']; ?>" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Proveedor</td>
								<td>
								<select class="form-control" name="PROVEEDOR_idPROVEEDOR" >
                                    <?php
                                    $sqli = "SELECT * from proveedor";
                                    foreach (mysqli_query($con, $sqli) as $row1) {
                                        echo '<option value="' . $row1['IdPROVEEDOR'] . '">' . $row1['Nom_provee'] . '</option>';
                                        ;
                                    }
                                    ?>
                                </select>
                                </td>
							</tr>

						</table>
						<input type="submit" name="actualizar_prod" class="btn btn-primary" value="Finalizar y Actualizar">
						
						<a href="ver_productos.php" class="btn btn-danger" style="color: white;">Cancelar</a>
					</div>
				</form>
				
				<?php } ?>
</body>
</html>
