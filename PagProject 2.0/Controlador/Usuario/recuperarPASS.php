<!DOCTYPE html>
<html>
<head>
<meta charset="UTF.8"/>
<title>Recuperacion de Contraseña</title>
</head>
<body>
<?php



session_start();

require("../../Modelo/conexion.php");

if (isset($_POST['recuperar'])){
	if($_POST ['Id_usu']!="" && $_POST['Tipo_doc_tipo_doc']!=""){

  


$_SESSION['inicio_sesion']='Nom_usu';	
$Id_usu=$_POST['Id_usu'];
$Tipo_doc_tipo_doc=$_POST['Tipo_doc_tipo_doc'];

$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra=8;
for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
  $x = rand(0,$n);
  $pass.= $caracteres[$x];
}

	$cont=0;

	$sql2="SELECT * FROM usuario WHERE Id_usu='$Id_usu' AND Tipo_doc_tipo_doc='$Tipo_doc_tipo_doc'";
	$result2 = $con->query($sql2);

	while ($row1=$result2->fetch_assoc())
	{
		$Id_usu=stripslashes($row1["Id_usu"]);
	}

	   if(@$Id_usu === null){
	   print "<script>alert(\"usuario no encontrado.\");window.location='../index.php';</script>";
	}
	   if (@$Id_usu != null)
{
	   $sql1="UPDATE usuario SET Pass_usu = '$pass' WHERE  Id_usu='$Id_usu' AND Tipo_doc_tipo_doc = '$Tipo_doc_tipo_doc'";
	   $result = $con->query($sql1);

	    print "<script>alert(\"Nueva Password: $pass.\");window.location='../../Vista/index.php';</script>";

	}
}
}





?>

</body>
</html>

