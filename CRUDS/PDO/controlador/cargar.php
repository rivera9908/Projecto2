<?php

function cargar(){
$consultas = new consultas();
$filas = $consultas->cargarproductos();


echo "<table>
<tr>
<th>cod_prod</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>categoria</th>
<th>fecha</th>
<th>precio</th>
</tr>";

foreach ($filas as $fila) {
echo "<tr>";
echo "<td>".$fila['cod_prod']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['descripcion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['fecha']."</td>";
echo "<td>".$fila['precio']."</td>";
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
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['descripcion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['fecha']."</td>";
echo "<td>".$fila['precio']."</td>";
echo "<td><a href='controlador/eliminar.php?cod_prod=".$fila['cod_prod']."'>eliminar</td>";
echo "<td><a href='modificar.php?cod_prod=".$fila['cod_prod']."'>modificar</td>";
echo "</tr>";
}
}
echo"</table>";
}
?>