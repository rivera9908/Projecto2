<html>
<head><!DOCTYPE HTML>

<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="css/stilo2.css"/>
</head>
<body background="img/ejemplo.jpg">
</head>">
</head>
<?php
$conexion = new mysqli("localhost","root","","fruteria_poblada"); 

$Id_usu= $_REQUEST['Id_usu'];

$query = "SELECT * FROM usuario where Id_usu= '$Id_usu'";
$resultado= $conexion->query($query);
$row = $resultado->fetch_assoc();
?>

<center><br/><br/>
<form action="proceso_modificarusu.php?Id_usu<?php echo $row['Id_usu'];?>" method="post" enctype="multipart/form-data">
<form>
<table class="table" align="center" >
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Tipo // Documento </td><td>
<select name="Tipo_doc_tipo_doc" value="<?php echo $row['Tipo_doc_tipo_doc'];?>" placeholder="introduzca el codigo">>
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif">Rol </td><td>
<select name="Rol_nom_rol" value="<?php echo $row['Rol_nom_rol'];?>" placeholder="introduzca el codigo">>
   <option value="Cliente">Cliente</option> 
   <option value="Empleado">Empleado</option> 
   <option value="Administrador">Administrador</option> 
</select>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> ID // Usuario </td><td>
<input class="form-control input-sm" type="text" name="Id_usu" class="form-control" placeholder="Identificacion Usuario" required
value="<?php echo $row['Id_usu'];?>" placeholder="introduzca el nombre"></td></tr>


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> Nombre // Usuario </td><td>
<input class="form-control input-sm" type="text" name="Nom_usu" class="form-control" placeholder="Nombre Usuario" required
value="<?php echo $row['Nom_usu'];?>" placeholder="introduzca el precio"></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif"> Estado usuario </td><td>
ACTIVO<input type="radio" name="Estado_usu" value="1">
INACTIVO<input type="radio" name="Estado_usu" value="0">


<tr><td align="center" colspan="2"><input type="submit" name="registrar" style="width:400px"
value="modificar usuario"></td></tr>

<tr><td align="center" colspan="2" style="color:#fff "><p></p><a href="mostrarusu.php">volver</a></td></tr>

</form>
</center>
</form>
</body>
</html>