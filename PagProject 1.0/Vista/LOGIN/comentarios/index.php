<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <title>Fruteria del bosque</title>


  </head>
<link rel="stylesheet" href="../css/comentario.css">
  <body>
  <form action="procesar_mensaje.php" method="POST">
  <h1>Deja tu opinion</h1>
  
  <b>nombre de usuario</b>
  <input type="text" size="20" name="usuario"><br>
  <b>escribe tu mensaje</b><br>
  <textarea rows="10" cols="70" name="mensaje"></textarea><br>
  <input type="submit" value="enviar"><br>
  <a href="../inicio.php">volver al inicio</a>
  </form>
  <?php

  @$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("fruteria_poblada", $conexion);

  if($conexion){
	
	$resultado = mysql_query("SELECT id, usuario, fecha, mensaje  FROM comentario ORDER BY id DESC ", $conexion);
	while ($file = mysql_fetch_row($resultado)){
		echo "<b>Mensaje</b> #" .$file[0].";";
		echo "<b>Escrito por</b> #" .$file[1].";";
		echo "<b>Fecha</b> #" .$file[2].";";
		echo "<br>";
		echo $file[3];
		echo "<hr>";

	}
}
mysql_close($conexion);
  ?>
  </body>

