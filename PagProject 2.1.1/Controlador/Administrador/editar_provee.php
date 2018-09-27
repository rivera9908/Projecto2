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
	<link rel="stylesheet" href="../../Vista/Administrador/css/bootstrap.min.css" />
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

		if (isset($_REQUEST['actualizar_provee'])){
			$IdPROVEEDOR = $_POST['IdPROVEEDOR'];
			$Nom_provee = $_POST['Nom_provee'];
			$Estado_provee = $_POST['Estado_provee'];
			$Direccion_provee = $_POST['Direccion_provee'];
			$Telefono_provee = $_POST['Telefono_provee'];
			
			


			$sqli = "UPDATE proveedor SET Nom_provee = '$Nom_provee', Estado_provee = '$Estado_provee', Telefono_provee = '$Telefono_provee', 
			Direccion_provee = '$Direccion_provee' WHERE IdPROVEEDOR = $IdPROVEEDOR";
			$resultado=mysqli_query($con, $sqli);
            
				print "<script>alert('Proveedor actualizado exitosamente.');window.location='../../Vista/Administrador/ver_provee.php';</script>";

			
}
			
		

			

		//------------------------FORMULARIO-------------------------------------//

			$IdPROVEEDOR = $_GET['IdPROVEEDOR'];
		  	$sqll = "SELECT * FROM proveedor WHERE IdPROVEEDOR = $IdPROVEEDOR";
		  	foreach (mysqli_query($con, $sqll) as $row) { 

		  		 ?>
		  		
				<h2 align="center">Editar Proveedor</h2><br />
				<form enctype="multipart/form-data" action="#" method="post" style="margin: auto; max-width: 55%;">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td>Nombre</td>
								<td><input type="text" name="Nom_provee" value="<?php echo $row['Nom_provee']; ?>" class="form-control name_list" required>
									<input type="text" name="IdPROVEEDOR" value="<?php echo $row['IdPROVEEDOR']; ?>" style="display: none;" ></td>
							</tr>
							<tr>
								<td>Estado</td>
								<td>
									<select class="form-control" name="Estado_provee">
									  <option value="1" <?php if($row['Estado_provee'] == 1){ echo "selected"; }?> >Activo</option>
									  <option value="0">Inactivo</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Direccion</td>
								<td><input type="text" name="Direccion_provee" value="<?php echo $row['Direccion_provee']; ?>" class="form-control name_list" required></td>
							</tr>
							<tr>
								<td>Telefono</td>
								<td><input type="text" name="Telefono_provee" value="<?php echo $row['Telefono_provee']; ?>" class="form-control name_list" required></td>
							</tr>
							
							
							
                                    <?php } ?>
               
							
						</table>
						<input type="submit" name="actualizar_provee" class="btn btn-primary" value="Finalizar y Actualizar">
						
						<a href="../../Vista/Administrador/ver_provee.php" class="btn btn-danger" style="color: white;">Cancelar</a>
					</div>
				</form>
				
				

</body>
</html>

