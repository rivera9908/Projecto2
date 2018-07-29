<?php


session_start();
require("../../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
    header("location: ../../index.php?Noseccion");
    }



?>
<html>
    <head>
        <title>Detalles Inventario</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style type="text/css">
        body{
            background: "img/frambuesas.jpg";
        }
        
    </style>
    </head>
    <body>
        
                <h2 align="center">Ingredientes</h2><br />
 <div class="table-responsive">
	<table class="table table-bordered" style="max-width: 70%; margin: auto; position: right;">
<tr>
</tr>
    <tr>
        <th>Fecha de Inventario</th>
	  	<th>Codigo Ingrediente</th>
	  	<th>Nombre Ingrediente</th>
	  </tr>
   	<?php

    if (isset($_REQUEST['detalles'])){
            $sql="SELECT t1.fecha_inventario,t1.Ingredientes_cod_ingrediente,t2.Nom_ing FROM inventario as t1 join ingredientes as t2 on (t1.cod_ingrediente=t2.Ingredientes_cod_ingrediente)";
            $resultado=mysqli_query($con, $sql);

            while($row = $resultado->fetch_assoc()){ ?> 
        
        <td><?php echo $row['fecha_inventario']; ?></td>  
        <td><?php echo $row['cod_ingrediente']; ?></td> 
        <td><?php echo $row['Nom_ing']; ?></td>
    </tr> 
  
<?php } }?>  
   <th colspan="12"><a href="inventario.php">Volver</a>
                    	</thead>
	 
                    	</table>

                    </div>
                </body>
                </html>