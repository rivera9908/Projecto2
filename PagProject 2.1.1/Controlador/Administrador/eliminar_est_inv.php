<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$cod_auditoria= $_REQUEST['cod_auditoria'];


$query = "DELETE FROM auditoria WHERE cod_auditoria = '$cod_auditoria'";
$resultado = mysqli_query($con, $query);

if($resultado){
	
	header("location: ../../Vista/Administrador/estado_inventario.php");
}
else{
	echo "no se elimino";
}
?>