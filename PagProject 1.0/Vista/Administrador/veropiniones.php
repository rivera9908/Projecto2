<?php 
//Conexión a la BD 
$conexion = new mysqli("localhost","root","","fruteria_poblada"); 
  
//Consulta la tabla: 
$login = $conexion->query("SELECT * FROM comentario"); 
  
//Crear la tabla de HTML en la que se muestran los datos: 
?> 
<html>
<head>
<link rel="stylesheet"  href="css/stiloingrediente.css">
</head>
<center>
<h1 style=#fff><b>Usuarios Registrados<b></h1>
</center>
<body background="img/ejemplo.jpg">
<center>
<table border="1" style="background-color:#999; text-transform:uppercase;" > 
<tr>
<th colspan="12"><a href="inicio_administrador.php">Volver a la pagina principal</a></th>
</tr>
    <tr> 
        <td><b>Id</b></td> 
        <td><b>Usuario</b></td>
        <td><b>Fecha</b></td>
        <td><b>Mensaje</b></td>
        

        <th colspan="2">operaciones</th> 
   </tr> 
<?php while($usuario = $login->fetch_assoc()){ ?> 
    <tr> 
        <td style="text-transform:capitalize;"><?php echo $usuario['id']; ?></td> 
        <td style="text-transform:capitalize;"><?php echo $usuario['usuario']; ?></td> 
        <td style="text-transform:capitalize;"><?php echo $usuario['fecha']; ?></td>
        <td style="text-transform:capitalize;"><?php echo $usuario['mensaje']; ?></td> 
        <th style="text-transform:capitalize;"><a href="eliminaropinion.php?id=<?php echo $usuario['id'];?>">Eliminar</a></th> 
        
        
    </tr> 
<?php } ?> 
</table>
</center>
</body>
<html>