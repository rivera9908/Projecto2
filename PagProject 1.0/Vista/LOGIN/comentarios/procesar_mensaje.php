<?php

$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("fruteria_poblada", $conexion);

if($conexion){
	
	mysql_query("INSERT INTO comentario (usuario, mensaje)
	VALUES ('".$_POST["usuario"]."', '".$_POST["mensaje"]."')", $conexion);
	header("location: index.php");
}

mysql_close($conexion);

?>