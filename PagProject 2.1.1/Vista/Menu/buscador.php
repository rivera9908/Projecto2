<?php
require ("../../Modelo/conexion.php");


              if ($_POST['buscar']){
                $buscar = $_POST['buscador'];
                
                	$sql="SELECT * FROM producto WHERE Nom_pro LIKE '%$buscar%'";
                	$resultado=mysqli_query($con, $sql);
          
                    ?>
              			
<meta charset=' utf-8'>
<link rel='stylesheet' type='text/css' href='css/styles2.css'>
<link rel='stylesheet' type='text/css' href='css/reset.css'>
<style>
        
        .table{
            width: 40%;
            
            margin: 15p
            border: 1px solid aqua;
            list-style: none;

        }
       
    </style>

<html><body >
  <h1 align="center">Detalles de Producto</h1>
<?php

   if(mysqli_num_rows($resultado)>0){                       

                  while ( $sql1= mysqli_fetch_array($resultado)){
                    
?>
<font color='black'> <section>
   <div class='responsive'>

   <div class='gallery'>
    


<table class='table' align="center" style='background-color: white'>

<tr>
 <td colspan='2'><img src="img/<?php echo $sql1 ['img_pro']; ?>" alt='#' width='300' height='200'></span>  
       </td></tr>


  <tr> <td colspan='2'><label style='color: black; text-align:left;'><b>Categoria:</b><?php   echo $sql1['Categoriadelproducto_Nom_cat']; ?>
    </br></td></tr>
 <tr><td colspan='2'><label style='color: black'><?php echo "<b>Nombre:</b>";  echo $sql1['Nom_pro']; ?>
     <br></td></tr>

   <tr><td colspan='2'><label style='color: black'><?php echo "<b>Descripcion:</b>";  echo $sql1['Desc_pro']; ?>
     <br></td></tr>


  <tr><td colspan='2'><label style='color: black'><?php  echo "<b>Precio:</b>";   echo"$"; echo $sql1['Prec_pro'];?>
        </td></tr>
         <br>
    <tr><td colspan='2'><center><label style='color: black'><a href='index.php' style='color: blue'>Volver</a>
     </td></tr>

     </table>

   
 </div>
 </section>  
 </div>



</body>
<?php
                }
                  }else{
                     print "<script>alert(\"SIN RESULTADOS.\");window.location='index.php';</script>";

                  }
                   
                }
              ?>
