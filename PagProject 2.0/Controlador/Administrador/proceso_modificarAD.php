<?php


session_start();
require("../../Modelo/conexion.php");
if (!$_SESSION['inicio_sesion']){
    header("location: ../../Vista/index.php?Noseccion");
    }



$Id_usu= $_REQUEST['Id_usu'];
$Id_usu= $_POST['Id_usu'];
$Nom_usu = $_POST['Nom_usu'];
$Pass_usu = $_POST['Pass_usu'];
$Tipo_doc_Tipo_doc = $_POST['Tipo_doc_Tipo_doc'];
$Estado_usu = $_POST['Estado_usu'];
$Tipo_telefono = $_POST['Tipo_telefono'];
$Num_tel = $_POST['Num_tel'];
$Correo = $_POST['Correo'];


$query = "UPDATE usuario SET Id_usu='$Id_usu', Nom_usu='$Nom_usu', Pass_usu='$Pass_usu', Tipo_doc_Tipo_doc='$Tipo_doc_Tipo_doc',
  Estado_usu='$Estado_usu', Tipo_telefono= '$Tipo_telefono', Num_tel='$Num_tel', Correo='$Correo' WHERE Id_usu = '$Id_usu'";
$resultado = mysqli_query($con,$query);

if($resultado){
	
	 $Usuario_id_usu=$_POST['Id_usu'];
			$Usuario_Tipo_doc_Tipo_doc=$_POST['Tipo_doc_Tipo_doc'];
			$Tipo_telefono_Tipo_telefono=$_POST['Tipo_telefono'];
			$N_telefono=$_POST['Num_tel'];


			$sql1 = "UPDATE usuario_has_tipo_telefono SET Usuario_id_usu='$Usuario_id_usu', Usuario_Tipo_doc_Tipo_doc='$Usuario_Tipo_doc_Tipo_doc',	Tipo_telefono_Tipo_telefono='$Tipo_telefono_Tipo_telefono', N_telefono='$N_telefono' WHERE Usuario_id_usu = '$Usuario_id_usu'";
			$result2=mysqli_query($con, $sql1);
	
    
    header("location: ../../Vista/Administrador/mostrarusu.php");
}
else{
    echo "no se modifico";
}
?>