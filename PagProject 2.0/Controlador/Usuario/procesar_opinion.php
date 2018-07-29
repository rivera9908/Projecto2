<?php



session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
  header("location: ../../Vista/index.php?Noseccion");
  }



$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("mydb", $conexion);

if($conexion){
	
	mysql_query("INSERT INTO comentario (usuario, mensaje)
	VALUES ('".$_SESSION['Nom_usu']."', '".$_POST["mensaje"]."')", $conexion);
	header("location: ../../Vista/Usuario/opinion.php");
}

mysql_close($conexion);

?>