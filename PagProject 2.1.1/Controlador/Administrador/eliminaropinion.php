<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$id= $_REQUEST['id'];


$query = "DELETE FROM comentario WHERE id = '$id'";
$resultado = mysqli_query($con, $query);

if($resultado){
	
	header("location: ../../Vista/Administrador/veropiniones.php");
}
else{
	echo "no se modifico";
}
?>