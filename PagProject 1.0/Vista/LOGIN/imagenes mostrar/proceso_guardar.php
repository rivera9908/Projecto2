<?php

include("conexion.php");

$cod_prod = $_POST['cod_prod'];
$nom_pro = $_POST['nom_pro'];
$prec_pro = $_POST['prec_pro'];
$desc_pro = $_POST['desc_pro'];
$img_pro = addslashes(file_get_contents($_FILES['img_pro']['tmp_name']));
$estado_pro = $_POST['estado_pro'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$cat_nom_cat = $_POST['cat_nom_cat'];

$query = "INSERT INTO producto ( cod_prod, nom_pro,prec_pro,desc_pro,img_pro, estado_pro, fecha_ingreso, cat_nom_cat) 
values ('$cod_prod','$nom_pro', '$prec_pro','$desc_pro', '$img_pro', '$estado_pro', '$fecha_ingreso', '$cat_nom_cat')";
$resultado = $conexion->query($query);

if($resultado){
	header("location: mostrar.php");
}else{
	echo " no se inserto";
	
	
}
?>