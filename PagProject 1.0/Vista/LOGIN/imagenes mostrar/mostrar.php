<html>
<head><!DOCTYPE HTML>

<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="tabla.css"/>
</head>
<body background="img/ejemplo.jpg">
</head>

<center><br/><br/><br/>
<table border="2" bgcolor=#fff>
<thead>
<tr>
<th colspan="12"><a href="index.html">nuevo</a></th>
</tr>
<tr>
<th>codigo</th>
<th>nombre</th>
<th>precio</th>
<th>descripcion</th>
<th>imagen</th>
<th>estado</th>
<th>fecha</th>
<th>categoria</th>
<th colspan="2">operaciones</th>
</tr>

</thead>
<tbody>
<?php
include ("conexion.php");

$query = "SELECT * FROM producto";
$resultado= $conexion->query($query);
while($row = $resultado->fetch_assoc()){
?>
<tr>
<td><?php echo $row['cod_prod'];?></td> 
<td><?php echo $row['nom_pro'];?></td> 
<td><?php echo $row['prec_pro'];?></td> 
<td><?php echo $row['desc_pro'];?></td> 
<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['img_pro']);?>"/></td> 
<td><?php echo $row['estado_pro'];?></td> 
<td><?php echo $row['fecha_ingreso'];?></td> 
<td><?php echo $row['cat_nom_cat'];?></td> 
<th><a href="modificar.php?cod_prod=<?php echo $row['cod_prod'];?>">Modificar</a></th> 
<th><a href="eliminar.php?cod_prod=<?php echo $row['cod_prod'];?>">eliminar</a></th> 
</tr>
<?php
}
?>

</tbody>
</table>
</center>
</body>
</html>