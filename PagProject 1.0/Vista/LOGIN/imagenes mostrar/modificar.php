<html>
<head><!DOCTYPE HTML>

<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
</head>
<body background="img/ejemplo.jpg">
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
<label for="codigo" style="color:#fff"><b>codigo</b><b></label>
<input type="text" name="cod_prod" value="<?php echo $row['cod_prod'];?>" placeholder="introduzca el codigo">
<label for="nombre" style="color:#fff"><b>Nombre</b></label>
<input type="text" name="nom_pro" value="<?php echo $row['nom_pro'];?>" placeholder="introduzca el nombre">
<label for="precio" style="color:#fff"><b>Precio</b></label>
<input type="text" name="prec_pro" value="<?php echo $row['prec_pro'];?>" placeholder="introduzca el precio">
<label for="descripcion" style="color:#fff"><b>Descripcion</b></label>
<textarea rows="10" cols="30" name="desc_pro" value="<?php echo $row['desc_pro'];?>" placeholder="introduzca la descripcion"></textarea>
<label for="imagen del producto" style="color:#fff"><b>Imagen del Producto</b></label>
<input type="file" required name="img_pro"/>
<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_pro']);?>"/></td><br></br>
<label for="Estado del Producto" style="color:#fff"><b>Estado del Producto</b></label>
<label for="ACTIVO" style="color:#fff">ACTIVO<input type="radio" name="estado_pro" value="1">
<label for="INACTIVO" style="color:#fff">INACTIVO<input type="radio" name="estado_pro" value="0">
<label for="fecha" style="color:#fff"><b>Fecha</b></label>
<input type="date" name="fecha_ingreso" value="<?php echo $row['fecha_ingreso'];?>" placeholder="introduzca la fecha">
<label for="categoria" style="color:#fff"><b>Categoria</b></label>
<input type="text" name="cat_nom_cat" value="<?php echo $row['cat_nom_cat'];?>" placeholder="introduzca la categoria">
<input type="submit" value="modificar producto">
</form>
</center>
</form>
</body>
</html>