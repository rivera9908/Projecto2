<?php
session_start();
require("../../Modelo/conexion.php");

?>  

<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro de Usuarios</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="../../Vista/Usuario/css/stiloregistro.css" rel="stylesheet" type="text/css">
<link href="../../Vista/css/main.css" rel="stylesheet" type="text/css">  
  <style>
    #boton:hover {
background: rgba(0,0,0,0);
color: white;
box-shadow: inset 0 0 0 3px black;
}
    
  </style>
</head>
</header>
<body>

    


<div class="container" style=" background-color: rgba(176, 179, 162, 0.45)">

<h3 class="panel-title" style="color:white">REGISTRO DE USUARIOS</h3>
</div>
<div class="responsive">
<div class="alert alert-success" align="justify" >
<div class="row" aria-expanded="true" >
<div class="col-md-3" align="center"> <span><form name="areat" action="proceso.php" method="post">
<br><br>
<table class="table" align="center" style=" background-color: rgba(176, 179, 162, 0.45)">
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;"><b style="color:white"> Tipo de Documento</b></td><td>
<select name="Tipo_doc_Tipo_doc">
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b style="color:white"> N° Identificacion</b></td><td>
<input class="form-control input-sm" type="text" name="Id_usu" min="1" max="9" class="form-control" placeholder="ej: 1045786530"  required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b style="color:white">  Nombre // Usuario </b></td><td>
<input class="form-control input-sm" type="text" name="Nom_usu" class="form-control" placeholder="ej: carlos123" required></td></tr>


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b style="color:white"> Contraseña</b></td><td>
<input class="form-control input-sm" type="password" name="Pass_usu" class="form-control"
placeholder="ej: nombre primera mascota" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;"><b  style="color:white"> Tipo de Telefono </b></td><td>
<select name="Tipo_telefono">
   <option value="Celular">Celular</option> 
   <option value="Hogar">Hogar</option> 
   <option value="Trabajo">Trabajo</option> 
</select>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b style="color:white">  N° Telefono </b></td><td>
<input class="form-control input-sm" type="text" name="Num_tel" class="form-control" placeholder="ej: 4017657865" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"><b style="color:white">  Correo</b> </td><td>
<input class="form-control input-sm" type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="Correo" class="form-control" placeholder="ejemplo98@gmail.com" required></td></tr>

<tr><td align="center" colspan="2" style=" padding:10px 10px;"><input type="submit" name="registrar" style="width:400px"
value="REGISTRAR" id="boton"></td></tr>
  <tr><td align="center" colspan="2" ><a href="../../index.php" style="color:white"><b>Volver</b></a></td></tr>

<tr><?PHP 
 
if(isset($_REQUEST['dato1']))
{ echo "<td colspan='2' align='center'><div

class='alert alert-warning'>"."<HR>ALGUNOS DATOS QUE ESTA INGRESANDO <BR>YA SE ENCUENTRA EN EL SISTEMA,<br>PORFAVOR INTENTELO DE NUEVO"."</div>";

 }?>
</td></tr>
</table>
</div>
</div>
</div>
</div>
</form>
</body>
</html>