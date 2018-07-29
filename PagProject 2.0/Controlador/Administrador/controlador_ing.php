<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$Nom_ing =$_POST["Nom_ing"];
$Valor_ing = $_POST["Valor_ing"];
$cant_existente = $_POST["cant_existente"];
$Stock_max= $_POST["Stock_max"];
$Stock_min = $_POST["Stock_min"];
$Estado_ing = $_POST["Estado_ing"];
$Peso_ing = $_POST["Peso_ing"];
$PROVEEDOR_idPROVEEDOR = $_POST["PROVEEDOR_idPROVEEDOR"];


	$sql1 = "INSERT INTO ingredientes (Nom_ing, Valor_ing, cant_existente, Stock_max, Stock_min, Estado_ing, Peso_ing, PROVEEDOR_idPROVEEDOR) VALUES ('$Nom_ing',$Valor_ing,'$cant_existente','$Stock_max','$Stock_min','$Estado_ing','$Peso_ing','$PROVEEDOR_idPROVEEDOR')";
	$resultado=mysqli_query($con, $sql1);
   

	
	if($resultado==true){

	print "<script>alert(\"Ingrediente agregado exitosamente.\");window.location='ver_ing.php';</script>";	
	}else{
	print "<script>alert(\"Algo salio mal.\");window.location='javascript:window.history.back();';</script>";
}

?>