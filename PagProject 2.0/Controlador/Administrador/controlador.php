<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}


require("../../Modelo/conexion.php");

$number = count($_POST["ingred"]);
$Nom_pro = $_POST["nombre"];
$Prec_pro = $_POST["precio"];
$Desc_pro = $_POST["desc"];
$img_pro = $_FILES['Foto_prod']['name'];
$categ = $_POST["categoria"];
$cantidad = $_POST["cantidad"];


if($number > 1)
{
	$Ruta_imagen = "../../Vista/Administrador/img/";
    $Ruta_imagen = $Ruta_imagen . basename($_FILES['Foto_prod']['name']);
    move_uploaded_file($_FILES['Foto_prod']['tmp_name'], $Ruta_imagen);
	$sql1 = "INSERT INTO PRODUCTO (Nom_pro, Prec_pro, Desc_pro, img_pro, estado_pro, fecha_ingreso, CAT_Nom_cat) VALUES ('$Nom_pro',$Prec_pro,'$Desc_pro','$img_pro',1,NOW(),'$categ')";
	mysqli_query($con, $sql1);


	
	$id = $con->insert_id;

	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["ingred"][$i] != ''))
		{
			$ing = $_POST["ingred"][$i];
			$cantidad = $_POST["cantidad"];
			$sql = "INSERT INTO PRODUCTO_has_Ingredientes VALUES($id, $ing, $cantidad)";
			mysqli_query($con, $sql);
		}
	}
	print "<script>alert(\"Producto agregado exitosamente.\");window.location='../../Vista/Administrador/ver_productos.php';</script>";
}
else
{
	print "<script>alert(\"Por favor, ingrese otro ingrediente.\");window.location='javascript:window.history.back();';</script>";
}

?>