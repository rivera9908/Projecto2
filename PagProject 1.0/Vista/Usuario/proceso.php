<?php

session_start();
require("conexion.php");

?>
<html>
<head>
</head>
<body>
<?php
if(isset($_POST['registrar'])){
	
	$Id_usu=$_POST['idusu'];
    $Nom_usu=$_POST['Nom_usu'];
	$Pass_usu=$_POST['Pass_usu'];
	$Tipo_doc_tipo_doc=$_POST['Tipo_doc_tipo_doc'];
	$encriptar=sha1($Pass_usu);
	
	
    $sql2="SELECT * FROM usuario WHERE  Id_usu='$Id_usu'";

    $result2=mysqli_query($con,$sql2);
    $contar=mysqli_num_rows($result2);
   
    if($contar==1){
   
   header("location:./registrousu.php?dato1");
    	
    
	}else{
	 
	$sql="INSERT INTO usuario ( Id_usu, Nom_usu, Pass_usu, Tipo_doc_tipo_doc, Rol_nom_rol, Estado_usu) VALUES 
	('$Id_usu', '$Nom_usu','$encriptar','$Tipo_doc_tipo_doc' ,'Cliente',1)";
	
	$result=mysqli_query($con,$sql);
	
	
   header("location: ./registrousu.php?dato");





	}
	
	
	}
	
	?></td></tr>
	
	
</body>
</html>