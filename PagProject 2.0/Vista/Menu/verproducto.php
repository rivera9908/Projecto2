<?php

require ("../../Modelo/conexion.php");

$code='';

if(isset($_POST["action"])){
        $code=$_POST["code"];
    
$sql="SELECT * FROM carritodecompras WHERE Codigo='$code'";
                	$resultado=mysqli_query($con, $sql);
 }
  	while ($sql1= mysqli_fetch_array($resultado)){
       			
echo "<meta charset=' utf-8'>";
echo "<link rel='stylesheet' type='text/css' href='css/styles2.css'>";
echo "<link rel='stylesheet' type='text/css' href='css/reset.css'>";

echo "<style>
        
        .table{
            width: 40%;
            padding-right: 20px;
            margin: 15px;
            border: 1px solid aqua;
            list-style: none;

        }
       
    </style>";

echo "<html>";
echo"<body >";
echo"<center><h1>Detalles Del Producto</h1></center>";
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

 echo "</div>";  
  echo "</section>";  


echo"</body>";

}
?>