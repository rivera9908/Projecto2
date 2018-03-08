<?php


class consultas{

public function insertarproductos($nom_pro,$prec_pro,$desc_pro,$img_pro, $estado_pro, $fecha_ingreso, $cat_nom_cat,$usuario_id_usu,$usuario_tipo_tipo_doc){
$modelo = new conexion();
$conexion = $modelo->get_conexion();
$sql = "insert into productos (nom_pro,prec_pro,desc_pro,img_pro, estado_pro, fecha_ingreso, cat_nom_cat,usuario_id_usu,usuario_tipo_tipo_doc) values (:nom_pro,:prec_pro,:desc_pro,:img_pro, :estado_pro, :fecha_ingreso, :cat_nom_cat, :usuario_id_usu, :usuario_tipo_tipo_doc)";
$statement = $conexion->prepare($sql);

$statement->bindparam(':nombre', $nombre);
$statement->bindparam(':descripcion', $descripcion);
$statement->bindparam(':categoria', $categoria);
$statement->bindparam(':fecha', $fecha);
$statement->bindparam(':precio', $precio);
if(!$statement){
return "error al crear el registro";
}else{
$statement->execute();
return"registro creado correctamente";
}
}

public function cargarproductos(){
	$rows = null;
	$modelo = new conexion();
	$conexion = $modelo->get_conexion();
	$sql = "select * from productos";
	$statement = $conexion->prepare($sql);
	$statement->execute();
	while ($result = $statement->fetch()) {
		$rows[] = $result;
	}
	return $rows;
}
public function eliminarproducto ($cod_prod){
	$modelo = new conexion();
	$conexion = $modelo->get_conexion();
	$sql = "delete from productos where cod_prod= :cod_prod";
	$statement = $conexion->prepare($sql);
	$statement->bindparam(':cod_prod', $cod_prod);
	if(!$statement){
		return "error al eliminar el producto";
	}else{
		$statement->execute();
	return "producto ha sido eliminado exitosamente";
	}
}
public function buscarproductos($nombre){
	$rows = null;
	$modelo = new conexion();
	$conexion = $modelo->get_conexion();
	$nombre = "%".$nombre."%";
	$sql = "select * from productos where nombre like :nombre";
	$statement = $conexion->prepare($sql);
	$statement->bindparam(":nombre", $nombre);
	$statement->execute();
	while ($result = $statement->fetch()) {
		$rows[] = $result;
	}
	return $rows;
}
public function cargarproducto($cod_prod){
		$rows = null;
	$modelo = new conexion();
	$conexion = $modelo->get_conexion();
	$sql = "select * from productos where cod_prod = :cod_prod";
	$statement = $conexion->prepare($sql);
	$statement->bindparam(":cod_prod", $cod_prod);
	$statement->execute();
	while ($result = $statement->fetch()) {
		$rows[] = $result;
	}
	return $rows;
}
public function modificarproducto($campo, $valor, $cod_prod){
	$modelo = new conexion();
    $conexion = $modelo->get_conexion();
$sql = "update productos set $campo = :valor where cod_prod = :cod_prod";
$statement = $conexion->prepare($sql);
$statement->bindparam(":valor", $valor);
$statement->bindparam(":cod_prod", $cod_prod);
if(!$statement){
	return "error al modificar el producto";
} else{
	$statement->execute();
	return "producto modificado exitosamente";
}
}
}
?>