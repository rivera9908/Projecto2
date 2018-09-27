<?php
require ("../../Modelo/conexion.php");

                $fecha = $_POST['fecha'];
                $fecha2 = $_POST['fecha2'];
                
                  $sql="SELECT * FROM compra WHERE Fecha BETWEEN '$fecha' AND '$fecha2'";
                  $resultado1=mysqli_query($con, $sql);
             
              if(mysqli_num_rows($resultado1)>0){                             
 ?>                   
                  
<html>
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
        
    </style>
    </head>
<body background="../../Vista/Administrador/img/ejemplo.jpg">
<center>
<table  class="table table-bordered" style="max-width: 70%; margin: auto;""> 
     <thead>
        <tr>
            <th colspan="15"><h1 align="center">Compras hechas por los Clientes</h1></th>
        <tr>
<tr>
  <?php 
$sql="SELECT * FROM compra WHERE Fecha BETWEEN '$fecha' AND '$fecha2'";
$resultado=mysqli_query($con,$sql);
$contador=0;
$suma=0;
foreach ($resultado as $key => $v) {

    $total = $v['Total'];
    $suma=$suma+$total;
    $contador++;
}
?>

<th colspan="2"><a href="../../Vista/Administrador/inicio_administrador.php" style="color:white"><button class="btn btn-info">Volver a la pagina principal</button></a></th> 
<form action="../../Vista/PDF/buscado_com_rep.php" method="POST">
                <th><input type="date" name="fecha"  value="<?php echo $fecha; ?>" style="display: none" placeholder="ej: 12/08/2018" >
                <input type="date" name="fecha2" value="<?php echo $fecha2; ?>" style="display: none" placeholder="ej: 15/08/2018">
                <input type="submit" name="buscar" value="Generar Reporte" style="color:white" class="btn btn-danger"></th>

              </form>
              <td colspan="6" style="font-size: 35px">Total de Ganancias = $<?php echo $suma;?></td>

<tr>
     <form action="../../Controlador/Administrador/buscador_com.php" method="POST">
                <th colspan="4">Fecha Inicial <input type="date" name="fecha" placeholder="ej: 12/08/2018"></th>
                <th colspan="4">Fecha final <input type="date" name="fecha2" placeholder="ej: 15/08/2018"></th>
                <th colspan="2"><input type="submit" name="buscar" value="Buscar"></th>

              </form>
                
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
        <td ><b>Fecha de compra</b></td>


        <th colspan="2">operaciones</th> 

   </tr> 
   <?php 
    while ( $usuario= mysqli_fetch_array($resultado1)){
              ?>
    <tr> 
        <td><?php echo $usuario['Usuario_Id_usu']; ?></td> 
        <td><?php echo $usuario['Usuario_Tipo_doc_Tipo_doc']; ?></td> 
        <td><?php echo $usuario['Nom_usu']; ?></td>
        <td><?php echo $usuario['Nom_pro']; ?></td> 
        <td>$<?php echo $usuario['Prec_pro']; ?></td> 
        <td><?php echo $usuario['Cant']; ?></td> 
        <td>$<?php echo $usuario['Total']; ?></td>
        <td><?php echo $usuario['Fecha']; ?></td> 
        <th colspan="4"><a href="eliminarcom.php?idCompra=<?php echo $usuario['idCompra'];?>" style="color:white"><button class="btn btn-success">Eliminar</button></a></th> 
        
        
    </tr> 

<?php 
}
}else{
   print "<script>alert(\"SIN RESULTADOS.\");window.location='../../Vista/Administrador/vercompras.php';</script>";
  }
  ?> 

</table>
</center>
</body>
</html>
