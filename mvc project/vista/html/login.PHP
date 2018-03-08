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
<div class="container">
<header>

<?php include_once 'vista/html/header.php'; ?>

</header>
<?php include_once 'vista/html/menula.php'; ?>





<div class="col-sm-10 col-md-10"> <!—Columna de 10 espacios para contenido central e imágenes -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">EJERCICIOS DE PRACTICA PHP</h3>
</div>
<div class="panel-body">
<p>Aplicación de ejercicios de uso de Variables, estructuras condicionales, repetitivas con lenguaje PHP
combinando con Bootstrap </p>
<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center"> <span>
<div class="row">
<div class="col-sm-12 col-md-12">
<form name="areat" action="../../controlador/logueo.php" method="post">
<table class="" style="" align="center">
<tr><td style="color:#800000; font-family:Tahoma, Geneva, sans-serif" align="center">INICIO DE SESION</td></tr>
<tr><td style="padding:5px"></td></tr><tr><td><div class="input-group input-group-sm">
<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
<input type="text" name="usu" class="form-control" placeholder="Correo electrónico" >
</div></td></tr>
<tr><td style="padding:2px"></td></tr>
<tr><td><div class="input-group input-group-sm">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
<input type="password" name="pass" class="form-control" placeholder="Contraseña" >
</div></td></tr>
<tr><td style="padding:4px"></td></tr>
<tr><td align="center"><input type="submit" name="enviar" class="" width="300px"></td></td>
<tr><td style="padding:4px"></td></tr>
<tr><td style="color:#F00"><?php if(isset($_REQUEST['error'])) { echo "Usuario o contraseña
incorrecta";}?></td></tr>
</table>
</form>


</span></div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
</html>