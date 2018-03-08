<!DOCTYPE html>
<html>
<head>
  <title>formulario de registro</title>
</head>
<body>
    <center>
          <?php

            $codigo=$_REQUEST['codigo'];

              include("conexion.php");

              $query="SELECT * FROM ALUMNO WHERE codigo='$codigo'";
              $resultado=$conexion->query($query);
              $row=$resultado->fetch_assoc();
              ?>

    <form action="modificar_proceso.php?codigo=<?php echo $row['codigo']; ?>" method="POST">



            codigo <input type="text" name="codigo" value="<?php echo $row['codigo']; ?>" /><br/><br/>
            grado <input type="text" name="grado" value="<?php echo $row['grado']; ?>" /><br/><br/>
            anio <input type="text" name="anio" value="<?php echo $row['anio']; ?>" /><br/><br/>
           jornada <input type="text" name="jornada" value="<?php echo $row['jornada']; ?>" /><br/><br/>
           nombres <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>" /><br/><br/>
           apellido <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" /><br/><br/>
            <input type="submit" value="aceptar" />
    </form>
</center>
</body>
</html>