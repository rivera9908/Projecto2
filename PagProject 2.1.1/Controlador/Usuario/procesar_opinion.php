<?php



session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
  header("location: ../../Vista/index.php?Noseccion");
  }



$consulta="INSERT INTO comentario (usuario, fecha, mensaje)
	VALUES ('".$_SESSION['Nom_usu']."', NOW(), '".$_POST["mensaje"]."')";
$resultado=mysqli_query($con,$consulta);

if($resultado==true){
	header("location: ../../Vista/Usuario/opinion.php");
}else{
    print "<script>alert(\"Producto agregado exitosamente.\");window.location='../../Vista/Usuario/opinion.php';</script>";
}	

?>