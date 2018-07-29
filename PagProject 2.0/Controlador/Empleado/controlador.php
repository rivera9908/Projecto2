<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");
$number = count($_POST["ingred"]);
$fecha_inventario = $_POST["fecha_inventario"];
$Usuario_id_usu = $_POST["Usuario_id_usu"];
$Usuario_Tipo_doc_Tipo_doc = $_POST["Usuario_Tipo_doc_Tipo_doc"];


if($number > 1)
{

	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["ingred"][$i] != ''))
		{
			$ing = $_POST["ingred"][$i];
			$sql = "INSERT INTO inventario (fecha_inventario, Usuario_id_usu, Usuario_Tipo_doc_Tipo_doc, Ingredientes_cod_ingrediente) VALUES ('$fecha_inventario','$Usuario_id_usu','$Usuario_Tipo_doc_Tipo_doc' , $ing)";
			//$sql = "INSERT INTO inventario (Ingredientes_cod_ingrediente) VALUES($ing)";
			mysqli_query($con, $sql);
		}
	}
	print "<script>alert(\"Producto agregado exitosamente.\");window.location='../../Vista/Empleado/ver_inventario.php';</script>";
}
else
{
	print "<script>alert(\"Por favor, ingrese otro ingrediente.\");window.location='javascript:window.history.back();';</script>";
}

?>