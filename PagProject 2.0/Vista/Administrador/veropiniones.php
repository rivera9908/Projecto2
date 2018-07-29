<?php 


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
    header("location: ../index.php?Noseccion");
    }


//Conexión a la BD 
require("../../Modelo/conexion.php");
  
//Consulta la tabla: 

  
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
            background-image: url(../../Vista/Administrador/Img/fondo.jpg);
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
            <th colspan="8"><h1 align="center">Opiniones de los clientes</h1></th>
        <tr>
<tr>
<th colspan="12"><button class="btn btn-info"><a href="inicio_administrador.php" style="color: white">Volver a la pagina principal</a></button>
    <tr> 
        <td><b>Id</b></td> 
        <td><b>Usuario</b></td>
        <td><b>Fecha</b></td>
        <td><b>Mensaje</b></td>
        

        <th colspan="2">operaciones</th> 
   </tr> 
<?php 
$consulta=("SELECT * FROM comentario");
$resultado=mysqli_query($con, $consulta);
while($usuario = mysqli_fetch_array($resultado)){ ?> 
    <tr> 
        <td><?php echo $usuario['id']; ?></td> 
        <td><?php echo $usuario['usuario']; ?></td> 
        <td><?php echo $usuario['fecha']; ?></td>
        <td><?php echo $usuario['mensaje']; ?></td> 
        <th><button class="btn btn-success"><a href="../../Controlador/Administrador/eliminaropinion.php?id=<?php echo $usuario['id'];?>" style="color:white">Eliminar</a></button></th> 
        
        
    </tr> 
<?php } ?> 
</table>
</center>
</body>
<html>