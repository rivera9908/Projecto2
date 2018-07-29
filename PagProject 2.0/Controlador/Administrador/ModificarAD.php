<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
	header("location: ../../Vista/index.php?Noseccion");
	}

?>
<html>
<head>
        <meta charset="utf-8">
        <title>Agregar Producto</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style type="text/css">
        body{
            background-image: url(../../Vista/Administrador/Img/fondo.jpg);
        }
        
    </style>
    </head>
<?php
require("../../Modelo/conexion.php"); 

$Id_usu= $_REQUEST['Id_usu'];

$query = "SELECT * FROM usuario where Id_usu= '$Id_usu'";
$resultado= mysqli_query($con, $query);
$row = $resultado->fetch_assoc();
?>

<center><br/><br/>
<form action="proceso_modificarAD.php?Id_usu<?php echo $row['Id_usu'];?>" method="post" enctype="multipart/form-data" style="margin: auto; max-width: 55%;">
<table class="table table-bordered" id="dynamic_field">
<tr><td>Tipo // Documento</td><td>
<select name="Tipo_doc_Tipo_doc" value="<?php echo $row['Tipo_doc_Tipo_doc'];?>" placeholder="introduzca el codigo">
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select></td></tr>


<tr><td>ID // Usuario</td><td>
<input class="form-control name_list" type="text" name="Id_usu"  placeholder="Identificacion Usuario" required
value="<?php echo $row['Id_usu'];?>" placeholder="introduzca el nombre"></td></tr>


<tr><td>Nombre // Usuario</td><td>
<input class="form-control name_list" type="text" name="Nom_usu"  placeholder="Nombre Usuario" required
value="<?php echo $row['Nom_usu'];?>" placeholder="introduzca el precio"></td></tr>

<tr><td>Contraseña</td><td>
<input class="form-control name_list" type="text" name="Pass_usu"  value="<?php echo $row['Pass_usu'];?>"
placeholder="Contraseña" required></td></tr>

<tr><td> Estado usuario </td><td>
ACTIVO<input type="radio" name="Estado_usu" value="1" >
INACTIVO<input type="radio" name="Estado_usu" value="0" >
</td></tr>

<tr><td>Tipo // Telefono</td><td>
<select name="Tipo_telefono" value="<?php echo $row['Tipo_telefono'];?>">
   <option value="Celular">Celular</option> 
   <option value="Hogar">Hogar</option> 
   <option value="Trabajo">Trabajo</option> 
</select></td></tr>

<tr><td>N° Telefono</td><td>
<input class="form-control name_list" type="text" name="Num_tel"  value="<?php echo $row['Num_tel'];?>"placeholder="N° Telefono" required></td></tr>

<tr><td>Correo</td><td>
<input class="form-control name_list" type="text" name="Correo" class="form-control" value="<?php echo $row['Correo'];?>" placeholder="Correo Electronico" required></td></tr>

</table>
<input type="submit" name="registrar" class="btn btn-success" style="color:white"
value="Modificar"><button class="btn btn-danger"><a href="../../Vista/Administrador/mostrarusu.php" style="color:white">Cancelar</a></button></br>


</form>
</center>
</form>
</body>
</html>