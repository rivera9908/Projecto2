<html>
<head><!DOCTYPE HTML>

<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
</head>
<body background="FONDO.png">
</head>
<?php
include ("conexion.php");

$cod_prod= $_REQUEST['cod_prod'];

$query = "SELECT * FROM producto where cod_prod= '$cod_prod'";
$resultado= $conexion->query($query);
$row = $resultado->fetch_assoc();
?>

<center><br/><br/>
<form action="proceso_modificar.php?cod_prod<?php echo $row['cod_prod'];?>" method="post" enctype="multipart/form-data">
<form>
<label for="codigo">codigo</label>
<input type="text" name="cod_prod" value="<?php echo $row['cod_prod'];?>" placeholder="introduzca el codigo">
<label for="nombre">Nombre</label>
<input type="text" name="nom_pro" value="<?php echo $row['nom_pro'];?>" placeholder="introduzca el nombre">
<label for="precio">Precio</label>
<input type="text" name="prec_pro" value="<?php echo $row['prec_pro'];?>" placeholder="introduzca el precio">
<label for="descripcion">Descripcion</label>
<textarea rows="10" cols="30" name="desc_pro" value="<?php echo $row['desc_pro'];?>" placeholder="introduzca la descripcion"></textarea>
<label for="imagen del producto">Imagen del Producto</label>
<input type="file" required name="img_pro"/>
<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_pro']);?>"/></td><br></br>
<label for="Estado del Producto">Estado del Producto</label>
ACTIVO<input type="radio" name="estado_pro" value="1">
INACTIVO<input type="radio" name="estado_pro" value="0">
<label for="fecha">Fecha</label>
<input type="date" name="fecha_ingreso" value="<?php echo $row['fecha_ingreso'];?>" placeholder="introduzca la fecha">
<label for="categoria">Categoria</label>
<input type="text" name="cat_nom_cat" value="<?php echo $row['cat_nom_cat'];?>" placeholder="introduzca la categoria">
<label for="id usuario">ID usuario</label>
<input type="text" name="usuario_id_usu" value="<?php echo $row['usuario_id_usu'];?>"  placeholder="introduzca el numero de identificacion de usuario">
<label for="tipo de documento">Tipo de Documento</label>
<input type="text" name="usuario_tipo_doc_tipo_doc" value="<?php echo $row['usuario_tipo_doc_tipo_doc'];?>" placeholder="introduzca el tipo de documento">
<label for=""></label>
<input type="submit" value="modificar producto">
</form>
</center>
</form>
</body>
</html>