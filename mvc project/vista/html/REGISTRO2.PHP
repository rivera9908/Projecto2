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
<h3 class="panel-title">Eliminación De Usuarios</h3>
</div>
<div class="panel-body">
<p> </p>
<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center"> <span><form name="areat" action="../../controlador/controler1.php?Eliminar" method="post">


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> ID // Usuario </td><td>
<input class="form-control input-sm" type="text" name="idusu" class="form-control" placeholder="Identificacion Usuario" required></td></tr>

<tr><td><input type="submit" name="hhh" style="width:400px"
value="Eliminar"></td><td>

<tr><?PHP if(isset($_REQUEST['dato'])){ echo "<td colspan='2' align='center'>"."Eliminado Correctamente"."</div>";} if(isset($_REQUEST['dato1'])){ echo "<td colspan='2' align='center'><div

class='alert alert-warning'>"."USUARIO No se pudo Borrar"."</div>"; }?></td></tr>


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