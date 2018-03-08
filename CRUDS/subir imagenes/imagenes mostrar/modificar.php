<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="tabla.css"/>
</head>
<body>

<?php
include ("conexion.php");

$cod_prod= $_REQUEST['cod_prod'];

$query = "SELECT * FROM producto where cod_prod= '$cod_prod'";
$resultado= $conexion->query($query);
$row = $resultado->fetch_assoc();
?>

<center><br/><br/><br/>
<form action="proceso_modificar.php?cod_prod<?php echo $row['cod_prod'];?>" method="post" enctype="multipart/form-data">
<table class="tabla">
<tr>
<td>codigo</td>
<td><input type="text" required name="cod_prod" value="<?php echo $row['cod_prod'];?>"></td>
</tr>
<tr>
<td>nombre:</td>
<td><input type="text" name="nom_pro" value="<?php echo $row['nom_pro'];?>"></td>
</tr>
<tr>
<td>precio</td>
<td><input type="text" name="prec_pro" value="<?php echo $row['prec_pro'];?>"></td>
</tr>
<tr>
<td>descripcion</td><br/>
<td><textarea rows="10" cols="30" name="desc_pro" value="<?php echo $row['desc_pro'];?>"></textarea></td>
<td>imagen del producto</td><br/>
<td><input type="file" required name="img_pro"/><br/></td>
<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_pro']);?>"/></td><br>
</tr>
<tr>
<td>estado del producto</td><br/>
<td>ACTIVO<input type="radio" name="estado_pro" value="1" ></td>
<td>INACTIVO<input type="radio" name="estado_pro" value="0"></td>
</tr>
<tr>
<td>fecha</td>
<td><input type="date" name="fecha_ingreso" value="<?php echo $row['fecha_ingreso'];?>"></td>
</tr>
<tr>
<td>categoria</td>
<td><input type="text" name="cat_nom_cat" value="<?php echo $row['cat_nom_cat'];?>"></td>
</tr>
<tr>
<td>id usuario</td>
<td><input type="text" name="usuario_id_usu" value="<?php echo $row['usuario_id_usu'];?>"></td>
</tr>
<tr>
<td>tipo de documento</td>
<td><input type="text" name="usuario_tipo_doc_tipo_doc" value="<?php echo $row['usuario_tipo_doc_tipo_doc'];?>"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="modificar producto"></td>
</tr>
</table>
</center>
</form>
</body>
</html>