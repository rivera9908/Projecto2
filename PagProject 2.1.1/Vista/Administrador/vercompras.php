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
        <title>Lista de Compras</title>
        <link rel="stylesheet" href="../Administrador/css/bootstrap.min.css" />
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
            <th colspan="15"><h1 align="center" >Compras hechas por los Clientes</h1></th>
        <tr>
<tr>
<?php 
$sql="SELECT * FROM compra";
$resultado=mysqli_query($con,$sql);
$contador=0;
$suma=0;
foreach ($resultado as $key => $v) {

    $total = $v['Total'];
    $suma=$suma+$total;
    $contador++;
}
?>
<td colspan="5" style="font-size: 35px">Total de Ganancias = $<?php echo $suma;?></td>
<th colspan="8"><a href="../Administrador/inicio_administrador.php" style="color:white"><button class="btn btn-info">Volver a la pagina principal</button></a> <a href="../PDF/lista.php" style="color:white"><button class="btn btn-danger">Generar reporte</button></a> </th>
</tr>
<tr>
     <form action="../../Controlador/Administrador/buscador_com.php" method="POST">
                <th colspan="4">Fecha Inicial <input type="date" name="fecha" placeholder="ej: 12/08/2018"></th>
                <th colspan="4">Fecha Final <input type="date" name="fecha2" placeholder="ej: 15/08/2018"></th>
                <th><input type="submit" name="buscar" value="Buscar"></th>

              </form>
          </tr>
          <tr>
            
            <form action="../../Controlador/Administrador/buscador_com_nom.php" method="POST">
                <th colspan="10">Nombre Usuario <input type="text" name="nombre" placeholder="ej: carlos99" align="center">
                <input type="submit" name="buscar" value="Buscar Nombre" align="center"></th>

              </form>
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


        <th colspan="4">operaciones</th> 

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
        <td>$<?php echo $usuario['Prec_pro']; ?></td> 
        <td><?php echo $usuario['Cant']; ?></td> 
        <td>$<?php echo $usuario['Total']; ?></td>
        <td><?php echo $usuario['Fecha']; ?></td> 
        <th><a href="../../Controlador/Administrador/eliminarcom.php?idCompra=<?php echo $usuario['idCompra'];?>" style="color:white"><button class="btn btn-success">Eliminar</button></a></th> 
        
        
    </tr> 
    
<?php } ?>
</table>
</center>
</body>
<html>