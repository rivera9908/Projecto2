<?php 
	require_once("dompdf/dompdf_config.inc.php");
	require "../../Modelo/conexion.php";
	

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<div align="center">
	
    <table width="" border="1px">
      <tr>
        <td bgcolor="#0099FF"><strong>Descripcion Auditoria</strong></td>
        <td bgcolor="#0099FF"><strong>Fecha</strong></td>
      </tr>';

        $consulta=("SELECT * FROM auditoria");
		$resultado= mysqli_query($con, $consulta);
        while($dato=mysqli_fetch_array($resultado)){
$codigoHTML.='
      <tr>
        <td>'.$dato['descripcion_aud'].'</td>
        <td>'.$dato['fecha_aud'].'</td>
      </tr>';
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
$dompdf->stream("Reporte Inventario.pdf");
?>
