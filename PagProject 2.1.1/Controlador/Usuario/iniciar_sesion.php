<?php

session_start();

require("../../Modelo/conexion.php");

if (isset($_POST['iniciar_sesion'])){

	if($_POST ['Nom_usu']!="" && $_POST['Pass_usu']!=""){
$_SESSION['inicio_sesion']='Nom_usu';	
$Nom_usu=$con->real_escape_string($_POST['Nom_usu']);
$Pass_usu=$con->real_escape_string($_POST['Pass_usu']);
	//$encriptar=sha1($Pass_usu);
	
	$cont=0;

    $consulta="SELECT Nom_usu,Pass_usu, Estado_usu, Rol_nom_rol FROM usuario WHERE Nom_usu='$Nom_usu' AND Pass_usu='$Pass_usu'";
    $resultado1=mysqli_query($con,$consulta);
    
    
	while ($row2=$resultado1->FETCH_ASSOC())
		
	{

	$Nom_usu=stripslashes($row2["Nom_usu"]);
	$Pass_usu=stripslashes($row2["Pass_usu"]);
	$Rol_nom_rol=stripslashes($row2["Rol_nom_rol"]);
	$Estado_usu=stripslashes($row2["Estado_usu"]);
	
    $cont=$cont+1;

	}
	if ($cont==0)
	{

	print "<script>alert(\"usuario y/o password incorrecta.\");window.location='../../index.php';</script>";
	}

	if ($cont!=0){

	$_SESSION['Nom_usu']=$Nom_usu;
	

	$sql1="SELECT Rol_nom_rol, Estado_usu FROM usuario WHERE Nom_usu='$Nom_usu' AND Estado_usu='$Estado_usu'";
	$result1 = $con->query($sql1);

	if ($Estado_usu==0){

	print "<script>alert(\"Usted esta deshabilitado, comuniquese con el administrador.\");window.location='../../Vista/index.php';</script>";
}else{




	while ($row1=$result1->fetch_assoc()){
	$Rol_nom_rol=stripslashes($row1["Rol_nom_rol"]);
	}

	

	if (@$Rol_nom_rol === 'Administrador'){
	$_SESSION['admin']=3;
	header ('location: ../../Vista/Administrador/inicio_administrador.php');
	}
	elseif (@$Rol_nom_rol === 'Empleado'){
		$_SESSION['emplea']=2;
		header ('location: ../../Vista/Empleado/inicio_empleado.php');
	}

	elseif (@$Rol_nom_rol === 'Cliente'){
	$_SESSION['clien']=1;
	header ('location: ../../Vista/Usuario/inicio.php');
	}
    
    

}

}

}
}

?>
