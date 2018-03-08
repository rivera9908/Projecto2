<html>
<head>
<title></title>
</head>
<body>
<center>
<table border="2">
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
<th>id usuario</th>
<th>tipo de documento</th>
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
<td><?php echo $row['usuario_id_usu'];?></td> 
<td><?php echo $row['usuario_tipo_doc_tipo_doc'];?></td> 
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