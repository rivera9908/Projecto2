<!DOCTYPE html>
<html lang="en">
















<head>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="vista/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$archivo = basename($_SERVER['PHP_SELF']); /* captura el nombre del archive abierto */
$c0=""; $c1=""; $c2=""; $c3=""; $c4=""; $c5=""; $c6=""; $c7="";
if ($archivo=="index.php") /* pregunta el nombre del archive y asigna valor “active” si coinciden criterios */
{ $c0="active"; }
if ($archivo=="formulario3.php")
{ $c1="active"; }
if ($archivo=="REGISTRO.PHP")
{ $c2="active"; }
if ($archivo=="Registro2.php")
{ $c3="active"; }
if ($archivo=="MostrarDt.php")
{ $c4="active"; }
if ($archivo=="sesion.php")
{ $c5="active"; }
if ($archivo=="index.html")
{ $c6="active"; }
if ($archivo=="index.html")
{ $c7="active"; }

?>
<div class="col-md-2 column margintop20">
<ul class="nav nav-pills nav-stacked"> 
<li class="<?php echo $c0;?>"><a href="../../index.php"><span class="glyphicon glyphicon-camera"></span>
Home</a></li>

<li class="<?php echo $c1;?>"><a href="VISTA/HTML/REGISTRO.PHP">Ingresar Usuario<span class="glyphicon glyphicon-new-window pull-right"></span> </a></li>

<li class="<?php echo $c2;?>"><a href="VISTA/HTML/calculadora.php">Calculadora<span class="glyphicon glyphicon-hand-left pull-right"></span> </a></li>

<li class="<?php echo $c3;?>"><a href="VISTA/HTML/REGISTRO2.PHP">Eliminar Usuario<span class="glyphicon glyphicon-cog pull-right"></span>
</a></li>
<li class="<?php echo $c4;?>"><a href="vista/html/Mostrardt.php">Consultar Datos<span class="glyphicon glyphicon-briefcase pull-right"></span>
</a></li>

<li class="<?php echo $c5;?>"><a href="vista/html/Sesion.php">Inicio Sesion<span class="glyphicon glyphicon-chevron-right pull-right"></span> </a></li>
</a></li>



////////////////////////////////////////////


<li class="<?php echo $c6;?>"><a href="vista/html/modificar.php">Ingredientes-PDO<span class="glyphicon glyphicon-chevron-right pull-right"></span> </a></li>
</a></li>


<li class="<?php echo $c7;?>"><a href="../../../IMAGENES MOSTRAR PARA PROYECTO APLICADO/imagenes mostrar/index.html">Mostrar Productos<span class="glyphicon glyphicon-chevron-right pull-right"></span> </a></li>
</a></li>














</ul>
</div>
</body>
</html>