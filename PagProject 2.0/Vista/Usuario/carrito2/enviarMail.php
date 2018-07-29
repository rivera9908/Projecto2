






















<?php
// Varios destinatarios
$nombre="a";
$para  = 'andres.ibaez19@gmail.com' . ', '; // atención a la coma
$para .= 'hdveloza4@misena.edu.co';

// título
$título = 'Recordatorio de cumpleaños para Agosto';

// mensaje
$mensaje = '
        <div style="
	        border: 1px solid #d6d2d2;
	        border-radius: 5px;
	        box-shadow: 5px 5px 10px rgba(57,29,150,0.5);
	        color:#9378f0;
	        padding:10px;
	        width:800px%;
	        heigth:400px;
        ">
        <center>
        <img src="../img/apple.png" width="400" heigth="250">
        <h1><em>Muchas Gracias por tu compra</em></h1></center>

            <hr width="90%">

            <p>Hola '.$nombre.' muchas gracias por  comprar en nuestro sitio a continuación te mostramos los detalles de tu compra.</p>
          
            ';

 echo $mensaje;
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>

