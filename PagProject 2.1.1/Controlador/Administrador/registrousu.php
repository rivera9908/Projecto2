<?php
session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
  header("location: ../../Vista/index.php?Noseccion");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Agregar Producto</title>
        <link rel="stylesheet" href="../../Vista/Administrador/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style type="text/css">
        body{
            background-image: url(../../Vista/Administrador/img/fondo.jpg);
        }
        #boton{
      background-color: red;
      border-style: none;
      border-radius: 5px 5px;
      font-size: 15px;
      width: 100px;
      height: 31px;

    }
        
    </style>
    </head>
</header>
<body>
<center>
<h1 style=#fff><b>Agregar Usuarios</b></h1>
</center>


<form name="areat" action="proceso.php" method="post" style="margin: auto; max-width: 55%;">
<table class="table table-bordered" id="dynamic_field"  >
<tr><td>Tipo // Documento</td><td>
<select name="Tipo_doc_Tipo_doc">
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select></td></tr>

<tr><td>N° identificacion</td><td>
<input class="form-control name_list" type="text" name="Id_usu"  placeholder="N° identificacion" required></td></tr>

<tr><td>Nombre // Usuario</td><td>
<input class="form-control name_list" type="text" name="Nom_usu" placeholder="Nombre Usuario" required></td></tr>


<tr><td>Contraseña</td><td>
<input class="form-control name_list" type="password" name="Pass_usu" 
placeholder="Contraseña" required></td></tr>


<tr><td>Rol</td><td>
<select name="Rol_nom_rol">
   <option value="Cliente">Cliente</option> 
   <option value="Empleado">Empleado</option> 
   <option value="Administrador">Administrador</option> 
</select></td></tr>

<tr><td>Tipo // Telefono</td><td>
<select name="Tipo_telefono">
   <option value="Celular">Celular</option> 
   <option value="Hogar">Hogar</option> 
   <option value="Trabajo">Trabajo</option> 
</select></td></tr>

<tr><td>N° Telefono</td><td>
<input class="form-control name_list" type="text" name="Num_tel" placeholder="N° Telefono" required></td></tr>

<tr><td>Correo</td><td>
<input class="form-control name_list" type="email"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" name="Correo"  placeholder="Correo Electronico" required></td></tr>
</table>
<input type="submit" name="registrar" class="btn btn-success" style="color:white" value="Registrar"> <a href="../../Vista/Administrador/mostrarusu.php"><input type="button" value="Cancelar" id="boton" style="color:white">

<?PHP 
if(isset($_REQUEST['dato']))
{ echo "<td colspan='2' align='center'><div class='alert alert-
success'>"."REGISTRO CORRECTO"."</div>";
header("location:../index.php?succes");


} 
if(isset($_REQUEST['dato1']))
{ echo "<td colspan='2' align='center'><div

class='alert alert-warning'>"."<HR>ALGUNOS DATOS QUE ESTA INGRESANDO <BR>YA SE ENCUENTRA EN EL SISTEMA,<br>PORFAVOR INTENTELO DE NUEVO"."</div>";

 }?>

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