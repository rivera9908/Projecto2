<?php

session_start();

require("conexion.php");

if (isset($_POST['iniciar_sesion'])){
	if($_POST ['Nom_usu']!="" && $_POST['Pass_usu']!=""){
	
$Nom_usu=$_POST['Nom_usu'];
$Id_usu=$_POST['idusu'];
	$Pass_usu=$_POST['Pass_usu'];
	$Rol_nom_rol=$_POST['Rol_nom_rol'];
	$encriptar=sha1($Pass_usu);

    $consulta="SELECT Nom_usu,Pass_usu, Rol_nom_rol FROM usuario WHERE Nom_usu='$Nom_usu' AND Pass_usu='$encriptar'";
    $resultado1=mysqli_query($con,$consulta);
    
    

    if($Rol_nom_rol == 'Cliente'){
 $link = 'inicio.php';}
else {if ($Rol_nom_rol == 'Administrador')
 $link = '../Administrador/inicio_administrador.php';}
 if  ($Rol_nom_rol == 'Empleado')
 $link = '../Empleado/inicio_empleado';}
    
    $cuentafilas=mysqli_num_rows($resultado1);

 if($cuentafilas==1){
    	$_SESSION['inicio_sesion']='Nom_usu';
    	$_SESSION["Nom_usu"] = $Nom_usu;
    	$_SESSION["Pass_usu"] = $Pass_usu;
        $_SESSION["Rol_nom_rol"] = $Rol_nom_rol;
        header("Location: ".$link."");
     
	 
	 	if($Rol_nom_rol==false){
		 header("Location: ../index.php?Conerror");} 
    
    }
	 
	 
	 if($Pass_usu==FALSE){
		 header("Location: ../index.php?conerror");} 
    
  

    header("Location: ".$link."");
}

else {
echo "Wrong Username or Password";
}


?>