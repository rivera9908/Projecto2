<?php
require ("../../Modelo/conexion.php");

                $fecha = $_POST['fecha'];
                $fecha2 = $_POST['fecha2'];
                
                  $sql="SELECT * FROM auditoria WHERE fecha_aud BETWEEN '$fecha' AND '$fecha2'";
                  $resultado=mysqli_query($con, $sql);
             
              if(mysqli_num_rows($resultado)>0){                            
 ?>                   
                  
<html>
<head>
        <meta charset="utf-8">
        <title>AUDITORIA INVENTARIO</title>
        <link rel="stylesheet" href="../../Vista/Administrador/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style type="text/css">
        body{
            background-image: url(../../Vista/Administrador/img/fondo.jpg);
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
            <th colspan="14"><h1 align="center">Registro de Ingredientes Ingresados y Gastados del Inventario</h1></th>
        <tr>
<tr>
<th colspan="8"><a href="../../Vista/Administrador/inicio_administrador.php" style="color: white"><button class="btn btn-info">Volver a la pagina principal</button></a></th><form action="../../Vista/PDF/buscador_inv_rep.php" method="POST">
              <input type="date" name="fecha"  value="<?php echo $fecha; ?>" style="display: none" placeholder="ej: 12/08/2018" >
              <input type="date" name="fecha2" value="<?php echo $fecha2; ?>" style="display: none" placeholder="ej: 15/08/2018">
              <th><input type="submit" name="buscar" value="Generar Reporte" style="color:white" class="btn btn-danger"></th>

              </form>
               <form action="../../Controlador/Administrador/buscador_Inv_Ing.php" method="POST">
                   <th colspan="4">Nombre Ingrediente <input type="text" name="nombre" placeholder="ej: Papaya"></th> 
                   <th colspan=""><input type="submit" name="busqueda" value="Buscar Nombre"></th>  
              </form>
              
<tr>
     <form action="../../Controlador/Administrador/buscador_Inv.php" method="POST">
                <th colspan="9">Fecha Inicial <input type="date" name="fecha" placeholder="ej: 12/08/2018"></th>
                <th colspan="5">Fecha final <input type="date" name="fecha2" placeholder="ej: 15/08/2018">
                <input type="submit" name="buscar" value="Buscar"></th>

              </form>
          </tr>        
   <tr> 
        <td colspan=""><b>Nombre del Ingrediente</b></td>
        <td colspan="10"><b>Descripcion Auditoria</b></td> 
        <td colspan="2"><b>Fecha</b></td>
        <th colspan="2">operaciones</th> 

   </tr> 
<?php 
while($usuario = mysqli_fetch_array($resultado)){ ?> 
    <tr> 
        <td colspan=""><?php echo $usuario['nom_ing']; echo ".";?></td>
        <td colspan="10"><?php echo $usuario['descripcion_aud']; echo ".";?></td>  
        <td colspan="2"><?php echo $usuario['fecha_aud']; echo ".";?></td>
        <th><a href="eliminar_est_inv.php?cod_auditoria=<?php echo $usuario ['cod_auditoria'];?>" style="color:white"><button class="btn btn-success">Eliminar</button></a></th> 
    </tr> 

<?php 
}
}else{
   print "<script>alert(\"SIN RESULTADOS.\");window.location='../../Vista/Administrador/estado_inventario.php';</script>";
}
  ?> 

</table>
</div>
</center>
</body>
</html>