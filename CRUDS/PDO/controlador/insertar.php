<?php

require_once ('../modelo/class.conexion.php');
require_once ('../modelo/class.consultas.php');

$mensaje = null;

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];

if(strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($fecha) > 0 && strlen($precio) > 0){
$consultas = new consultas();
$mensaje = $consultas->insertarproductos($nombre, $descripcion, $categoria, $fecha, $precio);
echo "<br><a href='../insertar.html'>Nuevo producto</a><br>";
echo "<br><a href='../verproductos.php'>ver productos</a><br>";
}else{
echo "por favor complete todos los campos";
echo "<br><a href='../insertar.html'>Nuevo producto</a><br>";
}

echo $mensaje;

?>