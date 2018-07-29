<?php

$conexion = new mysqli("localhost","root","","fruteria_poblada"); 

$id= $_REQUEST['id'];


$query = "DELETE FROM comentario WHERE id = '$id'";
$resultado = $conexion->query($query);

if($resultado){
	
	header("location: veropiniones.php");
}
else{
	echo "no se modifico";
}
?>