<?php

function cargar(){
$consultas = new consultas();
$filas = $consultas->cargarproductos();


echo "<table>
<tr>
<th>cod_prod</th>
<th>nom_pro</th>
<th>prec_pro</th>
<th>desc_pro</th>
<th>img_pro</th>
<th>estado_pro</th>
<th>fecha_ingreso</th>
<th>cat_nom_cat</th>
<th>usuario_id_usu</th>
<th>usuario_tipo_tipo_doc</th>
</tr>";

foreach ($filas as $fila) {
echo "<tr>";
echo "<td>".$fila['cod_prod']."</td>";
echo "<td>".$fila['nom_pro']."</td>";
echo "<td>".$fila['prec_pro']."</td>";
echo "<td>".$fila['desc_pro']."</td>";
echo "<td>".$fila['img_pro']."</td>";
echo "<td>".$fila['estado_pro']."</td>";
echo "<td>".$fila['fecha_ingreso']."</td>";
echo "<td>".$fila['cat_nom_cat']."</td>";
echo "<td>".$fila['usuario_id_usu']."</td>";
echo "<td>".$fila['usuario_tipo_tipo_doc']."</td>";
echo "<td><a href='controlador/eliminar.php?cod_prod=".$fila['cod_prod']."'>eliminar</td>";
echo "<td><a href='modificar.php?cod_prod=".$fila['cod_prod']."'>modificar</td>";
echo "</tr>";
}
echo"</table>";
}
function buscar($nombre){
$consultas = new consultas();
$filas = $consultas->buscarproductos($nombre);


echo "<table>
<tr>
<th>cod_prod</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>categoria</th>
<th>fecha</th>
<th>precio</th>
</tr>";

if(isset($filas)){
foreach ($filas as $fila) {
echo "<tr>";
echo "<td>".$fila['cod_prod']."</td>";
echo "<td>".$fila['nom_pro']."</td>";
echo "<td>".$fila['prec_pro']."</td>";
echo "<td>".$fila['desc_pro']."</td>";
echo "<td>".$fila['img_pro']."</td>";
echo "<td>".$fila['estado_pro']."</td>";
echo "<td>".$fila['fecha_ingreso']."</td>";
echo "<td>".$fila['cat_nom_cat']."</td>";
echo "<td>".$fila['usuario_id_usu']."</td>";
echo "<td>".$fila['usuario_tipo_tipo_doc']."</td>";
echo "<td><a href='controlador/eliminar.php?cod_prod=".$fila['cod_prod']."'>eliminar</td>";
echo "<td><a href='modificar.php?cod_prod=".$fila['cod_prod']."'>modificar</td>";
echo "</tr>";
}
}
echo"</table>";
}
?>