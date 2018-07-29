<?php 
//Conexión a la BD 
$conexion = new mysqli("localhost","root","","fruteria_poblada"); 
  
//Consulta la tabla: 
$login = $conexion->query("SELECT * FROM usuario"); 
  
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
<table border="1" style="background-color:#999"> 
<tr>
<th colspan="12"><a href="inicio_administrador.php">Volver a la pagina principal</a></th>
</tr>
    <tr> 
        <td><b>Id</b></td> 
        <td><b>Nombre</b></td>
        <td><b>Tipo Documento</b></td>
        <td><b>Rol</b></td>
        <td><b>Estado del usuario</b></td>

        <th colspan="2">operaciones</th> 
   </tr> 
<?php while($usuario = $login->fetch_assoc()){ ?> 
    <tr> 
        <td><?php echo $usuario['Id_usu']; ?></td> 
        <td><?php echo $usuario['Nom_usu']; ?></td> 
        <td><?php echo $usuario['Tipo_doc_tipo_doc']; ?></td>
        <td><?php echo $usuario['Rol_nom_rol']; ?></td> 
        <td><?php echo $usuario['Estado_usu']; ?></td>
        <th><a href="eliminarusu.php?Id_usu=<?php echo $usuario['Id_usu'];?>">Eliminar</a></th> 
        <th><a href="modificarusu.php?Id_usu=<?php echo $usuario['Id_usu'];?>">Modificar</a></th> 
        
    </tr> 
<?php } ?> 
</table>
</center>
</body>
<html>