<?php

 include ("conexion.php");

$codigo = $_POST["codigo"];
$grado = $_POST["grado"];
$anio =  $_POST["anio"];
$jornada = $_POST["jornada"];
$nombres =  $_POST["nombres"];
$apellido = $_POST["apellido"];

$query="INSERT INTO alumno (codigo,grado,anio,jornada,nombres,apellido)
 VALUES ('$codigo','$grado', '$anio', '$jornada', '$nombres', '$apellido')";
$resultado=$conexion->query($query);

if($resultado){
    header ("location: tabla.php");
}else {
    echo "insercion no exitosa";
}

?>