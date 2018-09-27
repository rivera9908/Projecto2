<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}

		
if (isset($_REQUEST['eliminar'])){
			
			$n_inventario = $_GET['n_inventario'];
			$sqle = "DELETE FROM inventario WHERE n_inventario = $n_inventario";
			$resultado= mysqli_query($con, $sqle);
			print "<script>alert('inventario eliminado exitosamente.');window.location='../../Vista/Empleado/ver_inventario.php';</script>";

			
			
			

			
		}
		  
?>