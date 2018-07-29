<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>...</title>
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
		header("location:../vista/registrousu.php?dato1=no");
		 //si es = a 1, el usuario ya existe
	}	
	else
	{
	$res=$objeto->registro($idusu,$nom,$pass,$tdoc); //Si no es = 1 , llama al método “resgistro” con 4 parámetros
	header("location:../vista/registrousu.php?dato=no"); //Redirige a página registro sin errores
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
			header("location:../vista/html/registrousu.php?dato1=no"); //si es = a 1, el usuario ya existe
		}
		else
		{
		header("location:../vista/html/registrousu.php?dato=no"); //Redirige a página registro sin errores
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


$objeto->CloseDB(); // Cierra conexión a base de datos

}



if(isset($_POST["IniciarSesion"]))
{
	
$loginNom = htmlentities(addslashes($_REQUEST["user"]));//htmlentities-addslashes inpide la inyeccion
$loginPass=htmlentities(addslashes($_REQUEST['pw']));
$objeto= new clases;
$res=$objeto->logueo($loginNom); //Ejecuta método y devuelve consulta para saber si el usuario esta



if($res->num_rows == 0)
{
header("location:../vista/index.php?Errornousuario"); //Redirige al index pasando la variable error(el usuario no existe)
}
//En otro caso En $res se guarda el resultado de la consulta. Al segundo posición de SESION se le asigna el id
//del usuario
else //Redirige a página logueada
{
$actor = $res->fetch_array(); // Obtiene una fila de resultados como un array asociativo, numérico, o ambos
		if(password_verify($loginPass,$actor["Pass_usu"]))//confirma contraseña
		{//si es correcta inicia sesion
			session_start();
			$_SESSION["session"]= $actor["Nom_usu"]; 
			$_SESSION["validar"]="true";
			
	
			
			if($actor["Rol_nom_rol"]=='Cliente')
			{
			header("location:../vista/panel.php"); //Redirige a página de usuario
			}	
			{
			header("location:../vista/panel.php"); //Redirige a páginainicio retornando error
			}
		}
		else // Si el password no es correcto
		{
		header("location:../vista/index.php?error=laconstasenanoesigual");
		}
}


	$objeto->CloseDB();
}
	
?>

</body>
</html>
