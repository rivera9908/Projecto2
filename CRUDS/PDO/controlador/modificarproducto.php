1o<?php

require_once ('../modelo/class.conexion.php');
require_once ('../modelo/class.consultas.php');

$msj = null;
$consultas = new consultas();
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$fecha = $_POST['fecha'];
$precio = $_POST['precio'];
$cod_prod = $_POST['cod_prod'];

if(strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($fecha) > 0 && strlen($precio) > 0){
$msj = $consultas->modificarproducto("nombre", $nombre, $cod_prod);
$msj = $consultas->modificarproducto("descripcion", $descripcion, $cod_prod);
$msj = $consultas->modificarproducto("categoria", $categoria, $cod_prod);
$msj = $consultas->modificarproducto("fecha", $fecha, $cod_prod);
$msj = $consultas->modificarproducto("precio", $precio, $cod_prod);
echo $msj;
echo "<div><a href='../verproductos.php'>Ver productos</a></div>";
}else{
	echo "por favor complete todos los campos";
}

?>