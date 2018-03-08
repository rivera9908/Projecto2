<?php

require_once ('modelo/class.conexion.php');
require_once ('modelo/class.consultas.php');
require_once ('controlador/cargar.php');
?>

<html>
<head>
<title></title>
</head>
<body>
<h1>Mis productos</h1>
<div>
<form method="get">
<input type="text" name="buscar">
<input type="submit" value="buscar">
</form>
</div>
<?php 

if(isset($_GET['buscar'])){
	buscar($_GET['buscar']); 
	}else{
		cargar();
	}
		
?>
<div><a href='insertar.html'>Nuevo producto</a></div>
</body>
</html>
