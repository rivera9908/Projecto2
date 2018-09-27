<?php 
	require_once("dompdf/dompdf_config.inc.php");
	require "../../Modelo/conexion.php";



	              

                $nombre_ing = $_POST['nombre'];
            
                
                  $sql="SELECT * FROM compra WHERE Nom_usu LIKE '%$nombre_ing%'";
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
<h1>Resultado de Busqueda Compras por Nombre</h1></br>
<font size="20px" face="arial">
<p align="justify">Este es el reporte el cual se ha generado correspondiente a las busqueda por nombre que se hizo 
anteriormente. En este reporte se encontrara informacion en general de las compras que se ha
hecho por el cliente, como por ejemplo los datos de la compra.</p></center></font>

<div align="center">
	
    <table width="" border="1px">
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

        
        while($dato=mysqli_fetch_array($resultado)){
$codigoHTML.='
      <tr>
        <td>'.$dato['Usuario_Id_usu'].'</td>
        <td>'.$dato['Usuario_Tipo_doc_Tipo_doc'].'</td>
        <td>'.$dato['Nom_usu'].'</td>
        <td>'.$dato['Nom_pro'].'</td>
        <td>'.'$'.$dato['Prec_pro'].'</td>
        <td>'.$dato['Cant'].'</td>
		    <td>'.'$'.$dato['Total'].'</td>
        <td>'.$dato['Fecha'].'</td>
      </tr>';
      } 
        $contador=0;
                   $suma=0;
                   foreach ($resultado as $key => $v) {
                    $total = $v['Total'];
                     $suma=$suma+$total;
                     $contador++;
                   }
    }

 $codigoHTML.='
<font size="20px" face="arial"><p><b>Este cliente ha gastado en compras un total de: $'.$suma.'</b></p></font>';


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
$dompdf->stream("Reporte de Busqueda de Compras.pdf");
?>
