<?php 


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
    header("location: ../../index.php?Noseccion");
    }

       $nombre_ing = $_POST['nombre'];
            
                
                  $sql="SELECT * FROM auditoria WHERE nom_ing LIKE '%$nombre_ing%'";
                  $resultado=mysqli_query($con, $sql);
             
              if(mysqli_num_rows($resultado)>0){     


?> 
<html>
<head>
        <meta charset="utf-8">
        <title>AUDITORIA INVENTARIO</title>
        <link rel="stylesheet" href="../../Vista/Empleado/css/bootstrap.min.css"/>
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
            <th colspan="14"><h1 align="center">Registro de Ingredientes Ingresados y Gastados del Inventario</h1></th>
        </tr>
<tr>
<th colspan="8"><a href="../../Vista/Empleado/inicio_empleado.php" style="color: white"><button class="btn btn-info">Volver a la pagina principal</button></a></th><form action="../../Vista/PDF/buscador_inv_rep_nom.php" method="POST">
              <input type="text" name="nombre"  value="<?php echo $nombre_ing; ?>" style="display: none" placeholder="ej: 12/08/2018" >
                <th colspan=""><input type="submit" name="buscar" value="Generar Reporte" style="color:white" class="btn btn-danger"></th>

              </form>
<form action="../../Controlador/Empleado/buscador_Inv_Ing">
                   <th colspan="4">Nombre Ingrediente <input type="text" name="nombre" placeholder="ej: Papaya"></th> 
                   <th><input type="submit" name="buscar" value="Buscar Nombre"></th>  
              </form>
              <tr>
    <tr>

     <form action="../../Controlador/Empleado/buscador_Inv.php" method="POST">
                <th colspan="9">Fecha Inicial <input type="date" name="fecha" placeholder="ej: 12/08/2018"></th>
                <th colspan="5">Fecha final <input type="date" name="fecha2" placeholder="ej: 15/08/2018">
                <input type="submit" name="buscar" value="Buscar"></th>
              </form>
           <tr> 
              
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
        <th colspan=""><a href="../../Controlador/Empleado/eliminar_est_inv.php?cod_auditoria=<?php echo $usuario ['cod_auditoria'];?>" style="color:white"><button class="btn btn-success">Eliminar</button></a></th> 
       
        
        
    </tr> 
<?php } 
}?> 
</table>
</center>
</body>
<html>