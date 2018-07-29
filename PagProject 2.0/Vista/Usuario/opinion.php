<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
  header("location: ../index.php?Noseccion");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/cssopinion.css">	
    <meta charset="utf-8">
    <title>Fruteria del bosque</title>
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
 
<font color="black">
  <table class="ti" style=" background-color: rgba(200, 203, 199, 0.5)">
  <tr><td><b>nombre de usuario = <?php  
 
  echo $_SESSION['Nom_usu']; 
  ?>
  </b>
</font>
 
  <tr><td><br><font color="black"><b>escribe tu mensaje</b><br>
  <textarea rows="10" cols="70" name="mensaje"></textarea><br></td></tr>
  <tr><td><button input type="submit" value="enviar">ENVIAR</button><br></tr></td>
  <tr><td><a href="inicio.php"><input type="button" value="Volver Al Inicio" id="boton"></a></td></tr></font>
  </form><br><hr></hr>
  </center>
  <br>
  </table><br>
  
  <?php

  @$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("mydb", $conexion);

  if($conexion){
	
	$resultado = mysql_query("SELECT id, usuario, fecha, mensaje  FROM comentario ORDER BY id DESC ", $conexion);

while ($file = mysql_fetch_row($resultado)){
	
  echo "<font color='black' >";
  echo "<div class='tu' style=' background-color: rgba(200, 203, 199, 0.5)'>";
		echo "MENSAJE #" .$file[0]."."; echo "<br>";
		echo "ESCRITO POR :" .$file[1]."."; echo "<br>";
		echo "FECHA :" .$file[2]."."; echo "<br>";
		
		echo "COMENTARIO: " .$file[3]."."; echo "<br>";
	
echo "</div>";echo "<br>";

	}
echo "</font>";
}
mysql_close($conexion);
  ?>
  </body>

