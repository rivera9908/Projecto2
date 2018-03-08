<?php

require_once ('../modelo/class.conexion.php');
require_once ('../modelo/class.consultas.php');

$msj = null;
$consultas = new consultas();
$nom_pro = $_POST['nom_pro'];
$prec_pro = $_POST['prec_pro'];
$desc_pro = $_POST['desc_pro'];
$img_pro = $_POST['img_pro'];
$estado_pro = $_POST['estado_pro'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$cat_nom_cat = $_POST['cat_nom_cat'];
$usuario_id_usu = $_POST['usuario_id_usu'];
$usuario_tipo_tipo_doc = $_POST['usuario_tipo_tipo_doc'];
$cod_prod = $_POST['cod_prod'];

if(strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($fecha) > 0 && strlen($precio) > 0){
$msj = $consultas->modificarproducto("nom_pro", $nom_pro, $cod_prod);
$msj = $consultas->modificarproducto("prec_pro", $prec_pro, $cod_prod);
$msj = $consultas->modificarproducto("desc_pro", $desc_pro, $cod_prod);
$msj = $consultas->modificarproducto("img_pro", $img_pro, $cod_prod);
$msj = $consultas->modificarproducto("estado_pro", $estado_pro, $cod_prod);
$msj = $consultas->modificarproducto("fecha_ingreso", $fecha_ingreso, $cod_prod);
$msj = $consultas->modificarproducto("cat_nom_cat", $cat_nom_cat, $cod_prod);
$msj = $consultas->modificarproducto("usuario_id_usu", $usuario_id_usu, $cod_prod);
$msj = $consultas->modificarproducto("usuario_tipo_tipo_doc", $usuario_tipo_tipo_doc, $cod_prod);
echo $msj;
echo "<div><a href='../verproductos.php'>Ver productos</a></div>";
}else{
	echo "por favor complete todos los campos";
}

?>