<?php


session_start();
require("../../Modelo/conexion.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="css/stiloregistro.css" rel="stylesheet" type="text/css">



    <meta charset="utf-8">
    <title>Fruteria del bosque</title>
 
  
</head>
</header>
<body>

    


<div class="container">

<h3 class="panel-title">RECUPERACION DE CONTRASEÑA</h3>
</div>

<div class="alert alert-success" align="justify">
<div class="row" aria-expanded="true">
<div class="col-md-3" align="center"> <span><form name="areat" action="../../Controlador/Usuario/recuperarPASS.php" method="post">

<table class="table" align="center">
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;">Tipo // Documento </td><td>
<select name="Tipo_doc_tipo_doc">
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select>


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"> N° identificacion</td><td>
<input class="form-control input-sm" type="text" name="Id_usu" class="form-control" placeholder="N° identificacion" required></td></tr>

<tr><td style="padding:4px"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="recuperar"  style="width:400px"
value="recuperar"></td></tr>
</form>
</table>
</body>
	</html>