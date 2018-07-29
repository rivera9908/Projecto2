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

<h3 class="panel-title">REGISTRO DE USUARIOS</h3>
</div>

<div class="alert alert-success" align="justify" >
<div class="row" aria-expanded="true" >
<div class="col-md-3" align="center"> <span><form name="areat" action="proceso.php" method="post">

<table class="table" align="center" >
<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif; border-radius:5px; padding:10px 10px;">Tipo // Documento </td><td>
<select name="Tipo_doc_tipo_doc">
   <option value="TI">TI</option> 
   <option value="CC">CC</option> 
   <option value="CE">CE</option> 
</select>


<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"> ID // Usuario </td><td>
<input class="form-control input-sm" type="text" name="idusu" class="form-control" placeholder="Identificacion Usuario" required></td></tr>

<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;"> Nombre // Usuario </td><td>
<input class="form-control input-sm" type="text" name="Nom_usu" class="form-control" placeholder="Nombre Usuario" required></td></tr>



<tr><td align="center" style="font-family:Tahoma, Geneva, sans-serif;  border-radius:5px;">Contraseña // Usuario</td><td>
<input class="form-control input-sm" type="password" name="Pass_usu" class="form-control"
placeholder="Contraseña" required></td></tr>

<tr><td align="center" colspan="2" style=" padding:10px 10px;"><input type="submit" name="registrar" style="width:400px"
value="REGISTRAR"></td></tr>
<tr><td align="center" colspan="2" style=" padding:10px 10px;"><p>¿Desea volver al inicio?</p><a href="../index.php">Inicio</a></td></tr>

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
</body>
</html>