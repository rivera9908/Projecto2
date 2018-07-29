<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$Id_usu= $_REQUEST['Id_usu'];


$query = "DELETE FROM usuario WHERE Id_usu = '$Id_usu'";
$resultado = mysqli_query($con, $query);

if($resultado){
	
	header("location: ../../Vista/Administrador/mostrarusu.php");
}
else{
	echo "no se modifico";
}
?>