<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
  header("location: ../../index.php?Noseccion");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/cssopinion.css"> 
    <meta charset="utf-8">
    <title>Opiniones</title>
  <style>
    #boton{
      background-color: rgb(0, 208, 214);
      border-style: none;
      border-radius: 5px 5px;
      font-size: 20px;
    }
  </style>

  </head>
  <body>
  <form action="../../Controlador/Usuario/procesar_opinion.php" method="POST">
  <center>
 
  <h1 class="hy"><font color="white">DEJA TU OPINION</h1></font>
 
<font color="white">
  <table class="ti" style=" background-color: rgba(91, 124, 132, 0.5)">
  <tr><td><b>nombre de usuario = <?php  
 
  echo $_SESSION['Nom_usu']; 
  ?>
  </b>
</font>
 
  <tr><td><br><font color="white"><b>escribe tu mensaje</b><br>
  <textarea rows="10" cols="70" name="mensaje"></textarea><br></td></tr>
  <tr><td><button input type="submit" value="enviar">ENVIAR</button><br></tr></td>
  <tr><td><a href="inicio.php"><input type="button" value="Volver Al Inicio" id="boton"></a></td></tr></font>
  </form><br><hr></hr>
  </center>
  <br>
  </table><br>
  
  <?php

  
  $consulta="SELECT id, usuario, fecha, mensaje  FROM comentario ORDER BY id DESC ";
  $resultado=mysqli_query($con,$consulta);

while ($file =mysqli_fetch_row($resultado)){
  
  echo "<font color='white' >";
  echo "<div class='tu' style=' background-color: rgba(91, 124, 132, 0.5)'>";
  echo "<b>"; echo "MENSAJE #" .$file[0]."."; echo "</b>"; echo "<br>";
  echo "<b>"; echo "ESCRITO POR :" .$file[1]."."; echo "</b>"; echo "<br>";
  echo "<b>"; echo "FECHA :" .$file[2]."."; echo "</b>"; echo "<br>";
    
   echo "<b>";    echo "COMENTARIO: " .$file[3]."."; echo "</b>"; echo "<br>";
  
echo "</div>";echo "<br>";

  }

  ?>
  </body>

