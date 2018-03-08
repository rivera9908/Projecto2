<?php

require_once ('../modelo/class.conexion.php');
require_once ('../modelo/class.consultas.php');

if(isset($_GET['cod_prod'])){
$cod_prod = $_GET['cod_prod'];
$consultas = new consultas();
$mensaje = $consultas->eliminarproducto($cod_prod);
echo $mensaje;
echo "<div><a href='../verproductos.php'>volver a mis productos</a></div>";
}
?>