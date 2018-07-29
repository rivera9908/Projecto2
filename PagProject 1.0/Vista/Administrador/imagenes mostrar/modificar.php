<html>
<head><!DOCTYPE HTML>

<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="../css/stiloingrediente.css"/>
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
<table >
<tr>
<th >Codigo</th>
 <td><input type="text" name="cod_prod"  value="<?php echo $row['cod_prod'];?>" id="imp1"  style="border: 7px;" placeholder="introduzca el codigo"></td>
</tr>

<tr>
<th >Nombre</th>
 <td><input type="text" name="nom_pro"  value="<?php echo $row['nom_pro'];?>" id="imp1"  style="border: 7px;" placeholder="introduzca el nombre"></td>
</tr>

<tr>
<th >Precio</th>
 <td><input type="text" name="prec_pro"  value="<?php echo $row['prec_pro'];?>" id="imp1"  style="border: 7px;"></td>
</tr>

<tr>
<th >Descripcion</th>
<td><textarea type="text" name="desc_pro"  rows="10" cols="30"  value="<?php echo $row['desc_pro'];?>" id="imp1"  style="border: 7px;"></textarea></td>
</tr>

<tr>
<th >Imagen del Producto</th>
 <td><input name="img_pro" type="file" id="imp1"  style="border: 7px;"></td>
</tr>
<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_pro']);?>"/></td><br></br>

<tr>
<th >Estado del Producto</th>
 <td>Activo<input name="estado_pro" value="1"  type="radio" id="imp1"  style="border: 7px;">
 Inactivo<input name="estado_pro" value="0"  type="radio" id="imp1"  style="border: 7px;"></td>
</tr>

<tr>
<th >Fecha</th>
 <td><input name="fecha_ingreso" type="date" value="<?php echo $row['fecha_ingreso'];?>" id="imp1"  style="border: 7px;"></td>
</tr>

<tr>
<th >Categoria</th>
 <td><select name="cat_nom_cat" value="<?php echo $row['cat_nom_cat'];?>">
   <option value="Ensaladas">Ensaladas</option> 
   <option value="Postres">Postres</option> 
   <option value="Jugos Naturales">Jugos Naturales</option> 
   <option value="Jugos Naturales">Malteadas</option>  
</select></td>
</tr>

<tr>
<td colspan="2" align="center" style="padding:20px ; ">
<button type="submit"  style="border: 7px; font-family:Georgia, 'Times New Roman', Times, serif;"class="pure-button pure-button-primary" >Modificar producto</button>
 </td>
</tr>

</form>
</center>
</form>
</body>
</html>