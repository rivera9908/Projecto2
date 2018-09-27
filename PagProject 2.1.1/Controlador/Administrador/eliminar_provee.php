<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


		
if (isset($_REQUEST['eliminar'])){
			
			$IdPROVEEDOR = $_GET['IdPROVEEDOR'];
			$sqle = "DELETE FROM proveedor WHERE IdPROVEEDOR = $IdPROVEEDOR";
			$resultado= mysqli_query($con, $sqle);
			

			if ($resultado==true){

			print "<script>alert('Proveedor eliminado exitosamente.');window.location='../../Vista/Administrador/ver_provee.php';</script>";
			}else{

				print "<script>alert('Proveedor NO eliminado exitosamente.');window.location='ver_provee.php';</script>";

			} 
			}
		  
?>

?>