<!DOCTYPE html>
<html lang="en">
<head>
<title>FRUTERIA EL BOSQUE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="vista/bootstrap/js/bootstrap.min.js"></script>
</head>

<?php
//if(!isset($_SESSION["session"])) // Verifica si la variable de sesión creada esta activa si no la inicializa
if(!isset($_SESSION["session"])) // Verifica si la variable de sesión creada esta activa si no la inicializa
{
session_start();
}
$archivo = basename($_SERVER['PHP_SELF']); //Captura nombre archivo actual para definir ruta

if ($archivo=="index.php")
{

$ruta="vista/html/";
//$ruta="/html/";

}

elseif(!isset($archivo))
{
$archivo="index.php";
$ruta="vista/html/";
}
//elseif($archivo=="")
//{
//$archivo="index.php";
//$ruta="vista/html/";	
//}

//{
//$ruta="";
//}

{
$ruta="vista/html/";
}

?>


<body>
<div class="container">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">Contactenos</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="../../index.PHP">Inicio</a></li>
<li><a href="#">Promociones</a></li>
<li><a href="#">Historia</a></li>
</ul>
	
    
    <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../controlador/salir.php';} else {
echo $ruta.'sesion.php';}?>"><span class="glyphicon glyphicon-log-out"></span> <?php
if(isset($_SESSION["session"])){ echo "Salir";} else{echo "Logueo";}?></a></li>

<li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../controlador/salir.php';} else {
echo $ruta.'registro.php';}?>"><span class="glyphicon glyphicon-user"></span> <?php
if(isset($_SESSION["session"])){ echo $_SESSION["session"];} else{echo "Registro";}?></a></li>
    
    
    
    
  <!-- Contenedor ejercicio
<ul class="nav navbar-nav navbar-right">
<li class="pull-right"><a href="VISTA/HTML/REGISTRO.PHP"> <span class="glyphicon glyphicon-user"></span> Registro</a></li>
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>-->
</div>
</nav>
</div>
</body>
</html>