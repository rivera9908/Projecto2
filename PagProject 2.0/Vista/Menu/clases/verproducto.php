<?php

require ("../../Usuario/conexion.php");
$code="";

if(isset($_POST["envianame"])){
        $code=$_POST["code"];
    }
$sql="SELECT * FROM carritodecompras WHERE Codigo='$code'";
                	$resultado=mysqli_query($con, $sql);

  	while ( $sql1= mysqli_fetch_array($resultado)){
                		

              			
echo "<link rel='stylesheet' type='text/css' href='../css/styles.css'>";

echo "<html>";

echo"<body >";
echo "<font color='white'>"; 
      echo "<div class='responsive'>";
      echo "<div class='gallery'>";  
 echo "<a>"; 
     echo "<img src='".$sql1 ['imagen']."' alt='#' width='300' height='200'>"; echo "</span>";   
     echo "</a>"  ;  


     echo $sql1['CATEGORIADELPRODUCTO_Nom_cat']; 
    echo "<br>"; 
     echo $sql1['Nombre']; 
     echo "<br>"; 


        echo"$"; echo $sql1['Precio'];
        echo "<br>"; 
         echo '<td>';
 echo "</div>";  
echo "</div>" ; 
echo"</body>";
}




?>