<?php

include("conexion.php");

$cod_prod = $_POST['Cod_prod'];
$nom_pro = $_POST['Nom_pro'];
$prec_pro = $_POST['Prec_pro'];
$desc_pro = $_POST['Desc_pro'];
$img_pro = addslashes(file_get_contents($_FILES['Img_pro']['tmp_name']));
$estado_pro = $_POST['Estado_pro'];
$fecha_ingreso = $_POST['Fecha_ingreso'];
$cat_nom_cat = $_POST['Cat_nom_cat'];
$usuario_id_usu = $_POST['Usuario_id_usu'];
$usuario_tipo_doc_tipo_doc = $_POST['Usuario_tipo_doc_tipo_doc'];

$query = "INSERT INTO producto ( Cod_prod, Nom_pro,Prec_pro,Desc_pro,Img_pro, Estado_pro, Fecha_ingreso, Cat_nom_cat,Usuario_id_usu,Usuario_tipo_doc_tipo_doc) 
values ('$cod_prod','$nom_pro', '$prec_pro','$desc_pro', '$img_pro', '$estado_pro', '$fecha_ingreso', '$cat_nom_cat', '$usuario_id_usu', '$usuario_tipo_doc_tipo_doc')";
$resultado = $conexion->query($query);

if($resultado){
	header("location: mostrar.php");
}else{
	echo " no se inserto";
	
	
}
?>