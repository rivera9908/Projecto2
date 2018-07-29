<?php 
session_start(); //Inicio la sesión 
if ($_SESSION["validar"]="true") { //COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO //si no existe, envio a la página de logueo de nuevo 
//header("Location: ../html/Sesion.php"); //ademas salgo de este script 
//header("Location: ../html/usuario.php");
echo "Sesion Correcta";
} 
	header("Location: ../vista/index.php?dato1=no");
	
exit(); 		
	 
?>
	
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina Usuario</title>
<style type="text/css">
h1 {
	font-size:32px;
	font-family:Tahoma, Geneva, sans-serif;
	align:left;
	animation:normal;
	text-shadow:rgba(0,102,51,1) -1px -2px 0.5em;
	}
p.serif{
	font-family:"MS Serif", "New York", serif;
	
	}
table.1{
	background:#060;
	}		
	


</style>
</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          Bienvenido<br /><?php
          
		  $_REQUEST['user'];
		  
		  ?>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">Productos</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Información</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Menu</a>
            </li>
            <li class="nav-item">
              <a href="#cont-section" class="nav-link">contactenos</a>
            </li>
            
            <li>
            <a href="registrousu.php" class="nav-link">registro</a>
            </li>
             
    <li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../Modelo/logoout.php';} else {
echo $ruta.'sesion.php';}?>"><span class="glyphicon glyphicon-log-out"></span> <?php
if(isset($_SESSION["session"])){ echo "Salir";} else{echo "Logueo";}?></a></li>

<li class="pull-right"><a href="<?php if(isset($_SESSION['session'])){echo $ruta.'../../Modelo/logoout.php';} else {
echo $ruta.'../vista/registrousu.php';}?>"><span class="glyphicon glyphicon-user"></span> <?php
if(isset($_SESSION["session"])){ echo $_SESSION["session"];} else{echo "Registro";}?></a></li>
    
            
            
          </ul>
        </div>
      </div>
    </nav>
 


<body >
<h1 >Bienvenido Cliente</h1>
<p class="serif">
En este sitio puede dejar su opinion</p>
<table class="1">
<td><input type="text"    align="left" border="2px"/></td>
<td><input type="button" value="enviar" /></td>
</table>















</body>
</html>