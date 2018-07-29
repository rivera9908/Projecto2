<?php

$conexion = new mysqli("localhost","root","","fruteria_poblada"); 

$Id_usu= $_REQUEST['Id_usu'];
$Id_usu= $_POST['Id_usu'];
$Nom_usu = $_POST['Nom_usu'];
$Pass_usu = $_POST['Pass_usu'];
$Tipo_doc_tipo_doc = $_POST['Tipo_doc_tipo_doc'];
$Rol_nom_rol = $_POST['Rol_nom_rol'];
$Estado_usu = $_POST['Estado_usu'];



$query = "UPDATE usuario SET Id_usu='$Id_usu', Nom_usu='$Nom_usu', Pass_usu='$Pass_usu', Tipo_doc_tipo_doc='$Tipo_doc_tipo_doc',
 Rol_nom_rol='$Rol_nom_rol', Estado_usu ='$Estado_usu' WHERE Id_usu = '$Id_usu'";
$resultado = $conexion->query($query);

if($resultado){
	
	header("location: mostrarusu.php");
}
else{
	echo "no se modifico";
}
?>