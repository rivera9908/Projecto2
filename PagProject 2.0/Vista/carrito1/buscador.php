<?php
require ("../,,/Modelo/conexion.php");

              if ($_POST['buscar']){
                $buscar = $_POST['buscador'];
                
                	$sql="SELECT * FROM carritodecompras WHERE Nombre LIKE '%$buscar%'";
                	$resultado=mysqli_query($con, $sql);

    if(mysqli_num_rows($resultado)>0){            		

                	while ( $sql1= mysqli_fetch_array($resultado)){
           			
echo "<link rel='stylesheet' type='text/css' href='css/button.css'>";

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
                  }else{
                     print "<script>alert(\"SIN RESULTADOS.\");window.location='index.php';</script>";

                	}
                  echo "<th ><a href='index.php' style='color: white'>Volver</a></th>";  
                }
              ?>

<!--echo "<link rel='stylesheet' type='text/css' href='css/styles.css'>";

  echo "      
<table style='background: blue'id='table'>";
                        
             echo"<tr style='background-color: rgba(241, 253, 90, 0.5)'>";
                     echo " <td colspan='2'>";  echo "<a>"; 
     echo "<img src='".$sql1 ['imagen']."' alt='#' width='300' height='200'>"; echo "</span>";   
     echo "</a>"; 

         echo " <tr style='background-color: rgba(241, 253, 90, 0.5)'>";
         echo " <td colspan='2'><center>"; echo"<label style='color: black'>";echo $sql1['CATEGORIADELPRODUCTO_Nom_cat']; echo "</label></center></td> </tr>";
                echo " <tr style='background-color: rgba(241, 253, 90, 0.5)'>";
                    echo"  <td colspan='2'><center>"; echo"<label style='color: black'>";  echo $sql1['Nombre']; echo "</label></center></td></tr>";
                   echo "      <tr style='display: none; background-color: rgba(241, 253, 90, 0.5)'>";
                   echo " <td colspan='2'style='color: black'><center>"; echo "<input type='text'name='code'value=' "; echo $sql1['Codigo']; echo "></center></td>
                  </tr>";
                       echo " <tr style='background-color: rgba(241, 253, 90, 0.5)'>";
         echo " <td colspan='2'><center>"; echo"<label style='color: black'>";echo $sql1['Precio']; echo "</label></center></td> </tr>";
                     echo "    <tr style='display: none; background-color: rgba(241, 253, 90, 0.5)'>";
                     
                      echo "<td colspan='2'style='color: black'><center>"; echo "<input type='text'name='nombre'value='"; echo $nombre; echo "></center></td>
                        </tr>";
                     echo " <tr>
                            <td><input type='number'name='cantidad'value='1'min='1'max='10'style='width: 130px'>
                            <input type='submit'name='action'value='Comprar'></td>
                        </tr>";
       echo"             </table>
                    
                </form>
            <?php //endforeach; ?>
        </div>
    </div>
    </center>
</section>";
-->