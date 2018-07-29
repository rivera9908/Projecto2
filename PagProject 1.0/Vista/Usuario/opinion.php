<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/cssopinion.css">	
    <meta charset="utf-8">
    <title>Fruteria del bosque</title>


  </head>
  <body>
  <form action="procesar_opinion.php" method="POST">
  <center>
 
  <h1 class="hy">DEJA TU OPINION</h1>
  <table class="ti">
  <tr><td><b>nombre de usuario</b>
  <input type="text" size="20" name="usuario"><br></td> </tr>
  <tr><td><br><b>escribe tu mensaje</b><br>
  <textarea rows="10" cols="70" name="mensaje"></textarea><br></td></tr>
  <tr><td><input type="submit" value="enviar"><br></tr></td>
  <tr><td><a href="inicio.php">volver al inicio</a></td></tr>
  </form><br><hr></hr>
  </center>
  
  
  <?php

  @$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("fruteria_poblada", $conexion);

  if($conexion){
	
	$resultado = mysql_query("SELECT id, usuario, fecha, mensaje  FROM comentario ORDER BY id DESC ", $conexion);

while ($file = mysql_fetch_row($resultado)){
	
  
		echo "<table class='tu'><tr><td>MENSAJE #" .$file[0].".";
		echo "<tr><td>ESCRITO POR :" .$file[1].".";
		echo "<tr><td>FECHA :" .$file[2].".";
		
		echo "<tr><td>COMENTARIO: " .$file[3].".";
	
echo "</table><br>";
	}
echo "<font color='white'>$file</font>";
}
mysql_close($conexion);
  ?>
  </body>

