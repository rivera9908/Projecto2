<?php 


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
    header("location: ../../index.php?Noseccion");
    }


//Conexión a la BD 

  
//Consulta la tabla: 

//Crear la tabla de HTML en la que se muestran los datos: 
?> 
<html>
<head>
        <meta charset="utf-8">
        <title>Lista de Ingredientes Registrados</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style type="text/css">
        body{
            background-image: url(../Administrador/img/fondo.jpg);
        }
        
    </style>
    </head>
<body>
<center>
<table class="table table-bordered" style="max-width: 70%; margin: auto;"> 
     <thead>
        <tr>
            <th colspan="8"><h1 align="center">Ingredientes Registrados</h1></th>
        <tr>
<tr>
<th colspan="12"><button class="btn btn-info"><a href="inicio_empleado.php" style="color:white">Volver a la pagina principal</a></button></th>
</tr>
    <tr> 
        <td><b>Codigo de ingrediente</b></td> 
        <td><b>Nombre ingrediente</b></td>
        
        

        
   </tr> 
<?php  $consulta=("SELECT * FROM ingrediente");
        $resultado= mysqli_query($con, $consulta);
        while($dato=mysqli_fetch_array($resultado)){?> 
    <tr> 
        <td><?php echo $dato['cod_ingrediente']; ?></td> 
        <td><?php echo $dato['Nom_ing']; ?></td> 
       
        
        
    </tr> 
<?php } ?> 
</table>
</center>
</body>
<html>