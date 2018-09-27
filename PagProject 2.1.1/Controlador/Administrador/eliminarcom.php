<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$idCompra= $_REQUEST['idCompra'];


$query = "DELETE FROM compra WHERE idCompra = '$idCompra'";
$resultado = mysqli_query($con, $query);

if($resultado){
	
	header("location: ../../Vista/Administrador/vercompras.php");
}
else{
	echo "no se elimino";
}
?>