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
            background-image: url(../Administrador/img/fondo.jpg);
        }
        
    </style>
    </head>
<body background="img/ejemplo.jpg">
<center>
<table  class="table table-bordered" style="max-width: 70%; margin: auto;""> 
     <thead>
        <tr>
            <th colspan="8"><h1 align="center">Compras hechas por los Clientes</h1></th>
        <tr>
<tr>
<th colspan="6"><button class="btn btn-info"><a href="../Administrador/inicio_administrador.php" style="color:white">Volver a la pagina principal</a></button></th>
<th colspan="6"><button class="btn btn-danger"><a href="lista.php" style="color:white">Generar reporte</a></button></th>
</tr>
    <tr> 
        <td><b>N.I.</b></td> 
        <td><b>T.D.</b></td>
        <td><b>Nombre de Usuario</b></td>
        <td><b>Producto</b></td>
         <td><b>Precio del Producto</b></td>
        <td><b>Cantidad</b></td>
        <td><b>Total</b></td>
        <td><b>Fecha de compra</b></td>


        <th colspan="2">operaciones</th> 

   </tr> 
<?php 

$sql="SELECT * FROM compra";
$resultado=mysqli_query($con,$sql);
while($usuario =mysqli_fetch_array($resultado)){ ?> 
    <tr> 
        <td><?php echo $usuario['Usuario_Id_usu']; ?></td> 
        <td><?php echo $usuario['Usuario_Tipo_doc_Tipo_doc']; ?></td> 
        <td><?php echo $usuario['Nom_usu']; ?></td>
        <td><?php echo $usuario['Nom_pro']; ?></td> 
        <td><?php echo $usuario['Prec_pro']; ?></td> 
        <td><?php echo $usuario['Cant']; ?></td> 
        <td><?php echo $usuario['Total']; ?></td>
        <td><?php echo $usuario['Fecha']; ?></td> 
        <th><button class="btn btn-success"><a href="eliminarcom.php?idCompra=<?php echo $usuario['idCompra'];?>" style="color:white">Eliminar</a></button></th> 
        
        
    </tr> 

<?php } ?> 
</table>
</center>
</body>
<html>