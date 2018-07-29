<?php
require ("../../Modelo/conexion.php");
require ("clases/producto.php");

              if ($_POST['buscar']){
                $buscar = $_POST['buscador'];
                
                	$sql="SELECT * FROM carritodecompras WHERE Nombre LIKE '%$buscar%'";
                	$resultado=mysqli_query($con, $sql);

             if(mysqli_num_rows($resultado)>0){                   		

                	while ( $sql1= mysqli_fetch_array($resultado)){
                		

              			
echo "<meta charset=' utf-8'>";
echo "<link rel='stylesheet' type='text/css' href='css/styles2.css'>";
echo "<link rel='stylesheet' type='text/css' href='css/reset.css'>";

echo "<style>
        
        .table{
            width: 40%;
            
            margin: 15px;
            border: 1px solid aqua;
            list-style: none;

        }
       
    </style>";

echo "<html>";
echo"<body >";

echo "<font color='black'>"; 
echo"<section>";
   echo "<div class='responsive'>";

   echo "<div class='gallery'>"; 

echo "<table class='table' style='background-color: white'>";

echo "<tr>";  
 echo "<td colspan='2'>"; echo "<img src='".$sql1 ['imagen']."' alt='#' width='300' height='200'>"; echo "</span>";   
       echo "</td></tr>";


  echo "<tr> <td colspan='2'><label style='color: black; text-align:left;'>";  echo "<b>Categoria:</b>";   echo $sql1['CATEGORIADELPRODUCTO_Nom_cat']; 
    echo "</br>";  echo '</td></tr>';
 echo "<tr><td colspan='2'><label style='color: black'>"; echo "<b>Nombre:</b>";  echo $sql1['Nombre']; 
     echo "<br>";  echo '</td></tr>';

   echo "<tr><td colspan='2'><label style='color: black'>";    echo "<b>Descripcion:</b>";  echo $sql1['Descripcion']; 
     echo "<br>";  echo '</td></tr>';


  echo "<tr><td colspan='2'><label style='color: black'>";    echo "<b>Precio:</b>";   echo"$"; echo $sql1['Precio'];
        echo '</td></tr>';
         echo "<br>"; 
    echo "<tr><td colspan='2'><center><label style='color: black'>"; echo"<a href='index.php' style='color: blue'>Volver</a>";
     echo '</td></tr>'; 

     echo "</table>";

   
 echo "</div>";
  echo "</section>";  
 echo "</div>";  



echo"</body>";
                }
                  }else{
                     print "<script>alert(\"SIN RESULTADOS.\");window.location='index.php';</script>";

                  }
                   
                }
              ?>
