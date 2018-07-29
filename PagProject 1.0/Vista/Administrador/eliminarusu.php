<?php

$conexion = new mysqli("localhost","root","","fruteria_poblada"); 

$Id_usu= $_REQUEST['Id_usu'];


$query = "DELETE FROM usuario WHERE Id_usu = '$Id_usu'";
$resultado = $conexion->query($query);

if($resultado){
	
	header("location: mostrarusu.php");
}
else{
	echo "no se modifico";
}
?>