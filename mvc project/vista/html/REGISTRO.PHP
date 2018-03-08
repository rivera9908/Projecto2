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

<?php include_once 'header.php'; ?>

</header>






<div class="col-sm-10 col-md-10"> <!—Columna de 10 espacios para contenido central e imágenes -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">REGISTRO DE USUARIOS</h3>
</div>
<div class="panel-body">
<p>Ingrese los datos del usuario </p>
<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center"> <span><form name="areat" action="../../controlador/controler1.php?registrar" method="post">






<table class="" style="" align="center" width="400">
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Tipo // Documento </td><td>
<select name="tdoc">
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select>


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> ID // Usuario </td><td>
<input class="form-control input-sm" type="text" name="idusu" class="form-control" placeholder="Identificacion Usuario" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> Nombre // Usuario </td><td>
<input class="form-control input-sm" type="text" name="nom_usu" class="form-control" placeholder="Nombre Usuario" required></td></tr>



<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Contraseña // Usuario</td><td>
<input class="form-control input-sm" type="password" name="pass_usu" class="form-control"
placeholder="Contraseña" required></td></tr>





<tr><td style="padding:4px"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="registrar" style="width:400px"
value="REGISTRAR"></td></tr>
<tr><td style="padding:4px"></td></tr>

<tr><?PHP if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'><div class='alert alert-
success'>"."REGISTRO CORRECTO"."</div>";} if(isset($_REQUEST['dato1'])){ echo "<td colspan='2' align='center'><div

class='alert alert-warning'>"."USUARIO YA SE ENCUENTRA EN EL SISTEMA"."</div>"; }?></td></tr>
</table>
</form></span></div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</body>
</html>