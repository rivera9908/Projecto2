<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../index.php?Noseccion");
	}



require("../../Modelo/conexion.php");

$Nom_provee = $_POST["Nom_provee"];
$Estado_provee = $_POST["Estado_provee"];
$Telefono_provee = $_POST["Telefono_provee"];
$Direccion_provee = $_POST["Direccion_provee"];


	$sql1 = "INSERT INTO proveedor (Nom_provee, Estado_provee, Telefono_provee, Direccion_provee) VALUES ('$Nom_provee',$Estado_provee,'$Telefono_provee','$Direccion_provee')";
	$resultado=mysqli_query($con, $sql1);

if ($resultado==true){

	print "<script>alert(\"Proveedor agregado exitosamente.\");window.location='../../Vista/Administrador/ver_provee.php';</script>";
}
else
{
	echo "no se pudo";
	//print "<script>alert(\"Problema al agregar proveedor.\");window.location='index.php';</script>";
}

?>