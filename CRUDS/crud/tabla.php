<!DOCTYPE HTML>

<html>

<head>
  <title>tabla</title>
</head>
  <center>
      <table border= "3">
          <thead>
              <tr>
              <th colspan="1"><a href="index.php">nuevo</a></th>
              <th colspan="5">lista de usuarios</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>codigo</td>
                  <td>grado</td>
                  <td>anio</td>
                  <td>jornada</td>
                  <td>nombres</td>
                  <td>apellido</td>
                  <td colspan="2">operaciones</td>

              </tr>
              <?php
              include("conexion.php");

              $query="SELECT * FROM ALUMNO";
              $resultado=$conexion->query($query);
              while($row=$resultado->fetch_assoc()){
              ?>
              <tr>
                  <td><?php echo $row['codigo']; ?></td>
                  <td><?php echo $row['grado']; ?></td>
                  <td><?php echo $row['anio']; ?></td>
                  <td><?php echo $row['jornada']; ?></td>
                  <td><?php echo $row['nombres']; ?></td>
                  <td><?php echo $row['apellido']; ?></td>
                  <td><a href="modificar.php?codigo=<?php echo $row['codigo']; ?>">modificar"</a></td>
                  <td><a href="eliminar.php?codigo=<?php echo $row['codigo']; ?>">eliminar</a></td>
              </tr>
              <?php
                }
                ?>
          </tbody>
      </table>
  </center>
</body>

</html>