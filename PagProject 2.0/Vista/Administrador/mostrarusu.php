<?php 


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
    header("location: ../index.php?Noseccion");
    }


//Conexión a la BD 
  require("../../Modelo/conexion.php");
//Crear la tabla de HTML en la que se muestran los datos: 
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
            background-image: url(Img/fondo.jpg);
        }
        
    </style>
    </head>
<center>

</center>
<body background="img/ejemplo.jpg">
<center>
<table class="table table-bordered" style="max-width: 70%; margin: auto;"> 
    <thead>
        <tr>
            <th colspan="8"><h1 align="center">Usuarios Registrados</h1></th>
        <tr>
<tr>
<th colspan="12" ><button class="btn btn-info"><a href="inicio_administrador.php" style="color: white">Volver a la pagina principal</a></button>
<button class="btn btn-info"><a href="../../Controlador/Administrador/registrousu.php" style="color: white">Ingresar Nuevo Usuario</a></th></button>

</tr>
    <tr> 
        <td ><b>Id</b></td> 
        <td ><b>Nombre</b></td>
        <td ><b>Tipo Documento</b></td>
        <td ><b>Rol</b></td>
        <td ><b>Estado del usuario</b></td>
		<td ><b>Correo</b></td>

        <th colspan="6" >operaciones</th> 
   </tr> 
<?php 
$consulta=("SELECT * FROM usuario WHERE Rol_nom_rol='Cliente' ");
$resultado=mysqli_query($con, $consulta);
while($usuario = mysqli_fetch_array($resultado)){ ?> 
    
        <td ><?php echo $usuario['Id_usu']; ?></td></b> 
        <td ><?php echo $usuario['Nom_usu']; ?></td></b> 
        <td ><?php echo $usuario['Tipo_doc_Tipo_doc']; ?></td></b> 
        <td ><?php echo $usuario['Rol_nom_rol'];  ?></td></b>  
        <td ><?php echo $usuario['Estado_usu']; ?></td></b> 
		<td ><?php echo $usuario['Correo']; ?></td></b> 
        <th colspan="3" ><button class="btn btn-success" ><a href="../../Controlador/Administrador/eliminarusu.php?Id_usu=<?php echo $usuario['Id_usu'];?>" style="color:white">Eliminar</a></button></th>  
        <th colspan="3" ><button class="btn btn-success"><a href="../../Controlador/Administrador/modificarusu.php?Id_usu=<?php echo $usuario['Id_usu'];?>" style="color:white">Modificar</a></button></th> 
        
    </tr> 
  
<?php } ?>

<?php 
$consulta=("SELECT * FROM usuario WHERE Rol_nom_rol='Administrador' ");
$resultado=mysqli_query($con, $consulta);
while($usuario = mysqli_fetch_array($resultado)){  
?>
<td > <?php echo $usuario['Id_usu']; ?></td></b> 
        <td ><?php echo $usuario['Nom_usu']; ?></td></b> 
        <td ><?php echo $usuario['Tipo_doc_Tipo_doc']; ?></td></b> 
        <td ><?php echo $usuario['Rol_nom_rol'];  ?></td></b>  
        <td ><?php echo $usuario['Estado_usu']; ?></td></b> 
        <td ><?php echo $usuario['Correo']; ?></td></b> 
        <th colspan="6" ><button class="btn btn-success"><a href="../../Controlador/Administrador/ModificarAD.php?Id_usu=<?php echo $usuario['Id_usu'];?>" style="color:white">Modificar</a></button></th> 
        </tr> 
        
 <?php }?>   
 <?php 
$consulta=("SELECT * FROM usuario WHERE Rol_nom_rol='Empleado' ");
$resultado=mysqli_query($con, $consulta);
while($usuario = mysqli_fetch_array($resultado)){ 
?>
<td > <?php echo $usuario['Id_usu']; ?></td></b> 
        <td ><?php echo $usuario['Nom_usu']; ?></td></b>  
        <td ><?php echo $usuario['Tipo_doc_Tipo_doc']; ?></td></b> 
        <td ><?php echo $usuario['Rol_nom_rol'];  ?></td></b> 
        <td ><?php echo $usuario['Estado_usu']; ?></td></b> 
        <td ><?php echo $usuario['Correo']; ?></td></b> 
        <th colspan="3" ><button class="btn btn-success"><a href="../../Controlador/Administrador/modificarusu.php?Id_usu=<?php echo $usuario['Id_usu'];?>" style="color:white">Modificar</a></button></th>  
        <th colspan="6" ><button class="btn btn-success"><a href="../../Controlador/Administrador/eliminarusu.php?Id_usu=<?php echo $usuario['Id_usu'];?>" style="color:white" >Eliminar</a></button></th>  
		</tr> 
 <?php }?>   
</table>
</center>
</body>
</html>