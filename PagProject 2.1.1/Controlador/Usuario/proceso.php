<?php

session_start();
require("../../Modelo/conexion.php");


?>
<html>
<head>
</head>
<body>
<?php
if(isset($_POST['registrar'])){
	
	$Id_usu=$_POST['Id_usu'];
    $Nom_usu=$_POST['Nom_usu'];
	$Pass_usu=$_POST['Pass_usu'];
	$Tipo_doc_Tipo_doc=$_POST['Tipo_doc_Tipo_doc'];
	//$encriptar=sha1($Pass_usu);
	$Tipo_telefono=$_POST['Tipo_telefono'];
    $Num_tel=$_POST['Num_tel'];
	$Correo=$_POST['Correo'];
	

	//validacion de si el usuario existe
    $sql2="SELECT Id_usu, Nom_usu, Num_tel, Correo FROM usuario WHERE  Id_usu='$Id_usu' OR Nom_usu='$Nom_usu'";

    $result2=mysqli_query($con,$sql2);
    $contar=mysqli_num_rows($result2);
   
    if($contar==1){
   
   header("location: registrousu.php?dato1");
    	
    
	}else{

 //validacion de que los numeros ingresados sean positivos
    if ($Id_usu <1 || $Num_tel<1) {

    	print "<script>alert(\"Por favor inserte numeros positivos\");window.location='registrousu.php';</script>";
    	
    }else{


  $sql="INSERT INTO usuario ( Id_usu, Nom_usu, Pass_usu, Tipo_doc_Tipo_doc, Rol_nom_rol, Estado_usu, Tipo_telefono, Num_tel, Correo) VALUES 
	('$Id_usu', '$Nom_usu','$Pass_usu','$Tipo_doc_Tipo_doc' ,'Cliente',1,'$Tipo_telefono','$Num_tel','$Correo')";
	
	$result=mysqli_query($con,$sql);


	
 //si los datos insertados en usuario son correctos entonces inserto los datos en la siguiente tabla

 if ($result==true){

 	        $Usuario_id_usu=$_POST['Id_usu'];
			$Usuario_Tipo_doc_Tipo_doc=$_POST['Tipo_doc_Tipo_doc'];
			$Tipo_telefono_Tipo_telefono=$_POST['Tipo_telefono'];
			$N_telefono=$_POST['Num_tel'];


			$sql1 = "INSERT INTO usuario_has_tipo_telefono (Usuario_id_usu,	Usuario_Tipo_doc_Tipo_doc,	Tipo_telefono_Tipo_telefono	,N_telefono) VALUES('$Usuario_id_usu', '$Usuario_Tipo_doc_Tipo_doc', '$Tipo_telefono_Tipo_telefono', '$N_telefono' )";
			$result2=mysqli_query($con, $sql1);

	print "<script>alert(\"Registro correcto\");window.location='../../index.php';</script>";
 }else{

 	print "<script>alert(\"Error al registrar\");window.location='../../index.php';</script>";
 }
 	

    }
 
	 
	
 
	
	}


	
	}
	
	?></td></tr>
	
	
</body>
</html>