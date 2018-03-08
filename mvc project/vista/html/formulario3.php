
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mi Proyecto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="vista/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<header>

<?php include_once 'header.php'; ?>

</header>
<?php include_once 'menula.php'; ?>

<head>
<title>Problema</title>
</head>
<body>
<div class="col-sm-10 col-md-10"> <!—Columna de 10 espacios para contenido central e imágenes -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">EJERCICIOS DE PRACTICA PHP</h3>
</div>
<div class="panel-body">
<p>Aplicación de ejercicios de uso de Variables, estructuras condicionales, repetitivas con lenguaje PHP
combinando con Bootstrap </p>
<div class="alert alert-success">
<div class="row">
<div class="col-md-3" align="center"> <span>

<body background="" >

<?php
	
	$id=$_REQUEST['id_cliente'];
	
	
	include("CONEXION.php");
	
	$query="SELECT * FROM clientes WHERE id_cliente='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
		
		
		?>
        
<form action="modificar_proceso.php?codigo=<?php echo $row['id_cliente']; ?>" method="GET">

 
<TR>
<td><label>Nombre cliente</label></td>
<td><input type="text" required name="nom_cliente" placeholder="Nombres " value="<?php echo $row['nom_cliente'];?>" /></td><br />
</TR> 
<TR>
<td><label>identificacion cliente</label></td>
<td><input type="text" required name="id_cliente" placeholder="identificacion cliente " value="<?php echo $row['id_cliente'];?>" /></td><br />
</TR> 
<TR>
<td><label>contraseña cliente</label></td>
<td><input type="text" required name="pass_cliente" placeholder="contraseña" value="<?php echo $row['pass_cliente'];?>" /></td><br />
</TR> 
<TR>
<td><label>ingresar datos</label></td>
<td><p>
  <input type="submit"  name="ingresar" class="btn-enviar" />
  <br />
        
        
        </FORM>




</span>
</div>
</body>
</html>