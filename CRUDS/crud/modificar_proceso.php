<?php

 include ("conexion.php");

$codigo=$_REQUEST['codigo'];
$codigo = $_POST["codigo"];
$grado = $_POST["grado"];
$anio =  $_POST["anio"];
$jornada = $_POST["jornada"];
$nombres =  $_POST["nombres"];
$apellido = $_POST["apellido"];

$query="UPDATE alumno SET codigo='$codigo',grado='$grado',anio='$anio',jornada='$jornada',nombres='$nombres',apellido='$apellido' WHERE codigo='$codigo'";
$resultado=$conexion->query($query);

if($resultado){
    header ("location: tabla.php");
}else {
    echo "insercion no exitosa";
}

?>