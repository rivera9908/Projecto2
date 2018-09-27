<?php

require "../../Modelo/conexion.php";

$correo=$_POST['correo'];

$sql="SELECT Nom_usu FROM usuario where Correo='$correo'";
$resultado=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($resultado)){
 $nombre = $row ['Nom_usu'];    
}


if (isset($_POST['asunto']) && !empty($_POST['asunto']) && isset($_POST['correo']) && !empty($_POST['correo']) && 
isset($_POST['mensaje']) && !empty($_POST['mensaje'])){


$destino = "fruteriade@gmail.com";
$desde = "From:$nombre". "$correo";
$asunto= $_POST['asunto'];
$mensaje= $_POST['mensaje'];
mail($destino, $asunto, $mensaje,$desde);

print "<script>alert(\"Mensaje enviado\");window.location='../../index.php';</script>";

}else{
	print "<script>alert(\"Fallo de envio\");window.location='index.php';</script>";


}










?>