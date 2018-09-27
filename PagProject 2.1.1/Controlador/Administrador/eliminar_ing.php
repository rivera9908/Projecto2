<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");


		
if (isset($_REQUEST['eliminar'])){
			
			$cod_ingrediente = $_GET['cod_ingrediente'];
			$sqle = "DELETE FROM Ingrediente WHERE cod_ingrediente = $cod_ingrediente";
			$resultado= mysqli_query($con, $sqle);
			

			if ($resultado==true){

			print "<script>alert('Ingrediente eliminado exitosamente.');window.location='../../Vista/Administrador/ver_ing.php';</script>";
			}else{

				print "<script>alert('Ingrediente NO eliminado exitosamente.');window.location='ver_ing.php';</script>";

			} 
			
			

			
		}
		  
?>