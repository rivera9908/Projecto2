<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
include("../modelo/clases.php"); //Trae el archivo clases.php en cual se creara más adelante

if(isset($_POST["registrar"])) 
{ // Verifica si el botón oprimido es el de registro

$tdoc=$_REQUEST['tdoc'];
$idusu=$_REQUEST['idusu'];// Captura de valor de campos de formulario 
$nom=$_REQUEST['nom_usu'];
$pass=$_REQUEST['pass_usu'];
$pass = password_hash($pass,PASSWORD_DEFAULT); //Encriptación de la contraseña digitada
$objeto= new clases; // Creación de un objeto de la clase clases del archivo clases.php
$res=$objeto->verifica($idusu); //Llamada mediante el objeto creado del método “verifica” con el parámetro usuario
//el resultado del método se asigna a la variable $res

	if($res->num_rows == 1) //Verifica cuantos registro hay en el valor retornado $res (num_rows)
	{
		header("location:../vista/html/registro.php?dato1=no"); //si es = a 1, el usuario ya existe
	}	
	else
	{
	$res=$objeto->registro($idusu,$nom,$pass,$tdoc); //Si no es = 1 , llama al método “resgistro” con 4 parámetros
	header("location:../vista/html/registro.php?dato=no"); //Redirige a página registro sin errores
	}

$objeto->CloseDB(); // Cierra conexión a base de datos

}




if(isset($_POST["hhh"]))
	{
		
		echo "Hola";
		$objeto= new clases; 
		$idusu=$_REQUEST['idusu'];
		$res=$objeto->Eliminar($idusu);		
		
		if($res->num_rows == 1) //Verifica cuantos registro hay en el valor retornado $res (num_rows)
		{
			header("location:../vista/html/REGISTRO2.php?dato1=no"); //si es = a 1, el usuario ya existe
		}
		else
		{
		header("location:../vista/html/REGISTRO2.php?dato=no"); //Redirige a página registro sin errores
		}
$objeto->CloseDB(); // Cierra conexión a base de datos
	}
	
	
	
	if(isset($_POST["Con"]))
	{
		
		echo "Hola";
		$objeto= new clases; 
		$idusu=$_REQUEST['idusu'];
		$res=$objeto->Consultar($idusu);		
		
		if($res->num_rows == 0) //Verifica cuantos registro hay en el valor retornado $res (num_rows)
		{
			header("location:../vista/html/Mostrardt.php?dato1=no"); //si es = a 1, el usuario ya existe
		}
		else
		{
		header("location:../vista/html/Mostrardt.php?dato=no"); //Redirige a página registro sin errores
		}
$objeto->CloseDB(); // Cierra conexión a base de datos
	}
	
	
	if(isset($_POST["Consultar"])) 
{ // Verifica si el botón oprimido es el de registro

$idusu=$_REQUEST['idusu'];// Captura de valor de campos de formulario 

$objeto= new clases; // Creación de un objeto de la clase clases del archivo clases.php
$res=$objeto->consulta($idusu); //Llamada mediante el objeto creado del método “verifica” con el parámetro usuario
//el resultado del método se asigna a la variable $res

		header("location:../vista/html/Mostrardt.php?dato1=$res"); //si es = a 1, el usuario ya existe

//	if($res->num_rows == 1) //Verifica cuantos registro hay en el valor retornado $res (num_rows)
//	{
//		header("location:../vista/html/registro.php?dato1=no"); //si es = a 1, el usuario ya existe
//	}	
//	else
//	{
//	$res=$objeto->registro($idusu,$nom,$pass,$tdoc); //Si no es = 1 , llama al método “resgistro” con 4 parámetros
//	header("location:../vista/html/registro.php?dato=no"); //Redirige a página registro sin errores
//	}

$objeto->CloseDB(); // Cierra conexión a base de datos

}






if(isset($_POST["enviar"]))
{
	echo "Hola2";
$loginNom = $_REQUEST["usu"];
$loginPass=$_REQUEST['pass'];
//(password_verify($loginPass["pass_usu"])
$objeto= new clases;
$res=$objeto->logueo($loginNom); //Ejecuta método y devuelve consulta para saber si el usuario esta

//if($res->num_rows == 0)
//{
//header("location:../vista/html/Sesion.php?error=hayerror"); //Redirige al index pasando la variable error
//}
//else //Redirige a página logueada
//{
//header("location:../vista/html/Sesion.php?error=nohayerror"); //Redirige al index pasando la variable error
//}

if($res->num_rows == 0)
{
header("location:../vista/html/Sesion.php?error=sihayerror"); //Redirige al index pasando la variable error
}
//En otro caso En $res se guarda el resultado de la consulta. Al segundo posición de SESION se le asigna el id
//del usuario
else //Redirige a página logueada
{
$actor = $res->fetch_array(); // Obtiene una fila de resultados como un array asociativo, numérico, o ambos

		if(password_verify($loginPass,$actor["Pass_usu"]))
		{
			session_start();
			$_SESSION["session"]= $actor["Nom_usu"]; 
			$_SESSION["validar"]="true";
			
			
			if($actor["Rol_nom_rol"]='Cliente')
			{
			header("location:../vista/html/pagusu.php"); //Redirige a página de usuario
			}
			else
			{
			header("location:../vista/html/admon.php "); //Redirige a página de administrador
			}
		}
		else // Si el password no es correcto
		{
		header("location:../vista/html/Sesion.php?error=laconstasenanoesigual");
		}
}


	$objeto->CloseDB();
}
	
?>

</body>
</html>
