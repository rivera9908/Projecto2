<?php

session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
    header("location: ../../index.php?Noseccion");
    }


require("../../Modelo/conexion.php");
?>
<html>
    <head>
        <title>Lista de Ingredientes Registrados</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <style type="text/css">
        body{
            background: "img/frambuesas.jpg";
        }
        
    </style>
    </head>
    <body background="img/cerezas.jpg">
        
                <h2 align="center">Ingredientes</h2><br />
 <div class="table-responsive">
	<table class="table table-bordered" style="max-width: 70%; margin: auto; position: right;">
<tr>
</tr>
    <tr>
	  	<th>Codigo Ingrediente</th>
	  	<th>Nombre Ingrediente</th>
	  </tr>
   	<?php
            $sql="SELECT cod_ingrediente, Nom_ing FROM ingredientes";
            $resultado=mysqli_query($con, $sql);

            while($dato=mysqli_fetch_array($resultado)){ ?> 
    
        <td><?php echo $dato['cod_ingrediente']; ?></td> 
        <td><?php echo $dato['Nom_ing']; ?></td>
    </tr> 
  
<?php } ?>  
   <th colspan="12"><a href="../../Controlador/Empleado/inventario.php">Volver</a>
                    	</thead>
	 
                    	</table>

                    </div>
                </body>
                </html>