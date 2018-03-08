<?php

require_once ('../modelo/class.conexion.php');
require_once ('../modelo/class.consultas.php');

$mensaje = null;

$nom_pro = $_POST['nom_pro'];
$prec_pro = $_POST['prec_pro'];
$desc_pro = $_POST['desc_pro'];
$img_pro = $_POST['img_pro'];
$estado_pro = $_POST['estado_pro'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$cat_nom_cat = $_POST['cat_nom_cat'];
$usuario_id_usu = $_POST['usuario_id_usu'];
$usuario_tipo_tipo_doc = $_POST['usuario_tipo_tipo_doc'];

if(strlen($nom_pro) > 0 && strlen($prec_pro) > 0 && strlen($desc_pro) > 0 && strlen($img_pro) > 0 && strlen($estado_pro) > 0 && strlen($fecha_ingreso) > 0 && strlen($cat_nom_cat) > 0
&& strlen($usuario_id_usu) > 0 && strlen($usuario_id_usu) > 0 ){
$consultas = new consultas();
$mensaje = $consultas->insertarproductos($nom_pro,$prec_pro,$desc_pro,$img_pro, $estado_pro, $fecha_ingreso, $cat_nom_cat,$usuario_id_usu,$usuario_tipo_tipo_doc);
echo "<br><a href='../insertar.html'>Nuevo producto</a><br>";
echo "<br><a href='../verproductos.php'>ver productos</a><br>";
}else{
echo "por favor complete todos los campos";
echo "<br><a href='../insertar.html'>Nuevo producto</a><br>";
}

echo $mensaje;

?>