<?php

 include ("conexion.php");

$codigo=$_REQUEST['codigo'];


$query="DELETE FROM alumno WHERE codigo='$codigo' ";
$resultado=$conexion->query($query);

if($resultado){
    header ("location: tabla.php");
}else {
    echo "insercion no exitosa";
}

?>