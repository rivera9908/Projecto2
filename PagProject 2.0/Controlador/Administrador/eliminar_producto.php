<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");


		
if (isset($_REQUEST['eliminar'])){
			
			$id_prod = $_GET['id_prod'];
			$sqle = "DELETE FROM producto_has_ingredientes WHERE PRODUCTO_cod_producto = $id_prod";
			$resultado= mysqli_query($con, $sqle);
			print "<script>alert('Producto eliminado exitosamente.');window.location='../../Vista/Administrador/ver_productos.php';</script>";

			if ($resultado==true){
			$sql= "DELETE FROM producto WHERE cod_producto = '$id_prod' ";	
			$resultado= mysqli_query($con, $sql);
			}else{

				print "<script>alert('Producto NO eliminado exitosamente.');window.location='../../Vista/Administrador/ver_productos.php';</script>";

			} 
			
			

			
		}
		  
?>