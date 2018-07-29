<?php

include("conexion.php");

$cod_prod= $_REQUEST['cod_prod'];


$query = "DELETE FROM producto WHERE cod_prod = '$cod_prod'";
$resultado = $conexion->query($query);

if($resultado){
	
	header("location: mostrar.php");
}
else{
	echo "no se modifico";
}
?>