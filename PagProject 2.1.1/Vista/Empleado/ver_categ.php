<?php

session_start();
if (!$_SESSION['inicio_sesion']){
  header("location: ../../index.php?Noseccion");
  }
require_once '../../Controlador/Empleado/entidad_categ.php';
require_once '../../Modelo/categoria_model.php';
require_once '../../Modelo/conexion_pdo.php';

$Nom_cat = new Nom_cat();
$model = new Nom_catModel();
$db = database::conectar();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$Nom_cat->__SET('Nom_cat',					$_REQUEST['Nom_cat']);
			$Nom_cat->__SET('estado_cat',			$_REQUEST['estado_cat']);
			$Nom_cat->__SET('Nom_cat2',					$_REQUEST['Nom_cat2']);
			
			$model->Actualizar_categoria($Nom_cat);
			print "<script>alert(\"Registro Actualizado Exitosamente.\");window.location='ver_categ.php';</script>";
			break;

		case 'registrar':
			$Nom_cat->__SET('Nom_cat',					$_REQUEST['Nom_cat']);
			$Nom_cat->__SET('estado_cat',			$_REQUEST['estado_cat']);
			
			$model->Registrar_categoria($Nom_cat);
		
			print "<script>alert(\"Registro Agregado Exitosamente.\");window.location='ver_categ.php';</script>";
			break;

		case 'eliminar':
			$model->Eliminar_categoria($_REQUEST['Nom_cat']);
			print"<script>alert(\"Registro Eliminado Exitosamente.\");window.location='ver_categ.php'</script>";
			break;

		case 'editar';
			$Nom_cat = $model->Obtener_categoria($_REQUEST['Nom_cat']);
			break;
	}
}		
			
?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<title>Categoria</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../Administrador/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<style type="text/css">
		body{
			background-image: url(../Administrador/img/fondo.jpg);
		}
		
	</style>

</head>
<body>
<center>

		<!-- FORMULARIO DE REGISTRO -->


	<!-- Formulario Actualizar Registro  -->

	<div id="div_form">

	<?php if ( !empty($_GET['Nom_cat']) &&  !empty($_GET['action']) ){ ?>

	<form action="#" method="post" >

	<!-- LABEL USUARIO FINAL -->
	<!--<laber>rol por modificar: <?php echo $Nom_cat->__GET('Nom_cat'); ?></label>-->

	<label> Tipo de documento por modificar:</label>

	<br>Categoria Anterior<input type="text" name="Nom_cat" value="<?php echo $Nom_cat->__GET('Nom_cat'); ?>" placeholder="Categoria vieja" required></br>

	<!--Campo que guarda el nuevo rolpk-->
   <br>Categoria Nueva<input type="text" name="Nom_cat2" id="user_login" value="<?php echo $Nom_cat->__GET('Nom_cat'); ?> " placeholder="Categoria Nueva" required></br>

	<br><label> Estado del tipo de documento: </label></br>

	<br>ACTIVO <input type="radio" name="estado_cat" value="1" checked="<?php echo ($Nom_cat->__GET('estado_cat') == 1)?'checked':''; ?>">

	<br>INACTIVO <input type="radio" name="estado_cat" value="0" checked="<?php echo ($Nom_cat->__GET('estado_cat') == 0)?'checked':''; ?>">

	<br><input type="submit" value= "Actualizar" onclick= "this.form.action = '?action=actualizar';"/>

	</form>	
	</div>

	 <?php } 

	 $sqll= "SELECT * FROM categoriadelproducto";
	 $query = $db->query($sqll);

	 if($query->rowCount()>0):?>

	 	<br><h1> Consulta - Registros</h1></br>
	 		<table id="customers" class="table table-bordered" style="max-width: 70%; margin: auto;">
	 			<thead>
	 				<tr>
	 					<th>Categoria</th>
	 					<th>Estado</th>
	 					<th>Funcion Editar </th>
	 					<th>funcion Eliminar</th>
	 				</tr>
	 			</thead>
	 			

	 <?php foreach($model->Listar_categoria() as $r): ?>
		<tr>
			<td><?php echo $r->__GET('Nom_cat'); ?></td>
			<td><?php
				if($r->__GET('estado_cat')== 1){
					echo "ACTIVO";
				}else{
					echo "INACTIVO";
				}?></td>
				
			<td>
			<a href="?action=editar&Nom_cat=<?php echo $r->Nom_cat; ?>"><button class="btn btn-success">Editar</button></a>
			</td>
			
			<td>
			<a href="?action=eliminar&Nom_cat=<?php echo $r->Nom_cat; ?>" onclick="return confirm('¿Esta seguro que quiere eliminar este usuario?')"><button class="btn btn-success">Eliminar</button></a>
			</td>
		</tr>
		
	<?php endforeach; ?>
		</table>
		<br><a href="?action=ver&m=1" ><button class="btn btn-info"> Nuevo registro</button> </a> <a href="inicio_empleado.php"><button class="btn btn-info">Volver</button></a>
	<div id="div_form">
	<?php if( !empty($_GET['m']) && !empty($_GET['action']) ){ ?>

	<form action="#" method="post">
	<table >
		<td>
		<label for="user_login">Nueva Categoria</label>
		<input type="text" name="Nom_cat" placeholder="Nom_cat" required>

		<br><label for="user_pass">Estado Categoria</label></br>
		ACTIVO <input type="radio" name="estado_cat" value="1" checked="">
		INACTIVO <input type="radio" name="estado_cat" value="0">

		<br><input type="submit" value= "Guardar" onclick = "this.form.action = '?action=registrar';" />
		</td>	
	</table>		

	</form>

	</div>

	<?php } ?>
	<?php else:?>
		<h4 class="alert alert-danger">Señor Usuario NO se Encuentra en Registros!!!</h4>
	<?php endif;?>
	</center>
	</body>
	</html>