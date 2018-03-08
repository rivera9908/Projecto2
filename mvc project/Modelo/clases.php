<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fruteria el Bosque</title>
</head>

<body>


<?php
include("conexion.php"); // incluye el archivo conexion.php el cual se conecta a la base de datos
$df=new conexion; // Crea un objeto a partir de la clase conexión para inicializar constructor
class clases extends conexion { // Crea una clase que hereda de la clase conexión


public function verifica($dato) //Método que verifica si el usuario existe
{
$q = "select * from usuario where id_usu='$dato'";
$consulta = $this->con->query($q) or die ('Error!' . mysql_error());
return $consulta;

}

public function registro($idusu, $nom,$pass, $tdoc) // Método que recibe 4 parámetros
{
$q = "insert into usuario(id_usu, Nom_usu, Pass_usu, Tipo_doc_tipo_doc, Rol_nom_rol, Estado_usu) values('$idusu','$nom','$pass','$tdoc','Cliente',1)";
//$q = "insert into usuario(id_usu, Nom_usu, Pass_usu, Tipo_doc_tipo_doc, Rol_nom_rol, Estado_usu) values('88','ttt','ttt','$ttt','Cliente',1)";

$consulta = $this->con->query($q) or die ('failed!'. mysql_error());
return $consulta;
}
// Se realiza inserción a la base de datos y retorna el resultado en la variable $consulta


   
 public function Eliminar($idusu)
{
	$q = "Delete from usuario where id_usu='$idusu'";
	
$consulta = $this->con->query($q) or die ('Error!' . mysql_error());
return $consulta;
}

   
  



public function consulta($datoh) //Método que verifica si el usuario existe
{
$q = "select * from usuario where id_usu='$datoh'";
$tbHtml="";

$consulta = $this->con->query($q) or die ('Error!' . mysql_error());
//$query=$conexion->query($q);

if($consulta->num_rows>0)
	{
	     while($res=$consulta->fetch_array())
		{
			$tbHtml=$res['Id_usu']."/".$res['Nom_usu']."/".$res['Tipo_doc_tipo_doc']."/".$res['Rol_nom_rol']."/".$res['Estado_usu'];
			
		}
	}	
	else
	{
	$tbHtml = "No hay resultados";
	}

//return $consulta;$tbHtml
return $tbHtml;
	
}





public function logueo($login_nom)
{
$q = "select * from usuario where Nom_usu='$login_nom'";
$consulta = $this->con->query($q) or die ('failed!' . $this->con->error);
return $consulta;
}





}


?>

</body>
</html>