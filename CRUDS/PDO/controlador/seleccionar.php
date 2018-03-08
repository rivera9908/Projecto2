<?php

function seleccionar(){
	
if(isset($_GET['cod_prod'])){
$consultas = new consultas();
$cod_prod = $_GET['cod_prod'];
$filas = $consultas->cargarproducto($cod_prod);

foreach ($filas as $fila) {
echo'
<form action = "controlador/modificarproducto.php" method = "post">
<table>
<tr>
<td>nombre:</td>
<td><input type="text" name="nombre" value= "'.$fila['nombre'].'"></td>
</tr>
<tr>
<td>descripcion</td>
<td><textarea rows="10" cols="30" name="descripcion">'.$fila['descripcion'].'</textarea></td>
</tr>
<tr>
<td>categoria</td>
<td><input type="text" name="categoria" value= "'.$fila['categoria'].'"></td>
</tr>
<tr>
<td>fecha</td>
<td><input type="date" name="fecha"value= "'.$fila['fecha'].'"></td>
</tr>
<tr>
<td>precio</td>
<td><input type="text" name="precio"value= "'.$fila['precio'].'"</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="hidden" name="cod_prod" value="'.$cod_prod.'"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="modificar producto"></td>
</tr>
</table>
</form>
';
}
}
}

?>