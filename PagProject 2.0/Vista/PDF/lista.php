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
	
    <table width="" border="1">
      <tr>
        <td bgcolor="#0099FF"><strong>N.I.</strong></td>
        <td bgcolor="#0099FF"><strong>T.D.</strong></td>
        <td bgcolor="#0099FF"><strong>Nombre de Usuario</strong></td>
        <td bgcolor="#0099FF"><strong>Producto</strong></td>
        <td bgcolor="#0099FF"><strong>Precio del Producto</strong></td>
        <td bgcolor="#0099FF"><strong>Cantidad</strong></td>
		<td bgcolor="#0099FF"><strong>Total</strong></td>
        <td bgcolor="#0099FF"><strong>Fecha de compra</strong></td>
      </tr>';

        $consulta=("SELECT * FROM compra");
		$resultado= mysqli_query($con, $consulta);
        while($dato=mysqli_fetch_array($resultado)){
$codigoHTML.='
      <tr>
        <td>'.$dato['Usuario_Id_usu'].'</td>
        <td>'.$dato['Usuario_Tipo_doc_Tipo_doc'].'</td>
        <td>'.$dato['Nom_usu'].'</td>
        <td>'.$dato['Nom_pro'].'</td>
        <td>'.$dato['Prec_pro'].'</td>
        <td>'.$dato['Cant'].'</td>
		<td>'.$dato['Total'].'</td>
        <td>'.$dato['Fecha'].'</td>
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
$dompdf->stream("compras.pdf");
?>
