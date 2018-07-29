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
 <link href="../../Vista/Usuario/css/stiloregistro.css" rel="stylesheet" type="text/css">
<link href="../../Vista/css/main.css" rel="stylesheet" type="text/css">


    <meta charset="utf-8">
    <title>Fruteria del bosque</title>
 
  
</head>
</header>
<body>

    


<div class="container" style=" background-color: rgba(200, 203, 199, 0.5)">

<h3 class="panel-title">REGISTRO DE USUARIOS</h3>
</div>
<div class="responsive">
<div class="alert alert-success" align="justify" >
<div class="row" aria-expanded="true" >
<div class="col-md-3" align="center"> <span><form name="areat" action="proceso.php" method="post">

<table class="table" align="center" style=" background-color: rgba(200, 203, 199, 0.5)">
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;"><b> Tipo // Documento</b></td><td>
<select name="Tipo_doc_Tipo_doc">
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b> N° identificacion</b></td><td>
<input class="form-control input-sm" type="text" name="Id_usu" class="form-control" placeholder="N° identificacion" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b>  Nombre // Usuario </b></td><td>
<input class="form-control input-sm" type="text" name="Nom_usu" class="form-control" placeholder="Nombre Usuario" required></td></tr>


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b> Contraseña // Usuario</b></td><td>
<input class="form-control input-sm" type="password" name="Pass_usu" class="form-control"
placeholder="Contraseña" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;"><b> Tipo // Telefono </b></td><td>
<select name="Tipo_telefono">
   <option value="Celular">Celular</option> 
   <option value="Hogar">Hogar</option> 
   <option value="Trabajo">Trabajo</option> 
</select>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b>  N° Telefono </b></td><td>
<input class="form-control input-sm" type="text" name="Num_tel" class="form-control" placeholder="N° Telefono" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b>  Correo</b> </td><td>
<input class="form-control input-sm" type="text" name="Correo" class="form-control" placeholder="Correo Electronico" required></td></tr>

<tr><td align="center" colspan="2" style=" padding:10px 10px;"><input type="submit" name="registrar" style="width:400px"
value="REGISTRAR"></td></tr>
<tr><td align="center" colspan="2" style=" padding:10px 10px;"><p><b>¿Desea volver al inicio?</b></p>
	<a href="../../Vista/index.php"><font color="white">Inicio</font></a></td></tr>

<tr><?PHP 
if(isset($_REQUEST['dato']))
{ echo "<td colspan='2' align='center'><div class='alert alert-
success'>"."REGISTRO CORRECTO"."</div>";
header("location:../index.php?succes");


} 
if(isset($_REQUEST['dato1']))
{ echo "<td colspan='2' align='center'><div

class='alert alert-warning'>"."USUARIO YA SE ENCUENTRA EN EL SISTEMA<br>PORFAVOR INTENTELO DE NUEVO"."</div>";



if(isset($_REQUEST['Noseccion']))
{ echo "<td colspan='2' align='center'><div

class='alert alert-warning'>"."SECCION NO INICIADA<br>REGISTRESE PORFAVOR"."</div>"; 



}
 }?></td></tr>
</table>
</form></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>