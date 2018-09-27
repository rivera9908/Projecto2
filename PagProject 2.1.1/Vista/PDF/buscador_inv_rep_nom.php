<?php 
  require_once("dompdf/dompdf_config.inc.php");
  require "../../Modelo/conexion.php";
  
                
                $nombre_ing = $_POST['nombre'];
                
                  $sql="SELECT * FROM auditoria WHERE nom_ing LIKE '%$nombre_ing%'";
                  $resultado=mysqli_query($con, $sql);
             
              if(mysqli_num_rows($resultado)>0){  
$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<center>
<h1>Resultado de Busqueda por Nombre</h1></br>
<font size="20px" face="arial">
<p align="justify">Este es el reporte del resultado de busqueda del inventario por lo tanto aqui en este reporte
se muestra informacion especifica correspondiente a la nombre del ingrediente digitado anteriormente, de tal manera que solo se visualizara informacion de de los ingredientes ingresados e utilizados por la fruteria. Ademas se muestra la 
cantidad de ingredientes que quedan actualmente del ingrediente utilizado o ingresado..</p></center></font>

<div align="center">
  
    <table width="" border="1px">
      <tr>
        <td bgcolor="#0099FF"><strong>Nombre del Ingrediente</strong></td>
        <td bgcolor="#0099FF"><strong>Descripcion Auditoria</strong></td>
        <td bgcolor="#0099FF"><strong>Fecha</strong></td>
      </tr>';

        while($dato=mysqli_fetch_array($resultado)){
$codigoHTML.='
      <tr>
        <td>'.$dato['nom_ing'].'</td>      
        <td>'.$dato['descripcion_aud'].'</td>
        <td>'.$dato['fecha_aud'].'</td>
      </tr>';
      } 
    }
$codigoHTML.='
    </table>
  
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte de Busqueda de Inventario por Nombre.pdf");
?>
